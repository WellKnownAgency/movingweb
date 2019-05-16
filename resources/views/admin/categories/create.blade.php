@section('title', 'Create New Post')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">
          MovingCRM Categories
        </h5>
        <div class="card-body">
          <a href="/admin/categories" class="btn btn-info">All Categories</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
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
