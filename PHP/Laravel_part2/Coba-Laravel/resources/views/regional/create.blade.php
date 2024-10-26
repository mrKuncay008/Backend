<!-- resources/views/regional/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Create Regional</title>
</head>
<body>
    <h1>Create New Regional</h1>
    <form action={{ route('regional.store') }} method="post">
        @csrf
        @method('post')

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required placeholder="Input Name">
        <label for="negara">Country:</label>
        <input type="text" name="negara" id="negara" required placeholder="Input Negara">
        <button type="submit">Create</button>
    </form>
    <a href="{{ route('regional.index') }}">Back to List</a>
</body>
</html>
