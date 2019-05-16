@section('title', 'Create New Product')
@section('dscr', '')
@section('keywords', '')

@extends('admin.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">
          Edit Feature
        </h5>
        <div class="card-body">
          <a href="/admin/features" class="btn btn-info">All Features</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card" style="width: 100%;">
        <h5 class="card-header">Edit Feature</h5>
        <div class="card-body">
          <form action="{{action('FeatureController@update', $feature->id)}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{$feature->title}}">
              </div>
              <div class="form-group col-md-6">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug" id="slug" placeholder="Slug" value="{{$feature->slug}}">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-12">
                <input onblur="textCounter(this.form.recipients,this,160);" disabled  onfocus="this.blur();" tabindex="999" maxlength="3" size="3" value="160" name="counter">
                <label for="dscr">Description</label>
                <input onblur="textCounter(this,this.form.counter,160);" onkeyup="textCounter(this,this.form.counter,160);" type="textarea" class="form-control" name="dscr" id="dscr" value="{{$feature->dscr}}">
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
              <label for="body">Body</label>
              <textarea class="form-control" id="Body" name="body" rows="7">{{$feature->body}}</textarea>
            </div>

            <button type="submit" class="btn btn-success">Save Changes</button>
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
