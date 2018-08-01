<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => 'required|unique:products|min:10|max:50',
            'price' => 'numeric',
            'description'=>'required|max:191',
            'image'=>'nullable|max:191',
            'status'=>'required|min:1'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên con lợn.',
            'name.unique' => 'Đã có một con lợn tên như thế này rồi.',
            'name.min' => 'Tên con lợn này quá ngắn.',
            'name.max' => 'Tên con lợn này quá dài. Vui lòng chọn tên khác. (Ví dụ: Tình lợn)',
            'price.numeric' => 'Vui lòng nhập giá cho lợn là số.'
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            if($this->get('name')=='tung'){
                $validator->errors()->add('name', 'Tùng vỗn dĩ đã là lợn rồi, không cần thêm nữa!');
            }
        });
    }
}
