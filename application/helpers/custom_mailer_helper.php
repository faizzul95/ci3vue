<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function replaceTextWithData($string = NULL, $arrayOfStringToReplace = array(), $prefix = '%', $suffix = '%')
{
	return str_replace(array_keys($prefix . $arrayOfStringToReplace . $suffix), array_values($arrayOfStringToReplace), $string);
}

function contentData($contentType, $table = "general_content")
{
	return db()->where("content_type", $contentType)->where("content_status", '1')->fetchRow($table);
}

function sentMail($recipientData = NULL, $data = NULL, $attachment = NULL)
{
	//Create an instance; passing `true` enables exceptions
	$mail = new PHPMailer(true);

	try {
		//Server settings
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		// $mail->isSMTP();                                            //Send using SMTP
		// $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		// $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		// $mail->Username   = 'EMAIL HERE';                      //SMTP username
		// $mail->Password   = 'PASSWORD HERE';                               //SMTP password
		// $mail->SMTPSecure = 'TLS';            //Enable implicit TLS encryption
		// $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('no-reply@arca.canthinksolution.com', 'ARCA System');
		$mail->addAddress($recipientData['recipient_email'], $recipientData['recipient_name']);     //Add a recipient

		//Content
		$mail->isHTML(true); //Set email format to HTML
		$mail->Subject = $recipientData['subject'];
		$mail->Body    = $data;

		if (!empty($attachment))
			$mail->addAttachment($attachment);

		if ($mail->send())
			return true;
		else
			return false;
	} catch (Exception $e) {
		// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		return false;
	}
}

function arrayDataReplace($data)
{
	$newKey = $newValue = $newData = [];
	foreach ($data as $key => $value) {
		array_push($newKey, '%' . $key . '%');
		array_push($newValue, $value);
	}

	foreach ($newKey as $key => $data) {
		$newData[$data] = $newValue[$key];
	}

	return $newData;
}
