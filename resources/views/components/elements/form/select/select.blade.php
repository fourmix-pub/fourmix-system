<div class="form-group">
    <label class="hidden-xs col-sm-3 col-md-3 col-lg-3 control-label text-right">
        {{ $slot }}
    </label>
    <label class="col-xs-12 visible-xs control-label text-left">
        {{ $slot }}
    </label>

    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
        <select class="selectpicker" data-width="100%" data-live-search="{{ $search }}">{{-- TODO: Label BUG --}}
            <option data-tokens="">指定なし</option>
            @foreach($items as $item)
            <option data-tokens="">{{ $item }}</option>
            @endforeach
        </select>
    </div>
</div>