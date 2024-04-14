<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MedicinesController;
use App\Http\Controllers\PurchasesController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\WebsiteLogoController;

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login');
    Route::get('/forgot', 'forgot');
    Route::post('/login_post', 'login_post');
    Route::get('logout', 'logout');
    Route::post('forgot_post', 'forgot_post');
    Route::get('reset/{token}', 'getReset');
    Route::post('reset/{token}', 'postReset');
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/my_account', [DashboardController::class, 'my_account']);
    Route::post('/my_account', [DashboardController::class, 'my_account_update']);
    Route::get('/website_logo', [WebsiteLogoController::class, 'website_logo']);
    Route::post('/website_logo_update', [WebsiteLogoController::class, 'website_logo_update']);
    Route::controller(CustomersController::class)->group(function () {
        Route::group(['prefix' => 'customers'], function () {
            Route::get('/', 'customers');
            Route::get('/add', 'add_customers');
            Route::post('/add', 'insert_add_customers');
            Route::get('/edit/{id}', 'edit_customers');
            Route::post('/edit/{id}', 'update_customers');
            Route::get('/delete/{id}', 'delete_customers');
        });
    });
    Route::controller(MedicinesController::class)->group(function () {
        Route::group(['prefix' => 'medicines'], function () {
            Route::get('/', 'medicines');
            Route::get('/add', 'add_medicines');
            Route::post('/add', 'store_medicines');
            Route::get('/edit/{id}', 'edit_medicines');
            Route::post('/edit/{id}', 'add_update');
            Route::get('/delete/{id}', 'medicines_delete');
        });

        Route::group(['prefix' => 'medicines_stock'], function () {
            Route::get('/', 'medicines_stock_list');
            Route::get('/add', 'medicines_stock_add');
            Route::post('/add', 'medicines_stock_store');
            Route::get('/delete/{id}', 'medicines_stock_delete');
            Route::get('/edit/{id}', 'medicines_stock_edit');
            Route::post('/edit/{id}', 'medicines_stock_update');
        });
    });

    Route::controller(SuppliersController::class)->group(function () {
        Route::group(['prefix' => 'suppliers'], function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'delete');
        });
    });

    Route::controller(InvoicesController::class)->group(function () {
        Route::group(['prefix' => 'invoices'], function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/delete/{id}', 'delete');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
        });
    });

    Route::controller(PurchasesController::class)->group(function () {
        Route::group(['prefix' => 'purchases'], function () {
            Route::get('/', 'index');
            Route::get('/add', 'create');
            Route::post('/add', 'store');
            Route::get('/edit/{id}', 'edit');
            Route::post('/edit/{id}', 'update');
            Route::get('/delete/{id}', 'delete');
        });
    });
});
