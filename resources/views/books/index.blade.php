<x-layout title='Books'>
    <h1>Books</h1>
    
    <p>Welcome {{ $name }}</p>

    @isset($successMessage)
        <p>{{ $successMessage }}</p>
    @endisset

    <ul>
        @foreach ($books as $book)
            <li>
                <span>{{ $book->name }}</span>

                <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                <form action="{{ route('books.destroy', $book->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>