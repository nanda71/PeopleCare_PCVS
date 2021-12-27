@extends('patient.admin-master')
@section('content')

<!-- Start wrapper-->
<div id="wrapper">
 
    @include('patient.admin-sidebar')
  
    @include('patient.admin-header')
    
  </nav>
  </header>
  <!--End topbar header-->
  
  <div class="clearfix"></div>
      
    <div class="content-wrapper">
      <div class="container-fluid">
  
        <!--Start Dashboard Content-->
        
        <div class="row mt-3">
          
        </div><!--End Row-->
  
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-4">
              <div class="card profile-card-1">
                 <img src="https://via.placeholder.com/800x500" class="background" alt="profile-image"/>
                 <img src="{{asset('images/user/profile/'.$user->id.'/'.$user->user_photo)}}" alt="profile-image" class="profile"/>
                 <div class="card-content">
                    <h2 class="text-white">{{$->username}}<small>{{$user->email}}</small></h2>
                      <div class="icon-block">
                          <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                          <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                          <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                      </div>
                  </div>
              </div>
            </div>
          </div><!--End Row-->
  
        <!--End Dashboard Content-->
  
      </div>
      <!-- End container-fluid-->
      
      </div><!--End content-wrapper-->
     <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      
      <!--Start footer-->
      <footer class="footer">
        <div class="container">
          <div class="text-center">
            Copyright © 2020 OnlineArtPerformance Admin
          </div>
        </div>
      </footer>
      <!--End footer-->
     
    </div><!--End wrapper-->

@endsection