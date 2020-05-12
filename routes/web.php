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
    if(session('login') == 'true'){
        if(session('level') == 'admin'){
            return view('admin.index');
        }else{
            return view('user.index');
        }
    }
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/login/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

//Admin
Route::resource('/admin/user','c_user');
Route::resource('/admin/p_email','c_p_email');
Route::resource('/admin/p_subweb','c_p_subweb');

Route::get('/admin/pengajuan_email_selesai/{id_p_email}', 'c_p_email@update');
Route::get('/admin/pengajuan_subweb_selesai/{id_p_subweb}', 'c_p_subweb@update');

Route::get('/admin/pengajuan_selesai_email', 'c_p_email@selesai');
Route::get('/admin/pengajuan_selesai_subweb', 'c_p_subweb@selesai');


//User
Route::get('/user/pengajuan_email', 'c_p_email@create');
Route::get('/user/pengajuan_subweb', 'c_p_subweb@create');

Route::get('/user/lihat_pengajuan_email', 'c_p_email@lihat');
Route::get('/user/lihat_pengajuan_subweb', 'c_p_subweb@lihat');
Route::get('/user/ubah_password','c_user@formUbahPassword');
Route::post('/user/ubah_password','c_user@ubahPassword');





