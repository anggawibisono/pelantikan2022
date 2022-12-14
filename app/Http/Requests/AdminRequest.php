<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_taruna'=>'required',
            'slug'=>'required',
            'nama_ayah'=>'required',
            'nama_ibu'=>'required',
            'konfirmasi_kehadiran'=>'required'
        ];
    }
}
