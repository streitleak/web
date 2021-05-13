<?php
Route::group(['namespace' => 'Streitleak\RadiusWeb'], function() {
    Route::get('index',['as' => 'index', 'uses' => 'RadiusCDRController@index']);
    Route::get('cdr' , ['as'=>'showcdr', 'uses' => 'RadiusCDRController@showcdr']);
    Route::post('cdr' , ['as' => 'customcdr', 'uses' => 'RadiusCDRController@customcdr']);
    Route::get('login',['as' => 'login', 'uses' => 'UserController@showlogin']);
    Route::post('login',['as' => 'dologin', 'uses' => 'UserController@dologin']);
    Route::get('logout',['as' => 'logout', 'uses' => 'UserController@showlogout']);
    Route::post('logout',['as' => 'dologut', 'uses' => 'UserController@dologout']);
    Route::get('resetpassword',['as' => 'resetpassword', 'uses' => 'UserController@showresetpassword']);
    Route::post('resetpassword',['as' => 'doresetpassword', 'uses' => 'UserController@doresetpassword']);
    Route::get('profile/{id}',['as' =>'profile', 'uses'=>'UserController@showprofile']);
    Route::post('profile/{id}',['as' =>'editprofile', 'uses'=>'UserController@doprofile']);
});
?>