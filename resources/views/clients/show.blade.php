@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Client Details</h1>

        <p><strong>First Name:</strong> {{ $client->first_name }}</p>
        <p><strong>Last Name:</strong> {{ $client->last_name }}</p>
        <p><strong>Birthday:</strong> {{ $client->birthdate }}</p>
        <p><strong>Address:</strong> {{ $client->address }}</p>
        <p><strong>Email:</strong> {{ $client->email }}</p>

        <a href="{{ route('clients.edit', $client->id) }}">Edit</a>

        <form action="{{ route('clients.destroy', $client->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endsection
