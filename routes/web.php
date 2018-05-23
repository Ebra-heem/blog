<?php

Route::group(['namespace'=>'User'],function(){
    Route::get('/','HomeController@index');
    Route::get('/post','HomeController@index');
    Route::get('post/{post}','PostController@post')->name('post');
     Route::get('post/category/{category}','HomeController@category')->name('category');
    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
   
});

Route::group(['namespace'=>'Admin'],function(){
    Route::get('/admin','HomeController@index')->name('admin.home');
    //User Route
    Route::resource('/admin/user','UserController');
    //Post Route
    Route::resource('/admin/post','PostController');
    //Tag Route
    Route::resource('/admin/tag','TagController');
    //Role Route
    Route::resource('/admin/role','RoleController');
     //Permission Route
    Route::resource('/admin/permission','PermissionController');
    //Category Route
    Route::resource('/admin/category','CategoryController');
    //Admin login Route
    Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login', 'Auth\LoginController@login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


