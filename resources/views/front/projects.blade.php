@extends('front.layouts.master')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/')}}/images/banner/banner1.jpg)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">Projeler</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Projects</a></li>
                        
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
            <label class="active" for="{{$category->slug}}">
              <input type="radio" name="shuffle-filter" id="{{$category->slug}}" value="{{$category->slug}}" checked="checked">
            {{$category->name}}
             </label>
            @endforeach
          </div><!-- project filter end -->
  
  
          <div class="row shuffle-wrapper">
            <div class="col-1 shuffle-sizer"></div>
            @foreach ($references as $reference)
           
            <div class="col-lg-4 col-md-6 shuffle-item" data-groups='["{{implode('","',$reference->categories->pluck('slug')->toArray())}}"]'>
              <div class="project-img-container">
                @foreach ($reference->images as $referenceImage)
                <a class="gallery-popup" href="{{$referenceImage->image_url}}">
                    <img class="img-fluid" src="{{$referenceImage->image_url}}" alt="project-image"> 
                  <span onclick="window.location.href='{{url('/project/'.$reference->id)}}'" class="gallery-icon"><i class="fa fa-plus"></i></span>
                  @endforeach
                </a>
                <div class="project-item-info">
                  <div class="project-item-info-content">
                    <h3 class="project-item-title">
                      <a href="{{url('/references/'.$reference->id)}}">{{$reference->title}}</a>
                    </h3>
                    @foreach ($reference->categories as $referenceCategory)
                    <p class="project-cat">{{$referenceCategory->name}}</p>
                    @endforeach
                  </div>
                </div>
              </div>
            </div><!-- shuffle item 1 end -->
            @endforeach
           
          </div><!-- shuffle end -->
        </div>
  
        <div class="col-12">
          <div class="general-btn text-center">
            <a class="btn btn-primary" href="projects.html">Tüm Projeleri Gör</a>
          </div>
        </div>
  
      </div><!-- Content row end -->
  
    </div><!-- Conatiner end -->
  </section><!-- Main container end -->
@endsection