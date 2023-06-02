@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Create New Supplier</h1>
        <form action="{{ route('suppliers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address" id="address" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" class="form-control" name="contact_number" id="contact_number" required>
            </div>
            <!-- Add more fields as needed -->

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
