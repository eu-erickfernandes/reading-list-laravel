<form action="{{ $action }}" method="post">
    @csrf
    
    @isset($update)
        @method('PUT')
    @endisset
        
    <label for="name-field">Name</label>
    <input 
        id="name-field" 
        name="name" 
        type="text" 
        
        @isset($name)
            value="{{ $name }}"
        @endisset
    >

    <label for="category-field">Category</label>
    
    
    <select name="category_id" id="category-field">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>

    <button>Submit</button>
</form>