@extends('layout.main')
@section('container')

<div class="jumbotron container jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Post Page</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
        Omnis magnam delectus dolores tempore tempora ducimus, voluptatem asperiores similique impedit dignissimos?</p>
    </div>
</div>
<article class="container p-2">
  <h1>{{ $Posts["header"] }}</h1>
  <h5><b>{{ $Posts["author"] }}</b></h5>
  <p>{{ $Posts["paraf"] }}</p>
</article>

@endsection