@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Edit Order</h1>

        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="client_id">Client:</label>
                <select name="client_id" id="client_id" class="form-control">
                    @foreach($clients as $client)
                        <option value="{{ $client->id }}" {{ $client->id == $order->client_id ? 'selected' : '' }}>
                            {{ $client->first_name }} {{ $client->last_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="product_id">Product:</label>
                <select name="product_id" id="product_id" class="form-control">
                    @foreach($products as $product)
                        <option value="{{ $product->id }}" {{ $product->id == $order->product_id ? 'selected' : '' }}>
                            {{ $product->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ $order->quantity }}">
            </div>

            <!-- Add other fields for editing the order as needed -->

            <button type="submit" class="btn btn-primary">Update Order</button>
        </form>
    </div>
@endsection
