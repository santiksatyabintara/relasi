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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/orangtuaa', function() {
	$or = App\orangtuaa::all();
	foreach ($or as $data) {
		echo $data->nama_ibu." dengan ";
		echo $data->nama_ayah." ";
		foreach ($data ->anak as $key) {
			echo "<li>$key->nama</li><br>";
		}
	}
});
Route::get('/percobaan','MyController@index');
Route::get('/percobaan1','MyController@tampilan');
Route::get('/tampilmodel','MyController@tampilmodel');