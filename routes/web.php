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
Route::get('/loginAdmin', '\App\Http\Controllers\Auth\LoginController@loginAdmin');
Route::post('/postLogin', '\App\Http\Controllers\Auth\LoginController@postLogin');
Route::get('/', function () {	
    return view('home');
});

Route::get('/profil', function () {	
    return view('profil');
});

Route::get('/contact', function () {	
    return view('contact');
});

Route::get('/project', function () {	
    return view('project');
});

Route::get('/admin', function () {	
    return view('admin');
});
Route::get('/direktur', function () {	
    return view('direktur');
});

Auth::routes();

Route::get('/dataperumahan', 'DataperumahanController@index');
Route::get('/dataperumahan/tambahperumahan', 'DataperumahanController@create');
Route::get('/dataperumahan/{perum}', 'DataperumahanController@show');
Route::post('/dataperumahan', 'DataperumahanController@store');
Route::delete('/dataperumahan/{perum}', 'DataperumahanController@destroy');
Route::get('/dataperumahan/{perum}/edit', 'DataperumahanController@edit');
Route::get('/dataperumahan/{perum}/lihat', 'DataperumahanController@lihat')->name('lihatPerumahan');
Route::patch('/dataperumahan/{perum}', 'DataperumahanController@update');

Route::get('/datakonsumen', 'DatakonsumenController@index');
Route::get('/detailkonsumen/{konsumen}', 'DatakonsumenController@show');
Route::get('/datakonsumen/tambahkonsumen', 'DatakonsumenController@create');
Route::post('/datakonsumen', 'DatakonsumenController@store');
Route::delete('/datakonsumen/{konsumen}', 'DatakonsumenController@destroy');
Route::get('/ubahkonsumen/{konsumen}/edit', 'DatakonsumenController@edit');
Route::patch('/datakonsumen/{konsumen}', 'DatakonsumenController@update');

Route::get('/datapenjualan', 'DatapenjualanController@index');
Route::get('/datapenjualan/tambahpenjualan', 'DatapenjualanController@create');
Route::post('/datapenjualan', 'DatapenjualanController@store');
Route::delete('/datapenjualan/{penjualan}', 'DatapenjualanController@destroy');
Route::get('/ubahpenjualan/{penjualan}/edit', 'DatapenjualanController@edit');
Route::patch('/datapenjualan/{penjualan}', 'DatapenjualanController@update');

Route::get('/datapengajuan', 'DatapengajuanController@index')->name('pengajuan');
Route::get('/datapengajuan/tambahpengajuan', 'DatapengajuanController@createPengajuan')->name('tambahPengajuan');
Route::get('/datapengajuan/{pengajuan}', 'DatapengajuanController@show');
Route::get('/cariPerumahan', 'DatapengajuanController@cariPerumahan');
Route::get('/cariBlok', 'DatapengajuanController@cariBlok');
Route::post('/datapengajuan', 'DatapengajuanController@store')->name('pengajuanSimpan');
Route::post('/transferPengajuan/{id}', 'DatapengajuanController@transfer')->name('transferPengajuan');
// Route::post('/datapengajuan', 'DatapengajuanController@store');
Route::delete('/datapengajuan/{pengajuan}', 'DatapengajuanController@destroy');
Route::patch('/datapengajuan/{id}', 'DatapengajuanController@update');

Route::get('/editadmin','DatadirekturController@kelolaadmin');
Route::get('/tambahadmin','DatadirekturController@tambahadmin');
Route::post('/simpanadmin','DatadirekturController@simpanadmin');
Route::delete('/hapusadmin/{admin}','DatadirekturController@hapusadmin');

Route::post('/lihatperumahan/{id}','DataperumahanController@tambah');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
