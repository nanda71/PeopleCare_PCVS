@extends('admin.admin-master')
@section('content')

<!-- Start wrapper-->
<div id="wrapper">
 
    @include('admin.admin-sidebar')
  
    @include('admin.admin-header')
    
  </nav>
  </header>
  <style>
      .img-preview{
            border: 1px solid;
            height: 230px;
            width: 392px;
        }
        .img-cont{
                background-size: cover;
                background-position: center center;
                background-repeat: no-repeat;
                height: 230px;
                width: 392px;
                position: relative;
            }
  </style>
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
        

        <div class="row">
			<div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <div class="card-title text-info">Update Existing News</div>
                <hr>
                <form action="/admin/updatenews/{{$news->id}}" method="POST" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group row">
                        <label for="input-26" class="col-sm-2 col-form-label">Article Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-rounded" id="input-26" value="{{$news->article_name}}" name="article_name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-27" class="col-sm-2 col-form-label">Article Image</label>
                        <div class="col-sm-10">
                        <div class="col-lg-6 ">
                            <div id="img-preview" class="img-cont img-preview" style="background-image: url('{{asset('/images/admin/news/'.$news->article_image)}}'); "></div>   
                        </div>
                        <br>
                            <input onchange="readURL(this)" id="imgInp" required type="file" accept="image/*" name="article_image" style="margin-left: 15px">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="input-28" class="col-sm-2 col-form-label">Content</label>
                        <div class="col-sm-10">
                        <textarea type="text" class="form-control form-control-rounded" id="input-28" name="content">{{$news->content}} </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-info shadow-info btn-round px-5"><i class="icon-lock"></i> Update</button>
                        </div>
                    </div>
                </form>
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