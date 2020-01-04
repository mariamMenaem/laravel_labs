@extends('layouts.app')
@section('content')

<a class="nav-link btn bg-dark my-1" style="width:200px ; color:aliceblue" href="posts/create">Create Post</a>

<table class="table table-dark">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Posted By</th>
            <th scope="col">Title</th>
            <th scope="col">Slug</th>
            <th scope="col">Created_At</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $index => $value)
        <tr>
            <th scope="row">{{$value['id']}}</th>
            <td>{{$value->user->name}}</td>
            <td>{{$value['title']}}</td>
            <td>{{$value['slug']}}</td>
            <td>{{$value['created_at']->format('y-m-d')}}</td>
            <td><a class=" btn bg-secondary mb-1" style=" color:aliceblue" href="{{route('posts.show',['post' => $value['id'] ])}}">View</a>
                <a class="btn bg-primary mb-1" style="color:aliceblue" href="{{route('posts.edit',['post' => $value['id'] ])}}">Edit</a>
                <form method="post" action="{{route('posts.destroy',['post' => $value['id'] ])}}" style="display: inline-block">
                @csrf
                @method('delete')   
                <button onclick="return confirm('Are You Sure You Want To delete')" class="btn bg-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <div>
        {{$posts->links()}}
    </div>
</table>
@endsection