@extends('back.layouts.master')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 ml-3">Yeni Blog Yazısı</h1>
    <p class="mb-4 ml-3">Lütfen içerikleri eksiksiz girmeye özen gösteriniz.</p>

    <form class="was-validated ml-3 mr-3" action="{{ url('back/post/save') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="validationTextarea">Başlık</label>
            <textarea name="postTitle" maxlength="50" rows="2" class="form-control is-invalid" id="validationTextarea"
                placeholder="Yeni Blog içeriği yazısı" required></textarea>
            <div class="invalid-feedback">
                Lütfen başlık kısmını boş bırakmayınız.
            </div>
        </div>
        <div class="mb-3">
            <label for="validationTextarea">İçerik</label>
            <textarea name="postContent" maxlength="50" rows="10" class="form-control is-invalid" id="validationTextarea"
                placeholder="Yeni Blog içeriği yazısı" required></textarea>
            <div class="invalid-feedback">
                Lütfen içerik kısmını boş bırakmayınız.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea">Fotoğraf URL'i</label>
            <textarea name="postImage" maxlength="50" rows="3" class="form-control is-invalid" id="validationTextarea"
                placeholder="Yeni Blog fotoğrafı URL'i" required></textarea>
            <div class="invalid-feedback">
                Lütfen içerik kısmını boş bırakmayınız.
            </div>
        </div>


        <div class="container">
            <div class="row">
                <h3>Kategoriler:</h3>
                <div class="col justify-content-center">
                    @foreach ($categories as $category)
                        <div class="col">
                            <div class="form-check form-switch">
                                <input name="categories[]" value="{{ $category->id }}" class="form-check-input"
                                    type="checkbox" id="{{ $category->name }}">
                                <label class="form-check-label" for="{{ $category->name }}">

                                    {{ $category->name }}


                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>

                <h3>Etiketler:</h3>
                <div class="col justify-content-center">
                    @foreach ($tags as $tag)
                        <div class="col">
                            <div class="form-check form-switch">
                                <input name="tags[]" value="{{ $tag->id }}" class="form-check-input" type="checkbox"
                                    id="{{ $tag->name }}">
                                <label class="form-check-label" for="{{ $tag->name }}">

                                    {{ $tag->name }}


                                </label>
                            </div>
                        </div>
                    @endforeach


                    
                </div>
                <div class="">
                  <button class="btn btn-primary" type="submit">Gönder</button>
              </div>



    </form>
@endsection
