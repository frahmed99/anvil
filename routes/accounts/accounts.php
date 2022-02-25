<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Accounts\Settings\TaxesController;
use App\Http\Controllers\backend\Accounts\Settings\ProductCategoryController;
use App\Http\Controllers\backend\Accounts\Settings\ProductServiceUnitController;
use App\Http\Controllers\backend\Sales\CustomersController;
use App\Http\Controllers\backend\Purchases\VendorsController;
use App\Http\Controllers\backend\Sales\ProposalController;

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

Route::prefix('accounts/customer')->group(function () {
    Route::get('/view', [CustomersController::class, 'index'])->name('customer.view');
    Route::get('/create', [CustomersController::class, 'create'])->name('customer.create');
    Route::get('/edit/{id}', [CustomersController::class, 'edit'])->name('customer.edit');
    Route::get('/destroy/{id}', [CustomersController::class, 'destroy'])->name('customer.destroy');
    Route::post('/store', [CustomersController::class, 'store'])->name('customer.store');
    Route::post('/update/{id}', [CustomersController::class, 'update'])->name('customer.update');
});

Route::prefix('accounts/vendor')->group(function () {
    Route::get('/view', [VendorsController::class, 'index'])->name('vendor.view');
    Route::get('/create', [VendorsController::class, 'create'])->name('vendor.create');
    Route::get('/edit/{id}', [VendorsController::class, 'edit'])->name('vendor.edit');
    Route::get('/destroy/{id}', [VendorsController::class, 'destroy'])->name('vendor.destroy');
    Route::post('/store', [VendorsController::class, 'store'])->name('vendor.store');
    Route::post('/update/{id}', [VendorsController::class, 'update'])->name('vendor.update');
});

Route::prefix('accounts/quotations')->group(function () {
    Route::get('/view', [ProposalController::class, 'index'])->name('proposal.view');
    Route::get('/create', [ProposalController::class, 'create'])->name('proposal.create');
    Route::get('/edit/{id}', [ProposalController::class, 'edit'])->name('proposal.edit');
    Route::get('/destroy/{id}', [ProposalController::class, 'destroy'])->name('proposal.destroy');
    Route::post('/store', [ProposalController::class, 'store'])->name('proposal.store');
    Route::post('/update/{id}', [ProposalController::class, 'update'])->name('proposal.update');
});
