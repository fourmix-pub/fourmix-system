@component('components.modals.form', ['target' => 'createJobType', 'buttonColor' => 'btn-danger pull-right'])

    @slot('buttonIcon')
        <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
    @endslot

    @slot('modalTitle')
        勤務分類追加
    @endslot

    @slot('url')
        {{ route('job-types.store') }}
    @endslot

    @slot('method')
    @endslot

    @component('components.elements.form.text',['name'=>'name'])
        勤務分類名
    @endcomponent

    @component('components.elements.form.text',['name'=>'unit_betting_rate'])
        単価掛率
    @endcomponent

    @slot('modalFooter')
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">追加</button>
    @endslot

@endcomponent