<?php

namespace App\Http\Requests;

use Illuminate\Validation\Validator;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class LogRequest extends FormRequest
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
     * @return array
     */
    // public function rules()
    // {
    //     return [
    //         'created_at' => [
    //             Rule::unique('logs')->ignore($this->id)
    //         ]
    //     ];
    // }
}
