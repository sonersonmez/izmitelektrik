@extends('front.layouts.master')

@section('content')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Genç, dinamik, özenli ve hızlı elektrik hizmeti!</h1>
                            <!-- Signup form-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- * * SB Forms Contact Form * *-->
                            <!-- * * * * * * * * * * * * * * *-->
                            <!-- This form is pre-integrated with SB Forms.-->
                            <!-- To make this form functional, sign up at-->
                            <!-- https://startbootstrap.com/solution/contact-forms-->
                            <!-- to get an API token!-->
                            <!--
                            <form class="form-subscribe" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                 Email address input-->
                                 <!--
                                <div class="row">
                                    <div class="col">
                                        <input class="form-control form-control-lg" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                                        <div class="invalid-feedback text-white" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
                                    </div>
                                    <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                                </div>
                                -->
                                <!-- Submit success message-->
                                <!---->
                                <!-- This is what your users will see when the form-->
                                <!-- has successfully submitted-->
                            <!--
                                <div class="d-none" id="submitSuccessMessage">
                                    <div class="text-center mb-3">
                                        <div class="fw-bolder">Form submission successful!</div>
                                        <p>To activate this form, sign up at</p>
                                        <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                    </div>
                                </div>
                            -->
                                <!-- Submit error message-->
                                <!---->
                                <!-- This is what your users will see when there is-->
                                <!-- an error submitting the form-->
                               <!-- <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>-->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Icons Grid-->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-lightbulb m-auto text-primary"></i></div>
                            <h3>Işıklandırma</h3>
                            <p class="lead mb-0">Ev ve iş yerinizde profesyonel ışıklandırma hizmetleri</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-alt m-auto text-primary"></i></div>
                            <h3>Tesisat</h3>
                            <p class="lead mb-0">Her türlü kablolama, tesisat ve hat işlemleri</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-shield-check m-auto text-primary"></i></div>
                            <h3>Güvenlik</h3>
                            <p class="lead mb-0">Kamera, alarm ve güvenlik sistemleri</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Image Showcases-->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset('frontend/')}}/assets/img/index-img-1.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                       
                        <h2>Genç ve Dinamik Hizmet</h2>
                        <p class="lead mb-0">Genel 'usta' algısının aksine; rahatça iletişim kurabileceğiniz ve sorularınıza cevap alabileceğiniz, işinde hevesli ve özenli bir ekiple çalışacağınız için çok mutluyuz!</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('{{asset('frontend/')}}/assets/img/index-img-2.jpg')"></div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Profesyonel ve Özenli</h2>
                        <p class="lead mb-0">Yaptığımız işlerin sürekliliğini sağlamak ve yeni arızalara yol açmaması için çalışmak, kısaca özenli iş yapmak temel amacımızdır. İşleyen demir pas tutmadığı gibi, yapılacak iş işlemelidir!</p>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('{{asset('frontend/')}}/assets/img/index-img-3.jpg')"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Teknik Destek ve Hizmet Bilgileri</h2>
                        <p class="lead mb-0">Bizlere internet sitemiz veya telefon numaramız üzerinden ulaşabilir, sorunlarınıza teknik çözüm taleplerinizi iletebilir ve destek alabilirsiniz.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials-->
        <section class="testimonials text-center bg-light">
            <div class="container">
                <h2 class="mb-5">İş verenlerimiz neler söylüyor?</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                           <img class="img-fluid rounded-circle mb-3" src="{{asset('frontend/')}}/assets/img/businessman.png" alt="..." /> 
                           
                            <h5>Necmettin K.</h5>
                            <p class="font-weight-light mb-0">"Ncity AVM'nin ışıklandırma işini hızlı, özenli ve tertipli yaptıkları için teşekkür ediyorum."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('frontend/')}}/assets/img/businessman.png" alt="..." />
                            <h5>Ünal A.</h5>
                            <p class="font-weight-light mb-0">"Yeni evimin elektrik tesisatını hızlı ve temiz bir şekilde yaptılar. Teşekkürler."</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                            <img class="img-fluid rounded-circle mb-3" src="{{asset('frontend/')}}/assets/img/businesswoman.png" alt="..." />
                            <h5>Asude G.</h5>
                            <p class="font-weight-light mb-0">"Doğal taş dükkanımın ışıklandırması ve iç tesisat değişimi yapılması gerekiyordu. Arkadaşlar teknik bilgileri vererek hızlı bir şekilde işi yaptılar."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Call to Action-->
        <!--
        <section class="call-to-action text-white text-center" id="signup">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <h2 class="mb-4">Ready to get started? Sign up now!</h2>
         -->
                        <!-- Signup form-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                    <!--
                        <form class="form-subscribe" id="contactFormFooter" data-sb-form-api-token="API_TOKEN"> -->
                            <!-- Email address input-->
                            <!--
                            <div class="row">
                                <div class="col">
                                    <input class="form-control form-control-lg" id="emailAddressBelow" type="email" placeholder="Email Address" data-sb-validations="required,email" />
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:required">Email Address is required.</div>
                                    <div class="invalid-feedback text-white" data-sb-feedback="emailAddressBelow:email">Email Address Email is not valid.</div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button></div>
                            </div>
                            -->
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <!--
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    <p>To activate this form, sign up at</p>
                                    <a class="text-white" href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            -->
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <!--
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>-->
@endsection
