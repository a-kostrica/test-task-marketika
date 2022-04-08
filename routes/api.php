<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookConroller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/v1/books/list', [BookConroller::class, 'index']);
Route::get('/v1/books/by-id/{id}', [BookConroller::class, 'show']);
Route::post('/v1/books/create', [BookConroller::class, 'store']);
Route::put('/v1/books/update/{id}', [BookConroller::class, 'update']);
Route::delete('/v1/books/{id}', [BookConroller::class, 'destroy']);
// Route::apiResources(['books' => BookConroller::class]);
