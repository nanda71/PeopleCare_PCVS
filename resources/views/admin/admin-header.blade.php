<!--Start topbar header-->
<header class="topbar-nav">
  <nav class="navbar navbar-expand fixed-top bg-white">
    <ul class="navbar-nav mr-auto align-items-center">
      <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
          <i class="icon-menu menu-icon"></i>
        </a>
      </li>
    </ul>   
    <!-- profile admin here -->
    @if(Session::get('login'))
      <a href="#" style="margin-right: 51px"> 
        Hi, @if(Session::get('role')==1)Patient @else Admin @endif
        <span style="font-weight: 600; color:rgb(247, 14, 14);">{{Session::get('username')}}</span>             
      </a>
    @endif
    <span class="topbar-email">
      <a href="/logout" style="margin-right:43px">Logout</a>
    </span>
  </nav>
</header