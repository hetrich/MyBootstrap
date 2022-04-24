<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoppingCarController;

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
Route::get('/', [ShoppingCarController::class,'index']);


//購物車第一頁
Route::get('/checkedout1', [ShoppingCarController::class,'checkedout1']);
//購物車第二頁
Route::get('/checkedout2', [ShoppingCarController::class,'checkedout2']);
//購物車第三頁
Route::get('/checkedout3', [ShoppingCarController::class,'checkedout3']);
//購物車第四頁
Route::get('/checkedout4', [ShoppingCarController::class,'checkedout4']);


//購物車留言板

Route::get('comment', [ShoppingCarController::class,'comment']);
Route::get('comment/save', [ShoppingCarController::class,'save_comment']);
Route::get('comment/edit/{id}', [ShoppingCarController::class,'edit_comment']);
Route::get('comment/delete/{target}', [ShoppingCarController::class,'delete_comment']);
// Route::get('comment', [ShoppingCarController::class,'comment']);


//購物車登入頁
