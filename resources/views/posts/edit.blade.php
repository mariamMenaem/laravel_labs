@extends('layouts.app')
@section('content')
    <form method="POST" action="/posts/{{$post->id}}">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$post -> title}}">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <input name="content" type="text" class="form-control" id="exampleInputPassword1" value="{{$post -> content}}" >
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection