<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get("/", "HomeController@index")->name("dashboard");

Route::get("communities", "CommunityController@index")->name("communities.index");
Route::get("communities/create", "CommunityController@create")->name("communities.create")->middleware('authsimple');
Route::post("communities", "CommunityController@store")->name("communities.store");
Route::get("communities/{id}/edit/{user}", "CommunityController@edit")->name("communities.edit");
Route::post("communities/{id}/update", "CommunityController@update")->name("communities.update");
Route::get("communities/{id}/destroy", "CommunityController@destroy")->name("communities.destroy");
