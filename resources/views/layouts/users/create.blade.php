@component('components.modals.form', ['target' => 'createUser-', 'buttonColor' => 'btn-danger pull-right'])

    @slot('buttonIcon')
        <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
    @endslot

    @slot('design')
        style="margin-right: 10px;"
    @endslot

    @slot('modalTitle')
        担当者追加
    @endslot

    @slot('url')
        {{ route('users.store') }}
    @endslot

    @component('components.elements.form.text',['name'=>'name'])
        担当者名
    @endcomponent

    @component('components.elements.form.text',['name'=>'cost'])
        作業単価
    @endcomponent

    @component('components.elements.form.select', ['name' => 'department_id'])
        @slot('label')
            部門
        @endslot
        @foreach($departments as $department)
            <option value="{{ $department->id }}" @if((int)old('department_id') === (int)$department->id) selected @endif>{{ $department->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.text',['name'=>'email'])
        メールアドレス
    @endcomponent

    @component('components.elements.form.time',['title'=>'始業時間', 'time'=>'09:30', 'name'=>'start'])
    @endcomponent

    @component('components.elements.form.time',['title'=>'終業時間', 'time'=>'18:30','name' => 'end'])
    @endcomponent

    @slot('modalFooter')
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">追加</button>
    @endslot

@endcomponent