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
          MovingCRM Categories
        </div>
        <div class="card-body">
          <a href="/admin/categories/create" class="btn btn-success">Create category</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <div class="table-responsive">
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">Name</th>
                <th scope="col">Slug</th>
                <th scope="col">Created date</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
              <tr>
                <th scope="row">{{ $category->name }}</th>
                <td >{{ $category->slug }}</td>
                <td></td>
                <td>{{ $category->created_at}}</td>
                <td class="text-right">
                  <a href="/blog/{{ $category->slug }}" class="btn btn-success btn-sm">View</a>
                </td>
                <td>
                  <a href="/admin/posts/{{$category->id}}/delete" class="btn btn-danger btn-sm delete">Delete</a>
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
