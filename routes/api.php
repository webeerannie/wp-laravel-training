<?php

use App\Http\Controllers\Api\StoryController;
use App\Http\Controllers\TaskController;
use App\Models\Story;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    'tasks' =>  TaskController::class,
    'stories' => StoryController::class,
]);
