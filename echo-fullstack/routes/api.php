<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\StoryController;
use App\Http\Controllers\Api\V1\ChapterController;
use App\Http\Controllers\Api\V1\ChoiceController;

Route::prefix('v1')->group(function () {
    Route::apiResource('stories', StoryController::class);
    Route::apiResource('chapters', ChapterController::class);
    Route::apiResource('choices', ChoiceController::class);
});
