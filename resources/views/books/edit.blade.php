<x-layout title="Edit '{{ $book->name }}' book">
    <h1>Edit '{{ $book->name }}' book</h1>
    
    <form action="{{ route('books.update', $book->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="name-field">Name</label>
        <input id="name-field" name="name" type="text" value="{{ $book->name }}">

        <button>Submit</button>
    </form>
</x-layout>