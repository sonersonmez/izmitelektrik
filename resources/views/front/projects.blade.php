@extends('front.layouts.master')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/')}}/images/banner/banner1.jpg)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">Project</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Project</a></li>
                        <li class="breadcrumb-item active" aria-current="page">All Projects</li>
                      </ol>
                  </nav>
                </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Banner text end -->
  </div><!-- Banner area end --> 
  
  <section id="main-container" class="main-container">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="shuffle-btn-group">
            @foreach ($categories as $category)
            <label class="active" for="all">
              <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">
            
                
                {{$category->name}}
               
              
      
              
            </label>
            @endforeach
          </div><!-- project filter end -->
  
  
          <div class="row shuffle-wrapper">
            <div class="col-1 shuffle-sizer"></div>
            @foreach ($references as $reference)
            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
              <div class="project-img-container">
                <a class="gallery-popup" href="images/projects/project1.jpg">
                    @foreach ($reference->images as $referenceImage)
                    <img class="img-fluid" src="{{$referenceImage->image_url}}" alt="project-image">
                  
                    
                  <span onclick="window.location.href='{{url('/project/'.$reference->id)}}'" class="gallery-icon"><i class="fa fa-plus"></i></span>
                  @endforeach
                </a>
                <div class="project-item-info">
                  <div class="project-item-info-content">
                    <h3 class="project-item-title">
                      <a href="projects-single.html">{{$reference->title}}</a>
                    </h3>
                    <p class="project-cat">Reference category</p>
                  </div>
                </div>
              </div>
            </div><!-- shuffle item 1 end -->
            @endforeach
           
          </div><!-- shuffle end -->
        </div>
  
        <div class="col-12">
          <div class="general-btn text-center">
            <a class="btn btn-primary" href="projects.html">View All Projects</a>
          </div>
        </div>
  
      </div><!-- Content row end -->
  
    </div><!-- Conatiner end -->
  </section><!-- Main container end -->
@endsection