<?php

use App\Http\Controllers\ArticleController;
use App\Models\Article;
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
});


//Route::get('article_index', [ArticleController::class, 'index'])->name('article_index');

Route::resource('articles','App\Http\Controllers\ArticleController');
Route::resource('brands', 'App\Http\Controllers\BrandController');
Route::resource('headings', 'App\Http\Controllers\HeadingController');
