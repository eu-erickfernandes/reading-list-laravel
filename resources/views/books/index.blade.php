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
            <li class="item active" data-nav-tab="all">All</li>

            @foreach ($categories as $category)
                <li class="item" data-nav-tab="{{ $category->id }}">{{ $category->name }}</li>
            @endforeach
        </menu>

        <span class="user"></span>
    </nav>

    <a class="new-book-button" href="{{ route('books.create') }}">New book</a>
    
    <ul class="books-container" data-nav-container="all">
        @foreach ($books as $book)
            <li>
                <div>
                    <form action="{{ route('books.markBook', $book) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <button class="readed-button">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m382-354 339-339q12-12 28.5-12t28.5 12q12 12 12 28.5T778-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z"/></svg>
                        </button>
                    </form>

                    <p class="label">
                        <span>{{ $book->name }} </span>
                        <span class="book__category">{{ $book->category->name }}</span>
                    </p>
                </div>

                <div>
                    <a class="edit-button" href="{{ route('books.edit', $book->id) }}">
                        <svg  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M200-200h57l391-391-57-57-391 391v57Zm-40 80q-17 0-28.5-11.5T120-160v-97q0-16 6-30.5t17-25.5l505-504q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L313-143q-11 11-25.5 17t-30.5 6h-97Zm600-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                    </a>
                    
                    <form action="{{ route('books.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        
                        <button class="delete-button">
                            <svg  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M280-120q-33 0-56.5-23.5T200-200v-520q-17 0-28.5-11.5T160-760q0-17 11.5-28.5T200-800h160q0-17 11.5-28.5T400-840h160q17 0 28.5 11.5T600-800h160q17 0 28.5 11.5T800-760q0 17-11.5 28.5T760-720v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM400-280q17 0 28.5-11.5T440-320v-280q0-17-11.5-28.5T400-640q-17 0-28.5 11.5T360-600v280q0 17 11.5 28.5T400-280Zm160 0q17 0 28.5-11.5T600-320v-280q0-17-11.5-28.5T560-640q-17 0-28.5 11.5T520-600v280q0 17 11.5 28.5T560-280ZM280-720v520-520Z"/></svg>
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    @foreach ($categories as $category)
        <ul class="books-container" data-nav-container="{{ $category->id }}">

            @foreach ($books as $book)
                @if ($book->category->id == $category->id)
                    <li>
                        <div>

                            <form action="{{ route('books.markBook', $book) }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <button class="readed-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="m382-354 339-339q12-12 28.5-12t28.5 12q12 12 12 28.5T778-636L410-268q-12 12-28 12t-28-12L182-440q-12-12-11.5-28.5T183-497q12-12 28.5-12t28.5 12l142 143Z"/></svg>
                                </button>
                            </form>
                            
                            <p class="label">
                                <span>{{ $book->name }} </span>
                            </p>
                        </div>
                        
                        <div>
                            <a class="edit-button" href="{{ route('books.edit', $book->id) }}">
                                <svg  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M200-200h57l391-391-57-57-391 391v57Zm-40 80q-17 0-28.5-11.5T120-160v-97q0-16 6-30.5t17-25.5l505-504q12-11 26.5-17t30.5-6q16 0 31 6t26 18l55 56q12 11 17.5 26t5.5 30q0 16-5.5 30.5T817-647L313-143q-11 11-25.5 17t-30.5 6h-97Zm600-584-56-56 56 56Zm-141 85-28-29 57 57-29-28Z"/></svg>
                            </a>

                            <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                
                                <button class="delete-button">
                                    <svg  xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M280-120q-33 0-56.5-23.5T200-200v-520q-17 0-28.5-11.5T160-760q0-17 11.5-28.5T200-800h160q0-17 11.5-28.5T400-840h160q17 0 28.5 11.5T600-800h160q17 0 28.5 11.5T800-760q0 17-11.5 28.5T760-720v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM400-280q17 0 28.5-11.5T440-320v-280q0-17-11.5-28.5T400-640q-17 0-28.5 11.5T360-600v280q0 17 11.5 28.5T400-280Zm160 0q17 0 28.5-11.5T600-320v-280q0-17-11.5-28.5T560-640q-17 0-28.5 11.5T520-600v280q0 17 11.5 28.5T560-280ZM280-720v520-520Z"/></svg>
                                </button>
                            </form>
                        </div>
                    </li>
                @endif
            @endforeach
        </ul>
    @endforeach

    <script src="{{ asset('js/views/books/index.js') }}"></script>
</x-layout>