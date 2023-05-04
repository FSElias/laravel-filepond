<?php

use Illuminate\Support\Facades\Route;
use Sopamo\LaravelFilepond\Http\Controllers\FilepondController;

Route::prefix('api')->group(function () {
    Route::patch('/', [config('filepond.controller'), 'chunk'])->name('filepond.chunk');
    Route::post('/process', [config('filepond.controller'), 'upload'])->name('filepond.upload');
    Route::delete('/process', [config('filepond.controller'), 'delete'])->name('filepond.delete');
});
