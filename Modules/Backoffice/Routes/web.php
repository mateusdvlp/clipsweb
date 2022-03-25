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

Route::prefix('backoffice')->group(function() {

    /*dashboard*/
    Route::get('/', 'DashboardController@index')->name('backoffice.dashboard-index');

    /*category*/
    Route::get('categories', 'CategoryController@index')->name('backoffice.category-index');
    Route::get('category/create', 'CategoryController@create')->name('backoffice.category-create');
    Route::post('category/store', 'CategoryController@store')->name('backoffice.category-store');

    /*subcategory*/
    Route::get('subcategories', 'SubcategoryController@index')->name('backoffice.subcategory-index');

});
