<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
// Route::get('add/product','ProductController@addProducts');
});

Route::get('CommentsByUser/{id?}','ProductController@showCommentsByUsers')
->where(['id'=>'[0-9]+']);
Route::get('CommentsByProduct/{id?}','ProductController@showCommentsByProducts')
->where(['id'=>'[0-9]+']);

//Ejemplo para Middleware
Route::get('access/{user?}','ProductController@login');
