<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'project_title' => ['required', 'string', 'min:3', 'max:40'],
            'launch_date' => ['required', 'date', 'after:2024-06-01', 'before:2050-12-31',],
            'repository_url' => ['required', 'url'],
            'project_thumbnail' => ['nullable', 'image', 'max:320'],
            'project_summary' => ['required', 'string', 'min:3', 'max:2000'],
            'status_id' => ['required', 'numeric', 'integer', 'min:1', 'exists:statuses,id'],
            'type_id' => ['required', 'numeric', 'integer', 'min:1', 'exists:types,id'],
            "technologies" => ["array", 'min:1', "exists:technologies,id"],
        ];
    }

    /*  TODO | CUSTOM MESSAGES */
}