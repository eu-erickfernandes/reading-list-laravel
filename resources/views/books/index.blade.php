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

    <nav class="category-navigation">
        <menu class="menu">
            @foreach ($categories as $category)
                @if ($loop->first)
                    <li class="item active" data-nav-tab="{{ $category->id }}">{{ $category->name }}</li>
                @else
                    <li class="item" data-nav-tab="{{ $category->id }}">{{ $category->name }}</li>
                @endif

            @endforeach

            <li>
                <a href="{{ route('categories.create') }}">Add</a>
            </li>
        </menu>

        <span class="user"></span>
    </nav>

    <!-- <ul>
        @foreach ($books as $book)
            <li>
                {{ $book->name }} {{ $book->category->name }}
            </li>
        @endforeach
    </ul> -->

    <a href="{{ route('books.create') }}">Add book</a>
    
    @foreach ($categories as $category)
        <ul class="books-container" data-nav-container="{{ $category->id }}">

            @foreach ($books as $book)
                @if ($book->category->id == $category->id)
                    <li>
                        <form action="{{ route('books.markBook', $book) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <button>X</button>
                        </form>

                        {{ $book->name }} {{ $book->category->name }} {{ $book->readed }}

                        <a href="{{ route('books.edit', $book->id) }}">Edit</a>

                        <form action="{{ route('books.destroy', $book->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            
                            <button>Delete</button>
                        </form>
                    </li>
                @endif
            @endforeach
        </ul>
    @endforeach

    <script src="{{ asset('js/views/books/index.js') }}"></script>
</x-layout>
