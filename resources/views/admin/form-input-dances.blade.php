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
        
        <!--Round buttons-->
        <div class="row" style="margin-bottom: 13px;">
            <div class="col-lg-4">
            <button type="button" data-toggle="modal" data-target="#formemodal" class="btn btn-info waves-effect waves-light m-1">Add Dances</button><br>
            </div>
        </div><!--end row-->

        <div class="row">
		
          <div class="col-lg-12">
      
            <div class="card">
            <div class="card-header text-uppercase text-info">LIST OF DANCES</div>
              <div class="card-body">
              <div class="table-responsive">
                  <table class="table">
                    <thead class="thead-info">
                      <tr>
                        <th scope="col" style="text-align: center">No</th>
                        <th scope="col" style="text-align: center">DANCE NAME</th>
                        <th scope="col" style="text-align: center">EVENT TYPE</th>
                        <th scope="col" style="text-align: center">STAGE</th>
                        <th scope="col" style="text-align: center">AREA</th>
                        <th scope="col" style="text-align: center">PRICE</th>
                        <th scope="col" style="text-align: center">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $no = 1; ?>
                      @foreach ($dances as $dance)
                      <tr>
                        <th scope="row" style="text-align: center">{{$no++}}</th>
                        <td style="text-align: center">{{$dance->dance_name}}</td>
                        <td style="text-align: center">{{$dance->event_type}}</td>
                        <td style="text-align: center">{{$dance->stage}}</td>
                        <td style="text-align: center">{{$dance->area}}</td>
                        <td style="text-align: center">{{$dance->price}}</td>
                        <td style="text-align: center">
                          <a href="/admin/deleteD/{{$dance->id}}" type="button" onclick="alert('Are you sure?');" class="btn btn-danger btn-round waves-effect waves-light m-1">Delete</a>
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

        <div class="col-lg-4">
    <!-- Large Size Modal -->
            <!-- Modal -->
            <div class="modal fade" id="formemodal">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Input Dance</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/upload/dances" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="input-1">Dance Name</label>
                                <input type="text" class="form-control" id="input-1" name="dance_name" placeholder="Enter Dance Name">
                            </div>
                            <div class="form-group">
                                <label for="input-2">Event Type</label>
                                <input type="text" class="form-control" id="input-2" name="event_type" placeholder="Enter Type of Event">
                            </div>
                            <div class="form-group">
                                <label for="input-3">Price</label>
                                <input type="text" class="form-control" id="input-2" name="price" placeholder="Enter Price">
                            </div>
                            <div class="form-group">
                                <label for="input-3">Stage</label>
                                <select class="form-control" id="input-6" name="stage">
                                    <option>Large stage</option>
                                    <option>Medium stage</option>
                                    <option>Small stage</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="input-3">Area</label>
                                <select class="form-control" id="input-6" name="area">
                                    <option>City Center</option>
                                    <option>Middle of town</option>
                                    <option>Suburbs</option>
                                </select>
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