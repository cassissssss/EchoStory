<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Story;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStoryRequest;
use App\Http\Requests\UpdateStoryRequest;

class StoryController extends Controller
{
    public function index()
    {
        return Story::with('chapters')->get();
    }

    public function store(StoreStoryRequest $request)
    {
        return Story::create($request->validated());
    }

    public function show(Story $story)
    {
        return $story->load('chapters');
    }

    public function update(UpdateStoryRequest $request, Story $story)
    {
        $story->update($request->validated());
        return $story;
    }

    public function destroy(Story $story)
    {
        $story->delete();

        return response()->noContent();
    }
}
