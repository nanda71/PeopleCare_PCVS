@extends('admin.admin-master')
@section('content')

<!-- Start wrapper-->
<div id="wrapper">
 
    @include('admin.admin-sidebar')
  
    @include('admin.admin-header')
    
  </nav>
  </header>
  <!--End topbar header-->
  
  <div class="clearfix"></div>
      
    <div class="content-wrapper">
      <div class="container-fluid">
  
        <!--Start Dashboard Content-->
        <!--End Row-->
  
        <section class="blog bgwhite p-t-94 p-b-65">
        <div class="container">
            <div class="sec-title p-b-52">
                <h1 class="m-text5 t-center" style="text-align: center">
                   {!!$vaccine->vaccine_name!!}
                </h1>
            </div>
            <div class="row" style="width: 2099px;margin-left:-69px;">
                <div class="col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title text-dark">Available on </h5>
                      <a  href="/centreDetail/{{$centre->id}}" class="card-text">{{$centre->name}} - {{$centre->manufacturer}}</a>
                    </div>
                    <div class="card-body">
                      <h5 class="card-title text-dark">Services</h5>
                    </div>
                    @foreach ($services as $s)
                    <ul class="list-group list-group-flush list shadow-none">  
                      <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a  href="/centreDetail/{{$centre->id}}">
                          {{$centre->name}} - {{$centre->manufacturer}}
                        </a>
                      </li>
                    </ul>
                    @endforeach
                </div>
              </div>
            </div><!--End Row-->
        </div>
    </section>
  
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