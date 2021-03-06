@component('components.modals.form', ['target' => 'createWorkType', 'buttonColor' => 'btn-danger pull-right'])

    @slot('buttonIcon')
        <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
    @endslot

    @slot('modalTitle')
        作業分類追加
    @endslot

    @slot('url')
        {{ route('work-types.store') }}
    @endslot

    @slot('method')
    @endslot

    @component('components.elements.form.text',['name'=>'name'])
        作業分類名
    @endcomponent

    @slot('modalFooter')
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">追加</button>
    @endslot

@endcomponent