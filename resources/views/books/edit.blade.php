<x-layout title="Edit '{{ $book->name }}' book">
    <h1>Edit '{{ $book->name }}' book</h1>

    <x-books.form :action="route('books.update', $book->id)" :name="$book->name" :update="true" />
</x-layout>