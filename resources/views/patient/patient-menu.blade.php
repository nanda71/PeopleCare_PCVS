@extends('patient.admin-master')
@section('content')

<!-- Start wrapper-->
<div id="wrapper">
 
    @include('patient.admin-sidebar')
  
    @include('patient.admin-header')
  
  <div class="clearfix"></div>
      
    <div class="content-wrapper">
      <div class="container-fluid">
        <!--Start Dashboard Content--> 
        <div class="row">
          @foreach ($vaccine as $v)
            <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
              <div class="block3">
                <div class="block3-txt p-t-14">
                  <h4 class="p-b-7">
                    <a href="/patient/detailVaccine/{{$v->id}}" class="m-text11">
                      {{$v->vaccine_name}} - {{$v->manufacturer}}
                    </a>
                  </h4>
                </div>
              </div>
            </div>
          @endforeach
        </div><!--End Dashboard Content-->
      </div><!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 PeopleCare PCVS Website - Developer Team
        </div>
      </div>
    </footer>
    <!--End footer-->
  </div><!--End wrapper-->
</div>

@endsection
