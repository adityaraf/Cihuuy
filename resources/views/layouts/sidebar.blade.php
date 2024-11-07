<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
    @foreach($menus as $menu)
      <li class="nav-item">
        <a class="nav-link" href="{{ $menu->menu_link }}">
          {{-- <i class="{{ $menu->menu_icon }} menu-icon"></i> --}}
          <span class="menu-title">{{ $menu->menu_name }}</span>
        </a>
      </li>
      <hr>
    @endforeach
    </ul>
  </nav>