<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\ContactController;

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
Route::resource('people', PersonController::class);

Route::prefix('people/{person}/contacts')->group(function () {
    Route::post('/', [ContactController::class, 'store']);
    Route::put('{contact}', [ContactController::class, 'update']);
    Route::delete('{contact}', [ContactController::class, 'destroy']);
});