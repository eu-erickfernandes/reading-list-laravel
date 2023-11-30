<x-layout title="Edit '{{ $book->name }}' book">
    <x-books.form 
        :action="route('books.update', $book->id)" 
        :name="$book->name" 
        :update="true" 
        :categories="$categories"
    />
</x-layout>