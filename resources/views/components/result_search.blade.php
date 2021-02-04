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
            <th scope="col">AWB</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col" class="text-center">Status</th>
        </tr>
        </thead>
        <tbody>
            @if(isset($order) && $order)
                <tr>
                    <td scope="row" style="text-align: center;position:relative;" data-tooltip="Click để xem chi tiết"
                        class="css-tooltip"><a href="#">{{ $order->om_awb }}</a></td>
                    <td style="text-align: center">{{ $order->om_name }}</td>
                    <td style="text-align: center">{{ $order->om_price }}</td>
                    <td style="text-align: center">
                        <span class="c-primary"> {{ $order->getStatus($order->om_status)['name'] }} </span>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
