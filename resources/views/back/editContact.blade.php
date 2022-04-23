@extends('back.layouts.master')
@section('content')
    <div class="container">

        <h3>Mesaj Başlığı</h3>
        <div class="d-flex justify-content-center">
            <p>{{ $contact->subject }}</p>
        </div>
        <br>
        <h3>Mesaj İçeriği</h3>
        <div class="d-flex justify-content-center">
            <p>{{ $contact->message }}</p>
        </div>




        <h3>Durum Güncelle</h3>
        <form action="{{ url('back/contact/save') }}" method="post">
            @csrf
            @foreach ($contact->status as $contactStatus)
                @foreach ($statuses as $status)
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="updatedStatus" value="{{ $status->name }}"
                            id="{{ $status->name }}" {{ $contactStatus->name == $status->name ? 'checked' : '' }}>
                        <label class="form-check-label" for="{{ $status->name }}">
                            {{ $status->name }}
                        </label>

                        <input type="hidden" value="{{ $contact->id }}" name="contactId">
                    </div>
                @endforeach
            @endforeach
            <br>
            <button class="btn btn-primary d-flex justify-content-center" type="submit">Güncelle</button>
        </form>
    </div>
@endsection
