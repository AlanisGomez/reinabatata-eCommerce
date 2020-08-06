<?php

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {
    Route::namespace('Webphorium\ReinaBatata\Http\Controllers\Shop')->group(function () {
        Route::get('/product-details/{slug}', 'ShopController@fetchProductDetails')
            ->name('reinabatata.shop.product');

        Route::get('/categorysearch', 'ShopController@search')
            ->name('reinabatata.search.index')
            ->defaults('_config', [
                'view' => 'shop::search.search'
            ]);

        Route::get('/categories', 'ShopController@fetchCategories')
        ->name('reinabatata.categoriest');

        Route::get('/category-details', 'ShopController@categoryDetails')
            ->name('reinabatata.category.details');

        Route::get('/fancy-category-details/{slug}', 'ShopController@fetchFancyCategoryDetails')->name('reinabatata.fancy.category.details');

        Route::get('/mini-cart', 'CartController@getMiniCartDetails')
            ->name('reinabatata.cart.get.details');

        Route::post('/cart/add', 'CartController@addProductToCart')
            ->name('reinabatata.cart.add.product');

        Route::delete('/cart/remove/{id}', 'CartController@removeProductFromCart')
            ->name('reinabatata.cart.remove.product');

        Route::get('/comparison', 'ComparisonController@getComparisonList')
            ->name('reinabatata.product.compare')
            ->defaults('_config', [
                'view' => 'shop::guest.compare.index'
            ]);

        Route::group(['middleware' => ['customer']], function () {
            Route::get('/customer/account/comparison', 'ComparisonController@getComparisonList')
                ->name('reinabatata.customer.product.compare')
                ->defaults('_config', [
                    'view' => 'shop::customers.account.compare.index'
                ]);
        });

        Route::put('/comparison', 'ComparisonController@addCompareProduct')
            ->name('customer.product.add.compare');

        Route::delete('/comparison', 'ComparisonController@deleteComparisonProduct')
            ->name('customer.product.delete.compare');

        Route::get('/guest-wishlist', 'ShopController@getWishlistList')
            ->name('reinabatata.product.guest-wishlist')
            ->defaults('_config', [
                'view' => 'shop::guest.wishlist.index'
            ]);

        Route::get('/items-count', 'ShopController@getItemsCount')
            ->name('reinabatata.product.item-count');

        Route::get('/detailed-products', 'ShopController@getDetailedProducts')
            ->name('reinabatata.product.details');

        Route::get('/category-products/{categoryId}', 'ShopController@getCategoryProducts')
            ->name('reinabatata.category.products');
    });
});