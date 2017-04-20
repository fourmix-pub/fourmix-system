{{-- PC用 --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    <div class="list-group hidden-sm hidden-xs">
        <a class="list-group-item" href="{{ url('/setting/staff') }}">
            <i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;担当者
        </a>
        <a class="list-group-item" href="{{ url('/setting/work') }}">
            <i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;作業分類
        </a>
        <a class="list-group-item" href="{{ url('/setting/departments') }}">
            <i class="fa fa-building" aria-hidden="true"></i>&nbsp;&nbsp;部門分類
        </a>
        <a class="list-group-item" href="{{ url('/setting/service') }}">
            <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp;勤務分類
        </a>
        <a class="list-group-item" href="{{ url('/setting/customers') }}">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;顧客
        </a>
    </div>
</div>