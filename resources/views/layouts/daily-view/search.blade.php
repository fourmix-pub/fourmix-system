@component('components.accordions.accordion')
    <form action="{{ route('daily.view') }}" class="form-horizontal" method="get">

        @component('components.elements.form.select', ['name' => 'user_id'])
            @slot('label')
                担当者名
            @endslot
            @foreach($users as $user)
                <option value="{{ $user->id }}" @if((int)$userId === (int)$user->id) selected @endif>{{ $user->name }}</option>
            @endforeach
        @endcomponent

        @component('components.elements.form.select', ['name' => 'project_id'])
            @slot('label')
                プロジェクト名
            @endslot
            @foreach($projects as $project)
                <option value="{{ $project->id }}" @if((int)$projectId === (int)$project->id) selected @endif>{{ '#'.$project->id.' '.$project->name }}</option>
            @endforeach
        @endcomponent

        @component('components.elements.form.select', ['name' => 'work_type_id'])
            @slot('label')
                作業分類名
            @endslot
            @foreach($workTypes as $workType)
                <option value="{{ $workType->id }}" @if((int)$workTypeId === (int)$workType->id) selected @endif>{{ $workType->name }}</option>
            @endforeach
        @endcomponent

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