@component('components.modals.form', ['target' => 'create', 'buttonColor' => 'btn-danger pull-right'])

    @slot('buttonIcon')
        <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
    @endslot

    @slot('design')
        style="margin-right: 10px;"
    @endslot

    @slot('modalTitle')
        個人予算追加
    @endslot

    @slot('url')
        {{ route('personal-budgets.store') }}
    @endslot

    @component('components.elements.form.select', ['name' => 'project_id'])
        @slot('label')
            プロジェクト名
        @endslot
        @foreach($projects as $project)
            <option value="{{ $project->id }}">{{ $project->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.select', ['name' => 'user_id'])
        @slot('label')
            担当者名
        @endslot
        @foreach($usersSelect as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.text',['name'=>'budget'])
        個人予算
    @endcomponent

    @slot('modalFooter')
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">追加</button>
    @endslot

@endcomponent