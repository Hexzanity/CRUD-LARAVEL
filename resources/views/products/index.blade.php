@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Products</h1>
        <div class="text-right mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary">Create New Product</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-left">Name</th>
                    <th class="text-left">Color</th>
                    <th class="text-left">Size</th>
                    <th class="text-left">Price</th>
                    <th class="text-left">Stock</th>
                    <th class="text-left">Category</th>
                    <th class="text-left">Supplier</th>
                    <th class="text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td class="text-left">{{ $product->name }}</td>
                        <td class="text-left">{{ $product->color }}</td>
                        <td class="text-left">{{ $product->size }}</td>
                        <td class="text-left">{{ $product->price }}</td>
                        <td class="text-left">{{ $product->stock }}</td>
                        <td class="text-left">{{ $product->category->name }}</td>
                        <td class="text-left">{{ $product->supplier->name }}</td>
                        <td class="text-left">

                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-success mr-2">Edit</a>
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
