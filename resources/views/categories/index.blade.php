<x-layout title="Categories">
    <h1>Categories</h1>

    <a href="{{ route('categories.create') }}">Add category</a>

    @isset($successMessage)
        <p>{{ $successMessage }}</p>
    @endisset

    <ul>
        @foreach($categories as $category)
            <li>
                <span>{{ $category->name }}</span>
            </li>
        @endforeach
    </ul>
</x-layout>