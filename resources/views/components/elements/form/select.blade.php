<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">
            <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label text-right">
                {{ $slot }}
            </label>
            {{--<label class="col-xs-12 visible-xs control-label text-left">--}}
                {{--{{ $slot }}--}}
            {{--</label>--}}

            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                <select class="selectpicker" data-width="100%" data-live-search="true">{{-- TODO: Label BUG --}}
                    <option data-tokens="">指定なし</option>
                    @foreach($items as $item)
                    <option data-tokens="">{{ $item }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
</div>