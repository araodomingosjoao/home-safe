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
Route::group([],function () {
    Route::get('/', function () {
        return view('site.home');
    })->name("site.home");

    Route::get('/vendas', function () {
        return view('site.buy');
    })->name("site.vendas");

    Route::get('/contactos', function () {
        return view('site.contact');
    })->name("site.contactos");

    Route::get('/detalhes-casa', function () {
        return view('site.property-details');
    })->name("site.detalhesCasa");

    Route::get('/alugadas', function () {
        return view('site.rent');
    })->name("site.alugadas");

    Route::get('/lista-casa', function () {
        return view('site.view-list');
    })->name("site.listaCasa");

    Route::get('/sobre', function () {
        return view('site.about');
    })->name("site.sobre");
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
    Route::put('dashboard/profile/update', 'SellerController@update')->name('seller.update');
    Route::put('dashboard/profile/update/password', 'SellerController@updatePassword')->name('seller.update_password');

    //Route HouseController
    Route::get('dashboard/house', 'HouseController@index')->name('seller.house');
    Route::get('dashboard/house/create', 'HouseController@create')->name('seller.house.create');
    Route::post('dashboard/house/create/store', 'HouseController@store')->name('seller.house.store');
    Route::get('dashboard/house/edit/{house}', 'HouseController@edit')->name('seller.house.edit');
    Route::put('dashboard/house/edit/update/{id}', 'HouseController@update')->name('seller.house.update');
    Route::post('dashboard/house/destroy{house}', 'HouseController@destroy')->name('seller.house.destroy');
    Route::get('dashboard/house/destroy/{image}', 'HouseController@destroyImage')->name('seller.house.destroy.image');

});

