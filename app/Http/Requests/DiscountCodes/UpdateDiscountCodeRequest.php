<?php

namespace App\Http\Requests\DiscountCodes;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDiscountCodeRequest extends FormRequest {
  /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
  public function authorize() {
    return auth()->user()->can('update', $this->route('objDiscountCode'));
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
  public function rules() {
    return [
      'stringDiscountCode' => 'required|string',
      'enumDiscountType' => 'required|in:DISCOUNT_AMOUNT,DISCOUNT_PERCENTAGE',
      'floatDiscount' => 'required|numeric',
    ];
  }
}
