@extends('dashboard')

@section('content')
    <div class="container">
        <h1>Categories</h1>

        <div class="text-right mb-3">
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
                            <td class="text-center">{{ $category->name }}</td>
                            <td>
                                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-success">Edit</a>
                                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display: inline-block;">
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
    </div>
@endsection
