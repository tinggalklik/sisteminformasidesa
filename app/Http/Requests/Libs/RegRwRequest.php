<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegRwRequest extends Request
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
             'nomor_rw'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'nomor_rw.required' => 'Kolom Nomor RW tidak boleh kosong'
       ];
     }
}
