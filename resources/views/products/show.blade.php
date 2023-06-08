@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Product Details</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $product->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td>{{ $product->color }}</td>
                </tr>
                <tr>
                    <th>Size</th>
                    <td>{{ $product->size }}</td>
                </tr>
                <tr>
                    <th>Price</th>
                    <td>{{ $product->price }}</td>
                </tr>
                <tr>
                    <th>Stock</th>
                    <td>{{ $product->stock }}</td>
                </tr>
                <tr>
                    <th>Category</th>
                    <td>{{ $product->category->name }}</td>
                </tr>
                <tr>
                    <th>Supplier</th>
                    <td>{{ $product->supplier->name }}</td>
                </tr>

            </tbody>
        </table>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
