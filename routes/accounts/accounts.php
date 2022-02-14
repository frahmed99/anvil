<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Accounts\Settings\TaxesController;
use App\Http\Controllers\backend\Accounts\Settings\ProductCategoryController;
use App\Http\Controllers\backend\Accounts\Settings\ProductServiceUnitController;


Route::prefix('accounts/settings/taxes')->group(function(){
    Route::get('/view', [TaxesController::class, 'index'])->name('tax.view');
    Route::get('/destroy/{id}', [TaxesController::class, 'destroy'])->name('tax.destroy');
    Route::post('/store', [TaxesController::class, 'store'])->name('tax.store');
    Route::post('/update', [TaxesController::class, 'update'])->name('tax.update');
});

Route::prefix('accounts/settings/product_service_category')->group(function(){
    Route::get('/view', [ProductCategoryController::class, 'index'])->name('product_service_category.view');
    Route::get('/destroy/{id}', [ProductCategoryController::class, 'destroy'])->name('product_service_category.destroy');
    Route::post('/store', [ProductCategoryController::class, 'store'])->name('product_service_category.store');
    Route::post('/update', [ProductCategoryController::class, 'update'])->name('product_service_category.update');
});

Route::prefix('accounts/settings/product_service_unit')->group(function(){
    Route::get('/view', [ProductServiceUnitController::class, 'index'])->name('product_service_unit.view');
    Route::get('/destroy/{id}', [ProductServiceUnitController::class, 'destroy'])->name('product_service_unit.destroy');
    Route::post('/store', [ProductServiceUnitController::class, 'store'])->name('product_service_unit.store');
    Route::post('/update', [ProductServiceUnitController::class, 'update'])->name('product_service_unit.update');
});

