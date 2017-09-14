<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3  control-label" for="started_time">{{ $title }}<span class="text-danger">*</span></label>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <div class='input-group time'>
                    <input type='text' class="form-control" value="{{ old($name) ?? $time }}" name="{{ $name }}" />
                    @include('layouts.common.error-one', ['field' => $name])
                    <span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
            </div>
        </div>
    </div>
</div>