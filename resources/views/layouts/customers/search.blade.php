@component('components.accordions.accordion')
    <form action="{{ route('customers.index') }}" class="form-horizontal" method="get">

        @component('components.elements.form.select', ['name' => 'customer_id'])
            @slot('label')
                企業名
            @endslot
            @foreach($customersSelect as $customer)
                <option value="{{ $customer->id }}" @if((int)$customerId === (int)$customer->id) selected @endif>{{ $customer->name }}</option>
            @endforeach

        @endcomponent

        @include('layouts.customers.customer-types')

        <div class="row form text-center">
            <div class="btn-group">
                <button type="submit" class="btn">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>&nbsp;&nbsp;検索
                </button>
            </div>
        </div>
    </form>
@endcomponent