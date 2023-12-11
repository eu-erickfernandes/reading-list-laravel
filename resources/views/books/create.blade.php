<x-layout title='Add book'>
    <x-header
        title="New book"
    />
    
    <x-books.form 
        :action="route('books.store')" 
        :name="old('name')" 
        :categories="$categories"
    />
</x-layout>