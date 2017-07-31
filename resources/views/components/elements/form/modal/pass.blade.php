<div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
    <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="staff">
        {{ $slot }}
        <span class="text-danger">*</span>
    </label>
    <div class="ccol-xs-8 col-sm-8 col-md-8 col-lg-8">
        <input id="{{ $name }}" type="password" class="form-control" name="{{ $name }}">
        @include('layouts.common.error-one', ['field' => $name])
    </div>
</div>