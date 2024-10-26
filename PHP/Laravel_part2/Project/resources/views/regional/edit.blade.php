@extends('layout.main')

@section('container')

<h1>Edit Regional</h1>
    <form action="{{ route('regional.update', $regional->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $regional->name }}" required>
        <button type="submit">Update</button>
    </form>
<a href="{{ route('regional.regional') }}">Back to List</a>