<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
             <label class="col-xs-12 col-md-3 col-sm-3 col-lg-3 control-label" for="staff">
                 {{ $slot }}
                 <span class="text-danger">*</span>
             </label>
             <div class="col-xs-12 col-md-8 col-sm-8 col-lg-8">
                 <input type="text" class="form-control" id="staff" name="{{ $name }}" value="{{ old($name) ?? $value ?? '' }}">
                 @include('layouts.common.error-one', ['field' => $name])
             </div>
         </div>
    </div>
</div>