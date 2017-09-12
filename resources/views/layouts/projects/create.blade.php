@component('components.modals.form', ['target' => 'create-', 'buttonColor' => 'btn-danger pull-right'])

    @slot('buttonIcon')
        <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
    @endslot

    @slot('design')
        style="margin-right: 10px;"
    @endslot

    @slot('modalTitle')
        プロジェクト追加
    @endslot

    @slot('url')
        {{ route('projects.store') }}
    @endslot

    @component('components.elements.form.text',['name' => 'name'])
        プロジェクト名
    @endcomponent

    @component('components.elements.form.select', ['name' => 'customer_id'])
        @slot('label')
            顧客名
        @endslot
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}" @if((int)old('customer_id') === (int)$customer->id) selected @endif>{{ $customer->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.select', ['name' => 'user_id'])
        @slot('label')
            責任者名
        @endslot
        @foreach($users as $user)
            <option value="{{ $user->id }}" @if((int)old('user_id') === (int)$user->id) selected @endif>{{ $user->name }}</option>
        @endforeach
    @endcomponent

    @component('components.elements.form.text',['name'=>'cost'])
        受注金額
    @endcomponent

    @component('components.elements.form.text',['name'=>'budget'])
        実行予算
    @endcomponent

    @component('components.elements.form.day', ['name' => 'start'])
        開始日
    @endcomponent

    @component('components.elements.form.day', ['name' => 'end_expect'])
        完了予定日
    @endcomponent

    @component('components.elements.form.day', ['name' => 'end'])
        完了日
    @endcomponent

    @component('components.elements.form.textarea',['name'=>'note'])
        備考欄
    @endcomponent

    @slot('modalFooter')
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">追加</button>
    @endslot

@endcomponent