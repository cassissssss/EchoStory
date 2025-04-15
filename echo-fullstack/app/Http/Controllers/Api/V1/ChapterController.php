<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Chapter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChapterRequest;
use App\Http\Requests\UpdateChapterRequest;

class ChapterController extends Controller
{
    public function index()
    {
        return Chapter::with(['story', 'choices'])->get();
    }

    public function store(StoreChapterRequest $request)
    {
        return Chapter::create($request->validated());
    }

    public function show(Chapter $chapter)
    {
        return $chapter->load(['story', 'choices']);
    }

    public function update(UpdateChapterRequest $request, Chapter $chapter)
    {
        $chapter->update($request->validated());
        return $chapter;
    }

    public function destroy(Chapter $chapter)
    {
        $chapter->delete();

        return response()->noContent();
    }
}
