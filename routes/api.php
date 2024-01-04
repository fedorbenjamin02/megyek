<?php

use App\Http\Controllers\Api\MegyekController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();


Route::get('megyekk', [MegyekController::class, 'index'])->name('apiMegyek');
Route::get('megyekk/search', [MegyekController::class, 'search'])->name('apiSearchMegyekk');
Route::post('megyek', [MegyekController::class, 'save'])->name('apiSaveMegyek');
Route::delete('megyek/{id}', [MegyekController::class, 'delete'])->name('apiDeleteMegyek');


