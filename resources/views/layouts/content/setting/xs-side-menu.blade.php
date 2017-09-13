<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="visible-xs-block visible-sm-block" style="margin-bottom: 2%;">
			<ul class="nav nav-tabs">
				<li role="presentation" class="@if($mode == 'user') active @endif">
					<a href="{{ route('users.index') }}">
						<i class="fa fa-users" aria-hidden="true"></i>&nbsp;
						<span class="hidden-xs">担当者</span>
					</a>
				</li>
				<li role="presentation" class="@if($mode == 'work-type') active @endif">
					<a href="{{ route('work-types.index') }}">
						<i class="glyphicon glyphicon-pencil"></i>&nbsp;
						<span class="hidden-xs">作業分類</span>
					</a>
				</li>
				<li role="presentation" class="@if($mode == 'department') active @endif">
					<a href="{{ route('departments.index') }}">
						<i class="fa fa-building" aria-hidden="true"></i>&nbsp;
						<span class="hidden-xs">部門分類</span>
					</a>
				</li>
				<li role="presentation" class="@if($mode == 'job-type') active @endif">
					<a href="{{ route('job-types.index') }}">
						<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;
						<span class="hidden-xs">勤務分類</span>
					</a>
				</li>
				<li role="presentation" class="@if($mode == 'customer') active @endif">
					<a href="{{ route('customers.index') }}">
						<i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;
						<span class="hidden-xs">顧客</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>