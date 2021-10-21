<?php

Route::group(['middleware' => 'auth'], static function () {
    Route::get('/', ['as' => 'index', 'uses' => 'DashboardController@index']);
});