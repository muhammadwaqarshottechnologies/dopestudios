<?php

Route::group(['middleware' => 'guest'], static function () {
    Route::group(['prefix' => 'login', 'as' => 'login.'], static function () {
        Route::get('/', ['as' => 'show', 'uses' => 'LoginController@index']);
        Route::post('/', ['as' => 'attempt', 'uses' => 'LoginController@login']);
    });

    Route::group(['prefix' => 'register', 'as' => 'register.'], static function () {
        Route::get('/', ['as' => 'show', 'uses' => 'RegisterController@index']);
        Route::post('/', ['as' => 'attempt', 'uses' => 'RegisterController@register']);
    });
});

Route::group(['middleware' => 'auth'], static function () {
    Route::group(['prefix' => 'logout', 'as' => 'logout.'], static function () {
        Route::post('/', ['as' => 'attempt', 'uses' => 'LoginController@logout']);
    });
});
