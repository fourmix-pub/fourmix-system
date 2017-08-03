<div class="form-group">
    <label class="hidden-xs col-sm-3 col-md-3 col-lg-3 control-label text-right">クライアント種類</label>
    <label class="visible-xs col-xs-12 control-label">クライアント種類</label>

    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        @foreach(config('system.customer.name') as $key => $value)
            <label class="checkbox-inline">
                <input type="checkbox" name="type_id[]" value="{{ $key }}"> {{ $value }}
            </label>
        @endforeach
    </div>
    <div class="col-sm-1"></div>
</div>