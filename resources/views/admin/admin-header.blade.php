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
     
     {{-- profile admin here --}}
     @if(Session::get('login'))
         <a href="#" style="margin-right: 51px">
             Hi, <span style="font-weight: 600; color:rgb(247, 14, 14);">{{Session::get('username')}}</span> as @if(Session::get('role')==0)User @elseif(Session::get('role')==1)Dancer @else Admin @endif
             
         </a>
     @endif
     <span class="topbar-email">
         <a href="/" style="margin-right:43px">Back to User</a>
     </span>
     <span class="topbar-email">
         <a href="/logout" style="margin-right:43px">Logout</a>
     </span>
     <!--Start topbar header-->
     
         <li class="nav-item">
             <!-- @if(Session::get('login'))
                 @if($admin->admin_photo==NULL)
                   <a href="/admin/update/profile">
                     <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                   </a>
                 @else
                   <a href="/admin/update/profile">
                     <span class="user-profile"><img src="{{asset('images/admin/profile/'.$admin->id.'/'.$admin->admin_photo)}}" class="img-circle" alt="user avatar"></span>
                   </a>
                 @endif
             @else
               <a href="/admin/update/profile">
                 <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
               </a>
             @endif -->
         </li>
    </nav>
    </header>
    <!--End topbar header-->
     
   </nav>
   </header>
   <!--End topbar header-->