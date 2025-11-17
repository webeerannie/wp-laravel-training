<?php

use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\StoryController;
use App\Http\Controllers\TaskController;
use App\Models\Story;
use Illuminate\Support\Facades\Route;

Route::apiResources([
    'tasks' =>  TaskController::class,
    'stories' => StoryController::class,
    'posts' => PostController::class,
    'comments' => CommentController::class,
]);
