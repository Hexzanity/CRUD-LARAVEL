@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Clients</h1>

                <div class="text-left mb-3 float-right">
            <a href="{{ route('clients.create') }}" class="btn btn-primary">Create New Client</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">First Name</th>
                    <th class="text-center">Last Name</th>
                    <th class="text-center">Birthday</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Password</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td class="text-center col-md-1">{{ $client->first_name }}</td>
                        <td class="text-center col-md-1">{{ $client->last_name }}</td>
                        <td class="text-center col-md-1">{{ $client->birthdate }}</td>
                        <td class="text-center col-md-1">{{ $client->address }}</td>
                        <td class="text-center col-md-1">{{ $client->email }}</td>
                        <td class="text-center col-md-1">{{ $client->password }}</td>
                        <td class="col-md-1">
                            <a href="{{ route('clients.edit', $client->id) }}" class="btn btn-success">Edit</a>
                            <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
