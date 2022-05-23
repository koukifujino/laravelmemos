<?php
use Illuminate\Http\Request;
use App\Memo;


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

Route::get('/','MemoController@index')->name('index');
Route::get('/create', 'MemoController@create')->name('create');
Route::post('/store', 'MemoController@store')->name('store');
Route::get('/edit','MemoController@edit')->name('edit');
Route::post('/update', 'MemoController@update')->name('update');
Route::get('/delete','MemoController@delete')->name('delete');