@component('components.accordions.accordion')
    <form action="{{ route('personal-budgets.index') }}" class="form-horizontal" method="get">

        @component('components.elements.form.select', ['name' => 'project_id'])
            @slot('label')
                プロジェクト名
            @endslot
            @foreach($projectsSelect as $project)
                <option value="{{ $project->id }}" @if((int)$projectId === (int)$project->id) selected @endif>{{ $project->name }}</option>
            @endforeach
        @endcomponent

        @component('components.elements.form.select', ['name' => 'user_id'])
            @slot('label')
                担当者名
            @endslot
            @foreach($usersSelect as $user)
                <option value="{{ $user->id }}" @if((int)$userId === (int)$user->id) selected @endif>{{ $user->name }}</option>
            @endforeach
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
