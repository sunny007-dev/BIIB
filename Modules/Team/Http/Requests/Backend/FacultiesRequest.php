<?php

namespace Modules\Team\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class FacultiesRequest extends FormRequest
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
            'name'              => 'required|max:191',
            'slug'              => 'nullable|max:191',
            'bio'           => 'nullable',
            'faculty_category_id'       => 'required|numeric',
            'created_by_alias'  => 'nullable|max:191',
            'featured_image'    => 'required|max:191',
            'order'             => 'required|numeric',
            'status'            => 'required',
        ];
    }
}
