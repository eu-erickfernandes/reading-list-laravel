<form action="{{ $action }}" method="post">
    @csrf

    @isset($update)
        @method('PUT')
    @endisset

    <label for="name-field">Name</label>
    
    <input 
        type="text"
        id="name-field"
        name="name"
        
        @isset($name)
            value="{{ $name }}"
        @endisset
    >

    <button>Submit</button>
</form>