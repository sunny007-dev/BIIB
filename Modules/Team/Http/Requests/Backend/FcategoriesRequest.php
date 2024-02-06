<?php

namespace Modules\Team\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class FcategoriesRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required|max:191|unique:faculty_categories,name,'.$this->category,
            'slug' => 'nullable|max:191|unique:faculty_categories,slug,'.$this->category,
        ];
    }
}
