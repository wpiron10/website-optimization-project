<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'name' => 'required|string',
            'price' => 'required|numeric|min:0',
            'promo' => 'nullable|numeric|min:0',
            'tags' => 'required|string',
            'status' => 'required|string',
        ];

        if ($this->isMethod('put') || $this->isMethod('patch')) {
            if (!request()->hasFile('image')) {
                $rules['image'] = 'nullable';
            } else {
                $rules['image'] = 'file|mimes:jpeg,png,jpg,webp';
            }
        } else {
            $rules['image'] = 'required|file|mimes:jpeg,png,jpg,webp';
        }

        return $rules;
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
