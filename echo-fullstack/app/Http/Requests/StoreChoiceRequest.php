<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChoiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'chapter_id' => 'required|exists:chapters,id',
            'label' => 'required|string|max:255',
            'next_chapter_id' => 'required|exists:chapters,id',
        ];
    }
}
