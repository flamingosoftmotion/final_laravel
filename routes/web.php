<?php

use Illuminate\Support\Facades\Route;


Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:user']],function(){ //middleware dengan paramater admin

    Route::get('/pertanyaan', 'PertanyaanController@index');
    Route::get('/pertanyaan/create', 'PertanyaanController@create');
    Route::post('/pertanyaan/store', 'PertanyaanController@store');
    Route::get('/pertanyaan/delete/{id}', 'PertanyaanController@delete')->name('pertanyaan.delete');
    Route::get('/pertanyaan/edit/{id}', 'PertanyaanController@edit')->name('pertanyaan.edit');
    Route::post('/pertanyaan/update/{id}', 'PertanyaanController@update')->name('pertanyaan.update');
    Route::get('/pertanyaan/show/{id}', 'PertanyaanController@show')->name('pertanyaan.show');

    //Route untuk menghitung Nilai Poin
    Route::get('/pertanyaan/relevan','PertanyaanController@count15')->name('pertanyaan.count15');
    Route::get('/pertanyaan/up','PertanyaanController@upvote')->name('pertanyaan.upvote');
    Route::get('/pertanyaan/down','PertanyaanController@downvote')->name('pertanyaan.downvote');

    Route::get('/jawaban', 'JawabanController@show');
    Route::get('/jawaban/{id}', 'JawabanController@index')->name('jawaban');
    Route::post('/jawaban/{id}', 'JawabanController@store')->name('jawaban');


});



