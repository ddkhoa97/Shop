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


Route::get('/','ClientController@index');

Route::get('contact', function () {
    return view('client.contact');
});
// Route::get('listproductpants','ProductController@listproductpants');
// Route::get('listproductshorts','ProductController@listproductshorts');
// Route::get('listproductshirts','ProductController@listproductshirts');
Route::get('listproduct/{name}','ProductController@listproduct');

Route::get('listproductpants/{id}',
[
'as'=>'listproductpants',
'uses'=>'ProductController@listproductpants'
]);
Route::get('listproductshorts/{id}',
[
'as'=>'listproductshorts',
'uses'=>'ProductController@listproductshorts'
]);
Route::get('listproductshirts/{id}',
[
'as'=>'listproductshirts',
'uses'=>'ProductController@listproductshirts'
]);
Route::post('addToCart',
[
'as'=>'addToCart',
'uses'=>'CartController@addProduct'
]);
Route::get('cart',
[
'as'=>'cart',
'uses'=>'CartController@cart'
]);
Route::post('updateCart',
[
'as'=>'updateCart',
'uses'=>'CartController@updateCart'
]);
Route::post('checkout',
[
'as'=>'checkout',
'uses'=>'CartController@checkout'
]);
Route::post('finish',
[
'as'=>'finish',
'uses'=>'CartController@finish'
]);
Route::get('admin',
[
'as'=>'admin',
'uses'=>'AdminController@index'
]);
Route::get('product',
[
'as'=>'prodcut',
'uses'=>'AdminController@product'
]);
Route::get('bill',
[
'as'=>'bill',
'uses'=>'AdminController@bill'
]);
Route::get('customer',
[
'as'=>'customer',
'uses'=>'AdminController@customer'
]);
Route::post('showType',
[
'as'=>'showType',
'uses'=>'AdminController@showType'
]);
Route::post('AddProduct',
[
'as'=>'AddProduct',
'uses'=>'AdminController@AddProduct'
]);
Route::post('EditProduct',
[
'as'=>'EditProduct',
'uses'=>'AdminController@EditProduct'
]);
Route::get('detailBill/{id?}',
[
'as'=>'DetailBill',
'uses'=>'AdminController@DetailBill'
]);
Route::get('PrintPDF/{id}',
[
'as'=>'PrintPDF',
'uses'=>'AdminController@PrintPDF'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
