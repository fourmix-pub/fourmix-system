@component('components.elements.table.setting.table')
    @slot('thead')
        <th>ID</th>
        <th>企業名</th>
        <th>クライアント種類</th>
        <th></th>
    @endslot
    @slot('tbody')
        @foreach($customers as $customer)
            <tr>
                <th scope="row">{{ $customer->id }}</th>
                <td>{{ $customer->name }}</td>
                <td>{{ config('system.customer.name.'.$customer->type_id) }}</td>
                <td>
                    @include('layouts.customers.edit')
                    @include('layouts.customers.delete')
                </td>
            </tr>
        @endforeach
    @endslot
@endcomponent
