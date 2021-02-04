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
Route::group(['namespace' => 'Site'], function () {
    Route::get('/', 'SiteController@index')->name('site');
    Route::get('/buy', 'SiteController@buy')->name('site.buy');
    Route::get('/rent', 'SiteController@rent')->name('site.rent');
    Route::get('/list', 'SiteController@list')->name('site.list');
    Route::get('/description/{id}', 'SiteController@description')->name('site.description');
    Route::get('/contact', 'SiteController@contact')->name('site.contact');
    Route::get('/about', 'SiteController@about')->name('site.about');

});


Auth::routes();

Route::get('reset-password', function () {
    return view('auth.password-reset');
})->name('password-reset');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    // Route::get('dashboard/profile', 'DashboardController@showProfile')->name('admin.dashboard.profile');

});

Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', 'DashboardController@index')->name('user.dashboard');
});

Route::group(['prefix' => 'seller', 'namespace' => 'Seller', 'middleware' => ['auth', 'seller']], function () {
    //Route DashboardController
    Route::get('dashboard', 'DashboardController@index')->name('seller.dashboard');
    Route::get('dashboard/profile', 'DashboardController@showProfile')->name('seller.dashboard.profile');

    //Route SellerController
    Route::put('profile/update', 'SellerController@update')->name('seller.update');
    Route::put('profile/update/password', 'SellerController@updatePassword')->name('seller.update_password');

    //Route HouseController
    Route::get('house', 'HouseController@index')->name('seller.house');
    Route::get('house/create', 'HouseController@create')->name('seller.house.create');
    Route::post('house/create/store', 'HouseController@store')->name('seller.house.store');
    Route::get('house/edit/{house}', 'HouseController@edit')->name('seller.house.edit');
    Route::put('house/edit/update/{id}', 'HouseController@update')->name('seller.house.update');
    Route::delete('house/destroy/{house}', 'HouseController@destroy')->name('seller.house.destroy');
    Route::get('house/destroy/{image}', 'HouseController@destroyImage')->name('seller.house.destroy.image');

});

