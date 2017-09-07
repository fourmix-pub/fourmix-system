@component('components.modals.form', ['target' => 'deleteProject-'.$project->id, 'buttonColor' => 'btn-xs btn-danger'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        プロジェクト削除
    @endslot

    @slot('url')
        {{ route('projects.destroy', compact('project')) }}
    @endslot

    {{ $project->name }} を削除しますか？

    @slot('modalFooter')
        {{ method_field('DELETE') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-danger">削除</button>
    @endslot
@endcomponent