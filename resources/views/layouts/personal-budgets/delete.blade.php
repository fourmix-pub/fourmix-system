@component('components.modals.form', ['target' => 'deletePersonalBudget-'.$project->id.'-'.$user->id, 'buttonColor' => 'btn-xs btn-danger'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        個人予算削除
    @endslot

    @slot('url')
        {{ route('personal-budgets.destroy') }}
    @endslot

    {{ $project->name }}　{{ $user->name }}　の個人予算を削除しますか？

    <input type="hidden" name="project_id" value="{{ $project->id }}">
    <input type="hidden" name="user_id" value="{{ $user->id }}">

    @slot('modalFooter')
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-danger">削除</button>
    @endslot
@endcomponent