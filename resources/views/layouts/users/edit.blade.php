@component('components.modals.form', ['buttonId' =>$user->id ,'target' => 'editJobType-'.$user->id, 'buttonColor' => 'btn-xs btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        担当者編集
    @endslot

    @slot('url')
        {{ route('users.update', compact('user')) }}
    @endslot

    @component('components.elements.form.text',['name'=>'name', 'value'=> $user->name])
        担当者名
    @endcomponent

    @component('components.elements.form.text',['name'=>'cost', 'value'=> $user->cost])
        作業単価
    @endcomponent

    @component('components.elements.form.select', ['name' => 'department_id'])
        @slot('label')
            部門
        @endslot
        @foreach($departments as $department)
            <option value="{{ $department->id }}" @if($department->id == $user->department_id) selected @endif>{{ $department->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.text',['name'=>'email', 'value'=> $user->email])
        メールアドレス
    @endcomponent

    {{--@component('components.elements.form.pass', ['name' => 'password'])--}}
        {{--パスワード--}}
    {{--@endcomponent--}}

    {{-- TODO:実装 --}}
    {{--@component('components.elements.form.pass', ['name' => 'password_confirmation'])--}}
    {{--パスワード確認--}}
    {{--@endcomponent--}}

    @component('components.elements.form.time',['title'=>'始業時間', 'time'=>$user->start, 'name'=>'start'])
    @endcomponent

    @component('components.elements.form.time',['title'=>'終業時間', 'time'=>$user->end, 'name' => 'end'])
    @endcomponent

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">編集</button>
    @endslot

@endcomponent