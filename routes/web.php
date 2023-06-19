<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [GameController::class, 'index']);

Route::get('/gamedetails/{id}', [GameController::class, 'detailPage']);

Route::post('/search', [GameController::class, 'searchGame']);

Route::post('/addGame/{id}', [CartController::class, 'addGameToCart']);

Route::group(['middleware' => 'isGuest'], function () {
    Route::get('/registerPage', [AuthController::class, 'registerPage']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/loginPage', [AuthController::class, 'loginPage']);
    Route::post('/login', [AuthController::class, 'login']);
});


Route::group(['middleware' => 'loginCheck'], function(){
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/profilePage', [UserController::class, 'profilePage']);
    Route::post('/updateProfile/{id}', [UserController::class, 'updateProfile']);
    Route::post('/updateAccount/{id}', [UserController::class, 'updateAccount']);
    Route::post('/updateQty/{id}', [CartController::class, 'updateQty']);
    Route::get('/cartPage', [CartController::class, 'cartPage']);
    Route::get('/deleteCart/{id}', [CartController::class, 'deleteCart']);
    Route::get('/checkOut', [CartController::class, 'checkOut']);
    Route::get('/transactionHistoryPage', [TransactionController::class, 'transactionHistoryPage']);
    Route::get('/transactionDetailPage/{id}', [TransactionController::class, 'transactionDetailPage']);
});

Route::group(['middleware' => 'isAdmin'], function(){
    Route::get('/manageGamePage', [GameController::class, 'manageGamePage']);
    Route::post('/insertGame', [GameController::class, 'insertGame']);
    Route::get('/insertGamePage', [GameController::class, 'insertGamePage']);
    Route::get('/updateGamePage/{id}', [GameController::class, 'updateGamePage']);
    Route::post('/updateGame/{id}', [GameController::class, 'updateGame']);
    Route::get('/deleteGame/{id}', [GameController::class, 'deleteGame']);
    Route::get('/manageGameGenrePage', [GenreController::class, 'manageGameGenrePage']);
    Route::get('/updateGameGenrePage/{id}', [GenreController::class, 'updateGameGenrePage']);
    Route::post('/updateGameGenre/{id}', [GenreController::class, 'updateGameGenre']);
});





