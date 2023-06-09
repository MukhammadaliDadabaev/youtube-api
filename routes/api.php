<?php

//---> alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
//--->  sail up -d

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChannelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index'] );
Route::get('/users/{user}', [UserController::class, 'show'] );

Route::get('/categories', [CategoryController::class, 'index'] );
Route::get('/categories/{category}', [CategoryController::class, 'show'] );

Route::get('/channels/', [ChannelController::class, 'index'] );
Route::get('/channels/{channel}', [ChannelController::class, 'show'] );

Route::get('/videos/', [VideoController::class, 'index'] );
Route::get('/videos/{video}', [VideoController::class, 'show'] );
