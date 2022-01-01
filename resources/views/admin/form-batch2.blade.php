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
        <div class="row">
          <div class="col-lg-6">
            <div class="card bg-light">
              <div class="card-body">
                <div class="card-title">Batch Form</div>
                <hr>
                <form method="POST" action="/admin/PostNewBatch2">
                  @csrf
                  <div class="form-group">
                    <label for="input-1">Registered into healthcare Centre:</label>
                    <input type="text" class="form-control" id="input-1" name="centre_name" value = "{{ $centre->centre_name }}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="input-2">Vaccine</label>
                    <select class="form-control" id="input-2" name="vaccine_name">
                        @foreach ($vaccine as $v)
                          <option value="{{ $v->vaccine_name }}">
                            {{ $v->vaccine_name }} - {{ $v->manufactrer }}
                          </option>
                        @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                      <label for="input-3">ExpiryDate</label>
                      <input type="date" class="form-control" id="input-3" name="expiry_date" placeholder="Enter vaccine name">
                  </div>
                  <div class="form-group">
                      <label for="input-4">Quantity Available</label>
                      <input type="text" class="form-control" id="input-4" name="qty_available" placeholder="Enter quantity">
                  </div>
                  <div class="form-group">
                      <label for="input-5">Quantity administered</label>
                      <input type="text" class="form-control" id="input-5" name="qty_administered" placeholder="Administered quantity">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-dark shadow-dark px-5"><i class="icon-lock"></i> Submit</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>     
    </div><!--End content-wrapper-->
    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2021 PeopleCarePCVS Website || Developer Team
        </div>
      </div>
    </footer>
    <!--End footer-->
     
    </div><!--End wrapper-->

@endsection