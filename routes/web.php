<?php

use Illuminate\Support\Facades\Route;

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






//
// Route::get('/', function () {
//     return view('welcome');
// });




Route::get('/','FrontendController@homepageshow');

Route::post('/add_student_form_action_route','FrontendController@addstudent_formaction');

//EDIT HOME PAGE SHOW
Route::get('/student_edit_route/{id}','FrontendController@student_edit_pageshow');
//delate route
Route::post('/student_edit_form_action_route/{id}','FrontendController@edit_student_form_action');
//student_delate_route
Route::get('/student_delate_route/{id}','FrontendController@student_delate');


Auth::routes();
