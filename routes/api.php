<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/posts/{id}/comments',[\App\Http\Controllers\CommentController::class,'index']);
Route::post('/comment',[\App\Http\Controllers\CommentController::class,'store']);