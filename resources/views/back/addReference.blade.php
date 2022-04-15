@extends('back.layouts.master')
@section('content')
    <form class="was-validated ml-3 mr-3" action="{{ url('back/reference/save') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="validationTextarea">Başlık</label>
            <textarea name="referenceTitle" maxlength="50" rows="2" class="form-control is-invalid" id="validationTextarea"
                placeholder="Yeni Referans içeriği yazısı" required></textarea>
            <div class="invalid-feedback">
                Lütfen başlık kısmını boş bırakmayınız.
            </div>
        </div>
        <div class="mb-3">
            <label for="validationTextarea">İçerik</label>
            <textarea name="referenceContent" maxlength="50" rows="10" class="form-control is-invalid" id="validationTextarea"
                placeholder="Yeni Referans içeriği yazısı" required></textarea>
            <div class="invalid-feedback">
                Lütfen içerik kısmını boş bırakmayınız.
            </div>
        </div>

        <div class="mb-3">
            <label for="validationTextarea">Fotoğraf URL'i</label>
            <textarea name="referenceImage" maxlength="50" rows="3" class="form-control is-invalid" id="validationTextarea"
                placeholder="Yeni Blog fotoğrafı URL'i" required></textarea>
            <div class="invalid-feedback">
                Lütfen içerik kısmını boş bırakmayınız.
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <button class="btn btn-primary" type="submit">Gönder</button>
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

            </div>
        </div>




    </form>
@endsection
