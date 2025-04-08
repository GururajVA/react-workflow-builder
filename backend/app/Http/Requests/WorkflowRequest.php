<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkflowRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Authorization handled at controller level
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'stages' => 'required|array|min:1',
            'stages.*.name' => 'required|string|max:255',
            'stages.*.transitions' => 'array',
            'stages.*.permissions' => 'array'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Workflow name is required',
            'stages.min' => 'At least one workflow stage must be defined'
        ];
    }
}