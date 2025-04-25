<h2>Đơn hàng của: {{ $user->name }}</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Mã đơn hàng</th>
        <th>Ngày tạo</th>
        <th>Chi tiết</th>
    </tr>
    @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->created_at }}</td>
            <td>
                <ul>
                    @foreach ($order->orderItems as $item)
                        <li>{{ $item->product->name }} x {{ $item->quantity }}</li>
                    @endforeach
                </ul>
            </td>
        </tr>
    @endforeach
</table>
