<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label text-right" for="{{ $name }}">
                {{ $label }}
            </label>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <select class="selectpicker" data-width="100%" data-live-search="true" name="{{ $name }}" id="{{ $name }}">
                    <option data-tokens="" value=>指定なし</option>
                    {{ $slot }}
                </select>
                @include('layouts.common.error-one', ['field' => $name])
            </div>
        </div>
    </div>
</div>

{{--<div class="row">--}}
    {{--<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">--}}
        {{--<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">--}}
            {{--<label class="control-label">--}}
                {{--{{ $label }}--}}
            {{--</label>--}}
            {{--<div>--}}
                {{--<select class="selectpicker form-control" data-live-search="true" name="{{ $name }}">--}}
                    {{--{{ $slot }}--}}
                {{--</select>--}}
                {{--@include('layouts.common.error-one', ['field' => $name])--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}