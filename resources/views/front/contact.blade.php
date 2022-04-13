@extends('front.layouts.master')
@section('content')


<form action="{{url('/contact/save')}}" method="post">
    @csrf
<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">İletişim</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Bu sayfadan bizimle iletişime geçebilirsiniz. Merak etmeyin her yazdığınızı okuyup hızlıca geri dönmeye çalışıyoruz ^_^</p>

    <div class="row mx-3">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Adınız</label>
                            <input type="text" id="name" name="name" class="form-control">
                           
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-4">
                            <label for="phone" class="">Telefon Numaranız</label>
                            <input type="text" id="phone" name="phoneNumber" class="form-control">
                            
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-4">
                            <label for="subject" class="">Ne için ulaşmak istiyordunuz?</label>
                            <input type="text" id="subject" name="subject" class="form-control">
                           
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message">Mesajınız</label>
                            <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea"></textarea>
                            
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left mt-4">
                <button class="btn btn-outline-primary">Gönder</button>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Ömerağa Mahallesi Şen İş Merkezi İzmit/Kocaeli</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 90 539 838 0962</p>
                </li>

                
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
</form>
@endsection