<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssrPinRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    
    public function rules(): array
    {
        $id = $this->route('pin')?->id;
        return [
            'PIN'       =>  ['required', 'string', 'max:50', 'unique:assr_pin,PIN,' . $id],
            'Location'  =>  ['nullable', 'string', 'max:500'],
            'LotNo'     =>  ['nullable', 'string', 'max:50'],
            'BlkNo'     =>  ['nullable', 'string', 'max:50'],
            'SurveyNo'  =>  ['nullable', 'string', 'max:50'],
            'Kind'      =>  ['required', 'string', 'max:50'],
        ];
    }
}
