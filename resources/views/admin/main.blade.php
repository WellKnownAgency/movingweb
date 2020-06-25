<html lang-"en">
  <head>
    @include('admin/partials/_head')
  </head>
  <body>
    <div class="wrapper ">
      @include('admin/partials/_nav')
      <div class="main-panel">
      @yield('content')
      @include('admin/partials/_footer')
      </div>
    </div>
    @include('admin/partials/_js')
  </body>
</html>
