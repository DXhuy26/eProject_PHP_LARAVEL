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
//frontend
Route::get('/', 'HomeController@index');
Route::get('/gioi-thieu', 'HomeController@gioi_thieu');

//Route::get('/trang-chu', 'HomeController@index');

//web
Route::get(
    'index',
    [
        'as' => 'home',
        'uses' => 'HomeController@getIndex'
    ]
);
Route::get(
    'loai_sp/{type}',
    [
        'as' => 'loai_sp',
        'uses' => 'HomeController@getloai_sp'
    ]
);
Route::get(
    'sanpham',
    [
        'as' => 'sanpham',
        'uses' => 'HomeController@getsanpham'
    ]
);
Route::get(
    'chitiet/{id}',
    [
        'as' => 'chitiet',
        'uses' => 'HomeController@getchitiet'
    ]
);


route::get(
    'dangki',
    [
        'as' => 'dangki',
        'uses' => 'HomeController@getdangki'
    ]
);

route::post(
    'dangki',
    [
        'as' => 'dangki',
        'uses' => 'HomeController@postdangki'
    ]
);

route::get('timkiem', [
    'as' => 'timkiem',
    'uses' => 'HomeController@gettimkiem'
]);
//lấy dữ liệu tự dangnhap
include 'dangnhap.php';

//backend
Route::get('/login', 'AdminController@login');
Route::get('/admin', 'AdminController@show_dashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/kt-admin', 'AdminController@dashboard');
Route::get('/productDB', 'AdminController@show_product');

Route::post('/postaddproduct', 'AdminController@postadd');
Route::get('/addproduct', 'AdminController@add_product');

Route::post('/postupdateproduct', 'AdminController@postupdate');
Route::get('/updateproduct/{id}', 'AdminController@update_product');

Route::get('/deleteproduct/{id}', 'AdminController@delete');

//backend order
Route::get('/show-order', 'OrderController@show_order');
Route::get('/thanh-toan', 'OrderController@thanh_toan');

//backend show type product
Route::get('/show-type-product', 'AdminController@show_type_product');

//cart
Route::get('/cart', 'CartController@cart');
Route::get('/Add-Cart/{id}', 'CartController@AddCart');
Route::get('Delete-Item-Cart/{id}', 'CartController@DeleteItemCart');
Route::get('/List-Cart', 'CartController@ViewListCart');
Route::get('Delete-List-Item-Cart/{id}', 'CartController@DeleteListItemCart');
Route::get('Update-List-Item-Cart', 'CartController@UpdateListItemCart');

Route::get('xem-don-hang/{id}', 'CartController@xem_don_hang');

Route::post('/storeOrder', 'OrderController@storeOrder');
// Route::post('/storeOrder', function(Request $request){
//     echo "huhu";
// });
