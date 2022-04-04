<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route; 
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\UsersManagementController; 
use App\Http\Controllers\Auth\SocialController; 

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('redirect', [SocialController::class,'redirect']);
Route::get('callback', [SocialController::class,'callback']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('list', ['as' => 'list', 'uses' => 'UsersManagementController@index']);
Route::get('addForm', ['as' => 'addForm', 'uses' => 'UsersManagementController@addForm']);
Route::any('formSubmit', ['as' => 'formSubmit', 'uses' => 'UsersManagementController@formSubmit']);
Route::any('edit/{id}', ['as' => 'edit', 'uses' => 'UsersManagementController@edit']);
Route::any('update', ['as' => 'update', 'uses' => 'UsersManagementController@update']);
Route::any('delete', ['as' => 'delete', 'uses' => 'UsersManagementController@delete']);
Route::any('view/{id}', ['as' => 'view', 'uses' => 'UsersManagementController@view']);
Route::any('getCity', ['as' => 'getCity', 'uses' => 'UsersManagementController@getCity']);