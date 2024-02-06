<?php

namespace Modules\Loan\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class LoanRequest extends FormRequest
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
            'title' => 'required|max:191',
            'url' => 'nullable|max:191',
            'featured_image' => 'nullable',
            'order' => 'nullable',
        ];
    }
}
