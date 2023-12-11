<x-layout title="Edit '{{ $category->name }}' category">
    <x-header
        title="Edit '{{ $category->name }}' category"
    />

    <x-categories.form 
        :action="route('categories.update', $category->id)"
        :name="$category->name"
        :update="true"
    />
</x-layout>