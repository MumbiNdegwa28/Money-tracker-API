<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\WalletController;
use App\Http\Controllers\Api\TransactionController;

Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/wallets', [WalletController::class, 'store']);
Route::get('/wallets/{wallet}', [WalletController::class, 'show']);
Route::post('/transactions', [TransactionController::class, 'store']);