<x-layout title="Add category">
    <x-header
        title="New category"
    />

    <x-categories.form 
        :action="route('categories.store')" 
        :name="old('name')"
    />
</x-layout>