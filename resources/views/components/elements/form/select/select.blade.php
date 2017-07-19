<div class="form-group">
    <label class="col-xs-3 col-sm-3 col-md-3 col-lg-3 control-label text-right">{{ $slot }}</label>
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <select class="selectpicker" data-width="100%" data-live-search="{{ $search }}">
                <option data-tokens="">指定なし</option>
                @foreach($items as $item)
                <option data-tokens="">{{ $item }}</option>
                @endforeach
            </select>
        </div>
</div>