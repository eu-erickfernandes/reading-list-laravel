<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Reading List | {{ $title }}</title>

        <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    </head>

    <body>
        <header>
            <a href="{{ route('books.index') }}">Books</a>
            <a href="{{ route('books.create') }}">Add book</a>
        </header>
        
        {{ $slot }}
    </body>
</html>