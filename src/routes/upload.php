<?php

use Illuminate\Support\Facades\Route;
use le0daniel\LaravelResumableJs\Http\Controllers\UploadController;

Route::
prefix('r-upload')
    ->group(
        static function () {
            Route::post('init', [UploadController::class, 'init'])->name('resumablejs.init');
            Route::post('', [UploadController::class, 'upload']);
            Route::post('complete', [UploadController::class, 'complete']);
        }
    );
