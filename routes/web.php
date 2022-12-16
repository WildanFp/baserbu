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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/test', function () {
    return view('project');
})->name('test');

Route::get('/dashboard', function(){
    return view('dashboard');
})->name('dashboard');

Route::get('/proyek', function () {
    return view('proyek');
})->name('proyek');

Route::get('/detail_proyek', function () {
    return view('detail_proyek');
})->name('detail_proyek');

Route::get('/buat-laporan', function () {
    return view('buat-laporan');
})->name('buat-laporan');

Route::get('/progress', function () {
    return view('progress');
})->name('progress');

Route::get('/prog', function () {
    return view('prog');
})->name('prog');

Route::get('/laporan', function(){
    return view('laporan');
})->name('laporan');

Route::get('/edit-laporan', function(){
    return view('edit-laporan');
})->name('edit-laporan');

Route::get('/kegiatan', function(){
    return view('kabid.kegiatan');
})->name('kegiatan');

Route::get('/dashboard-admin', function(){
    return view('admin.dashboard-admin');
})->name('dashboard admin');

Route::get('/dashboard-kabid', function(){
    return view('kabid.dashboard-kabid');
})->name('dashboard kabid');

Route::get('/user-besda', function(){
    return view('admin.user-besda');
})->name('user');

Route::get('/tambah-kegiatan', function(){
    return view('kabid.tambah-kegiatan');
})->name('tambah kegiatan');

Route::get('/tambah-user', function(){
    return view('admin.tambah-user');
})->name('tambah user');

Route::get('/about', function () {
    return view('about');
})->name('about');
