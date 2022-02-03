@extends('layouts.app')

@section('content')
<div class="container">

  <div class="row">
    <div class="col-10 offset-1">
      <form action=" {{ route('admin.posts.update') }} " method="PUT">
        @csrf
        @method('POST')
        
        <div class="mb-3">
          <label for="title" class="form-label">Titolo</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        <div class="mb-3">
          <label for="content" class="form-label">Content</label>
          <textarea type="text" class="form-control" name="content" id="content"> </textarea>
        </div>
    
        <button type="submit" class="btn btn-primary">Salva</button>
        <button type="reset" class="btn btn-warning">Reset</button>
      </form>
    </div>
  </div>
   


</div>
@endsection