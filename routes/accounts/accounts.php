<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\Accounts\Settings\TaxesController;
use App\Http\Controllers\backend\Accounts\Settings\ProductCategoryController;
use App\Http\Controllers\backend\Accounts\Settings\ProductServiceUnitController;
use App\Http\Controllers\backend\Sales\CustomersController;
use App\Http\Controllers\backend\Purchases\VendorsController;
use App\Http\Controllers\backend\Sales\ProposalController;
use App\Http\Controllers\backend\Banking\BankAccountsController;

Route::group(
    ['middleware' => 'prevent-back-history'],
    function () {
        Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
            return view('admin.index');
        })->name('dashboard');

        Route::prefix('accounts/settings/taxes')->group(function () {
            Route::get('/view', [TaxesController::class, 'index'])->name('tax.view');
            Route::get('/destroy/{id}', [TaxesController::class, 'destroy'])->name('tax.destroy');
            Route::post('/store', [TaxesController::class, 'store'])->name('tax.store');
            Route::post('/taxes/update/', [TaxesController::class, 'updateTaxes'])->name('taxes.update');
            Route::post('/fetch', [TaxesController::class, 'fetchTaxes'])->name('taxes.fetch');
        });

        Route::prefix('accounts/settings/product_service_category')->group(function () {
            Route::get('/view', [ProductCategoryController::class, 'index'])->name('product_service_category.view');
            Route::get('/destroy/{id}', [ProductCategoryController::class, 'destroy'])->name('product_service_category.destroy');
            Route::post('/store', [ProductCategoryController::class, 'store'])->name('product_service_category.store');
            Route::post('/categories/update/', [ProductCategoryController::class, 'update'])->name('product_service_category.update');
            Route::post('/fetch', [ProductCategoryController::class, 'fetch'])->name('product_service_category.fetch');
        });

        Route::prefix('accounts/settings/product_service_unit')->group(function () {
            Route::get('/view', [ProductServiceUnitController::class, 'index'])->name('product_service_unit.view');
            Route::get('/destroy/{id}', [ProductServiceUnitController::class, 'destroy'])->name('product_service_unit.destroy');
            Route::post('/store', [ProductServiceUnitController::class, 'store'])->name('product_service_unit.store');
            Route::post('/units/update', [ProductServiceUnitController::class, 'update'])->name('product_service_unit.update');
            Route::post('/fetch', [ProductServiceUnitController::class, 'fetch'])->name('product_service_unit.fetch');
        });

        Route::prefix('accounts/customer')->group(function () {
            Route::get('/view', [CustomersController::class, 'index'])->name('customer.view');
            Route::get('/create', [CustomersController::class, 'create'])->name('customer.create');
            Route::get('/edit/{id}', [CustomersController::class, 'edit'])->name('customer.edit');
            Route::get('/destroy/{id}', [CustomersController::class, 'destroy'])->name('customer.destroy');
            Route::post('/store', [CustomersController::class, 'store'])->name('customer.store');
            Route::post('/update/{id}', [CustomersController::class, 'update'])->name('customer.update');
            Route::get('/show/{id}', [CustomersController::class, 'show'])->name('customer.show');
        });

        Route::prefix('accounts/vendor')->group(function () {
            Route::get('/view', [VendorsController::class, 'index'])->name('vendor.view');
            Route::get('/create', [VendorsController::class, 'create'])->name('vendor.create');
            Route::get('/edit/{id}', [VendorsController::class, 'edit'])->name('vendor.edit');
            Route::get('/destroy/{id}', [VendorsController::class, 'destroy'])->name('vendor.destroy');
            Route::post('/store', [VendorsController::class, 'store'])->name('vendor.store');
            Route::post('/update/{id}', [VendorsController::class, 'update'])->name('vendor.update');
            Route::get('/show/{id}', [VendorsController::class, 'show'])->name('vendor.show');
        });

        Route::prefix('accounts/quotations')->group(function () {
            Route::get('/view', [ProposalController::class, 'index'])->name('proposal.view');
            Route::get('/create', [ProposalController::class, 'create'])->name('proposal.create');
            Route::get('/edit/{id}', [ProposalController::class, 'edit'])->name('proposal.edit');
            Route::get('/destroy/{id}', [ProposalController::class, 'destroy'])->name('proposal.destroy');
            Route::post('/store', [ProposalController::class, 'store'])->name('proposal.store');
            Route::post('/update/{id}', [ProposalController::class, 'update'])->name('proposal.update');
        });

        Route::prefix('accounts/bankaccounts')->group(function () {
            Route::get('/view', [BankAccountsController::class, 'index'])->name('bankaccount.view');
            Route::get('/create', [BankAccountsController::class, 'create'])->name('bankaccount.create');
            Route::get('/edit/{id}', [BankAccountsController::class, 'edit'])->name('bankaccount.edit');
            Route::get('/destroy/{id}', [BankAccountsController::class, 'destroy'])->name('bankaccount.destroy');
            Route::post('/store', [BankAccountsController::class, 'store'])->name('bankaccount.store');
            Route::post('/update/{id}', [BankAccountsController::class, 'update'])->name('bankaccount.update');
        });
    }
);
