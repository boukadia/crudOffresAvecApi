<?php

use App\Http\Controllers\OffreController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get("/index",[OffreController::class,"index"]);
Route::post("/create",[OffreController::class,"store"]);
Route::get("/{offre}/edit",[OffreController::class,"edit"]);
// Route::put("/{id}/update",[OffreController::class,"update"]);
Route::put("/{offre}/update",[OffreController::class,"update"]);
Route::delete("/delete",[OffreController::class,"destroy"]);
