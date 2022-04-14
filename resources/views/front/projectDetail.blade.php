@extends('front.layouts.master')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/images/banner/banner1.jpg')}})">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">{{$reference->title}}</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Project</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Projects Single</li>
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
        <div class="col-lg-8">
          <div id="page-slider" class="page-slider small-bg">
              @foreach ($reference->images as $referenceImage)
              <div class="item">
                <img loading="lazy" class="img-fluid" src="{{$referenceImage->image_url}}" alt="project-image" />
              </div>
              @endforeach
            
  
            
          </div><!-- Page slider end -->
        </div><!-- Slider col end -->
  
        <div class="col-lg-4 mt-5 mt-lg-0">
  
          <h3 class="column-title mrt-0">{{$reference->title}}</h3>
          <p>{{$reference->content}}</p>
  
          <ul class="project-info list-unstyled">
            <li>
              <p class="project-info-label">Müşteri</p>
              <p class="project-info-content">Customer Name</p>
            </li>
            <li>
              <p class="project-info-label">Yapan</p>
              <p class="project-info-content">İzmit Elektrik Servisi</p>
            </li>
            <li>
              <p class="project-info-label">Konum</p>
              <p class="project-info-content">İzmit</p>
            </li>
            <li>
              <p class="project-info-label">Yapıldığı Yıl</p>
              <p class="project-info-content">2015</p>
            </li>
            <li>
              <p class="project-info-label">Categories</p>
              <p class="project-info-content">Commercial, Interiors</p>
            </li>
            <li>
              <p class="project-link">
                <a class="btn btn-primary" target="_blank" href="#">View Project</a>
              </p>
            </li>
          </ul>
  
        </div><!-- Content col end -->
  
      </div><!-- Row end -->
  
    </div><!-- Conatiner end -->
  </section><!-- Main container end -->
@endsection