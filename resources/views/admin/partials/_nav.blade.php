<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
      <a href="/admin" class="simple-text logo-normal">
        <div class="logo-image-big">
          <img src="/images/logo.svg">
        </div>
      </a>
    </div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="{{ Request::is('/') ?"active" : ""}}">
          <a href="/admin">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/posts/') ?"active" : ""}}">
          <a href="/admin/posts">
            <i class="nc-icon nc-tile-56"></i>
            <p>Posts</p>
          </a>
        </li>
        <li class="{{ Request::is('admin/features/') ?"active" : ""}}">
          <a href="/admin/features">
            <i class="nc-icon nc-paper"></i>
            <p>Features</p>
          </a>
        </li>
      </ul>
    </div>
  </div>