@component('components.modals.form', ['target' => 'editWorkType-'.$department->id, 'buttonColor' => 'btn-xs btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        部門編集
    @endslot

    @slot('url')
        {{ route('departments.update', compact('department')) }}
    @endslot

    @component('components.elements.form.text',['name'=>'name','value'=>$department->name])
        部門名
    @endcomponent

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">編集</button>
    @endslot

@endcomponent