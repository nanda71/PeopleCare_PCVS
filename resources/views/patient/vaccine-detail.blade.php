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
        <div class="row">    
          <div class="card-body">
            <p class="card-text"><strong>{{ $vaccine->vaccine_name }}</strong></p>
              <h5 class="card-title text-dark">Available at HealthCare Centres: </h5>
            <!-- Start looping centres in relasi -->
                <ul class="list-group list-group-flush list shadow-none">  
                  @foreach($relasi as $r)
                  @if()
                    @foreach($centre as $c)
                      @if($r>centre_id==$c->id)
                      <i class="list-group-item d-flex justify-content-between align-items-center"class="list-group-item d-flex justify-content-between align-items-center">
                        HealthCare Centre {{ c['centre_name'] }}
                        <br>
                        {{ c['address'] }}
                        <span class="badge badge-success badge-pill">v</span>
                      </li>
                      @endif
                    @endforeach
                  @endforeach
                </ul>
            <!-- End looping centres in relasi -->
          </div>
        </div>  
      </div><!-- End container-fluid-->
    </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->  
    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 PeopleCare PCVS Web || Developer Team
        </div>
      </div>
    </footer>
    <!--End footer-->
  </div>
</div> 
@endsection