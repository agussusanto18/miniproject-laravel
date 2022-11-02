<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;
use App\Rules\LowerCase;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required','min:4','max:30'],
            'nim' => ['required', 'regex:/^[0-9]+$/', 'max:10'],
            'foto' => ['required','file','max:500','mimes:jpg,png,jpeg'],
            'username' => ['required', new LowerCase],
            'password' =>  [
                'required',
                'min:8',
                'confirmed',
                Password::min(8)
                    ->mixedCase()
                    ->numbers()
                    ->symbols()
                    ->uncompromised()
            ] 
        ];
    }
}
