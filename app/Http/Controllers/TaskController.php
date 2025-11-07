<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Task::all(); // select * from 'tasks'
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): Task
    {
        return Task::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task): Task
    {
        return $task;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task): Task
    {
        return tap($task)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        return $task->delete();
    }
}
