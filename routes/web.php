<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\AddonController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\Сlient\PriceController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function() {
    Route::get('/', [MainController::class, 'index'])->name('admin.main');
    Route::group(['prefix' => 'services'], function() {
        Route::get('/', [ServiceController::class, 'index'])->name('admin.service.index');
        Route::get('/create', [ServiceController::class, 'create'])->name('admin.service.create');
        Route::post('/', [ServiceController::class, 'store'])->name('admin.service.store');
        Route::get('{service}/edit/', [ServiceController::class, 'edit'])->name('admin.service.edit');
        Route::patch('/{service}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::get('/show/{service}', [ServiceController::class, 'show'])->name('admin.service.show');
        Route::delete('/{service}', [ServiceController::class, 'destroy'])->name('admin.service.destroy');
    });
    Route::group(['prefix' => 'categories'], function() {
        Route::get('/', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('{category}/edit', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::patch('/{category}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/show/{category}', [CategoryController::class, 'show'])->name('admin.category.show');
        Route::delete('/{category}', [CategoryController::class, 'delete'])->name('admin.category.delete');
    });
    Route::group(['prefix' => 'addons'], function() {
        Route::get('/', [AddonController::class, 'index'])->name('admin.addon.index');
        Route::get('/create', [AddonController::class, 'create'])->name('admin.addon.create');
        Route::post('/', [AddonController::class, 'store'])->name('admin.addon.store');
        Route::get('/{addon}/edit', [AddonController::class, 'edit'])->name('admin.addon.edit');
        Route::patch('/{addon}', [AddonController::class, 'update'])->name('admin.addon.update');
        Route::get('/show/{addon}', [AddonController::class, 'show'])->name('admin.addon.show');
        Route::delete('/{addon}', [AddonController::class, 'delete'])->name('admin.addon.delete');
    });
    Route::group(['prefix' => 'orders'], function() {
        Route::get('/', [OrderController::class, 'index'])->name('admin.order.index');
        Route::get('/create', [OrderController::class, 'create'])->name('admin.order.create');
        Route::post('/', [OrderController::class, 'store'])->name('admin.order.store');
        Route::get('/{order}/edit', [OrderController::class, 'edit'])->name('admin.order.edit');
        Route::patch('/{order}', [OrderController::class, 'update'])->name('admin.order.update');
        Route::get('/show/{order}', [OrderController::class, 'show'])->name('admin.order.show');
        Route::delete('/{order}', [OrderController::class, 'delete'])->name('admin.order.delete');
        Route::patch('/confirm/{order}', [OrderController::class, 'confirmOrder'])->name('admin.order.confirmOrder');
    });
});

Route::group(['middleware' => 'web', 'prefix' => '/', 'namespace' => 'client'], function() {
    Route::view('/', 'client.index')->name('homepage');
    Route::get('/price', [PriceController::class, 'index'])->name('pricelist');
});
