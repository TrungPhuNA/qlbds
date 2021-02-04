<div class="progress">
    @if($order)
    <p>Status:  <b>{{ $order->getStatus($order->om_status)['name'] }}</b></p>
    @endif
    <div class="progress-bar">
        @foreach($getStatus as $key => $status)
            <div class="progress-item {{ $key <= ($order->om_status ?? 0) ? 'active' : '' }}"><span>{{ $status['name'] }}</span></div>
        @endforeach
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Awb</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Receiver Address</th>
            <th scope="col">Receiver Province</th>
            <th scope="col">Receiver City</th>
            <th scope="col">Receiver barangay</th>
            <th scope="col">Product Description</th>
            <th scope="col">COD Amount</th>
            <th scope="col">Name Shop</th>
            <th scope="col" class="text-center">Status</th>
        </tr>
        </thead>
        <tbody>
            @if(isset($order) && $order)
                <tr>
                    <th scope="row">{{ $order->om_awb }}</th>
                    <td>{{ $order->om_name }}</td>
                    <td>{{ $order->om_phone }}</td>
                    <td>{{ $order->om_receiver_address }}</td>
                    <td>{{ $order->om_receiver_province_address }}</td>
                    <td>{{ $order->om_receiver_city_address }}</td>
                    <td>{{ $order->om_receiver_barangay }}</td>
                    <td>{{ $order->om_product_description }}</td>
                    <td>{{ $order->om_price }}</td>
                    <td>{{ $order->om_name_shop }}</td>
                    <td style="text-align: center">
                        <span class="c-primary"> {{ $order->getStatus($order->om_status)['name'] }} </span>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
