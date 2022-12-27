<?php

/**
 * API Routes
 *
 * This routes only will be available under AJAX requests. This is ideal to build APIs.
 */

Route::group('user', function () {
    Route::get('/list', 'UserController@list');
    Route::get('/create', 'UserController@create');
    Route::post('/store', 'UserController@store');
    Route::get('/{id}', 'UserController@show');
    Route::get('/{id}/edit', 'UserController@edit');
    Route::put('/{id}', 'UserController@update');
    Route::destroy('/{id}', 'UserController@destroy');
});
