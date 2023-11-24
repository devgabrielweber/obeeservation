<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class leituraSensorStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'cod_sensor' => ['required'],
            'setor_id' => ['required'],
            'valor' => ['required'],
            'grandeza' => ['required'],
        ];
    }
}
