<?php

Route::group(['middleware' => 'auth'], static function () {
    Route::get('/music-dashboard', ['as' => 'index', 'uses' => 'MusicController@musicDashboard']);
	Route::get('/my-music', ['as' => 'my-music', 'uses' => 'MusicController@myMusic']);
});