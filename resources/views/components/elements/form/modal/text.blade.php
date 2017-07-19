 <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
     <label class="col-xs-3 control-label" for="staff">
         {{ $slot }}
         <span class="text-danger">*</span>
     </label>
     <div class="col-xs-8">
         <input type="text" class="form-control" id="staff" name="{{ $name }}" value="{{ old($name) ?? $value ?? '' }}">
         @include('layouts.common.error-one', ['field' => $name])
     </div>
 </div>