@extends('front.layouts.master')

@section('content')
<div class="banner-carousel banner-carousel-1 mb-0">
    <div class="banner-carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg1.jpg')}})">
      <div class="slider-content">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12 text-center">
                  <h2 class="slide-title" data-animation-in="slideInLeft">10+ Yıllık Tecrübe</h2>
                  <h3 class="slide-sub-title" data-animation-in="slideInRight">Elektrik</h3>
                  <p data-animation-in="slideInLeft" data-duration-in="1.2">
                      <a href="#" class="slider btn btn-primary">Servislerimiz</a>
                      <a href="{{url('/contact')}}" class="slider btn btn-primary border">Şimdi İletişime Geçin!</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>
  
    <div class="banner-carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg2.jpg')}})">
      <div class="slider-content text-left">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title-box" data-animation-in="slideInDown">Üst Kalite Hizmet</h2>
                  <h3 class="slide-title" data-animation-in="fadeIn">Her İhtiyacınıza Karşılık</h3>
                  <h3 class="slide-sub-title" data-animation-in="slideInLeft">Hızlı İşçilik</h3>
                  <p data-animation-in="slideInRight">
                      <a href="{{url('/references')}}" class="slider btn btn-primary border">Hizmetlerimiz</a>
                  </p>
                </div>
            </div>
          </div>
      </div>
    </div>
  
    <div class="banner-carousel-item" style="background-image:url({{asset('frontend/images/slider-main/bg3.jpg')}})">
      <div class="slider-content text-right">
          <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-md-12">
                  <h2 class="slide-title" data-animation-in="slideInDown">Takımımızla Tanışın</h2>
                  <h3 class="slide-sub-title" data-animation-in="fadeIn">Profesyonel ve Özenli</h3>
                  <p class="slider-description lead" data-animation-in="slideInRight">Sorunlarınızın çözümü bir tık ileride.</p>
                  <div data-animation-in="slideInLeft">
                      <a href="{{url('/contact')}}" class="slider btn btn-primary" aria-label="contact-with-us">Ücretsiz Teklif Al</a>
                      <a href="{{url('/about')}}" class="slider btn btn-primary border" aria-label="learn-more-about-us">Daha Fazla</a>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  
  <section class="call-to-action-box no-padding">
    <div class="container">
      <div class="action-style-box">
          <div class="row align-items-center">
            <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">Usta gerilimine son veriyor, kaliteli hizmet sunuyoruz.</h3>
                </div>
            </div><!-- Col end -->
            <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-dark" href="{{url('/contact')}}">Fiyat Bilgisi Al</a>
                </div>
            </div><!-- col end -->
          </div><!-- row end -->
      </div><!-- Action style box -->
    </div><!-- Container end -->
  </section><!-- Action end -->
  
  <section id="ts-features" class="ts-features">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <div class="ts-intro">
                <h2 class="into-title">Hakkımızda</h2>
                <h3 class="into-sub-title">Elektrik Hizmeti</h3>
                <p>Ev, ofis ve iş yerlerinizde kullandığınız elektrikli cihazlar zamana yenik düşebilir.
                    Çözümünü uzaklarda aramak ve kara kara fiyat düşünme derdine son.
                    Dürüst, güvenilir ve özenli ekibimizle sizlere yardım etmek için buradayız.
                </p>
            </div><!-- Intro box end -->
  
            <div class="gap-20"></div>
  
            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-trophy"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Müşteri Memnuniyeti</h3>
                      </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->
  
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-sliders-h"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Sürekli İletişim</h3>
                      </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->
  
            <div class="row">
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-thumbs-up"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Profesyonel Rehberlik</h3>
                      </div>
                  </div><!-- Service 1 end -->
                </div><!-- col end -->
  
                <div class="col-md-6">
                  <div class="ts-service-box">
                      <span class="ts-service-icon">
                        <i class="fas fa-users"></i>
                      </span>
                      <div class="ts-service-box-content">
                        <h3 class="service-box-title">Profesyonel Takım</h3>
                      </div>
                  </div><!-- Service 2 end -->
                </div><!-- col end -->
            </div><!-- Content row 1 end -->
          </div><!-- Col end -->
  
          <div class="col-lg-6 mt-4 mt-lg-0">
            <h3 class="into-sub-title">İş Ahlakı</h3>
            <p>Acaba ne fiyat verilecek derdine son; arayın, fiyat alın ve işinizi yapalım. Son dakika sürprizlerini sizin kadar bizler de istemiyoruz.</p>
  
            <div class="accordion accordion-group" id="our-values-accordion">
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Güvenlik
                        </button>
                      </h2>
                  </div>
                
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                      <div class="card-body">
                        Çalışanlarımızın ve müşterilerimizin güvenliği için en özenli ekipman kullanan çalışanlarımız, en kaliteli teçhizatı takmakla yükümlüdür.
                      </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Müşteri Hizmeti
                        </button>
                      </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                      <div class="card-body">
                        Müşterilerimizin kalite standartlarını karşılamak en önemli misyonumuz. Bunun için çalışıyoruz.
                      </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Dürüstlük
                        </button>
                      </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                      <div class="card-body">
                       Sürpriz fatura ve fiyat derdini yaşatmamak için şeffaf ve kaliteli hizmet sunuyoruz.
                      </div>
                  </div>
                </div>
            </div>
            <!--/ Accordion end -->
  
          </div><!-- Col end -->
      </div><!-- Row end -->
    </div><!-- Container end -->
  </section><!-- Feature are end -->
  
  <section id="facts" class="facts-area dark-bg">
    <div class="container">
      <div class="facts-wrapper">
          <div class="row">
            <div class="col-md-3 col-sm-6 ts-facts">
                <div class="ts-facts-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/fact1.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="189">0</span></h2>
                  <h3 class="ts-facts-title">Toplam Proje</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/fact2.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="3">0</span></h2>
                  <h3 class="ts-facts-title">Teknik Ekip</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/fact3.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="1323">0</span></h2>
                  <h3 class="ts-facts-title">Toplam Çalışma Saatimiz</h3>
                </div>
            </div><!-- Col end -->
  
            <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                <div class="ts-facts-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/fact4.png" alt="facts-img">
                </div>
                <div class="ts-facts-content">
                  <h2 class="ts-facts-num"><span class="counterUp" data-count="270">0</span></h2>
                  <h3 class="ts-facts-title">Müşterilerimiz</h3>
                </div>
            </div><!-- Col end -->
  
          </div> <!-- Facts end -->
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Facts end -->
  
  <section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
      <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Uzmanlıklarımız</h2>
            <h3 class="section-sub-title">Ne Yapıyoruz?</h3>
          </div>
      </div>
      <!--/ Title row end -->
  
      <div class="row">
          <div class="col-lg-4">
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/service-icon1.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">Daire Tesisatları</a></h3>
                  <p>Yeni yapılan ya da eski dairelerinizin tesisat hattını çekebiliriz. Güvenli ve kaliteli hizmet garantisiyle gözünüz arkada kalmasın.</p>
                </div>
            </div><!-- Service 1 end -->
  
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/service-icon2.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">Arıza Tespitleri</a></h3>
                  <p>Sürekli bozulan ve yenisini almak zorunda kaldığınız bir elektronik aletin tesisatında sıkıntı olabilir mi?</p>
                </div>
            </div><!-- Service 2 end -->
  
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/service-icon3.png"  alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">İnce İşçilik</a></h3>
                  <p>En ufak detayı atlamadan, özenli ve güvenli bir şekilde işçilik garantisi</p>
                </div>
            </div><!-- Service 3 end -->
  
          </div><!-- Col end -->
  
          <div class="col-lg-4 text-center">
            <img loading="lazy" class="img-fluid" src="{{asset('frontend/')}}/images/services/service-center.jpg" alt="service-avater-image">
          </div><!-- Col end -->
  
          <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/service-icon4.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">Bilimsel Yaklaşım</a></h3>
                  <p>Tecrübeyle matematiğin harmanlandığı teknik ekip. Hizmetinizde.</p>
                </div>
            </div><!-- Service 4 end -->
  
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/service-icon5.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">Yenileme</a></h3>
                  <p>Elektrikli cihazlarınız için güvenilir ve kaliteli adres.</p>
                </div>
            </div><!-- Service 5 end -->
  
            <div class="ts-service-box d-flex">
                <div class="ts-service-box-img">
                  <img loading="lazy" src="{{asset('frontend/')}}/images/icon-image/service-icon6.png" alt="service-icon">
                </div>
                <div class="ts-service-box-info">
                  <h3 class="service-box-title"><a href="#">Güvenli İş</a></h3>
                  <p>Çevreye, doğaya ve mülkünüze zarar vermeden yapılan kaliteli ve güvenli işçilik.</p>
                </div>
            </div><!-- Service 6 end -->
          </div><!-- Col end -->
      </div><!-- Content row end -->
  
    </div>
    <!--/ Container end -->
  </section><!-- Service end -->
  
  <section id="project-area" class="project-area solid-bg">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-12">
          <h2 class="section-title">Mükemmellik Çalışmaları</h2>
          <h3 class="section-sub-title">Son Projeler</h3>
        </div>
      </div>
      <!--/ Title row end -->
    
          
      
      <div class="row">
        <div class="col-12">
          <div class="shuffle-btn-group">
            <label class="active" for="all">
              <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Hepsini Gör
            </label>
            @foreach ($categories as $category)
            <label class="active" for="{{$category->name}}">
              <input type="radio" name="shuffle-filter" id="{{$category->name}}" value="all" checked="checked">{{$category->name}}
            </label>
            @endforeach
          </div><!-- project filter end -->
         
  
          <div class="row shuffle-wrapper">
            <div class="col-1 shuffle-sizer">

            </div>
            @foreach ($references as $reference)
            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
              <div class="project-img-container">
              
              
                <a class="gallery-popup" href="{{$reference->images[0]->image_url}}" aria-label="project-img">
                  <img class="img-fluid" src="{{$reference->images[0]->image_url}}" alt="project-img">
                  <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                </a>
           
                <div class="project-item-info">
                  <div class="project-item-info-content">
                    <h3 class="project-item-title">
                      <a href="projects-single.html">{{$reference->title}}</a>
                    </h3>
                    @foreach ($reference->categories as $referenceCategories)
                        
                    
                    <p class="project-cat">{{$referenceCategories->name}}</p>
                    @endforeach
                  </div>
                </div>
                
                
              </div>
            </div><!-- shuffle item 1 end -->
            @endforeach

          </div><!-- shuffle end -->
        </div>
  
        <div class="col-12">
          <div class="general-btn text-center">
            <a class="btn btn-primary" href="projects.html">Tüm Projeleri Gör</a>
          </div>
        </div>
  
      </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Project area end -->
  
  <section class="content">
    <div class="container">
      <div class="row">
          <div class="col-lg-6">
            <h3 class="column-title">Müşterilerden</h3>
  
            <div id="testimonial-slide" class="testimonial-slide">
                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        Hızlı, etrafı dağıtmadan ve özenli yapılan işçiliğin hakkını verdiler.
                      </span>
  
                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="{{asset('frontend/')}}/images/clients/testimonial1.png" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Necmettin K.</h3>
                            <span class="quote-subtext">NCity AVM G. Müdürü</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 1 end -->
  
                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                        nisi aliquip consequat.
                      </span>
  
                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="{{asset('frontend/')}}/images/clients/testimonial2.png" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Weldon Cash</h3>
                            <span class="quote-subtext">CFO, First Choice</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 2 end -->
  
                <div class="item">
                  <div class="quote-item">
                      <span class="quote-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris
                        nisi ut commodo consequat.
                      </span>
  
                      <div class="quote-item-footer">
                        <img loading="lazy" class="testimonial-thumb" src="{{asset('frontend/')}}/images/clients/testimonial3.png" alt="testimonial">
                        <div class="quote-item-info">
                            <h3 class="quote-author">Minter Puchan</h3>
                            <span class="quote-subtext">Director, AKT</span>
                        </div>
                      </div>
                  </div><!-- Quote item end -->
                </div>
                <!--/ Item 3 end -->
  
            </div>
            <!--/ Testimonial carousel end-->
          </div><!-- Col end -->
  
          <div class="col-lg-6 mt-5 mt-lg-0">
  
            <h3 class="column-title">Hizmet Verdiğimiz Firmalar</h3>
  
            <div class="row all-clients">
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/')}}/images/clients/client1.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 1 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/')}}/images/clients/client2.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 2 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/')}}/images/clients/client3.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 3 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/')}}/images/clients/client4.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 4 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/')}}/images/clients/client5.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 5 end -->
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                      <a href="#!"><img loading="lazy" class="img-fluid" src="{{asset('frontend/')}}/images/clients/client6.png" alt="clients-logo" /></a>
                  </figure>
                </div><!-- Client 6 end -->
  
            </div><!-- Clients row end -->
  
          </div><!-- Col end -->
  
      </div>
      <!--/ Content row end -->
    </div>
    <!--/ Container end -->
  </section><!-- Content end -->
  
  <section class="subscribe no-padding">
    <div class="container">
      <div class="row">
          <div class="col-lg-4">
            <div class="subscribe-call-to-acton">
                <h3>Yardıma mı ihtiyacınız var?</h3>
                <h4>(+90) 539-838-0962</h4>
            </div>
          </div><!-- Col end -->
  
          <div class="col-lg-8">
            <div class="ts-newsletter row align-items-center">
                <div class="col-md-5 newsletter-introtext">
                  <h4 class="text-white mb-0">Bültene Kayıt Ol</h4>
                  <p class="text-white">Yeni içeriklerimizden ilk sen haberdar ol!</p>
                </div>
  
                <div class="col-md-7 newsletter-form">
                  <form action="#" method="post">
                      <div class="form-group">
                        <label for="newsletter-email" class="content-hidden">Bülten'in gönderileceği eposta</label>
                        <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="E posta adresini gir ve tıkla!" autocomplete="off">
                      </div>
                  </form>
                </div>
            </div><!-- Newsletter end -->
          </div><!-- Col end -->
  
      </div><!-- Content row end -->
    </div>
    <!--/ Container end -->
  </section>
  <!--/ subscribe end -->
  
  <section id="news" class="news">
    <div class="container">
      <div class="row text-center">
          <div class="col-12">
            <h2 class="section-title">Tartışılmaz Kalite</h2>
            <h3 class="section-sub-title">Son Paylaştığımız Blog İçerikleri</h3>
          </div>
      </div>
      <!--/ Title row end -->
  
      <div class="row">

        @foreach ($posts as $post)
         <div class="col-lg-4 col-md-6 mb-4">
            <div class="latest-post">
                <div class="latest-post-media">
                  @foreach ($post->images as $postImages)
                
                  <a href="news-single.html" class="latest-post-img">
                      <img loading="lazy" class="img-fluid" src="{{$postImages->image_url}}" alt="img">
                  </a>
                        
                  @endforeach
                </div>
                <div class="post-body">
                  <h4 class="post-title">
                      <a href="news-single.html" class="d-inline-block">{{$post->title}}</a>
                  </h4>
                  <div class="latest-post-meta">
                      <span class="post-item-date">
                        <i class="fa fa-clock-o"></i> {{$post->created_at}}
                      </span>
                  </div>
                </div>
            </div><!-- Latest post end -->
          </div><!-- 1st post col end -->
          @endforeach
       
      </div>
      <!--/ Content row end -->
  
      <div class="general-btn text-center mt-4">
          <a class="btn btn-primary" href="news-left-sidebar.html">Tüm Blog'u Görüntüle</a>
      </div>
  
    </div>
    <!--/ Container end -->
  </section>
  <!--/ News end -->
@endsection
