
@extends('layouts.app')
@section('content')
<div class="card">
  <div class="card-header">
    Post Info
  </div>
  <div class="card-body">
    <h5 class="card-title">Title</h5>
    <p class="card-text">
      {{$post -> title}}
    </p>
    <h5 class="card-title">Description</h5>
    <p class="card-text">
      {{$post -> content}}
    </p>
  </div>
</div>

<div class="card my-2">
  <div class="card-header">
    Post Creator Info
  </div>
  <div class="card-body">
    <h5 class="card-title">Name</h5>
    <p class="card-text">
      {{$post->user->name}}
    </p>
    <h5 class="card-title">Email</h5>
    <p class="card-text">
      {{$post -> user->email}}
    </p>
    <h5 class="card-title">Created At</h5>
    <p class="card-text">
      {{$post ->created_at->format('l dS F Y H:i:s a')}}
    </p>
  </div>
</div>
@endsection