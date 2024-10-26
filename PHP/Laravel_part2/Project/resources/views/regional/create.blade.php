@extends('layout.main')

@section('container')

<h1>Create New Regional</h1>

<form action="{{ route('regional.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Create</button>
</form>
<a href="{{ route('regional.regional') }}">Back to List</a>