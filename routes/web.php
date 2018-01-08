<?php

use \App\Pupil as Pupil;
	
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
//Route::get('/index/{number_page}', 'Controller@index');

Route::get('/', function () {
    return view('index');
});

Route::get('/spisok', function () 
//$sp = PupilController@index;
	return view('spisok', array('result'=> 'PupilController@index')); // получаем данные в формате Json
});

Route::get('/task', function () {
	return view('task'); 
});

Route::post('/send', 'Controller@send');


