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

//Navigation

Route::get('/','MainController@goPhonebookPage');
Route::get('/addcontact','MainController@goNewContactPage');
Route::post('/savecontact','MainController@saveContact');
Route::get('/delete/{contact_ID}','MainController@deleteContact');
Route::get('/edit/{contact_ID}','MainController@editContact');
Route::post('/editcontact','MainController@saveEditContact');
