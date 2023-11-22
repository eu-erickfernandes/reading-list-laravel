<x-layout title='Add book'>
    <h1>Add book</h1>
    
    <form action="{{ route('books.store') }}" method="post">
        @csrf
        
        <label for="name-field">Name</label>
        <input id="name-field" name="name" type="text">

        <button>Submit</button>
    </form>
</x-layout>