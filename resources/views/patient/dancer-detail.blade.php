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
  
        <section class="blog bgwhite p-t-94 p-b-65">
        <div class="container">
            <div class="sec-title p-b-52">
                <h1 class="m-text5 t-center" style="text-align: center">
                   {!!$artstudio->studio_name!!}
                </h1>
            </div>
            <div class="row" style="width: 2099px;margin-left:-69px;">
                <div class="col-lg-4">
                 <div class="card">
                 
                  <div class="card-body">
                    <h5 class="card-title text-dark">Traditional Dance</h5>
                    <p class="card-text">{{$artstudio->std_description}}</p>
                  </div>
                  <div class="card-body">
                    <h5 class="card-title text-dark">Services</h5>
                  </div>
                  @foreach ($services as $s)
                   <ul class="list-group list-group-flush list shadow-none">
                        @foreach ($presented as $d)
                            @if($d->id_dancer==$artstudio->id)
                                @if($s->Presented_Dance==$d->id)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">{{$d->dance_name}} - Rp.{{number_format($s->Pricing)}}/hour {{$d->dance_type}}<span class="badge badge-success badge-pill">v</span></li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                    @endforeach
                </div>
                
                </div>
            </div><!--End Row-->

            <div class="row" style="width: 1400px;margin-left:-69px;">
                <div class="col-lg-6">
                  <div class="card">
                    <div class="card-header text-uppercase">Dancer Images</div>
                     <div class="card-body">
                       <div id="carousel-3" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-3" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-3" data-slide-to="1"></li>
                            <li data-target="#carousel-3" data-slide-to="2"></li>
                          </ol>
                          <div class="carousel-inner">
                            @foreach ($image as $img =>$images)
                            <div class="carousel-item {{$img == 0 ? 'active' : '' }}">
                                <img class="card-img-top" src="{{ url('images/artstudio/'.$artstudio->id.'/'.$images->image_name) }}">
                            </div>
                            @endforeach
                          </div>
                          <a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-3" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                     </div>
                  </div>
                </div>
                <div class="col-lg-6" style="margin-left: 1px">
                  <div class="card">
                    <div class="card-header text-uppercase">Dancer Videos</div>
                     <div class="card-body">
                       <div id="carousel-4" class="carousel slide" data-ride="carousel">
                          <ul class="carousel-indicators">
                            <li data-target="#demo" data-slide-to="0" class="active"></li>
                            <li data-target="#demo" data-slide-to="1"></li>
                            <li data-target="#demo" data-slide-to="2"></li>
                          </ul>
                          <div class="carousel-inner">
                            @foreach ($video as $vid =>$videos)
                            <div class="carousel-item {{$vid == 0 ? 'active' : '' }}">
                            <video src="{{ url('dancerpage/video/artstudio/'.$artstudio->id.'/'.$videos->video_name) }}" type='video/mp4' style="height:405px;margin-top:-76px" controls> 
                            <source class="d-block w-100 card-img-top" src="{{ url('dancerpage/video/artstudio/'.$artstudio->id.'/'.$videos->video_name) }}" type='video/mp4'>
                            </video>
                            </div>
                            @endforeach
                          </div>
                          <a class="carousel-control-prev" href="#carousel-4" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                          </a>
                          <a class="carousel-control-next" href="#carousel-4" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                          </a>
                        </div>
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

@endsection