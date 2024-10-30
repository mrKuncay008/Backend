<!-- resources/views/regional/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Edit Regional</title>
</head>
<body>
    <div>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <form action="{{ route('regional.update', $regional->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required placeholder="Input Name" value="{{ old('name', $regional->name) }}">
        
        <label for="negara">Country:</label>
        <input type="text" name="negara" id="negara" required placeholder="Input Negara" value="{{ old('negara', $regional->negara) }}">
        
        <button type="submit">Edit</button>
    </form>
    
    <a href="{{ route('regional.index') }}">Back to List</a>
</body>
</html>
