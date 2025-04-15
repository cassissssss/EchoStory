<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Choice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreChoiceRequest;
use App\Http\Requests\UpdateChoiceRequest;

class ChoiceController extends Controller
{
    public function index()
    {
        return Choice::with(['chapter', 'nextChapter'])->get();
    }

    public function store(StoreChoiceRequest $request)
    {
        return Choice::create($request->validated());
    }

    public function show(Choice $choice)
    {
        return $choice->load(['chapter', 'nextChapter']);
    }

    public function update(UpdateChoiceRequest $request, Choice $choice)
    {
        $choice->update($request->validated());
        return $choice;
    }

    public function destroy(Choice $choice)
    {
        $choice->delete();

        return response()->noContent();
    }
}
