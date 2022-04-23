@extends('front.layouts.master')
@section('content')
    

<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/')}}/images/banner/banner1.jpg)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">İletişim</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Contact</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
  
      <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">Bizi Ziyaret Edebilirsiniz</h2>
          <h3 class="section-sub-title">Konumumuza Erişin</h3>
        </div>
      </div>
      <!--/ Title row end -->
  
      <div class="row">
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fas fa-map-marker-alt mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Ofisimizi Ziyaret Edin</h4>
              <p>Ömerağa Mah. Şen İş Merkezi, İzmit/Kocaeli</p>
            </div>
          </div>
        </div><!-- Col 1 end -->
  
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fa fa-envelope mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Eposta Adresimiz</h4>
              <p>iletisim@izmitelektrik.com</p>
            </div>
          </div>
        </div><!-- Col 2 end -->
  
        <div class="col-md-4">
          <div class="ts-service-box-bg text-center h-100">
            <span class="ts-service-icon icon-round">
              <i class="fa fa-phone-square mr-0"></i>
            </span>
            <div class="ts-service-box-content">
              <h4>Telefon Numaramız</h4>
              <p>(+90) 539-838-0962</p>
            </div>
          </div>
        </div><!-- Col 3 end -->
  
      </div><!-- 1st row end -->
  
      <div class="gap-60"></div>
  
      <div class="google-map">
        <div id="map" class="map" data-latitude="40.7654264" data-longitude="29.9282987" data-marker="{{asset('frontend/')}}/images/marker.png" data-marker-name="İzmit Elektrik"></div>
      </div>
  
      <div class="gap-40"></div>
  
      <div class="row">
        <div class="col-md-12">
          <h3 class="column-title">İletişim Formunu Özenle Okuduğumuzdan Emin Olabilirsiniz :&#41;</h3>
          <!-- contact form works with formspree.io  -->
          <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
          <form id="contact-form" action="{{url('contact/save')}}" method="post" role="form">
            @csrf
            <div class="error-container"></div>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Adınız</label>
                  <input class="form-control form-control-name" name="name" id="name" placeholder="Ad Soyad*" type="text" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>E-posta Adresiniz</label>
                  <input class="form-control form-control-email" name="email" id="email" placeholder="eposta@adresiniz.com*" type="email"
                    required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Telefon Numaranız</label>
                  <input class="form-control form-control-email" name="phoneNumber" id="tel" placeholder="(+90) 555-555-55-55*" type="tel"
                    required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Konu</label>
                  <input class="form-control form-control-subject" name="subject" id="subject" placeholder="Konu Başlığı*" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  
                  <input class="form-control form-control-subject" type="hidden" value="1" name="status" id="status" placeholder="status" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Mesajınız</label>
              <textarea class="form-control form-control-message" name="message" id="message" placeholder="Konu İçeriği*" rows="10"
                required></textarea>
            </div>
            <div class="text-right"><br>
              <button class="btn btn-primary solid blank" type="submit">Gönder</button>
            </div>
          </form>
        </div>
  
      </div><!-- Content row -->
    </div><!-- Conatiner end -->
  </section><!-- Main container end -->
  @endsection