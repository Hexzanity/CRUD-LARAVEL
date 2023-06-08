@extends('dashboard')

@section('content')
    <div class="container">

        <h1>Orders</h1>
                <div class="text-left mb-3 float-right">
            <a href="{{ route('orders.create') }}" class="btn btn-primary">Create New Order</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">Customer Name</th>
                    <th class="text-center">Order Date</th>
                    <th class="text-center">Product</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Order Received</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->client->first_name }} {{ $order->client->last_name }}</td>
                        <td>{{ $order->order_date }}</td>
                        <td>{{ $order->product->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->delivery_date }}</td>
                        <td>
                            <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this order?')">Cancel Order</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
