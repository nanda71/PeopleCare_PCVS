<nav id="sidebar">
    <div class="p-4 pt-5">
      <a href="#" class="img logo rounded-circle mb-5" style="background-image: url('{{asset('dancerpage/images/artstudio/profile/'.$artstudio->id.'/'.$artstudio->profile_image)}}');"></a>
  <ul class="list-unstyled components mb-5">
    <a href="/dancer/home" style="margin-left: 29px; font-size:18px">HI,{{$artstudio->username}} as Dancer</a><br>
  <li class="active" style="background-color: transparent">
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage Info</a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
    <li>
        <a href="/dancer/managemystd">Manage MyStudio</a>
    </li>
    <li>
        <a href="/dancer/imagestd">Input Image</a>
    </li>
    <li>
        <a href="/dancer/videostd">Input Video</a>
    </li>
    <li>
        <a href="/dancer/profupdate">Update Profile</a>
    </li>
    </ul>
  </li>
  <li>
      <a href="/dancer/dancestype">Presented Dances</a>
  </li>
  <li>
  {{-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
  <ul class="collapse list-unstyled" id="pageSubmenu">
    <li>
        <a href="#">Page 1</a>
    </li>
    <li>
        <a href="#">Page 2</a>
    </li>
    <li>
        <a href="#">Page 3</a>
    </li>
  </ul> --}}
  </li>
  <li>
  <a href="/dancer/services">Dancing Services</a>
  </li>
  <li>
  <a href="/dancer/orders">Orders</a>
  </li>
  <li>
  <a href="/dancer/inbox">Inbox</a>
  </li>
  {{-- <li>
  <a href="#">Contact</a>
  </li> --}}
</ul>

{{-- <div class="footer">
    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
</div> --}}

</div>
</nav>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">

    <button type="button" id="sidebarCollapse" class="btn btn-primary">
      <i class="fa fa-bars"></i>
      <span class="sr-only">Toggle Menu</span>
    </button>
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav ml-auto">
        {{-- <li class="nav-item active">
            <a class="nav-link" href="/dancer/home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dancer/orders">Orders</a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link" href="/">Back to User</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">Logout</a>
        </li>
      </ul>
  </div>
</div>
</nav>