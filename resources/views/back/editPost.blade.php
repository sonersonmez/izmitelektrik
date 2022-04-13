@extends('back.layouts.master')
@section('content')
<form class="was-validated ml-3 mr-3" action="{{url('back/post/update/save')}}" method="POST">
    @csrf
    
   
       
  
   <input type="hidden" name="postId" value="{{$post->id}}">
    <div class="mb-3">
        <label for="validationTextarea">Başlık</label>
        <textarea name="postTitle" maxlength="50" rows="2" class="form-control is-invalid" id="validationTextarea" placeholder="Yeni Blog içeriği yazısı" required>{{$post->title}}</textarea>
        <div class="invalid-feedback">
          
        </div>
      </div>
    <div class="mb-3">
      <label for="validationTextarea">İçerik</label>
      <textarea name="postContent"  rows="10" class="form-control is-invalid" id="validationTextarea" placeholder="Yeni Blog içeriği yazısı" required>{{$post->content}}</textarea>
      <div class="invalid-feedback">
        
      </div>
    </div>

    <div class="mb-3">
      <label for="validationTextarea">Blog Fotoğraf URL'i</label>
      @foreach ($postImage as $postImage)
          
      
      <textarea name="referenceImage" maxlength="50" rows="10" class="form-control is-invalid" id="validationTextarea" placeholder="Blog Fotoğraf URL'i" required>{{$postImage->image_url}}</textarea>
      @endforeach
      <div class="invalid-feedback">
        
      </div>
    </div>


    <div class="form-check">
        <input name="postVisibility" class="form-check-input" type="checkbox" value="1"  id="flexCheckDefault" {{ $post->is_active == 1 ? 'checked' : "" }}>
        <label class="form-check-label" for="flexCheckDefault">
          @if ($post->is_active == 1)
              Yayında
          @else
             <p class="text-danger">Yayında değil.</p> 
          @endif
        </label>
      </div>
    

   



    <div class="row d-flex justify-content-center">
        <button class="btn btn-primary" type="submit">Güncelle</button>
      </div>
  
</form>
    
@endsection