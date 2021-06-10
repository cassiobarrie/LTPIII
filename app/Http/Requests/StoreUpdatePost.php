<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePost extends FormRequest
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
            'title', 'titulo' => 'required|min:5|max:30',
            'content', 'conteudo' => 'required|min:5|max:200',

        ];
    }
    public function messages()
    {
        return [

        ];
    }
}
