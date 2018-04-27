@extends('layouts.admin')



@section('content')

    <h1>Posts</h1>

    <table class="table table-striped">
        <thead>
          <tr>
              <th>ID</th>
              <th>Owner</th>
              <th>Category</th>
              <th>Photo</th>
              <th>Title</th>
              <th>Body</th>
              <th>Created_at</th>
              <th>Updated_at</th>
          </tr>
        </thead>
        <tbody>

            @if($posts)
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td><img height="50" src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}} " alt=""></td>
                        <td><a href="{{route('admin.posts.edit', $post->id)}}">{{$post->user->name}}</a></td>
                        <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{str_limit($post->body, 140)}}</td>
                        <td>{{$post->created_at->diffForhumans()}}</td>
                        <td>{{$post->updated_at->diffForhumans()}}</td>
                        <td><a href="{{route('home.post', $post->id)}}">View Post</a></td>
                        <td><a href="{{route('admin.comments.show', $post->id)}}">View Comments</a></td>
                    </tr>
                @endforeach
            @endif
        </tbody>

    </table>

@stop