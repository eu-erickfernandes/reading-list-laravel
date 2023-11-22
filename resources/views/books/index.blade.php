<x-layout title='Books'>
    <h1>Books</h1>
    
    <p>Welcome {{ $name }}</p>

    <ul>
        @foreach ($books as $book)
            <li>{{ $book }}</li>
        @endforeach
    </ul>
</x-layout>