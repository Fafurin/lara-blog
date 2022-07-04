<?php

use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Admin\Main\IndexController as AdminIndexController;
use App\Http\Controllers\Admin\Category\IndexController as AdminCategoryIndexController;
use App\Http\Controllers\Admin\Category\CreateController as AdminCategoryCreateController;
use App\Http\Controllers\Admin\Category\StoreController as AdminCategoryStoreController;
use App\Http\Controllers\Admin\Category\ShowController as AdminCategoryShowController;
use App\Http\Controllers\Admin\Category\EditController as AdminCategoryEditController;
use App\Http\Controllers\Admin\Category\UpdateController as AdminCategoryUpdateController;
use App\Http\Controllers\Admin\Category\DeleteController as AdminCategoryDeleteController;

use App\Http\Controllers\Admin\Tag\IndexController as AdminTagIndexController;
use App\Http\Controllers\Admin\Tag\CreateController as AdminTagCreateController;
use App\Http\Controllers\Admin\Tag\StoreController as AdminTagStoreController;
use App\Http\Controllers\Admin\Tag\ShowController as AdminTagShowController;
use App\Http\Controllers\Admin\Tag\EditController as AdminTagEditController;
use App\Http\Controllers\Admin\Tag\UpdateController as AdminTagUpdateController;
use App\Http\Controllers\Admin\Tag\DeleteController as AdminTagDeleteController;

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Main'], function () {
    Route::get('/', [IndexController::class, 'index']);
});

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', [AdminIndexController::class, 'index']);
    });
    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', [AdminCategoryIndexController::class, 'index'])->name('admin.category.index');
        Route::get('/create', [AdminCategoryCreateController::class, 'index'])->name('admin.category.create');
        Route::post('/', [AdminCategoryStoreController::class, 'index'])->name('admin.category.store');
        Route::get('/{category}', [AdminCategoryShowController::class, 'index'])->name('admin.category.show');
        Route::get('/{category}/edit', [AdminCategoryEditController::class, 'index'])->name('admin.category.edit');
        Route::patch('/{category}', [AdminCategoryUpdateController::class, 'index'])->name('admin.category.update');
        Route::delete('/{category}', [AdminCategoryDeleteController::class, 'index'])->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', [AdminTagIndexController::class, 'index'])->name('admin.tag.index');
        Route::get('/create', [AdminTagCreateController::class, 'index'])->name('admin.tag.create');
        Route::post('/', [AdminTagStoreController::class, 'index'])->name('admin.tag.store');
        Route::get('/{tag}', [AdminTagShowController::class, 'index'])->name('admin.tag.show');
        Route::get('/{tag}/edit', [AdminTagEditController::class, 'index'])->name('admin.tag.edit');
        Route::patch('/{tag}', [AdminTagUpdateController::class, 'index'])->name('admin.tag.update');
        Route::delete('/{tag}', [AdminTagDeleteController::class, 'index'])->name('admin.tag.delete');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
