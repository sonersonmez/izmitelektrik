@extends('back.layouts.master')
@section('content')
<form class="was-validated ml-3 mr-3" action="{{url('back/reference/update/save')}}" method="POST">
    @csrf
    
   
       
  
   <input type="hidden" name="referenceId" value="{{$reference->id}}">
    <div class="mb-3">
        <label for="validationTextarea">Başlık</label>
        <textarea name="referenceTitle" maxlength="50" rows="2" class="form-control is-invalid" id="validationTextarea" placeholder="Yeni Blog içeriği yazısı" required>{{$reference->title}}</textarea>
        <div class="invalid-feedback">
          
        </div>
      </div>
    <div class="mb-3">
      <label for="validationTextarea">İçerik</label>
      <textarea name="referenceContent" maxlength="50" rows="10" class="form-control is-invalid" id="validationTextarea" placeholder="Yeni Blog içeriği yazısı" required>{{$reference->content}}</textarea>
      <div class="invalid-feedback">
        
      </div>
    </div>

    <div class="mb-3">
      <label for="validationTextarea">Referans fotoğraf URL'i</label>
      @foreach ($referenceImage as $referenceImage)
      <textarea name="referenceContent" maxlength="50" rows="10" class="form-control is-invalid" id="validationTextarea" placeholder="Referans fotoğraf URL'i" required>{{$referenceImage->image_url}}</textarea>
      @endforeach
      <div class="invalid-feedback">
        
      </div>
    </div>


    <div class="form-check">
        <input name="referenceVisibility" class="form-check-input" type="checkbox" value="1"  id="flexCheckDefault" {{ $reference->is_active == 1 ? 'checked' : "" }}>
        <label class="form-check-label" for="flexCheckDefault">
          @if ($reference->is_active == 1)
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