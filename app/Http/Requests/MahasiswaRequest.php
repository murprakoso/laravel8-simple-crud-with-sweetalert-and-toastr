<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
        $id = $this->id;

        if ($this->method() == 'PUT') {
            $email = 'required|email|unique:mahasiswa,email,' . $id;
        } else {
            $email = 'required|email|unique:mahasiswa,email';
        }

        return [
            'nama' => 'required',
            'nim' => 'required',
            'email' => $email,
            'jurusan' => 'required',
        ];
    }
}
