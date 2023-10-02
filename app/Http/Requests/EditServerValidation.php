<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditServerValidation extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'host' => 'required',
            'chronicles' => 'required',
            'rates' => 'required',
            'open_date' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'host.required' => 'Заполните поле имени сервера',
            'chronicles.required' => 'Заполните поле хроник',
            'rates.required' => 'Заполните поле рейтов',
            'open_date.required' => 'Заполните поле даты открытия',
            'open_date.date' => 'Заполните поле в формате даты',
        ];
    }

}
