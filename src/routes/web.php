<?php 

Route::get('/package', function(){
    return view('test-package::home');
});

Route::group(['namespace' => 'VigneshAjay\TestPackage\Http\Controllers'], function() {
    Route::get('/notes', 'NotesController@index');
    Route::resource('/note', 'NotesController', ['except' => ['index']]);
});


