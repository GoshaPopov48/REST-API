<?php

use App\Http\Controllers\Api\v1\DocumentController;
use App\Http\Middleware\Document\AddDocumentAccessMiddleware;
use Illuminate\Support\Facades\Route;


Route::controller(DocumentController::class)
    ->middleware('auth:sanctum')->prefix('v1/documents')->group(function () {
    Route::post('/', 'add')
        ->name('documents.add')->middleware([AddDocumentAccessMiddleware::class]);
});
