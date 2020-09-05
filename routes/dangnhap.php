<?php

use Illuminate\Support\Facades\Route;


Route::prefix('login/')->group(function () {
    route::get('/dangxuat', 'dangnhapController@getdangxuat')->name('dangxuat');
    route::get('/dangnhap', 'dangnhapController@getdangnhap')->name('dangnhap');
    route::post('/dangnhap', 'dangnhapController@postdangnhap')->name('dangnhap');

    
});
Route::get('show_info/{Customerid}','dangnhapController@show_info');
Route::get('thongtin/update/{Customerid}','dangnhapController@update');
Route::post('thongtin/updateProcess/{Customerid}','dangnhapController@updateProcess');