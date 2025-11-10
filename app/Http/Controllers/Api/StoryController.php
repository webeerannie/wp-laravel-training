<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        $stories = Story::latest()->paginate(15);

        return response()->json($stories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            // Add your validation rules here
        ]);

        $story = Story::create($validated);

        return response()->json([
            'message' => 'Story created successfully.',
            'data' => $story,
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Story $story): JsonResponse
    {
        return response()->json($story);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Story $story): JsonResponse
    {
        $validated = $request->validate([
            // Add your validation rules here
        ]);

        $story->update($validated);

        return response()->json([
            'message' => 'Story updated successfully.',
            'data' => $story,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Story $story): JsonResponse
    {
        $story->delete();

        return response()->json([
            'message' => 'Story deleted successfully.',
        ]);
    }
}
