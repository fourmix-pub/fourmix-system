@component('components.modals.form', ['target' => 'editProject-'.$project->id, 'buttonColor' => 'btn-xs btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        プロジェクト編集
    @endslot

    @slot('url')
        {{ route('projects.update', compact('project')) }}
    @endslot

    @component('components.elements.form.text',['name' => 'name', 'value' => $project->name])
        プロジェクト名
    @endcomponent

    <div class="form-group">
        <label class="col-xs-3 control-label" for="non-display_flag">非表示フラグ</label>
        <div class="col-xs-8 checkbox" style="margin-left: 20px;">
            <input type="checkbox" name="can_display" value="1">
        </div>
    </div>

    @component('components.elements.form.select', ['name' => 'customer_id'])
        @slot('label')
            顧客名
        @endslot
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}" @if($customer->id == $project->customer_id) selected @endif>{{ $customer->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.select', ['name' => 'user_id'])
        @slot('label')
            責任者名
        @endslot
        @foreach($users as $user)
            <option value="{{ $user->id }}" @if($user->id == $project->user_id) selected @endif>{{ $user->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.text',['name'=>'cost', 'value' => $project->cost])
        受注金額
    @endcomponent

    @component('components.elements.form.text',['name'=>'budget', 'value' => $project->budget])
        実行予算
    @endcomponent

    @component('components.elements.form.day', ['name' => 'start', 'value' => $project->start])
        開始日
    @endcomponent

    @component('components.elements.form.day', ['name' => 'end_expect', 'value' => $project->end_expect])
        完了予定日
    @endcomponent

    @component('components.elements.form.day', ['name' => 'end', 'value' => $project->end])
        完了日
    @endcomponent

    @component('components.elements.form.textarea',['name'=>'note', 'value'=>$project->note])
        備考欄
    @endcomponent

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">編集</button>
    @endslot

@endcomponent