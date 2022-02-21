<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\Sales\EstimateController;
use App\Http\Controllers\Backend\Sales\InvoicesController;
use App\Http\Controllers\Backend\Sales\CustomersController;
use App\Http\Controllers\Backend\Purchases\VendorsController;
use App\Http\Controllers\Backend\Users\UsersController;
use App\Http\Controllers\Backend\Users\ProfilesController;
use App\Http\Controllers\Backend\Settings\SettingsController;


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

Route::group(
    ['middleware' => 'prevent-back-history'],
    function () {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
            return view('admin.index');
        })->name('dashboard');

        Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

        //Sales Management
        //Estimate Management
        Route::prefix('sales/estimates')->group(function () {
            Route::get('/view', [EstimateController::class, 'index'])->name('estimate.view');
        });

        Route::prefix('sales/invoices')->group(function () {
            Route::get('/view', [InvoicesController::class, 'index'])->name('invoice.view');
        });

        Route::prefix('sales/customers')->group(function () {
            Route::get('/view', [CustomersController::class, 'index'])->name('customer.view');
        });

        Route::prefix('purchases/vendors')->group(function () {
            Route::get('/view', [VendorsController::class, 'index'])->name('vendor.view');
        });

        Route::prefix('staff/user')->group(function () {
            Route::get('/view', [UsersController::class, 'index'])->name('user.view');
            Route::get('/create', [UsersController::class, 'create'])->name('user.create');
            Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('user.edit');
            Route::get('/destroy/{id}', [UsersController::class, 'destroy'])->name('user.destroy');
            Route::post('/store', [UsersController::class, 'store'])->name('user.store');
            Route::post('/update/{id}', [UsersController::class, 'update'])->name('user.update');
        });

        Route::prefix('staff/profile')->group(function () {
            Route::get('/view', [ProfilesController::class, 'index'])->name('profile.view');
            Route::get('/edit', [ProfilesController::class, 'ProfileEdit'])->name('profile.edit');
            Route::post('/store', [ProfilesController::class, 'ProfileStore'])->name('profile.store');
            Route::get('/password/update', [ProfilesController::class, 'PasswordUpdate'])->name('password.update');
        });

        Route::prefix('setting/companysettings')->group(function () {
            Route::get('/view', [SettingsController::class, 'index'])->name('settings.view');
            Route::get('/create', [SettingsController::class, 'create'])->name('settings.create');
            Route::get('/edit/{id}', [SettingsController::class, 'edit'])->name('settings.edit');
            Route::get('/destroy/{id}', [SettingsController::class, 'destroy'])->name('settings.destroy');
            Route::post('/store', [SettingsController::class, 'store'])->name('settings.store');
            Route::post('/update/{id}', [SettingsController::class, 'update'])->name('settings.update');
        });
    }
);
