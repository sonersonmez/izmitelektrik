@extends('front.layouts.master')
@section('content')
@foreach ($posts->chunk(3) as $chunk)
<div class="container ml-4 mt-4">
    <div class="row">
        @foreach ($chunk as $post)
        <div class="col">
            <div class="card h-100" style="width: 18rem;">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        @foreach( $post->images as $postImage )
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <img width="300" height="250" class="d-block img-fluid" src="{{ $postImage->image_url }}" alt="{{ $post->title }}">
                               
                        </div>
                     @endforeach`
                    </div>
                    </div>
                    
                  </div>
                     <div class="card-body d-flex flex-column">
                       <h5 class="card-title">{{$post->title}}</h5>
                           <p class="card-text">{{Str::limit($post->content, 100, $end = '...')}}</p>
                          <p class="card-text">Yüklenme Tarihi: {{$post->created_at}}</p>
                          <a href="{{url('/blog/'.$post->id)}}" class="btn btn-primary align-self-center">İçeriği Gör</a>
                     </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endforeach
@endsection

