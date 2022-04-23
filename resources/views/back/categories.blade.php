@extends('back.layouts.master')
@section('content')
    <form action="{{ url('/back/categories/save') }}" method="post">
        @csrf
        <div class="mb-3 mx-2">
            <label for="validationTextarea">Kategori</label>
            <textarea name="newCategory" maxlength="50" rows="2" class="form-control is-invalid" id="validationTextarea"
                placeholder="Yeni kategori" required></textarea>
            <div class="invalid-feedback">
                Yeni kategori alanı ekleyiniz.
            </div>
        </div>
        <div class="mt-2 ml-2 justify-content-end">
            <button class="btn btn-primary" type="submit">Ekle</button>
        </div>
    </form>
@endsection
