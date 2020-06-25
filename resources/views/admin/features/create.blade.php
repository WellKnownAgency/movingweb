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
        <a href="/admin/features" class="btn btn-info text-dark">All Features</a>
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
              <h5 class="card-header">Create New Feature</h5>
              <div class="card-body">
                <form action="{{route('features.store')}}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="title" class="bmd-label-floating">Title</label>
                      <input type="text" name="title" class="form-control" id="title">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="slug" class="bmd-label-floating">Slug</label>
                      <input type="text" class="form-control" name="slug" id="slug">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-12">
                      <input onblur="textCounter(this.form.recipients,this,160);" disabled  onfocus="this.blur();" tabindex="999" maxlength="3" size="3" value="160" name="counter">
                      <label for="dscr">Description</label>
                      <input onblur="textCounter(this,this.form.counter,160);" onkeyup="textCounter(this,this.form.counter,160);" type="textarea" class="form-control" name="dscr" id="dscr" placeholder="Description">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputState">Category</label>
                      <select id="inputState" class="form-control" name="category_id">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{ $category->name }}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="text">Body</label>
                    <textarea class="form-control" id="text" name="body" rows="20"></textarea>
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
