@extends('dashboard')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Categories</h1>

                <div class="text-left mb-3 float-right">
                    <a href="{{ route('categories.create') }}" class="btn btn-primary">Create New Category</a>
                </div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">Name</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td class="text-center col-md-1">{{ $category->name }}</td>
                                    <td class="text-center col-md-1">
                                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
