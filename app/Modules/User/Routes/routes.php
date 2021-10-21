<?php

Route::group(['middleware' => 'auth'], static function () {
    Route::get('/', ['as' => 'index', 'uses' => 'UserController@index']);
});