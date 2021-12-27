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
            <button type="button" data-toggle="modal" data-target="#formemodal" class="btn btn-info waves-effect waves-light m-1">Add News</button><br>
            </div>
        </div><!--end row-->

        <div class="row" style="margin-top: -62px;margin-left:-114px;">
            <div class="col-lg-12">
            
                <section class="blog-page">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <div class="blog-page__content">
                                    @foreach ($news as $nws)
                                    <!-- POST -->
                                    <div class="post">
                                        <div class="post-media">
                                            <div class="image-wrap">
                                                <a href="/admin/detail-news/{{$nws->id}}">
                                                    <img src="{{ url('/images/admin/news/'.$nws->article_image) }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="post-body">
                                            <div class="post-meta">
                                                <div class="date">post {{$nws->created_at->diffForHumans()}}, updated {{$nws->updated_at->diffForHumans()}}</div>
                                                <div class="author">by <a href="#">{{$nws->admin_author}}</a></div>
                                            </div>
                                            <div class="post-title">
                                                <h2>
                                                    <a href="/admin/detail-news/{{$nws->id}}">{{$nws->article_name}}</a>
                                                </h2>
                                            </div>
                                            <div class="post-content">
                                                <p>{!! Str::limit($nws->content, 30, '...') !!}</p>
                                            </div>
                                            <div class="post-link">
                                                <a href="/admin/detail-news/{{$nws->id}}" class="btn btn-success">Read more</a>
                                                <a href="/admin/update-news/{{$nws->id}}" class="btn btn-primary">Update</a>
                                                <a href="/admin/delete-news/{{$nws->id}}" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                            </div>
                                          
                                          
                                               
                                            
                                        </div>
                                    </div>
                                    <!-- END / POST -->
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div><!--End Row-->

        <div class="col-lg-4">
    <!-- Large Size Modal -->
            <!-- Modal -->
            <div class="modal fade" id="formemodal">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title">Input News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="/admin/upload/news" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="input-1">Article Title</label>
                                <input type="text" class="form-control" id="input-1" name="article_name" placeholder="Enter Article Title">
                            </div>
                            <div class="form-group">
                                <label for="input-2">Image</label>
                                <input type="file" class="form-control" required type="file" accept="image/*" id="input-2" name="article_image" placeholder="Enter Image">
                            </div>
                            <div class="form-group">
                                <label for="input-3">Content</label>
                                <textarea type="text" class="form-control" id="input-3" name="content" placeholder="Enter Content"></textarea>
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