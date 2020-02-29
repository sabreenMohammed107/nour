
<?php

/*
|--------------------------------------------------------------------------
| Customer Routes
|--------------------------------------------------------------------------
|
| 
|
*/
/*----------------------Home---------------------------*/
Route::get('/index', 'IndexController@index');
/*--------------------web shop -----------------------*/
Route::get('/shop/{id}', 'ShopController@sliderView');
Route::post('addReview', 'ShopController@addReview')->name('testReview');
Route::post('addContact', 'ShopController@addContact');

Route::get('/shop/fetch_data', 'ShopController@fetch_data');
Route::get('/shop/fetch_product', 'ShopController@fetch_product');
//filtter
Route::get('/shop/fetch_productWhere', 'ShopController@fetch_productWhere');
Route::get('/shop/fetch_productBrands', 'ShopController@fetch_productBrands');
Route::get('/shop/fetch_productGenders', 'ShopController@fetch_productGenders');
Route::get('/shop/fetch_productOffers', 'ShopController@fetch_productOffers');
Route::get('/shop/selectSort', 'ShopController@selectSort');

//favourite
Route::get('/shop/addfavourite', 'ShopController@addfavourite');
Route::get('/shop/deletefavourite', 'ShopController@deletefavourite');

Route::post('/shop/fetch_productPrice', 'ShopController@fetch_productPrice');

Route::get('/shop/getCatList', 'ShopController@getCatList');
Route::get('/shop/category/{id}', 'ShopController@category')->name('category');
/*---------------------------web Category------------------------------ */
Route::get('/category', 'CategoryController@index');
//filtter
Route::get('/category/fetch_productWhere', 'CategoryController@fetch_productWhere');
Route::get('/category/fetch_productBrands', 'CategoryController@fetch_productBrands');
Route::get('/category/fetch_productGenders', 'CategoryController@fetch_productGenders');
Route::get('/category/fetch_productOffers', 'CategoryController@fetch_productOffers');
Route::get('/category/fetch_productShop', 'CategoryController@fetch_productShop');
Route::post('/category/fetch_productPrice', 'CategoryController@fetch_productPrice');
Route::get('/category/selectSort', 'CategoryController@selectSort');

/*---------------------------web product------------------------------ */

   //Get Product Id
Route::get('/product', 'ProductController@index')->name('product');
Route::post('addProductReview', 'ProductController@addProductReview');
Route::post('/product/fetch_data', 'ProductController@fetch_data');


//favourite
Route::get('/product/addfavourite', 'ProductController@addfavourite');
Route::get('/product/deletefavourite', 'ProductController@deletefavourite');
/*-----------------------------web cart------------------------------------*/
Route::resource('/cart', 'CartController');
Route::get('/cart/client/{id}', 'CartShowController@index')->name('cartShowing');
Route::post('updatCart', 'CartShowController@updatCart')->name('updatCart');
Route::post('destoryCart/{id}', 'CartShowController@destroy')->name('destoryCart');
