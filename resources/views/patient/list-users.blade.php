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
                  <p class="text-white">Total Art Studio</p>
                  <h4 class="text-white line-height-5">{{$dancers}}</h4>
                </div>
                <div class="w-circle-icon rounded-circle border border-white">
                  <i class="fa fa-users text-white"></i></div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-3">
            <div class="card gradient-blooker">
              <div class="card-body">
                <div class="media align-items-center">
                <div class="media-body">
                  <p class="text-white">New Users</p>
                  <h4 class="text-white line-height-5">{{$users}}</h4>
                </div>
                <div class="w-circle-icon rounded-circle border border-white">
                  <i class="fa fa-users text-white"></i></div>
              </div>
              </div>
            </div>
          </div>
        </div><!--End Row-->
  
        <div class="row">
		
        <div class="col-lg-12">
		
          <div class="card">
		   <div class="card-header text-uppercase text-info">LIST OF USERS</div>
            <div class="card-body">
			  <div class="table-responsive">
                <table class="table">
                  <thead class="thead-info">
                    <tr>
                      <th scope="col" style="text-align: center">No</th>
                      <th scope="col" style="text-align: center">Username</th>
                      <th scope="col" style="text-align: center">Email</th>
                      <th scope="col" style="text-align: center">Handle</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1; ?>
                    @foreach ($allUser as $aU)
                    <tr>
                      <th scope="row" style="text-align: center">{{$no++}}</th>
                      <td style="text-align: center">{{$aU->username}}</td>
                      <td style="text-align: center">{{$aU->email}}</td>
                      <td style="text-align: center">
                        <a href="/admin/detail/{{$aU->id}}" type="button" class="btn btn-success btn-round waves-effect waves-light m-1">Detail</a>
                        <a href="/admin/delete/{{$aU->id}}" type="button" class="btn btn-danger btn-round waves-effect waves-light m-1">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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