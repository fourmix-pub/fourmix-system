{{-- スマホ用 --}}
<div class="visible-sm-block visible-xs-block">
    <div class="btn-group">
        <a class="list-group-item text-center" data-toggle="collapse" href="#menu">
            Menu&nbsp;&nbsp;<span class="caret"></span>
        </a>
    </div>
    <div class="collapse text-center" id="menu">
        <ul class="list-group nav nav-pills nav-stacked">
            <li class="list-group-item"><a href="{{ url('/setting/staff') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;担当者</a></li>
            <li class="list-group-item"><a href="{{ url('/setting/work') }}"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;作業分類</a></li>
            <li class="list-group-item"><a href="{{ url('/setting/departments') }}"><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;部門分類</a></li>
            <li class="list-group-item"><a href="{{ url('/setting/service') }}"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;勤務分類</a></li>
            <li class="list-group-item"><a href="{{ url('/setting/customers') }}"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;顧客</a></li>
        </ul> 
    </div>
</div>

{{-- PC用 --}}
<div class="col-md-3">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="panel panel-default hidden-sm hidden-xs">
            <div class="panel-heading">
                Menu
            </div>
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ url('/setting/staff') }}"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;担当者</a></li>
                <li><a href="{{ url('/setting/work') }}"><i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;作業分類</a></li>
                <li><a href="{{ url('/setting/departments') }}"><i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;部門分類</a></li>
                <li><a href="{{ url('/setting/service') }}"><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;勤務分類</a></li>
                <li><a href="{{ url('/setting/customers') }}"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;顧客</a></li>
            </ul> 
        </div>
    </div>
</div>