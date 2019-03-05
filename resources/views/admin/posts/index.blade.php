@section('title', '')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <div class="card-header">
          MovingCRM Posts
        </div>
        <div class="card-body">
          <a href="/admin/posts/create" class="btn btn-success">Create Post</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Image</th>
                <th scope="col">Created date</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
              <tr>
                <th scope="row">{{ $post->title }}</th>
                <td >{{ $post->slug }}</td>
                <td><img src="/images/blog/{{$post->image}}" width="150px;" height"auto"></td>
                <td>{{ $post->created_at}}</td>
                <td class="text-right">
                  <a href="" class="btn btn-success btn-sm">View</a>
                </td>
                <td>
                  <a href="/admin/posts/{{$post->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                </td>
                <td>
                  <a href="/admin/posts/" class="btn btn-danger btn-sm delete">Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
