<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group{{ $errors->has('type_id') ? ' has-error' : '' }}">
            <label class="col-xs-12 col-md-3 col-sm-3 col-lg-3 control-label" for="type_id">
                顧客種類
                <span class="text-danger">*</span>
            </label>
            <div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
                @foreach(config('system.customer.name') as $key => $value)
                    <label class="radio-inline">
                        <input type="radio" name="type_id" id="type_id" value="{{ $key }}" @if(($customer ? (int)$customer->type_id : 999) === (int)$key) checked @endif>{{ $value }}
                    </label>
                @endforeach
                @include('layouts.common.error-one', ['field' => 'type_id'])
            </div>
        </div>
    </div>
</div>