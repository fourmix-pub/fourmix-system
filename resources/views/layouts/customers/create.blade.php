@component('components.modals.form', ['target' => 'createCustomer', 'buttonColor' => 'btn-danger pull-right'])

    @slot('buttonIcon')
        <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
    @endslot

    @slot('modalTitle')
        顧客追加
    @endslot

    @slot('url')
        {{ route('customers.store') }}
    @endslot

    @component('components.elements.form.text',['name'=>'name'])
        顧客名
    @endcomponent

    @foreach(config('system.customer.name') as $key => $value)
        <label class="radio-inline">
            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="{{ $key }}">{{ $value }}
        </label>
    @endforeach

    @slot('modalFooter')
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal">登録</button>
    @endslot

@endcomponent