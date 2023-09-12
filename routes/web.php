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

Route::get('/', function () {
    return view('welcome');
});


Route::get('dashboard' , 'ModuleController@dashboard'); 
Route::get('liststudent' , 'ModuleController@liststudent'); 
Route::get('enrollstudent' , 'ModuleController@enrollstudent'); 
Route::get('addteacher' , 'ModuleController@addteacher'); 
Route::get('listteacher' , 'ModuleController@listteacher'); 
Route::get('adminlogin' , 'ModuleController@adminlogin');
Route::get('adminuser' , 'ModuleController@adminuser');
Route::get('studentlogin' , 'ModuleController@studentlogin'); 
Route::get('studentsignup' , 'ModuleController@studentsignup'); 
Route::get('teacherlogin' , 'ModuleController@teacherlogin'); 

Route::post("uploadfile" , 'ModuleController@uploadfile');

Route::post('adminlogin' , 'ExecController@adminlogin');
Route::post('adduser' , 'ExecController@adduser');
Route::post('edituser' , 'ExecController@edituser');
Route::post('updateuser' , 'ExecController@updateuser');
Route::post('removeuser' , 'ExecController@removeuser');


Route::post('signupstudent' , 'ExecController@signupstudent'); 
Route::post('loginstudent' , 'ExecController@loginstudent');
Route::post('removestudent' , 'ExecController@removestudent'); 
Route::post('editstudent' , 'ExecController@editstudent');
Route::post("updatestudent", 'ExecController@updatestudent');

Route::post("enrollstudent", 'ExecController@enrollstudent');
Route::post("editlist" , 'ExecController@editlist');
Route::post("removelist" , 'ExecController@removelist');
Route::post("updatelist" , 'ExecController@updatelist');



Route::post('addteacher' , 'ExecController@addteacher');
Route::post('editteacher' , 'ExecController@editteacher');
Route::post('removeteacher' , 'ExecController@removeteacher');
Route::post('updateteacher' , 'ExecController@updateteacher');


