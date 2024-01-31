<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepoimentoRequest extends FormRequest
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
      'person_img' => ['nullable', 'image', 'mimes:png,jpg,webp,svg,jpeg', 'max:2098'],
      'office_logo' => ['nullable', 'image', 'mimes:png,jpg,webp,svg,jpeg', 'max:2098']
    ];
  }
  public function attributes(): array
  {
    return [
      'person_name' => 'Nome',
      'person_function' => 'Função',
      'person_text' => 'Depoimento',
      'person_img' => 'Foto da Pessoa',
      'office_logo' => 'Logo da Empresa'
    ];
  }
}
