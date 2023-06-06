<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample',function(){
    return view('sample');
});

Route::get('/hello',function(){
return "Aptech Korangi Center";
});
// Route::get('/user/{id}/{name}', function ($id,$name) {
//     return 'User '.$id  .$name;
// });
Route::get('/user/{name?}', function ($name = null) {
    return $name;
});
Route::get('index','HomeController@Index')->name('index');
Route::get('/about', 'HomeController@About')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/index1', 'SampleController@Index')->name('index1');
Route::post('/show', 'SampleController@ShowData')->name('show');
Route::get('test', 'SampleController@Test')->name('test');
Route::post('/testdata', 'SampleController@TestData')->name('testdata');

Route::get('/user1', [HomeController::class, 'Index']);
Route::get('home/{name}','App\Http\Controllers\HomeController@Std')->name('home');

Route::resource('/employee','EmployeesController');
Route::get('fluenteg','HomeController@fluenteg');
Route::get('getData','TestController@getData');
Route::get('insertData','TestController@insertData');
Route::get('updateData','TestController@updateData');
Route::get('deleteData','TestController@deleteData');