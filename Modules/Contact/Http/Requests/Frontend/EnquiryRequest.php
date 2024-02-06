<?php

namespace Modules\Contact\Http\Requests\Frontend;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryRequest extends FormRequest
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
            // 'name'    => 'nullable|max:191',
            'name' => 'required',
            'email' => 'required',
        ];
    }
}
