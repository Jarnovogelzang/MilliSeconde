<?php

namespace App\Http\Requests\Categories;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return auth()->user()->can('update', $this->route('objCategory'));
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'stringTitle' => 'required|string',
      'boolIsFeatured' => 'nullable|integer',
      'arrayProducts' => 'nullable|array|exists:Product,intId',
    ];
  }
}
