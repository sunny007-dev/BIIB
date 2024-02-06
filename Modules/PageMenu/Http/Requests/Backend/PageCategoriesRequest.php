<?php

namespace Modules\PageMenu\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PageCategoriesRequest extends FormRequest
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
            'name' => 'required|max:191|unique:pages_categories,name,'.$this->category,
            'slug' => 'nullable|max:191|unique:pages_categories,slug,'.$this->category,
        ];
    }
}
