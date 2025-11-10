<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Mail\SendEmail;
use App\Models\Task;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Mail;

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
    public function store(TaskRequest $request): Task
    {
        $task = Task::create($request->all());

        Mail::to('rannie.ollit@born.mt')->send(new SendEmail());

        return $task;
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
    public function update(TaskRequest $request, Task $task): Task
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
