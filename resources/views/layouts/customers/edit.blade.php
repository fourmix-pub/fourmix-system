@component('components.modals.form', ['target' => 'editCustomer-'.$customer->id, 'buttonColor' => 'btn-xs btn-warning'])

    @slot('buttonIcon')
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
    @endslot

    @slot('modalTitle')
        顧客編集
    @endslot

    @slot('url')
        {{ route('customers.update', compact('customer')) }}
    @endslot

    @component('components.elements.form.text',['name'=>'name','value'=>$customer->name])
        顧客名
    @endcomponent

    @include('layouts.customers.customer-types')

    @slot('modalFooter')
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <button type="button" class="btn btn-default closed" data-dismiss="modal">閉じる</button>
        <button type="submit" class="btn btn-primary">登録</button>
    @endslot

@endcomponent