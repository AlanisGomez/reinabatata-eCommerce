<?php

Route::group(['middleware' => ['web']], function () {
    Route::prefix('admin/ReinaBatata')->group(function () {
        Route::group(['middleware' => ['admin']], function () {
            Route::namespace('Webphorium\ReinaBatata\Http\Controllers\Admin')->group(function () {
                // Content Pages Route
                Route::get('/content', 'ContentController@index')->defaults('_config', [
                    'view' => 'reinabatata::admin.content.index'
                ])->name('reinabatata.admin.content.index');

                Route::get('/content/search', 'ContentController@search')->name('reinabatata.admin.content.search');

                Route::get('/content/create', 'ContentController@create')->defaults('_config',[
                    'view' => 'reinabatata::admin.content.create'
                ])->name('reinabatata.admin.content.create');

                Route::post('/content/create', 'ContentController@store')->defaults('_config',[
                    'redirect' => 'reinabatata.admin.content.index'
                ])->name('reinabatata.admin.content.store');

                Route::get('/content/edit/{id}', 'ContentController@edit')->defaults('_config',[
                    'view' => 'reinabatata::admin.content.edit'
                ])->name('reinabatata.admin.content.edit');

                Route::put('/content/edit/{id}', 'ContentController@update')->defaults('_config', [
                    'redirect' => 'reinabatata.admin.content.index'
                ])->name('reinabatata.admin.content.update');

                Route::post('/content/delete/{id}', 'ContentController@destroy')->name('reinabatata.admin.content.delete');

                Route::post('/content/masssdelete', 'ContentController@massDestroy')->defaults('_config', [
                    'redirect' => 'reinabatata.admin.content.index'
                ])->name('reinabatata.admin.content.mass-delete');

                Route::get('/meta-data', 'ConfigurationController@renderMetaData')->defaults('_config', [
                    'view' => 'reinabatata::admin.meta-info.meta-data'
                ])->name('reinabatata.admin.meta-data');

                Route::post('/meta-data/{id}', 'ConfigurationController@storeMetaData')->defaults('_config', [
                    'redirect' => 'reinabatata.admin.meta-data'
                ])->name('reinabatata.admin.store.meta-data');
            });
        });
    });
});