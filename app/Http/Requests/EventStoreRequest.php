<?php

namespace Hackerpair\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventStoreRequest extends FormRequest
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
            'name'=>'required|min:10|max:50',
            'venue' => 'required',
            'city' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute Require messages',
            'name.required' => 'Name required'
        ];
    }
}
