@extends('admin.admin-master')
@section('content')

<!-- Start wrapper-->
<div id="wrapper">
 
    @include('admin.admin-sidebar')
  
    @include('admin.admin-header')
  
  <div class="clearfix"></div>
      
    <div class="content-wrapper">
      <div class="container-fluid">
  
        <!--Start Dashboard Content-->
        
        <div class="row mt-3">
          <div class="col-12 col-lg-6 col-xl-3">
            <div class="card gradient-scooter">
              <div class="card-body">
                <div class="media align-items-center">
                  <div class="media-body">
                    <p class="text-white">Healthcare Centre</p>
                    <h4 class="text-white line-height-5">
                      {{ $centre->centre_name }}
                    </h4>
                  </div>
                  <div class="w-circle-icon rounded-circle border border-white">
                    <i class="fa fa-users text-white"></i></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end row --><!-- end show centre name -->
        {{-- content here --}}
        <!-- Table --><!-- start row -->
        <a class="btn btn-info" href="/admin/NewBatch" >Add New</a><br><br>
        <div class="card-title">Vaccine Batches</div>
        <table class="table"> 
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Vaccine Name</th>
              <th scope="col">Expiry Date</th>
              <th scope="col">Available</th>
              <th scope="col">Administered</th>
              <th scope="col">Check</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1 ?>
            @foreach($allBatch as $a)
            <tr>
              <th scope="row">{{ $no++ }}</th>
              <td>{{ $a->vaccine_name }}</td>
              <td>{{ $a->expiry_date }}</td>
              <td>{{ $a->qty_available }}</td>
              <td>{{ $a->qty_administered }}</td>
              <td><a href="/admin/NewBatch/{{$a -> id}}">Detail</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div><!-- End container-fluid-->
    </div><!-- End container-wrapper-->
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
  </footer><!--End footer-->
</div>
<!--End wrapper-->

@endsection