<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCheckRequest extends FormRequest
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
        $ruta = $this->route()->getName();
        $tabela = explode('.',$ruta)[0];
        switch ($tabela) {

            case 'users':
                return [
                    'name'=>'required|string|max:125',
                    'last_name'=>'required|string|max:125',
                    'email' => [
                        'required',
                        'string',
                        'email',
                        'max:255',
                        'unique:users',
                        'regex:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/'
                    ],
                    'password' => [
                        'required',
                        'string',
                        'min:8',
                        'regex:/^(?=.*[A-Z])(?=.*\d).{8,}$/'
                    ],
                ];
                break;


            case 'camera_specs':
                return [
                    'value'=>'required|int'
                ];
                break;

            case 'colors':
                return [
                    'value'=>'required|alpha'
                ];
                break;

            case 'memory_specs':
                return [
                    'value'=>'required'
                ];
                break;

            case 'menus':
                return [
                   'name'=>'required|alpha',
                    'route'=>'required|alpha'
                ];
                break;

            case 'models':
                return [
                    'name'=>'required|alpha|max:255',
                    'description'=>'required',
                    'date_of_delivery'=>'required',
                    'brand_id'=>'required',
                ];
                break;

            case 'model_specifications':
                return [
                    'model_id'=>'required',
                    'camera_id'=>'required',
                    'memory_id'=>'required',
                    'ram_id'=>'required',
                ];
                break;

            case 'model_specification_color':
                return [
                    'ms_id'=>'required',
                    'color_id'=>'required',
                ];
                break;

            case 'price':
                return [
                    'msc_id'=>'required',
                    'price'=>'required|decimal',
                    'old_price'=>'required|decimal'
                ];
                break;

            case 'ram_specs':
                return [
                    'value'=>'required|int',
                ];
                break;

            case 'roles':
                return [
                    'name'=>'required|int',
                ];
                break;


            default:
                return [];
                break;
        }
    }
    public function messages()
    {
        return [
            'required' => 'Polje :attribute je obavezno.',
            'integer' => 'Polje :attribute može sadržati samo brojeve.',
            'alpha' => 'Polje :attribute može sadržati samo slova.',
        ];
    }

}
