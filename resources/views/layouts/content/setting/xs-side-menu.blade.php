{{-- スマホ・タブレット用 --}}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="visible-xs-block visible-sm-block" style="margin-bottom: 2%;">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active">
					<a href="{{ url('/admin/user') }}">
						<i class="fa fa-users" aria-hidden="true"></i>&nbsp;
						<span class="hidden-xs">担当者</span>
					</a>
				</li>
				<li role="presentation">
					<a href="{{ url('/admin/category') }}">
						<i class="glyphicon glyphicon-pencil"></i>&nbsp;
						<span class="hidden-xs">作業分類</span>
					</a>
				</li>
				<li role="presentation">
					<a href="{{ url('/admin/department') }}">
						<i class="fa fa-building" aria-hidden="true"></i>&nbsp;
						<span class="hidden-xs">部門分類</span>
					</a>
				</li>
				<li role="presentation">
					<a href="{{ url('/admin/work') }}">
						<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
						<span class="hidden-xs">勤務分類</span>
					</a>
				</li>
				<li role="presentation">
					<a href="{{ url('/admin/customer') }}">
						<i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;
						<span class="hidden-xs">顧客</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>