<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingCarController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomepageController;

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

//購物網站首頁
Route::get('/', [ShoppingCarController::class, 'index']);

//購物車第一頁
Route::get('/checkedout1', [ShoppingCarController::class, 'checkedout1']);

//購物車第二頁
Route::get('/checkedout2', [ShoppingCarController::class, 'checkedout2']);

//購物車第三頁
Route::get('/checkedout3', [ShoppingCarController::class, 'checkedout3']);

//購物車第四頁
Route::get('/checkedout4', [ShoppingCarController::class, 'checkedout4']);

//購物車留言板

Route::get('comment', [ShoppingCarController::class, 'comment']);
Route::get('comment/save', [ShoppingCarController::class, 'save_comment']);

Route::get('comment/edit/{target}', [
    ShoppingCarController::class,
    'edit_comment',
]);
Route::get('comment/update/{target}', [
    ShoppingCarController::class,
    'update_comment',
]);

Route::get('comment/delete/{target}', [
    ShoppingCarController::class,
    'delete_comment',
]);

//購物車登入頁

//BANNER頁面
//群組化

Route::prefix('/banner')->group(function () {
    Route::get('/', [BannerController::class, 'index']);
    Route::get('/create', [BannerController::class, 'create']);
    Route::post('/store', [BannerController::class, 'store']);
    Route::get('/edit/{id}', [BannerController::class, 'edit']);
    Route::post('/update/{id}', [BannerController::class, 'update']);
    Route::post('/delete/{id}', [BannerController::class, 'destroy']);
});

//商品頁面
//群組化

Route::prefix('/product')->group(function () {
    Route::get('/', [ProductController::class, 'index']);
    Route::get('/create', [ProductController::class, 'create']);
    Route::post('/store', [ProductController::class, 'store']);
    Route::get('/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/update/{id}', [ProductController::class, 'update']);
    Route::post('/delete/{id}', [ProductController::class, 'destroy']);
    Route::delete('/delete_img/{img_id}', [ProductController::class, 'delete_img']);
});

// 商品回傳首頁

Route::get('/', [HomepageController::class, 'eightcard']);
