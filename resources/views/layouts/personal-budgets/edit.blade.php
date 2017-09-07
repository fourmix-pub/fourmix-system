@component('components.modals.form', ['target' => 'editPersonalBudget-'.$project->id.'-'.$user->id, 'buttonColor' => 'btn-xs btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        個人予算編集
    @endslot

    @slot('url')
        {{ route('personal-budgets.update') }}
    @endslot

    @component('components.elements.form.text',['name'=>'budget', 'value' => $user->pivot->budget])
        個人予算
    @endcomponent

    <input type="hidden" name="project_id" value="{{ $project->id }}">
    <input type="hidden" name="user_id" value="{{ $user->id }}">

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">編集</button>
    @endslot

@endcomponent
