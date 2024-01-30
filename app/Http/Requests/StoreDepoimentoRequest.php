<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepoimentoRequest extends FormRequest
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

  //  AQUI ESTAMOS VALIDANDO SE É OBRIGATÓRIO OU NÃO
  public function rules(): array
  {
    return [
      'person_name' => ['required'],
      'person_function' => ['required'],
      'person_text' => ['required'],
      // 'person_img' => ['required', 'file'],
      // 'office_logo' => ['required', 'file']
      'person_img' => ['required', 'image', 'mimes:png,jpg,webp', 'max:2098'],
      'office_logo' => ['required', 'image', 'mimes:png,jpg,webp', 'max:2098']
    ];
  }
}
