@component('components.modals.form', ['target' => 'deletePersonalBudget-'.$personalBudget->project_id.'-'.$personalBudget->user_id, 'buttonColor' => 'btn-xs btn-danger'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        個人予算削除
    @endslot

    @slot('url')
        {{ route('personal-budgets.destroy') }}
    @endslot

    {{ $personalBudget->project->name }}　{{ $personalBudget->user->name }}　の個人予算を削除しますか？

    @slot('modalFooter')
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-danger">削除</button>
    @endslot
@endcomponent