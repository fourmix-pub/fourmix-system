<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="form-group">

            <label class="col-xs-12 col-sm-3 col-md-3 col-lg-3 control-label">期間</label>

            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class='input-group day'>
                    <input type='text' class="form-control" value="{{ $valueStart ?? '' }}" name="start_date" placeholder="開始日" />
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span></span>
                </div>
            </div>

            <label class="hidden-xs col-sm-1 col-md-1 col-lg-1 control-label" style="text-align: center">～</label>
            <label class="visible-xs col-xs-12 control-label" style="text-align: center">　</label>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                <div class='input-group day'>
                    <input type='text' class="form-control" value="{{ $valueEnd ?? '' }}" name="end_date" placeholder="終了日" />
                    <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span></span>
                </div>
            </div>
        </div>
    </div>
</div>