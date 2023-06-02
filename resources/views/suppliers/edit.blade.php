@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Edit Supplier</h1>
        <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ $supplier->name }}" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" id="address" value="{{ $supplier->address }}" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" class="form-control" name="contact_number" id="contact_number" value="{{ $supplier->contact_number }}" required>
            </div>
            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
