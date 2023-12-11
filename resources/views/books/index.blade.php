<x-layout title='My books' css="{{ asset('css/views/books/index.css') }}">
    <!-- <a href="{{ route('books.create') }}">Add book</a>
    
    @isset($successMessage)
        <p>{{ $successMessage }}</p>
    @endisset

    <ul>
        @foreach ($books as $book)
            <li>
                <span>{{ $book->name }} - {{ $book->category->name }}</span>

                <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                <form action="{{ route('books.destroy', $book->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    
                    <button>Delete</button>
                </form>
            </li>
        @endforeach
    </ul> -->

    <nav class="navigation">
        <menu class="menu">
            @foreach ($categories as $category)
                <li class="item">{{ $category->name }}</li>
            @endforeach

            <li class="item">
                <a href="{{ route('books.create') }}">Add</a>
            </li>
        </menu>

        <span class="user"></span>
    </nav>
</x-layout>