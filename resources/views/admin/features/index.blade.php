@section('title', 'MovingCRM Features')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
    <div class="container-fluid">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a href="/admin/features/create" class="btn btn-success text-dark">Create Feature</a>
					<a href="/admin/categories/create" class="btn btn-success text-dark">Create Category</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link btn-magnify" href="javascript:;">
              <i class="nc-icon nc-layout-11"></i>
              <p>
                <span class="d-lg-none d-md-block">Stats</span>
              </p>
            </a>
          </li>
          <li class="nav-item btn-rotate dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="nc-icon nc-bell-55"></i>
              <p>
                <span class="d-lg-none d-md-block">Some Actions</span>
              </p>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-rotate" href="javascript:;">
              <i class="nc-icon nc-settings-gear-65"></i>
              <p>
                <span class="d-lg-none d-md-block">Account</span>
              </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- End Navbar -->
  <div class="content"> 
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Features</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-secondary">
                  <th>
                    Title
                  </th>
                  <th>
                    Created
                  </th>
                  <th class="text-right">
                    
                  </th>
                  <th class="text-right">
                    
                    </th>
                    <th class="text-right">
                    
                      </th>
                </thead>
                <tbody>
                    @foreach ($features as $feature)
                  <tr>
                    <th scope="row">{{ $feature->title }}</th>
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
  </div>

@stop
