@component('components.modals.form', ['target' => 'editJobType-'.$jobType->id, 'buttonColor' => 'btn-xs btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        勤務分類編集
    @endslot

    @slot('url')
        {{ route('job-types.update', compact('jobType')) }}
    @endslot

    @component('components.elements.form.text',['name'=>'name','value'=>$jobType->name])
        勤務分類名
    @endcomponent

    @component('components.elements.form.text',['name'=>'unit_betting_rate','value'=>$jobType->unit_betting_rate])
        単価掛率
    @endcomponent

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">編集</button>
    @endslot

@endcomponent