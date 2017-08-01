<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="staff">
                {{ $slot }}
                <span class="text-danger">*</span>
            </label>
            <div class="ccol-xs-9 col-sm-9 col-md-9 col-lg-9">
                <input id="{{ $name }}" type="password" class="form-control" name="{{ $name }}">
                @include('layouts.common.error-one', ['field' => $name])
            </div>
        </div>
    </div>
</div>