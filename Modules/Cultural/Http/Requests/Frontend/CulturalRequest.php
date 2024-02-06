<?php

namespace Modules\Cultural\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class CulturalRequest extends FormRequest
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
            'title'    => 'nullable|max:191',
            
        ];
    }
}
