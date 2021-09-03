<?php
use App\perumahan;
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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {	
    $perumahan = perumahan::all();
    return view('home',compact('perumahan'));
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

Route::get('/admin', 'DashboardController@index');
// Route::get('/admin', function () {	
//     return view('admin');
// });
Route::get('/direktur', function () {	
    return view('direktur');
});
Route::group(['middleware'=>['auth','role:admin,direktur']],function(){
    Route::get('/datapenjualan', 'DatapenjualanController@index');
    Route::get('/datapenjualan/tambahpenjualan', 'DatapenjualanController@create');
    Route::post('/datapenjualan', 'DatapenjualanController@store');
    Route::delete('/datapenjualan/{penjualan}', 'DatapenjualanController@destroy');
    Route::get('/ubahpenjualan/{penjualan}/edit', 'DatapenjualanController@edit');
    Route::patch('/datapenjualan/{penjualan}', 'DatapenjualanController@update');
    Route::get('/penjualanExport', 'DatapenjualanController@exportPenjualan')->name('exportPenjualan');

    Route::get('/datakonsumen', 'DatakonsumenController@index');
    Route::get('/detailkonsumen/{konsumen}', 'DatakonsumenController@show');
    Route::get('/datakonsumen/tambahkonsumen', 'DatakonsumenController@create');
    Route::post('/datakonsumen', 'DatakonsumenController@store');
    Route::delete('/datakonsumen/{konsumen}', 'DatakonsumenController@destroy');
    Route::get('/ubahkonsumen/{konsumen}/edit', 'DatakonsumenController@edit');
    Route::post('/datakonsumenEdit/{konsumen}', 'DatakonsumenController@update');
    Route::get('/konsumenPerumahan/{id}', 'DatakonsumenController@konsumenPerumahan')->name('konsumenPerumahan');
    Route::get('/datapengajuan', 'DatapengajuanController@index')->name('pengajuan');

});
Route::group(['middleware'=>['auth','role:direktur']],function(){
    Route::get('/editadmin','DatadirekturController@kelolaadmin');
    Route::get('/tambahadmin','DatadirekturController@tambahadmin');
    Route::post('/simpanadmin','DatadirekturController@simpanadmin');
    Route::delete('/hapusadmin/{admin}','DatadirekturController@hapusadmin');
});
Route::group(['middleware'=>['auth','role:admin']],function(){
    Route::get('/setting', 'DashboardController@setting')->name('setting');
    Route::patch('/gantiFoto/{id}', 'DashboardController@gantiFoto')->name('gantiFoto');
    
    Route::get('/dataperumahan', 'DataperumahanController@index');
    Route::get('/dataperumahan/tambahperumahan', 'DataperumahanController@create');
    Route::get('/dataperumahan/{perum}', 'DataperumahanController@show');
    Route::post('/dataperumahan', 'DataperumahanController@store');
    Route::delete('/dataperumahan/{perum}', 'DataperumahanController@destroy');
    Route::get('/dataperumahan/{perum}/edit', 'DataperumahanController@edit');
    Route::get('/dataperumahan/{perum}/lihat', 'DataperumahanController@lihat')->name('lihatPerumahan');
    Route::patch('/dataperumahan/{perum}', 'DataperumahanController@update');
    Route::post('/editBlok/{id}', 'DataperumahanController@editBlok');
    Route::delete('/hapusBlok/{id}', 'DataperumahanController@hapusBlok');
    

    

    
    Route::get('/datapengajuan/tambahpengajuan', 'DatapengajuanController@createPengajuan')->name('tambahPengajuan');
    Route::get('/datapengajuan/{pengajuan}', 'DatapengajuanController@show');
    Route::get('/cariPerumahan', 'DatapengajuanController@cariPerumahan');
    Route::get('/cariBlok', 'DatapengajuanController@cariBlok');
    Route::post('/datapengajuan', 'DatapengajuanController@store')->name('pengajuanSimpan');
    Route::post('/transferPengajuan/{id}', 'DatapengajuanController@transfer')->name('transferPengajuan');
    Route::delete('/datapengajuan/{pengajuan}', 'DatapengajuanController@destroy');
    Route::patch('/datapengajuan/{id}', 'DatapengajuanController@update');
    Route::post('/lihatperumahan/{id}','DataperumahanController@tambah');
});


// Auth::routes();
Auth::routes();

