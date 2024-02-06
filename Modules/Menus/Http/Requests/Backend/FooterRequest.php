<?php

namespace Modules\Menus\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class FooterRequest extends FormRequest
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
            'title'              => 'required|max:191',
            'slug'              => 'nullable|max:191',
            'footer_category_id'       => 'required|numeric',
            'featured_image'    => 'nullable|max:191',
            'order'             => 'nullable|numeric',
            'status'            => 'required',
        ];
    }
}
