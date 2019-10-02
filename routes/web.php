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

Route::get('/','ViewController@index')->name('view.home');
Route::get('/all/products','ViewController@allproducts')->name('view.allproducts');
Route::post('/search/products','ViewController@searchproducts')->name('view.searchproducts');
Route::get('/category/{id}','ViewController@sub_subcategoryproduct')->name('view.sub_subcategoryproduct');
Route::get('/manufacturer/{id}','ViewController@manufacturerproduct')->name('view.manufacturerproduct');
Route::post('/product/price/range','ViewController@sortbypricerange')->name('view.sortbypricerange');
Route::get('/product/sort/by/price/low','ViewController@sortbypricelow')->name('view.sortbypricelow');
Route::get('/product/sort/by/price/high','ViewController@sortbypricehigh')->name('view.sortbypricehigh');
Route::get('/product/sort/by/name','ViewController@sortbyname')->name('view.sortbyname');
Route::get('/product/cart/add/{id}','ViewController@addtocart')->name('view.addtocart');
Route::post('/product/cart/add','ViewController@addtocartwithquantity')->name('view.addtocart');
Route::delete('/product/cart/remove', 'ViewController@remove');
Route::get('/product/{id}', 'ViewController@viewproduct')->name('view.product');
Route::get('/product/category/{id}', 'ViewController@categoryproduct')->name('view.categoryproduct');
Route::get('/cart', 'ViewController@viewcart')->name('view.cart');
Route::patch('/cart/update', 'ViewController@cartupdate');

Route::get('/customer/login','ViewController@loginview')->name('view.loginview');
Route::post('/customer/login','ViewController@login')->name('view.login');
Route::post('/customer/register','ViewController@register')->name('view.register');
Route::get('/customer/logout','ViewController@logout_customer')->name('view.logout');

Route::group(['middleware' => ['checkcustomersession']], function () {
    Route::get('/checkout', 'ViewController@viewcheckout')->name('view.checkout');
    Route::post('/order', 'OrderController@store')->name('order.store');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin',function(){
        return view('backend.dashboard');
    })->name('admin.home');

    Route::resource('/manufacturers', 'ManufacturerController');
    Route::resource('/categories', 'CategoryController');
    Route::resource('/subcategories', 'SubcategoryController');
    Route::resource('/products', 'ProductController');
    Route::resource('/sub_subcategories', 'Sub_subcategoryController');
    Route::get('/find/subcategories/{id}', 'Sub_subcategoryController@findsubcategories')->name('find.subcategories');
    Route::get('/find/product/subcategories/{id}', 'ProductController@findsubcategories')->name('find.subcategories');
    Route::get('/find/product/sub_subcategories/{id}', 'ProductController@findsubsubcategories')->name('find.subsubcategories');

    Route::get('/products/order/manage','OrderController@manageOrder')->name('manage.order');
    Route::get('/products/order/view/{id}','OrderController@viewOrderDetail')->name('view.order');
    Route::get('/products/delete/order/{id}','OrderController@deleteOrder')->name('delete.order');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
