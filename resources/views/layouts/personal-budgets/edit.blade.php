@component('components.modals.form', ['target' => 'editPersonalBudget-'.$personalBudget->project_id.'-'.$personalBudget->user_id, 'buttonColor' => 'btn-xs btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        個人予算編集
    @endslot

    @slot('url')
        {{ route('personal-budgets.update', compact('personalBudget')) }}
    @endslot

    @component('components.elements.form.select', ['name' => 'project_id'])
        @slot('label')
            プロジェクト名
        @endslot
        @foreach($projects as $project)
            <option value="{{ $project->id }}" @if($project->id == $personalBudget->project_id) selected @endif>{{ $project->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.select', ['name' => 'user_id'])
        @slot('label')
            担当者名
        @endslot
        @foreach($users as $user)
            <option value="{{ $user->id }}" @if($user->id == $personalBudget->user_id) selected @endif>{{ $user->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.text',['name'=>'budget', 'value' => $personalBudget->budget])
        個人予算
    @endcomponent

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">編集</button>
    @endslot

@endcomponent
