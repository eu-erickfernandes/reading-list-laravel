<x-layout title='Add book'>
    <h1>Add book</h1>

    <x-books.form :action="route('books.store')" :name="old('name')" />
</x-layout>