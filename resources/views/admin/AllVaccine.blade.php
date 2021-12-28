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
        <!-- show centre name -->
        <div class="row mt-3">
          <div class="col-12 col-lg-6 col-xl-3">
            <div class="card gradient-blooker">
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
        <!-- end show centre name -->
        <div class="card-title">Registered Vaccines</div>
        <!-- Table -->
        <table>
          <thead>
            <tr>
              <th scope="col">#|</th>
              <th scope="col"> Vaccine Name |</th>
              <th scope="col"> Manufacturer |</th>
            </tr>
          </thead>
          <tbody>
            <?php $no=1; ?>
            @foreach ($relasi as $r)
            @if($r->centre_id==Session::get('centre_id'))
              @foreach ($vaccine as $v)
              @if($v->id==$r->vaccine_id)
                <tr>
                  <th scope="row">{{ $no++ }} | </th>
                  <td>{{ $v->vaccine_name }}</td>
                  <td>{{ $v->manufacturer }}</td>
                </tr>
              @endif
              @endforeach
            @endif
            @endforeach
          </tbody>
        </table>
        <!-- End of Table -->
    <!-- Large Size Modal -->
            <!-- Modal -->
        <div>
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
        </div>
      </div>
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--Start footer-->
      <footer class="footer">
        <div class="container">
          <div class="text-center">
            Copyright © 2020 OnlineArtPerformance Admin
          </div>
        </div>
      </footer>
      <!--End footer-->
    </div>
  </div>
</div>
@endsection