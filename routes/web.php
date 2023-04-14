<?php

use App\Http\Controllers\WorkSpacesController;
use LionRoute\Route;

/**
 * ------------------------------------------------------------------------------
 * Web Routes
 * ------------------------------------------------------------------------------
 * Here is where you can register web routes for your application
 * ------------------------------------------------------------------------------
 **/

Route::prefix('api', function() {
    Route::prefix('work-spaces', function() {
        Route::post('create', [WorkSpacesController::class, 'createWorkSpaces']);
        Route::get('read', [WorkSpacesController::class, 'readWorkSpaces']);
        Route::put('update', [WorkSpacesController::class, 'updateWorkSpaces']);
        Route::delete('delete', [WorkSpacesController::class, 'deleteWorkSpaces']);
    });
});