{{-- スマホ・タブレット用 --}}
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
    <div class="visible-xs-block visible-sm-block" style="margin-bottom: 2%;">
        <ul class="nav nav-tabs">
          <li role="presentation" class="active">
          	<a href="{{ url('/setting/staff') }}">
          		<i class="fa fa-users" aria-hidden="true"></i>&nbsp;
          		<span class="hidden-xs">担当者</span>
          	</a>
          </li>
          <li role="presentation">
          	<a href="{{ url('/setting/work') }}">
          		<i class="glyphicon glyphicon-pencil"></i>&nbsp;
          		<span class="hidden-xs">作業分類</span>
          	</a>
          </li>
          <li role="presentation">
          	<a href="{{ url('/setting/departments') }}">
          		<i class="fa fa-building" aria-hidden="true"></i>&nbsp;
          		<span class="hidden-xs">部門分類</span>
          	</a>
          </li>
          <li role="presentation">
          	<a href="{{ url('/setting/service') }}">
          		<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
          		<span class="hidden-xs">勤務分類</span>
          	</a>
          </li>
          <li role="presentation">
          	<a href="{{ url('/setting/customers') }}">
          		<i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;
          		<span class="hidden-xs">顧客</span>
          	</a>
          </li>
        </ul>
    </div>
</div>