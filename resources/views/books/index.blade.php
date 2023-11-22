<x-layout title='Books'>
    <h1>Books</h1>
    
    <p>Welcome {{ $name }}</p>

    <ul>
        @foreach ($books as $book)
            <li>
                <span>{{ $book->name }}</span>

                <form action="{{ route('books.destroy', $book->id) }}" method="post">
                    @csrf
                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>