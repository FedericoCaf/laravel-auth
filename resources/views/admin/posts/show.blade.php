@extends('layouts.app')

@section('content')
<div class="container">

  <h1> {{ $post->title }} </h1>
    
  <p> {{ $post->content }} </p>


  <a class="p-2" href=" {{ route('admin.posts.index') }} "> torna alla lista </a>
  <a href=" {{ route('admin.posts.edit', $post) }} "> <button class="btn btn-info">EDIT</button> </a>


</div>
@endsection