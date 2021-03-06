@extends('layouts.app')

@section('content')
<div class="container">
  <div class="form-group text-center">
    <?=Form::open(['action' => ['DiscountCodeController@store'], 'method' => 'POST']);?>
      <div class="form-group">
        <label>KortingsCode: </label>
        <div class="col-md-12">
          <?=Form::text('stringDiscountCode', null, ['class' => 'form-control']);?>
        </div>
      </div>
      <div class="form-group">
        <label>DiscountType: </label>
        <div class="col-md-12">
          <?=Form::select('enumDiscountType', ['DISCOUNT_AMOUNT' => 'Vast Bedrag', 'DISCOUNT_PERCENTAGE' => 'Percentage'], 'DISCOUNT_AMOUNT', ['class' => 'form-control']);?>
        </div>
      </div>
      <div class="form-group">
        <label>Hoeveelheid Korting: </label>
        <div class="col-md-12">
          <?=Form::number('floatDiscount', null, ['class' => 'form-control']);?>
        </div>
      </div>
      <div class="form-group">
        <label>Opslaan: </label>
        <div class="col-md-12">
          <?=Form::submit('Opslaan', ['class' => 'btn btn-default', 'style' => 'width:100%;']);?>
        </div>
      </div>
    <?=Form::close();?>
  </div>
</div>
@endsection

@section('script')
<script async defer src="<?=asset('js/discountcodes/create.js');?>"></script>
@endsection