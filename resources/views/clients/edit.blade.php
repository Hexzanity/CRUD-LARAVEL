@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Edit Client</h1>

        <form action="{{ route('clients.update', $client->id) }}" method="POST">
            @csrf
            @method('PUT')


            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" value="{{ $client->first_name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="{{ $client->last_name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="birthdate">Birthday</label>
                <input type="date" name="birthdate" id="birthdate" value="{{ $client->birthdate }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="{{ $client->address }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="{{ $client->email }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control">
            </div>



            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
