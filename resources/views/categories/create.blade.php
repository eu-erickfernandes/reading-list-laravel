<x-layout title="Add category">
    <h1>Add category</h1>

    <x-categories.form :action="route('categories.store')" :name="old('name')"/>
</x-layout>