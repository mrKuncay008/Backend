@extends('layout.main')

@section('container')
    
<div class="jumbotron text-black-50 jumbotron-fluid">
    <div class="container">
        <h1 class="display-4 ">About Page</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            Omnis magnam delectus dolores tempore tempora ducimus, voluptatem asperiores similique impedit dignissimos?</p>
        </div>
    </div>
    
    <div class="container p-3">
        <h3>{{ $Abouts['name'] }} </h3>
        <p>{{ $Abouts['email'] }}</p>
        <img src="<?= $Abouts['image'] ?>" alt="masjhon" class="img-thumbnail rounded-circle" width="200">
    </div>
    
@endsection