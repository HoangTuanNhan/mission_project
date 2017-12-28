<?php

Route::group(['prefix'=> 'user', 'as'=> 'user.'], function() {
    Route::get('/index', 'UserController@index')->name('index');
    Route::get('/search', 'UserController@seachUser')->name('search');
    Route::get('/list', 'UserController@listUser')->name('list');
    Route::get('/show', 'UserController@show')->name('show');
    Route::get('/create', 'UserController@saveUser')->name('create');

});