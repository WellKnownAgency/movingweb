@section('title', 'MovingCRM Features')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <div class="card-header">
          MovingCRM Features
        </div>
        <div class="card-body">
          <a href="/admin/features/create" class="btn btn-success text-dark">Create Feature</a>
					<a href="/admin/categories/create" class="btn btn-success text-dark">Create Category</a>
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
                <th scope="col">Category</th>
                <th scope="col">Created date</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($features as $feature)
              <tr>
                <th scope="row">{{ $feature->title }}</th>
                <td >{{ $feature->slug }}</td>
                <td></td>
                <td>{{ $feature->created_at}}</td>
                <td class="text-right">
                  <a href="/features/{{ $feature->slug }}" class="btn btn-success btn-sm">View</a>
                </td>
                <td>
                  <a href="/admin/features/{{$feature->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                </td>
                <td>
                  <a href="/admin/features/{{$feature->id}}/delete" class="btn btn-danger btn-sm delete">Delete</a>
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
