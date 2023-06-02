@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Create Product</h1>
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="color">Color:</label>
                <input type="text" class="form-control" name="color" id="color" required>
            </div>
            <div class="form-group">
                <label for="size">Size:</label>
                <input type="text" class="form-control" name="size" id="size" required>
            </div>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price" id="price" required>
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" name="stock" id="stock" required>
            </div>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select class="form-control" name="category_id" id="category_id" required>
                    <option value="">Select Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="supplier_id">Supplier:</label>
                <select class="form-control" name="supplier_id" id="supplier_id" required>
                    <option value="">Select Supplier</option>
                    @foreach ($suppliers as $supplier)
                        <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Create</button>
        </form>
    </div>
@endsection
