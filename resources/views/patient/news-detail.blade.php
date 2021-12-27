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
  
        <section class="blog-page" style="margin-top: -5px;margin-left:-102px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="blog-page__content blog-single">
                            
                        
                            <!-- POST -->
                            <div class="post">
                                <div class="post-meta">
                                    <div class="date">{{$news->created_at->diffForHumans()}}</div>
                                    <div class="author">by <a href="#">{{$news->admin_author}}</a></div>
                                </div>
                                <div class="post-title">
                                    <h1>{{$news->article_name}}</h1>
                                </div>
                                <div class="post-media">
                                    <div class="image-wrap">
                                        <img src="{{ url('/images/admin/news/'.$news->article_image) }}" alt="">
                                    </div>
                                </div>
                                <div class="post-body">
                                    <div class="post-content">
                                        <p style="text-align: justify">{{$news->content}}</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <!-- END / POST -->

                            
                        </div>
                    </div>
                </div>
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