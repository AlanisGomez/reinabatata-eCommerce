<?php

Route::group(['middleware' => ['web']], function () {
    Route::prefix('mercadopago')->group(function () {

        Route::get('/generateUser', 'Webkul\Mercadopago\Http\Controllers\MPController@generateUser');

        Route::get('/redirect', 'Webkul\Mercadopago\Http\Controllers\MPController@createPayment')->name('mercadopago.redirect');
        Route::get('/success', 'Webkul\Mercadopago\Http\Controllers\MPController@success')->name('mercadopago.success');
        Route::get('/failure', 'Webkul\Mercadopago\Http\Controllers\MPController@failure')->name('mercadopago.failure');
        Route::get('/pending', 'Webkul\Mercadopago\Http\Controllers\MPController@pending')->name('mercadopago.pending');
        Route::post('/ipn', 'Webkul\Mercadopago\Http\Controllers\MPController@ipn')->name('mercadopago.ipn');

        Route::get('/orderMP/{id}', 'Webkul\Mercadopago\Http\Controllers\MPController@cancelOrder');

    });
});