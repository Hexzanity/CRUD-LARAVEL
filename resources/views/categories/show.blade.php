<!-- resources/views/categories/show.blade.php -->

<h1>Category Details</h1>

<p><strong>Name:</strong> {{ $category->name }}</p>

<a href="{{ route('categories.edit', $category->id) }}">Edit</a>

<form action="{{ route('categories.destroy', $category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
