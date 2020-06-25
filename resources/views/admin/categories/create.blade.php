@section('title', 'Create New Post')
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
        <a href="/admin/categories" class="btn btn-info text-dark">All Categories</a>
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
      <div class="card" style="width: 100%;">
        <h5 class="card-header">Create New Category</h5>
        <div class="card-body">
          <form action="{{route('categories.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name" class="bmd-label-floating">Name</label>
                <input type="text" name="name" class="form-control" id="name">
              </div>
              <div class="form-group col-md-6">
                <label for="slug" class="bmd-label-floating">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug">
              </div>
            </div>
            <button type="submit" class="btn btn-success">Create</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@stop
@section('customjs')
<script>
tinymce.init({
       selector: "textarea",
       plugins: [
           "advlist autolink lists link image charmap print preview hr anchor pagebreak",
           "searchreplace wordcount visualblocks visualchars code fullscreen",
           "insertdatetime media nonbreaking save table contextmenu directionality",
           "emoticons template paste textcolor colorpicker textpattern"
       ],
       file_browser_callback: function(field_name, url, type, win) {
          // trigger file upload form
          if (type == 'image') $('#formUpload input').click();
      }
     });
</script>
<script>
function textCounter( field, countfield, maxlimit ) {
 if ( field.value.length > maxlimit ) {
  field.value = field.value.substring( 0, maxlimit );
  field.blur();
  field.focus();
  return false;
 } else {
  countfield.value = maxlimit - field.value.length;
 }
}
</script>

@stop
