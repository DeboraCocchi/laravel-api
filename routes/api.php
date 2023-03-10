<?php

use App\Http\Controllers\Api\LeadController;
use App\Http\Controllers\Api\ProjectController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('projects',[ProjectController::class, 'index']);


// Route::get('/{slug}',[ProjectController::class, 'show']);


Route::namespace('Api')
    ->prefix('projects')
    ->group(function(){
        Route::get('/',[ProjectController::class, 'index']);
        Route::post('/search', [ProjectController::class, 'search']);
        Route::get('/search-type/{id}', [ProjectController::class, 'getByType']);
        Route::post('/search-technology/{id}', [ProjectController::class, 'getTechnologies']);

        Route::get('/{slug}',[ProjectController::class, 'show']);

    });


    Route::post('contacts', [LeadController::class, 'store']);
