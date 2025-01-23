<?php

namespace App\Http\Requests\Assessor;

use Illuminate\Foundation\Http\FormRequest;

class PropertAppraisalStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'Area' => 'nullable|numeric',
            'Roof' => 'nullable|string|max:255',
            '1stFlooring' => 'nullable|string|max:255',
            '2ndFlooring' => 'nullable|string|max:255',
            '3rdFlooring' => 'nullable|string|max:255',
            '4thFlooring' => 'nullable|string|max:255',
            'Description' => 'required|string|max:255',
            'Unit_Value' => 'nullable|numeric',
            'Market_Value' => 'nullable|numeric',
            'Remarks' => 'nullable|string|max:255',
            'TypeOfStructure' => 'nullable|string|max:255',
            'AU' => 'nullable|string|max:255',
            'AL' => 'nullable|numeric',
            'AV' => 'nullable|numeric',
            'Story' => 'nullable|string|max:255',
            'Exempt' => 'nullable|boolean',
            'Additional' => 'nullable|boolean',
            'AdjLvl' => 'nullable|numeric',
            'TDNo' => 'required|string|max:255',
        ];
    }

    /**
     * Get the custom messages for validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'Area.numeric' => 'The floor area must be a valid number.',
            'Roof.string' => 'The roof description must be a valid string.',
            'Roof.max' => 'The roof description must not exceed 255 characters.',
            '1stFlooring.string' => 'The 1st flooring description must be a valid string.',
            '1stFlooring.max' => 'The 1st flooring description must not exceed 255 characters.',
            '2ndFlooring.string' => 'The 2nd flooring description must be a valid string.',
            '2ndFlooring.max' => 'The 2nd flooring description must not exceed 255 characters.',
            '3rdFlooring.string' => 'The 3rd flooring description must be a valid string.',
            '3rdFlooring.max' => 'The 3rd flooring description must not exceed 255 characters.',
            '4thFlooring.string' => 'The 4th flooring description must be a valid string.',
            '4thFlooring.max' => 'The 4th flooring description must not exceed 255 characters.',
            'Description.required' => 'The property description is required.',
            'Description.string' => 'The property description must be a valid string.',
            'Description.max' => 'The property description must not exceed 255 characters.',
            'Unit_Value.numeric' => 'The unit value must be a valid number.',
            'Market_Value.numeric' => 'The market value must be a valid number.',
            'Remarks.string' => 'The remarks must be a valid string.',
            'Remarks.max' => 'The remarks must not exceed 255 characters.',
            'TypeOfStructure.string' => 'The type of structure must be a valid string.',
            'TypeOfStructure.max' => 'The type of structure must not exceed 255 characters.',
            'AU.string' => 'The actual use must be a valid string.',
            'AU.max' => 'The actual use must not exceed 255 characters.',
            'AL.numeric' => 'The assessment level must be a valid number.',
            'AV.numeric' => 'The assessed value must be a valid number.',
            'Story.string' => 'The story description must be a valid string.',
            'Story.max' => 'The story description must not exceed 255 characters.',
            'Exempt.boolean' => 'The exempt value must be either true or false.',
            'Additional.boolean' => 'The additional item value must be either true or false.',
            'AdjLvl.numeric' => 'The adjustment level must be a valid number.',
            'TDNo.required' => 'The TDNo is required.',
            'TDNo.string' => 'The TDNo must be a valid string.',
            'TDNo.max' => 'The TDNo must not exceed 255 characters.',
        ];
    }
}
