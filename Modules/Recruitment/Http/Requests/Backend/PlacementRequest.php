<?php

namespace Modules\Recruitment\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PlacementRequest extends FormRequest
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
            'content'           => 'nullable',
            'type'              => 'nullable|max:191',
            'recruiter_id'  => 'required|numeric',
            'featured_image'    => 'nullable|max:191',
            'order'             => 'nullable|numeric',
            'status'            => 'required',
        ];
    }
}
