@extends('front.layouts.master')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url({{asset('frontend/')}}/images/banner/banner1.jpg)">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">SSS</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">SSS</a></li>
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
  
      <div class="row">
        <div class="col-lg-8">
          <h3 class="border-title border-left mar-t0">Şirketimiz Hakkında</h3>
  
          <div class="accordion accordion-group accordion-classic" id="construction-accordion">
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Kaç yıldır sektöre hizmet veriyorsunuz?
                  </button>
                </h2>
              </div>
  
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                data-parent="#construction-accordion">
                <div class="card-body">
                  İzmit Elektrik Servisi olarak, sektöre 10 yıldan fazla süredir hizmet veren ustalarımızın yanında çekirdekten yetişme biz gibi genç bir ekip de bulunmakta. 
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Fiyatlandırma Hakkında
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                <div class="card-body">
                  Fiyatlandırmalar hakkında müşterilerimizin kafalarındaki karışıklıkları gidermek için bir sistem oturtmaya çalışıyoruz. Yakın bir zaman içerisinde sitemiz içerinden fiyatlandırma sonuçlarını görebileceksiniz. Şimdilik telefonla arayarak ya da sitemiz üzerinden iletişim formu doldurarak bizlere ulaşıp, fiyat bilgisi alabilirsiniz.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Çalışma Süreleri Hakkında
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                data-parent="#construction-accordion">
                <div class="card-body">
                  Haftaiçi ve Cumartesi günü dahil olmak üzere sizlere hizmet veriyoruz. Pazar günleri çalışmıyoruz ama yine de acil bir durum olduğunda arayabilirsiniz. Telefon üzerinden çözüm üretebilirsek telefonla, aksi durumda yanınıza gelerek sorunun çözümünde yardımcı olabiliriz.
                </div>
              </div>
            </div>
          </div>
          <!--/ Accordion end -->
  
          <div class="gap-40"></div>
  
          <h3 class="border-title border-left">Hizmetleriniz Hakkında</h3>
  
          <div class="accordion accordion-group accordion-classic" id="safety-accordion">
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    Hizmet bölgeleriniz?
                  </button>
                </h2>
              </div>
  
              <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
                data-parent="#safety-accordion">
                <div class="card-body">
                  Kocaeli İli içerisinde:
                  <ul>
                      @foreach ($counties as $county)
                          <li>{{$county->name}}</li>
                      @endforeach
                      
                  </ul>
                  İlçelerine hizmet veriyoruz. Yine de sınır ilçeler için telefonla arayıp randevu talep ediniz. Değişiklik gösterebilir.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Teslim Süresi?
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#safety-accordion">
                <div class="card-body">
                  Yapılan işlerin teslim sürelerinin kısa olmasına özen gösteriyoruz. Elimizden geldiğince ve kaliteden ödün vermeden işleri hızlı bitirip sizlere teslim etmek için çalışıyoruz.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingSix">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    İletişim?
                  </button>
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                data-parent="#safety-accordion">
                <div class="card-body">
                  Bizlere telefon numaramız üzerinden ya da sitemiz üzerinde bulunan iletişim formundan ulaşabilirsiniz.
                  Telefon çağrılarınıza da, sitemiz üzerinden gönderilen iletişim formuna da en kısa zamanda dönmeye çalışıyor, sizleri merakta bırakmıyoruz :&#41;
                </div>
              </div>
            </div>
          </div>
          <!--/ Accordion end -->
  
        </div><!-- Col end -->
  
        <div class="col-lg-4 mt-5 mt-lg-0">
  
          <div class="sidebar sidebar-right">
            <div class="widget recent-posts">
              <h3 class="widget-title">Son Blog Yazıları</h3>
              <ul class="list-unstyled">
                @foreach ($posts as $post)
                <li class="d-flex align-items-center">
                  <div class="posts-thumb">
                      
                          
                     @foreach ($post->images as $postImage)
                         
                    
                    <a href="#"><img loading="lazy" alt="news-image" src="{{$postImage->image_url}}"></a>
                    @endforeach
                  </div>
                  <div class="post-info">
                    <h4 class="entry-title">
                      <a href="#">{{$post->title}}</a>
                    </h4>
                  </div>
                </li><!-- 1st post end-->
                @endforeach
              </ul>
  
            </div><!-- Recent post end -->
          </div><!-- Sidebar end -->
  
        </div><!-- Col end -->
  
      </div><!-- Content row end -->
  
    </div><!-- Container end -->
  </section><!-- Main container end -->
  
@endsection