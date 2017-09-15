@component('components.modals.form', ['target' => 'createCustomer', 'buttonColor' => 'btn-danger pull-right'])

    @slot('buttonIcon')
        <i class="fa fa-plus" aria-hidden="true"></i> <span class="hidden-xs">追加</span>
    @endslot

    @slot('design')
        style="margin-right: 10px;"
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

    @include('layouts.customers.customer-types', ['typeId' => null])

    @slot('modalFooter')
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">登録</button>
    @endslot

@endcomponent