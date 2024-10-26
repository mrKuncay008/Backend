@extends('layout.main')

@section('container')

<h1>List of Regionals</h1>
<a href="{{ route('regional.create') }}">Create New Regional</a>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($regionals as $regional)
            <tr>
                <td>{{ $regional->id }}</td>
                <td>{{ $regional->name }}</td>
                <td>
                    <a href="{{ route('regional.edit', $regional->id) }}">Edit</a>
                    <form action="{{ route('regional.destroy', $regional->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>