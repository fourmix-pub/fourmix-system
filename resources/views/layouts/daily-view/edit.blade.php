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
            @if(old('project_id') and old('form_id') == 'daily_'.$daily->id)
                <option value="{{ $project->id }}" data-subtext="{{ $project->customer ? $project->customer->name : '' }}" @if((int)old('project_id') === (int)$project->id) selected @endif>{{ '#'.$project->id.' '.$project->name }}</option>
            @else
                <option value="{{ $project->id }}" data-subtext="{{ $project->customer ? $project->customer->name : '' }}" @if($project->id == $daily->project_id) selected @endif>{{ '#'.$project->id.' '.$project->name }}</option>
            @endif
        @endforeach
    @endcomponent

    @component('components.elements.form.select', ['name' => 'work_type_id'])
        @slot('label')
            作業分類名
        @endslot
        @foreach($workTypes as $workType)
            @if(old('work_type_id') and old('form_id') == 'daily_'.$daily->id)
                <option value="{{ $workType->id }}" @if((int)old('work_type_id') === (int)$workType->id) selected @endif>{{ $workType->name }}</option>
            @else
                <option value="{{ $workType->id }}" @if($workType->id == $daily->work_type_id) selected @endif>{{ $workType->name }}</option>
            @endif
        @endforeach
    @endcomponent

    @component('components.elements.form.time', ['name' => 'start'])
        @slot('title')
            開始時刻
        @endslot
        @slot('time')
            {{ $daily->start }}
        @endslot
    @endcomponent

    @component('components.elements.form.time', ['name' => 'end'])
        @slot('title')
            終了時刻
        @endslot
        @slot('time')
            {{ $daily->end }}
        @endslot
    @endcomponent

    @component('components.elements.form.text', ['name' => 'rest', 'value' => $daily->rest])
        休憩時間
    @endcomponent


    @component('components.elements.form.select', ['name' => 'job_type_id'])
        @slot('label')
            勤務分類名
        @endslot
        @foreach($jobTypes as $jobType)
            @if(old('job_type_id') and old('form_id') == 'daily_'.$daily->id)
                <option value="{{ $jobType->id }}" @if((int)old('job_type_id') === (int)$jobType->id) selected @endif>{{ $jobType->name }}</option>
            @else
                <option value="{{ $jobType->id }}" @if($jobType->id == $daily->job_type_id) selected @endif>{{ $jobType->name }}</option>
            @endif
        @endforeach
    @endcomponent

    @component('components.elements.form.textarea',['name'=>'note', 'value'=>$daily->note])
        備考欄
    @endcomponent

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <input type="hidden" name="form_id" value="{{'daily_'.$daily->id}}">
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">編集</button>
    @endslot

@endcomponent