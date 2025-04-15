<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateChoiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'chapter_id' => 'sometimes|required|exists:chapters,id',
            'label' => 'sometimes|required|string|max:255',
            'next_chapter_id' => 'sometimes|required|exists:chapters,id',
        ];
    }
}
