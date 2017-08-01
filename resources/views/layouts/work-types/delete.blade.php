@component('components.modals.form', ['target' => 'deleteWorkType-'.$workType->id, 'buttonColor' => 'btn-danger'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        作業分類削除
    @endslot

    @slot('url')
        {{ route('work-type.destroy', compact('workType')) }}
    @endslot

    @slot('method')
        {{ method_field('DELETE') }}
    @endslot

    {{ $workType->name }} を削除しますか？

    @slot('modalFooter')
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-danger" data-dismiss="modal">削除</button>
    @endslot

@endcomponent