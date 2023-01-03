<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
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
            'name' => 'required|max:200',
            'logo' => 'required|max:200',
            'url' => 'required|max:200',
            'describe' => 'required|max:200',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名称必填',
            'name.min' => '名称不能超过 200 字符',
            'logo.required' => '图标必填',
            'logo.min' => '图标不能超过 200 字符',
            'url.required' => '网址必填',
            'url.min' => '网址不能超过 200 字符',
            'describe.required' => '描述必填',
            'describe.max' => '描述不能超过 200 字符',
        ];
    }


}
