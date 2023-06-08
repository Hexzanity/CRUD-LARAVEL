@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Order Details</h1>
        <div>
            <label for="customer_name">Customer Name:</label>
            <p>{{ $order->customer_name }}</p>
        </div>
        <div>
            <label for="product">Product:</label>
            <p>{{ $order->product }}</p>
        </div>

        <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-success">Edit</a>

    </div>
@endsection
