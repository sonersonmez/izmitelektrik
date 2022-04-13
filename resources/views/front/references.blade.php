@extends('front.layouts.master')
@section('content')
@foreach ($references->chunk(3) as $chunk)

<div class="container ml-4 mt-4">
<div class="row">
  @foreach ($chunk as $reference)
<div class="col">
 <div class="card" style="width: 18rem;">
 
  @foreach ($reference->images as $referenceImage)
  <img class="card-img-top" src="{{$referenceImage->image_url}}" >
  @endforeach
  <div class="card-body">
    <h5 class="card-title">{{$reference->title}}</h5>
    <p class="card-text">{{$reference->content}}</p>
    <p class="card-text">Yüklenme Tarihi: {{$reference->created_at}}</p>
    <a href="{{url('/references/'.$reference->id)}}" class="btn btn-primary">İş Detayını Gör</a>
  </div>
</div>

</div>
@endforeach
</div>
</div>
 
  @endforeach
@endsection