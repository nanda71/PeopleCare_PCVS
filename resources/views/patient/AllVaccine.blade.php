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
      <strong>
        <div class="card-title">Available Vaccine</div>
      </strong>
  <!-- Table -->
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Vaccine Name</th>
      <th scope="col">Manufacturer</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
    
  <?php $no=1; ?>
    @foreach($all as $a)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{ $a->vaccine_name }}</td>
      <td>{{ $a->manufacturer }}</td>
      <td><a href="#">Select</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

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