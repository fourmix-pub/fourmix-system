@component('components.accordions.accordion')
    <form action="{{ route('projects.budgets.project') }}" class="form-horizontal" method="get">

        @component('components.elements.form.select', ['name' => 'project_id'])
            @slot('label')
                プロジェクト名
            @endslot
            @foreach($projectsSelect as $project)
                <option value="{{ $project->id }}" @if((int)$projectId === (int)$project->id) selected @endif>{{ '#'.$project->id.' '.$project->name }}</option>
            @endforeach
        @endcomponent

        @component('components.elements.form.select', ['name' => 'customer_id'])
            @slot('label')
                顧客名
            @endslot
            @foreach($customers as $customer)
                <option value="{{ $customer->id }}" @if((int)$customerId === (int)$customer->id) selected @endif>{{ $customer->name }}</option>
            @endforeach
        @endcomponent

        @component('components.elements.form.select', ['name' => 'user_id'])
            @slot('label')
                責任者名
            @endslot
            @foreach($users as $user)
                <option value="{{ $user->id }}" @if((int)$userId === (int)$user->id) selected @endif>{{ $user->name }}</option>
            @endforeach
        @endcomponent

        <div class="form-group">
            <label class="hidden-xs col-sm-3 col-md-3 col-lg-3 control-label text-right">表示区分</label>
            <label class="col-xs-12 visible-xs">表示区分</label>

            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                <label class="radio-inline">
                    <input type="radio" name="status" value="all" @if($status == 'all') checked @endif>全て
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="finished" @if($status == 'finished') checked @endif>完了
                </label>
                <label class="radio-inline">
                    <input type="radio" name="status" value="unfinished" @if($status == 'unfinished') checked @endif>未完了
                </label>
            </div>
        </div>

        @component('components.elements.form.period', ['valueStart' => $startDate, 'valueEnd' => $endDate])
        @endcomponent

        <div class="row form text-center">
            <div class="btn-group">
                <button type="submit" class="btn">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                </button>
            </div>
        </div>
    </form>
@endcomponent