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




// Portefolio route
Route::get('/','homeController@index')->name('path_home');

Route::get('/about','aboutController@index')->name('path_about');

Route::get('/services/{slug}', function ($slug) {
    return view('pages/services_detail');
})->name('path_services');

Route::get('/contact','contactController@index')->name('path_contact');

Route::post('/contact/message','contactController@store')->name('post_path_contact');

// Portefolio route
Route::prefix('portefolio')->group(function ()
 {
    Route::get('/','portefolioController@view')->name('path_portefolio');
    Route::get('/{slug}','portefolioController@index')->name('portefolio_details');

});




//service details
Route::prefix('service')->group(function()
{
    Route::get('/{slug}','serviceController@index')->name('path_details');
    
});
//----------------------------------------------------------------------------
Route::get('/myCart','cartController@show')->name('path_cart');
Route::delete('/{rowId}','cartController@destroy')->name('destroyCart');
Route::get('/update/cart','cartController@update')->name('updateCart');
Route::patch('cart/{{rowId}}','cartController@cartUpdate')->name('cartupdate');
Route::get('/details/{id}','detailController@index'); 
Route::post('/details/{id}','detailController@shop');

//----------------------------------------------------------------------------



//checkout
Route::post('/checkout','checkoutController@store')->name('check');

//----------------------------------------------------------------------------


// Shop route
Route::prefix('shop')->group(function () {

    Route::get('/', 'shopController@showDepartments')->name('path_shop_department');

    Route::get('/{department}', 'shopController@showCategories')->name('path_shop_categories');

    Route::get('/{department}/{category}', 'shopController@showProducts')->name('path_shop_product');
    Route::get('/{department}/{category}/{product}',"productController@show")->name('path_shop_product_single');
    Route::get('/cart', function () {
        return view('pages/shops/shop_cart');
    })->name('path_shop_cart');
    Route::post('/cart/add','cartController@store')->name('path_cart_add');
});





//--------------------voyager routes----------------------------
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
