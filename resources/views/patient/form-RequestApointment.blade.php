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
           <div class="card">
             <div class="card-body">
             <div class="card-title">Request Vaccination Appointment</div>
             <hr>
             <form method="POST" action="/patient/NewAppointment">
                @csrf
                {{-- <form method="POST" action="/order/create">
                @csrf --}}
               <div class="form-group row">
                <label for="input-26" class="col-sm-2 col-form-label">Art Studio Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-rounded" name="studio_name" id="input-26" value="{{$data['studio_name']}}" readonly>
                </div>
              </div>
               <div class="form-group row">
                <div class="col-sm-10">
                <input type="hidden" class="form-control form-control-rounded" name="studio_id" id="input-26" value="{{$data['studio_id']}}" readonly>
                </div>
              </div>
               <div class="form-group row">
                <label for="input-26" class="col-sm-2 col-form-label">Customer Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-rounded" name="customer_name" id="input-26" value="{{$customer->username}}" readonly>
                </div>
              </div>
               <div class="form-group row">
                <div class="col-sm-10">
                <input type="hidden" class="form-control form-control-rounded" name="customer_id" id="input-26" value="{{$customer->id}}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-27" class="col-sm-2 col-form-label">Dance Name</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-rounded" name="dancing_service" id="input-27" value="{{$presented->dance_name}}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-28" class="col-sm-2 col-form-label">Dance Type</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-rounded" name="dancing_type" id="input-28" value="{{$presented->dance_type}}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-29" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-rounded" name="price" id="input-29" value="Rp {{number_format($service->Pricing)}} (per hour)" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-30" class="col-sm-2 col-form-label">Duration</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-rounded" name="duration" id="input-31" value="{{$duration}} hour" readonly>
                </div>
              </div>
              
              <div class="form-group row">
                <label for="input-32" class="col-sm-2 col-form-label">Total Price</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-rounded" name="total_price" id="input-33" value="Rp {{number_format($total_price)}}" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="input-31" class="col-sm-2 col-form-label">Order Date</label>
                <div class="col-sm-10">
                <input type="text" class="form-control form-control-rounded" name="date_order" id="input-32" value="{{$data['order_date']}}" readonly>
                </div>
              </div>
               <div class="form-group row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button class="btn btn-outline-warning" type="button" data-toggle="modal" data-target="#warningmodal">Order</button>
                </div>
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