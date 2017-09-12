<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label" for="started_day">{{ $slot }}</label>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class='input-group day'>
                    <input type='text' class="form-control" value="{{ old($name) ?? $value ?? '' }}" name="{{ $name }}"/>
                    @include('layouts.common.error-one', ['field' => $name])
                    <span class="input-group-addon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>