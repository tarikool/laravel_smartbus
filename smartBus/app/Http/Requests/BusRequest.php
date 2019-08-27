<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusRequest extends FormRequest
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
            'name' => 'required',
            'license_number' => 'required',
            'driver_id' => 'required',
            'total_seat' => 'required|numeric|max:70',
            'cost_per_unit' => 'required',
            'schedule_id' => 'required',

        ];
    }
}
