@extends('layouts.app')

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="/posts">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Content</label>
          <input name="content" type="text" class="form-control" id="exampleInputPassword1" >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection