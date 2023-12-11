<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Reading List | {{ $title }}</title>

        <link rel="stylesheet" href="{{ asset('css/global/reset.css') }}">
        <link rel="stylesheet" href="{{ asset('css/global/layout.css') }}">

        <!-- LOCAL SCOPE CSS -->
        @isset($css)
            <link rel="stylesheet" href="{{ $css }}">
        @endisset
    </head>

    <body>
        <!-- <header>
            <a href="{{ route('books.index') }}">Books</a>
            <a href="{{ route('categories.index') }}">Categories</a>
        </header>

        <h1>{{ $title }}</h1> -->

        
        <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->

        <main>
            {{ $slot }}
        </main>
    </body>
</html>