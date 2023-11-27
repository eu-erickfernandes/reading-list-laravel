<form action="{{ $action }}" method="post">
    @csrf
    
    @isset($update)
        @method('PUT')
    @endisset
        
    <label for="name-field">Name</label>
    <input id="name-field" name="name" type="text" @isset($name)value="{{ $name }}"@endisset>

    <button>Submit</button>
</form>