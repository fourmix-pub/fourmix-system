@component('components.modals.form', ['target' => 'editDaily-'.$daily->id, 'buttonColor' => 'btn-xs btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        日報編集
    @endslot

    @slot('url')
        {{ route('daily.view.update', compact('daily')) }}
    @endslot

    @component('components.elements.form.day',['name' => 'date', 'value' => $daily->date])
        日付
    @endcomponent

    @component('components.elements.form.select', ['name' => 'project_id'])
        @slot('label')
            プロジェクト名
        @endslot
        @foreach($projects as $project)
            <option value="{{ $project->id }}" @if($project->id == $daily->project_id) selected @endif>{{ $project->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.select', ['name' => 'work_type_id'])
        @slot('label')
            作業分類名
        @endslot
        @foreach($workTypes as $workType)
            <option value="{{ $workType->id }}" @if($workType->id == $daily->work_type_id) selected @endif>{{ $workType->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.textarea',['name'=>'note', 'value'=>$daily->note])
        備考欄
    @endcomponent

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">編集</button>
    @endslot

@endcomponent