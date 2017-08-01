@component('components.modals.form', ['target' => 'editWorkType-'.$workType->id, 'buttonColor' => 'btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        作業分類編集
    @endslot

    @slot('url')
        {{ route('work-type.update', compact('workType')) }}
    @endslot

    @slot('method')
        {{ method_field('PATCH') }}
    @endslot

    @component('components.elements.form.text',['name'=>'name','value'=>$workType->name])
        作業分類名
    @endcomponent

    @slot('modalFooter')
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal">登録</button>
    @endslot

@endcomponent