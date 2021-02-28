<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidateApi\AuthController;
use App\Http\Controllers\CandidateApi\WorkController;

/*
|--------------------------------------------------------------------------
| Candidate API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['auth:api-candidate'])->group(function () {
    Route::get('/', [AuthController::class, 'getCandidateInfo']);

    Route::apiResource('works', WorkController::class);

});
