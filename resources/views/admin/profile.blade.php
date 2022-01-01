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
  
        <style>
            .img-cont{
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                height: 230px;
                width: 392px;
                position: relative;
            }
            .img-preview{
                border: 1px solid;
            }
            .container-upload{
                padding: 20px;
            }
        </style>
           <!-- Blog -->
           <section class="blog bgwhite p-t-94 p-b-65">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                       
                       <div class="card" style="margin-left:-55px">
                         <div class="card-body">
                           <div class="card-title text-dark">Update Profile</div>
                           <hr>
                            <form method="POST" action="/admin/update/profile/request" enctype='multipart/form-data'>
                                @csrf
                                <div class="col-lg-12">
                                    <div class="col-lg-6 ">
                                        @if ($admin->admin_photo==NULL)
                                            <div id="img-preview" class="img-cont img-preview" style="background-image: url(''); ">No Image selected</div>                            
                                        @else
                                        <div id="img-preview" class="img-cont img-preview" style="background-image: url('{{asset($path.$admin->admin_photo)}}'); "></div>   
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <input onchange="readURL(this)" id="imgInp" required type="file" accept="image/*" name="admin_photo" style="margin-left: 30px"><br>
                                
                                    <div class="form-group row" style="margin-top: 20px">
                                        <label for="input-21" class="col-sm-2 col-form-label">Username</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-21" name="username" value="{{$admin->username}}">
                                        </div>
                                        </div>
                                        <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-dark shadow-dark px-5">Update</button>
                                        </div>
                                    </div>
                            </form>
                         </div>
                     </div>
                    </div>
                  </div><!--End Row-->
            </div>
        </section>
  
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

    <script>
        function submitFinish(){
            $("#finishForm").submit();
        }
        function readURL(input) {
            console.log("changed");
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    console.log(e.target.result)
                    $('#img-preview').css('background-image', 'url(' +  e.target.result + ')');
                    $('#img-preview').text("Preview");
                }
                
                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }
    </script>
    <script>
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

@endsection