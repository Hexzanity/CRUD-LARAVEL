@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Create Order</h1>
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="client_id">Client Name:</label>
                <select class="form-control" name="client_id" id="client_id" required>
                    <option value="">Select Client</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->first_name }} {{ $client->last_name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">Product:</label>
                <select class="form-control" name="product_id" id="product_id" required>
                    <option value="">Select Product</option>
                    @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" class="form-control" name="quantity" id="quantity" required>
            </div>

            <?php
                $deliveryDate = now()->addDays(10)->format('Y-m-d');
            ?>
            <input type="hidden" name="delivery_date" value="{{ $deliveryDate }}">

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
