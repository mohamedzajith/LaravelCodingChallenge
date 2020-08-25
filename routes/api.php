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

Route::prefix('author')
    ->group(function () {
        Route::post('/', 'Api\AuthorController@store');
    });

Route::prefix('article')
    ->group(function () {
        Route::post('/', 'Api\ArticleController@store');
        Route::get('/', 'Api\ArticleController@index');
        Route::get('/{id}', 'Api\ArticleController@show');
        Route::put('/{id}', 'Api\ArticleController@update');
        Route::delete('/{id}', 'Api\ArticleController@delete');
    });
