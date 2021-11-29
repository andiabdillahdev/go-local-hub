<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\auth\master_dataController;
use App\Http\Controllers\api\auth\loginController;
use App\Http\Controllers\api\masterdataController;
use App\Http\Controllers\api\mitraController;
use App\Http\Controllers\api\wisataController;
use App\Http\Controllers\api\sub_kategoriController;
use App\Http\Controllers\api\transportasiController;
use App\Http\Controllers\api\kategori_transportasiController;
use App\Http\Resources\master_data;
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

Route::post('login',[loginController::class,'login']);
Route::apiResource('master-data',masterdataController::class)->middleware('auth:api');
Route::apiResource('mitra-data',mitraController::class)->middleware('auth:api');
Route::apiResource('wisata-data',wisataController::class)->middleware('auth:api');
Route::apiResource('subkategori-data',sub_kategoriController::class)->middleware('auth:api');
Route::apiResource('transportasi',transportasiController::class)->middleware('auth:api');
Route::apiResource('kategori-transportasi',kategori_transportasiController::class)->middleware('auth:api');


// Route::prefix('master-data')->group(function () {
//     Route::get('/add-data', [master_dataController::class,'add']);
//     Route::get('/fetch-data', [master_dataController::class,'get']);
//     Route::get('/update-data/{id}', [master_dataController::class,'update']);
//     Route::delete('/delete-data/{id}', [master_dataController::class,'delete']);
// });