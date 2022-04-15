@extends('front.layouts.master')
@section('content')

<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/')}}/images/banner/banner1.jpg)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">News</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$post->title}}</li>
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
  
        <div class="col-lg-8 mb-5 mb-lg-0">
  
          <div class="post-content post-single">
            <div class="post-media post-image">
             
                       
             @foreach ($post->images as $postImages)
                 
            
              <img loading="lazy" src="{{$postImages->image_url}}" class="img-fluid" alt="post-image">
              @endforeach
            </div>
  
            <div class="post-body">
              <div class="entry-header">
                <div class="post-meta">
                  <span class="post-author">
                    <i class="far fa-user"></i><a href="#">Soner Sönmez</a>
                  </span>
                  <span class="post-cat">
                    <i class="far fa-folder-open"></i><a href="#">Blog</a>
                  </span>
                  <span class="post-meta-date"><i class="far fa-calendar"></i>{{$post->created_at}}</span>
                  
                </div>
                <h2 class="entry-title">
                  {{$post->title}}
                </h2>
              </div><!-- header end -->
  
              <div class="entry-content">
                {{$post->content}}
              </div>
  
              <div class="tags-area d-flex align-items-center justify-content-between">
                <div class="post-tags">
                    @foreach ($post->categories as $postCategories)
                    <a href="#">{{$postCategories->name}}</a>
                    @endforeach
                  
                  
                </div>
                <div class="share-items">
                  <ul class="post-social-icons list-unstyled">
                    <li class="social-icons-head">Paylaş:</li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
  
            </div><!-- post-body end -->
          </div><!-- post content end -->
  
          <div class="author-box d-nlock d-sm-flex">
            <div class="author-img mb-4 mb-md-0">
              <img loading="lazy" src="{{asset('frontend/')}}/  images/news/avator1.png" alt="author">
            </div>
            <div class="author-info">
              <h3>Soner Sönmez<span>Teknisyen</span></h3>
              <p class="mb-2">Yazılım, elektronik ve elektriğe hevesli daimi amatör.</p>
              <p class="author-url mb-0">Website: <span><a href="#">http://www.izmitelektrik.com</a></span></p>
  
            </div>
          </div> <!-- Author box end -->
  
         
        </div><!-- Content Col end -->
  
        <div class="col-lg-4">
  
          <div class="sidebar sidebar-right">
            <div class="widget recent-posts">
              <h3 class="widget-title">Son Yazılar</h3>
              <ul class="list-unstyled">
               
                @foreach ($allPosts as $post)
               
                <li class="d-flex align-items-center">
                  <div class="posts-thumb">
                      
                      @foreach ($post->images as $postImage)
                          <a href="#"><img loading="lazy" alt="img" src="{{$postImage->image_url}}"></a>
                      @endforeach
                      
                      
                  </div>
                  <div class="post-info">
                    <h4 class="entry-title">
                      <a href="#">{{$post->title}}</a>
                    </h4>
                  </div>
                </li>
                @endforeach
              </ul>
  
            </div><!-- Recent post end -->
          
                
            
            <div class="widget">
              <h3 class="widget-title">Kategoriler</h3>
              <ul class="arrow nav nav-tabs">
                @foreach ($categories as $category)
                <li><a href="#">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </div><!-- Categories end -->
            
           
  
            <div class="widget widget-tags">
              <h3 class="widget-title">Etiketler </h3>
  
              <ul class="list-unstyled">
                <li><a href="#">Construction</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Project</a></li>
                <li><a href="#">Building</a></li>
                <li><a href="#">Finance</a></li>
                <li><a href="#">Safety</a></li>
                <li><a href="#">Contracting</a></li>
                <li><a href="#">Planning</a></li>
              </ul>
            </div><!-- Tags end -->
  
  
          </div><!-- Sidebar end -->
        </div><!-- Sidebar Col end -->
  
      </div><!-- Main row end -->
  
    </div><!-- Conatiner end -->
  </section><!-- Main container end -->
  
  
@endsection