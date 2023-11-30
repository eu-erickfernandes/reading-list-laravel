<x-layout title="Categories">
    <a href="{{ route('categories.create') }}">Add category</a>

    @isset($successMessage)
        <p>{{ $successMessage }}</p>
    @endisset

    <ul>
        @foreach($categories as $category)
            <li>
                <span>{{ $category->name }}</span>

                <a href="{{ route('categories.edit', $category->id) }}">Edit</a>
            </li>
        @endforeach
    </ul>
</x-layout>