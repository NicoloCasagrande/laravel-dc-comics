<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:50', 
            'text' => 'nullable|string',
            'thumb' => 'required|url|', 
            'price' => 'required|decimal:2|between:0.01,99.99',
            'series' => 'required|string|max:50',
            'sale_date' => 'required|date', 
            'series' => 'required|string|max:50'
        ];
    }
}
