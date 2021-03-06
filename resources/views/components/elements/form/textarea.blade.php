<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group{{ $errors->has($name) ? ' has-error' : '' }}">
            <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="staff">
                {{ $slot }}
            </label>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <textarea name="{{ $name }}" rows="1" style="resize: vertical;" class="form-control" placeholder="備考欄" >{{ old($name) ??$value ?? '' }}</textarea>
                @include('layouts.common.error-one', ['field' => $name])
            </div>
        </div>
    </div>
</div>