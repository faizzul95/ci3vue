<?php

if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

// CanThink Solution

if (!function_exists('db_name')) {
	function db_name($debug = false)
	{
		if ($debug)
			dd(DB_NAME);
		else
			return DB_NAME;
	}
}

if (!function_exists('returnData')) {
	function returnData($data = false, $code = 200)
	{
		// isError($code) ? log_message('debug', $data) : '';
		logDebug($data, isSuccess($code) ? 'info' : 'error');
		return $data;
	}
}

if (!function_exists('insert')) {
	function insert($table, $data)
	{
		if (antiXss($data) === false) {

			$data['created_at'] = timestamp();
			$filterData = sanitizeInput($data, $table);

			try {
				$ci = get_instance();
				$resultInsert = $ci->db->insert($table, $filterData);
				$resCode = ($resultInsert['status']) ? 201 : 400;
				returnData([
					"action" => 'insert',
					"resCode" => $resCode,
					"message" =>  message($resCode, 'added'),
					"id" => $resultInsert['lastID'],
					"data" => $filterData
				], $resCode);
			} catch (Exception $e) {
				returnData([
					'action' => 'insert',
					'resCode' => 400,
					'message' => 'Something when wrong.',
					'id' => NULL,
					'data' => $e->getMessage(),
				], 422);
			}
		} else {
			returnData([
				'action' => 'insert',
				'resCode' => 400,
				'message' => 'Protection against <b><i> Cross-site scripting (XSS) </i></b> activated!',
				'id' => NULL,
				'data' => $data,
			], 422);
		}
	}
}

if (!function_exists('update')) {
	function update($table, $data, $pkValue, $pkTableCT = NULL)
	{
		if (antiXss($data) === false) {
			$pkTable = (empty($pkTableCT)) ? primary_field_name($table) : $pkTableCT;

			$data['updated_at'] = timestamp();
			$filterData = sanitizeInput($data, $table);

			if (isset($filterData[$pkTable])) {
				unset($filterData[$pkTable]); // auto increment, no need to update or insert
			}

			try {
				$ci = get_instance();
				$resCode = ($ci->db->update($table, $filterData, [$pkTable => $pkValue])) ? 200 : 400;

				returnData([
					"action" => 'update',
					"resCode" => $resCode,
					"message" =>  message($resCode, 'update'),
					"id" => $pkValue,
					"data" => $filterData
				], $resCode);
			} catch (Exception $e) {
				returnData([
					"action" => 'update',
					'resCode' => 400,
					'message' => 'Something when wrong.',
					'id' => NULL,
					'data' => $e->getMessage(),
				], 422);
			}
		} else {
			returnData([
				'action' => 'update',
				'resCode' => 400,
				'message' => 'Protection against <b><i> Cross-site scripting (XSS) </i></b> activated!',
				'id' => NULL,
				'data' => $data,
			], 422);
		}
	}
}

if (!function_exists('delete')) {
	function delete($table, $pkValue = NULL, $pkTableCT = NULL)
	{
		if (antiXss($pkValue) === false) {

			try {
				$ci = get_instance();

				$previous_values = NULL;

				if (!empty($pkValue)) {
					$pkTable = (empty($pkTableCT)) ? primary_field_name($table) : $pkTableCT;
					$previous_values = find($table, [$pkTable => $pkValue], 'row_array');
					$resCode = ($ci->db->delete($table, [$pkTable => $pkValue])) ? 200 : 400;
				} else {
					$resCode = $ci->db->truncate($table) ? 200 : 400;
				}

				returnData([
					"resCode" => $resCode,
					"message" =>  message($resCode, 'delete'),
					"id" => $pkValue,
					"data" => $previous_values
				], $resCode);
			} catch (Exception $e) {

				returnData([
					'resCode' => 400,
					'message' => 'Something when wrong.',
					'id' => NULL,
					'data' => $e->getMessage(),
				], 422);
			}
		} else {
			returnData([
				'resCode' => 400,
				'message' => 'Protection against <b><i> Cross-site scripting (XSS) </i></b> activated!',
				'id' => NULL,
				'data' => [],
			], 422);
		}
	}
}

if (!function_exists('deleteWithCondition')) {
	function deleteWithCondition($table, $condition = NULL)
	{
		if (antiXss($condition) === false) {

			try {
				$ci = get_instance();
				$previous_values = findAll($table, $condition);

				foreach ($condition as $key => $value) {
					if (is_numeric($key))
						$ci->db->where($value);
					else
						$ci->db->where($key, $value);
				}

				$resCode = ($ci->db->delete($table)) ? 200 : 400;

				returnData([
					"resCode" => $resCode,
					"message" =>  message($resCode, 'delete'),
					"id" => NULL,
					"data" => $previous_values
				], $resCode);
			} catch (Exception $e) {
				returnData([
					'resCode' => 400,
					'message' => 'Something when wrong.',
					'id' => NULL,
					'data' => $e->getMessage(),
				], 422);
			}
		} else {
			returnData([
				'resCode' => 400,
				'message' => 'Protection against <b><i> Cross-site scripting (XSS) </i></b> activated!',
				'id' => NULL,
				'data' => $condition,
			], 422);
		}
	}
}

if (!function_exists('save')) {
	function save($table, $data)
	{
		$dataInsert = [];
		$pkColumnName = NULL;

		// get primary key
		$pkColumnName = primary_field_name($table);

		// search if data exist using PK
		$exist = (isset($data[$pkColumnName])) ? find($table, [$pkColumnName => $data[$pkColumnName]], 'row_array') : NULL;

		$dataInsert = (isAssociative($data)) ?  $data : ((!empty($exist)) ? $data[1] : merge($data[0], $data[1]));

		// // remove all column field that does't exist in db
		foreach ($dataInsert as $key => $value) {
			if (!isColumnExist($table, $key)) {
				unset($dataInsert[$key]);
			}
		}

		if (isset($dataInsert[$pkColumnName])) {
			unset($dataInsert[$pkColumnName]); // auto increment, no need to update or insert
		}

		if (!empty($exist)) {
			$id = $exist[$pkColumnName]; // get pk from table
			return update($table, $dataInsert, $id, $pkColumnName);
		} else {
			return insert($table, $dataInsert);
		}
	}
}

if (!function_exists('updateBatch')) {
	function updateBatch($table, $data, $pkColumnName)
	{
		if (antiXss($data) === false) {
			$pkColumnName = (empty($pkColumnName)) ? primary_field_name($table) : $pkColumnName;

			$filterData = [];
			foreach ($data as $columnData) {
				$sanitize = [];
				foreach ($columnData as $columnName => $value) {
					if (isColumnExist($table, $columnName)) {
						// check if empty field
						if ($value == '' || empty($value)) {
							$sanitize[$columnName] = $value != 0 || $value != '0' ? null : $value;
						} else {
							$sanitize[$columnName] = xssClean($value);
						}
					} else {
						unset($columnName);
					}
				}

				$sanitize['updated_at'] = timestamp();
				array_push($filterData, $sanitize);
			}

			try {;
				$ci = get_instance();
				$updateResult = $ci->db->update_batch($table, $filterData, $pkColumnName);
				$resCode = $updateResult > 0 ? 200 : 400;

				returnData([
					"action" => 'update',
					"resCode" => $resCode,
					"message" => isSuccess($resCode) ? $updateResult . ' data has been updated' : 'Please consult the system administrator',
					"totalUpdate" => $updateResult,
					"data" => $filterData
				], $resCode);
			} catch (Exception $e) {
				returnData([
					"action" => 'update',
					'resCode' => 400,
					'message' => 'Something when wrong.',
					'id' => NULL,
					'data' => $e->getMessage(),
				], 422);
			}
		} else {
			returnData([
				'action' => 'update',
				'resCode' => 400,
				'message' => 'Protection against <b><i> Cross-site scripting (XSS) </i></b> activated!',
				'id' => NULL,
				'data' => [],
			], 422);
		}
	}
}

if (!function_exists('sanitizeInput')) {
	function sanitizeInput($dataArr, $table = NULL)
	{
		$sanitize = [];

		if (isAssociative($dataArr)) {
			foreach ($dataArr as $columnName => $value) {
				if (isColumnExist($table, $columnName)) {
					// check if empty field
					if ($value == '' || empty($value)) {
						$sanitize[$columnName] = $value != 0 || $value != '0' ? null : $value;
					} else {
						$sanitize[$columnName] = xssClean($value);
					}
				} else {
					unset($columnName);
				}
			}
		} else {
			foreach ($dataArr[0] as $columnName => $value) {
				if (isColumnExist($table, $columnName)) {
					// check if empty field
					if ($value == '' || empty($value)) {
						$sanitize[$columnName] = $value != 0 || $value != '0' ? null : $value;
					} else {
						$sanitize[$columnName] = xssClean($value);
					}
				} else {
					unset($columnName);
				}
			}
		}

		return $sanitize;
	}
}

if (!function_exists('isTableExist')) {
	function isTableExist($table)
	{
		if (ci()->db->table_exists($table))
			return true;
		else
			return false;
	}
}

if (!function_exists('isColumnExist')) {
	function isColumnExist($table, $columnName)
	{
		if (ci()->db->field_exists($columnName, $table))
			return true;
		else
			return false;
	}
}

if (!function_exists('primary_field_name')) {
	function primary_field_name($table)
	{
		$getPKTable = rawQuery("SHOW KEYS FROM {$table} WHERE Key_name = 'PRIMARY'");
		return $getPKTable[0]['Column_name'];
	}
}

function hasMany($modelRef, $columnRef, $condition, $option = NULL, $with = NULL)
{
	$dataArr = $obj = $tableRef = '';

	if (!empty($condition)) {
		$fileName = APPPATH . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $modelRef . '.php';
		if (file_exists($fileName)) {
			require_once $fileName;
			$className = getClassNameFromFile($fileName);
			$obj = new $className;
			$tableRef = $obj->table;
			$tableRefPK = $obj->id;

			// check table
			if (isTableExist($tableRef)) {

				$whereCon = NULL;
				if (!empty($option)) {
					foreach ($option as $key => $value) {
						$whereCon .= "AND {$key}='$value'";
					}
				}

				$dataArr = rawQuery("SELECT * FROM $tableRef WHERE {$columnRef}='$condition' $whereCon");

				if (!empty($with)) {
					$dataRelation = $objStore = array(); // reset array
					foreach ($with as $functionName) {
						if (in_array($functionName, $obj->with)) {
							$functionCall = $functionName . 'Relation';

							// check if function up is exist
							if (method_exists($obj, $functionCall)) {
								if (!isMultidimension($dataArr)) {
									$dataRelation = $obj->$functionCall($dataArr);
									$dataStore = [
										$functionName => [
											'data' => (isset($dataRelation['data'])) ? $dataRelation['data'] : NULL,
											'objData' => (isset($dataRelation['obj'])) ? $dataRelation['obj'] : NULL,
										]
									];
									array_push($objStore, $dataStore);
									$dataArr[$functionName] = (isset($dataRelation['data'])) ? $dataRelation['data'] : NULL;
								} else {
									foreach ($dataArr as $key => $subdata) {
										$dataRelation = $obj->$functionCall($subdata);
										$dataStore = [
											$functionName => [
												'data' => (isset($dataRelation['data'])) ? $dataRelation['data'] : NULL,
												'objData' => (isset($dataRelation['obj'])) ? $dataRelation['obj'] : NULL,
											]
										];
										array_push($objStore, $dataStore);
										$dataArr[$key][$functionName] = (isset($dataRelation['data'])) ? $dataRelation['data'] : NULL;
									}
								}
							}
						}
					}
				}
			}
		}
	}

	$data = [
		'obj' => $obj,
		'table' => $tableRef,
		'column' => $columnRef,
		'id' => $condition,
		'data' => xssClean($dataArr),
	];

	return $data;
}

function hasOne($modelRef, $columnRef, $condition, $option = NULL, $with = NULL)
{
	$dataArr = $obj = $tableRef = '';

	if (!empty($condition)) {
		$fileName = APPPATH . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR . $modelRef . '.php';
		if (file_exists($fileName)) {
			require_once $fileName;
			$className = getClassNameFromFile($fileName);
			$obj = new $className;

			$tableRef = $obj->table;
			$tableRefPK = $obj->id;

			// check table
			if (isTableExist($tableRef)) {

				$whereCon = NULL;
				if (!empty($option)) {
					foreach ($option as $key => $value) {
						$whereCon .= "AND {$key}='$value'";
					}
				}

				$dataArr = rawQuery("SELECT * FROM $tableRef WHERE {$columnRef}='$condition' $whereCon LIMIT 1", 'row_array');

				if (!empty($with)) {
					$dataRelation = $objStore = array(); // reset array
					foreach ($with as $functionName) {
						if (in_array($functionName, $obj->with)) {
							$functionCall = $functionName . 'Relation';

							// check if function up is exist
							if (method_exists($obj, $functionCall)) {
								if (!isMultidimension($dataArr)) {
									$dataRelation = $obj->$functionCall($dataArr);
									$dataStore = [
										$functionName => [
											'data' => (isset($dataRelation['data'])) ? $dataRelation['data'] : NULL,
											'objData' => (isset($dataRelation['obj'])) ? $dataRelation['obj'] : NULL,
										]
									];
									array_push($objStore, $dataStore);
									$dataArr[$functionName] = (isset($dataRelation['data'])) ? $dataRelation['data'] : NULL;
								} else {
									foreach ($dataArr as $key => $subdata) {
										$dataRelation = $obj->$functionCall($subdata);
										$dataStore = [
											$functionName => [
												'data' => (isset($dataRelation['data'])) ? $dataRelation['data'] : NULL,
												'objData' => (isset($dataRelation['obj'])) ? $dataRelation['obj'] : NULL,
											]
										];
										array_push($objStore, $dataStore);
										$dataArr[$key][$functionName] = (isset($dataRelation['data'])) ? $dataRelation['data'] : NULL;
									}
								}
							}
						}
					}
				}
			}
		}
	}

	$data = [
		'obj' => $obj,
		'table' => $tableRef,
		'column' => $columnRef,
		'id' => $condition,
		'data' => (!empty($dataArr)) ? xssClean($dataArr) : NULL,
	];

	return $data;
}

function getClassNameFromFile($filePathName)
{
	$php_code = file_get_contents($filePathName);

	$classes = array();
	$tokens = token_get_all($php_code);
	$count = count($tokens);
	for ($i = 2; $i < $count; $i++) {
		if (
			$tokens[$i - 2][0] == T_CLASS
			&& $tokens[$i - 1][0] == T_WHITESPACE
			&& $tokens[$i][0] == T_STRING
		) {

			$class_name = $tokens[$i][1];
			$classes[] = $class_name;
		}
	}

	return $classes[0];
}

if (!function_exists('isUpdateData')) {
	function isUpdateData($typeAction)
	{
		$action = (isArray($typeAction)) ? $typeAction['action'] : $typeAction;
		if ($action == 'update') {
			return true;
		} else {
			return false;
		}
	}
}

if (!function_exists('isInsertData')) {
	function isInsertData($typeAction)
	{
		$action = (isArray($typeAction)) ? $typeAction['action'] : $typeAction;
		if ($action == 'insert') {
			return true;
		} else {
			return false;
		}
	}
}
