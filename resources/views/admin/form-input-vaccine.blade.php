@extends('admin.admin-master')
@section('content')

<!-- Start wrapper-->
<div id="wrapper">
 
    <!-- @include('admin.admin-sidebar')
  
    @include('admin.admin-header') -->
    
  </nav>
  </header>
  <!--End topbar header-->
  
  <div class="clearfix"></div>
      
    <div class="content-wrapper">
      <div class="container-fluid">
        
        <!--Start Dashboard Content-->
        
        <!--Round buttons-->
        
    <div class="row">
        <div class="col-lg-6">
           <div class="card bg-light">
             <div class="card-body">
             <div class="card-title">Input Vaccine Form</div>
             <hr>
             <form method="POST" action="/admin/NewVaccine">
                @csrf
                <div class="form-group">
                    <label for="input-1">Vaccine Name</label>
                    <input type="text" class="form-control" id="input-1" name="vaccine_name" placeholder="Enter vaccine name">
                </div>
                <div class="form-group">
                    <label for="input-2">Manufacturer</label>
                    <input type="text" class="form-control" id="input-2" name="manufacturer" placeholder="Enter manufacturer">
                </div>
                <input type="text" class="form-control" id="input-3" name="centre_id" placeholder="" value="{{ Session::get('centre_id') }}"hidden>
             <div class="form-group">
              <button type="submit" class="btn btn-dark shadow-dark px-5"><i class="icon-lock"></i> Submit</button>
            </div>
            </form>
           </div>
           </div>
        </div>
      </div><!--End Row-->
        <div class="row">
		
          <div class="col-lg-12">
      
            <div class="card">
        </div><!--End Row-->

        <div class="col-lg-4">
    <!-- Large Size Modal -->
            <!-- Modal -->
            <div class="modal fade" id="formemodal">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Input vaccine</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/NewVaccine" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="input-1">Vaccine Name</label>
                                <input type="text" class="form-control" id="input-1" name="vaccine_name" placeholder="Enter vaccine name">
                            </div>
                            <div class="form-group">
                                <label for="input-2">Manufacturer</label>
                                <input type="text" class="form-control" id="input-2" name="Manufacturer" placeholder="Enter manufacturer">
                            </div>
                            <input type="text" value="{{ Session::get('centre_id') }}" class="form-control" id="input-2" name="centre_id" placeholder="" hidden>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info shadow-info px-5"><i class="icon-lock"></i> Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
            </div>
          </div>
  
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