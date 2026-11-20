<?php
 
use Illuminate\Support\Facades\Route;
use Modules\Setoran\Http\Controllers\SetoranController;
 
Route::middleware(['auth', 'role:admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::resource('users', SetoranController::class)->except('show');
    });
