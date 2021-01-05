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
    Route::get('dashboard', 'AdminController@index')->name('admin.dashboard');
});

Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth', 'user']], function () {
    Route::get('dashboard', 'UserController@index')->name('user.dashboard');
});

Route::group(['prefix' => 'seller', 'namespace' => 'Seller', 'middleware' => ['auth', 'seller']], function () {
    Route::get('dashboard', 'SellerController@index')->name('seller.dashboard');
});

