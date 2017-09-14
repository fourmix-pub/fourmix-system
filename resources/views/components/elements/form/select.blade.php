<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="{{ $name }}">
                {{ $label }}
            </label>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <select class="selectpicker" data-width="100%" data-live-search="true" name="{{ $name }}" id="{{ $name }}" data-size="10">
                    <option value=>指定なし</option>
                    {{ $slot }}
                </select>
                @include('layouts.common.error-one', ['field' => $name])
            </div>
        </div>
    </div>
</div>