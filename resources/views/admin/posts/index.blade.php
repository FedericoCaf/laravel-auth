@extends('layouts.app')

@section('content')
<div class="container">
  <h1>lista posts</h1>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Titolo</th>
        <th scope="col">Contenuto</th>
        <th colspan="3" scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
          
      <tr>
        <th scope="row"> {{ $post->id }} </th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td> <a href=" {{ route('admin.posts.show', $post) }} "> <button class="btn btn-info"> SHOW</button> </a> </td>
        <td> <a href=""> <button class="btn btn-secondary">EDIT</button> </a> </td>
   
        <td> <button class="btn btn-danger"> DELETE</button> </td>
      
      </tr>
      
      @endforeach
    </tbody>
  </table>

    </div>
</div>

<div class="container">
  <p> {{ $posts->links() }} </p>
</div>


@endsection

