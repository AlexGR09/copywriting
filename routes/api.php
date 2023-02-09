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
global $catalog;

$this->catalogs = 'App\\Http\\Controllers\\API\\V1\\Catalogs\\';

/* Route::middleware('auth:jwt')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::controller($this->catalogs.OrganController::class)->group(function () {
    Route::post('/organs','store');
    Route::get('/organs', 'show');
});