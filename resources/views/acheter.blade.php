<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Idealexpertisecpa/ Module de formation</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">


</head>

<body class="services-page">

  <header id="header" class="header sticky-top">

    <div style="background-color: #318ce7; color: white;" class="topbar d-flex align-items-center light-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i style="color: white;" class="bi bi-envelope d-flex align-items-center"><a  style="color: white; text-decoration: none;" href="#">info@idealexpertisecpa.com</a></i>
          <i style="color: white;" class="bi bi-phone d-flex align-items-center ms-4"><span style="color: white;"  >(+229) 01 52 00 64 37 / (+229) 01 97 98 02 36</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a style="color: white;" href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a style="color: white;" href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a style="color: white;"  href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a style="color: white;" href="https://www.linkedin.com/in/djimessa-modeste-dansou-47624316/details/experience/?_l=en_US" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">

              <img src="{{asset('assets/img/hero-carousel/logoideal.jpeg')}}" alt=" logo" height="80px">
              {{--  <h1 class="sitename">Idealexpertisecpa</h1>  --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                  <li><a href="/" class="active">Accueil<br></a></li>
                  <li class="dropdown"><a href="#"><span>A propos</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                      <li><a href="{{ url('/propos') }}">QUI SOMMES-NOUS</a></li>
                      {{--  <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                          <li><a href="#">Deep Dropdown 1</a></li>
                          <li><a href="#">Deep Dropdown 2</a></li>
                          <li><a href="#">Deep Dropdown 3</a></li>
                          <li><a href="#">Deep Dropdown 4</a></li>
                          <li><a href="#">Deep Dropdown 5</a></li>
                        </ul>
                      </li>  --}}
                      <li><a href="{{ url('/clients') }}">NOS CLIENTS</a></li>
                      <li><a href="{{ url('/galerie') }}">GALERIE</a></li>
                      <li><a href="{{ url('/carriere') }}">CARRIERE</a></li>
                    </ul>
                  </li>
                  <li><a href="{{ url('/service') }}"> Nos Services</a></li>
                  <li><a href="{{ url('/formation') }}">Formations</a></li>
                  {{--  <li><a href="testimonials.html">Testimonials</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                  <li><a href="portfolio.html">Portfolio</a></li>
                  <li><a href="blog.html">Blog</a></li>  --}}

                  <li><a href="{{ url('/contact') }}">Contacts</a></li>
                 @auth
                 <li class="dropdown"><a href="#"><span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="{{ url('/profile') }}">PROFIL</a></li>

                    <li><a href="{{ url('/mesformation') }}">MES FORMATIONS</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">DECONNEXION</a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                  </ul>
                </li>
                 @else
                 <li><a href="{{ url('/login') }}">Connexion</a></li>
                 @endauth

                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
              </nav>

          </div>

    </div>

  </header>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">ACHAT DE MODULE</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Accueil</a></li>
            <li class="current">Achat de module</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

</div><!-- End Page Title -->


<section id="about" class="about section">

    <div class="container">

      <div class="row gy-4">

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">


              <div class="position-relative mt-4">
                <img src="{{ asset('assets/uploads/chapitre_images/'.$chapitre->image_url) }}" class="img-fluid rounded-4" alt="">

              </div>
            </div>
          </div>
        <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
        <h1 class="text-center">{{$chapitre->titre}}</h1>
        <br>
          <h4 class="mt-4 ">Nous sommes convaincus qu’avec une expertise comptable étendue et des conseils
            de première main, nous avons les connaissances, les compétences et les ressources nécessaires pour
            fournir des solutions efficaces qui ajoutent une valeur réelle et tangible à chaque étape du développement
             de votre entreprise. Dans tous les domaines de la pratique comptable, nous fournissons à nos clients des
              conseils et des idées pratiques et pragmatiques qui les aident à réussir.</h4>

              <div id='button_payee'></div>
              <button id="custom_button" class="btn btn-primary float-end">Acheter</button>
              @php
              $price = 1;
              $id= "66756fb94af31a555e782fe7";
              $token= "fp_SrVmGyGvalA9n4lUWeKUJufou0vK2EgVJ59dak3kpXaOPHrgRHpBWtsUJp5Hxs3n";
              $callback_url= 'https://www.google.com';
              $error_callback_url= 'https://www.google.com';
              $mode='LIVE';
              $feexpayclass = new Feexpay\FeexpayPhp\FeexpayClass($id, $token, $callback_url, $mode, $error_callback_url);
                $result = $feexpayclass->init($price, "button_payee", true, "custom_button", " Paiement du module sur idealexpertisecpa", "")
            

            @endphp

        </div>

      </div>

    </div>

  </section> 
  <!-- /About Section -->
    <!-- Services Section -->
    {{--  <section id="services" class="services section">
       
        <div class="container section-title" data-aos="fade-up">
            <h2>{{$formation->titre}} </h2>
            {{--  <p>Des services d’audit et de conseils fiscaux pour les entreprises et particuliers</p>  
          </div><!-- End Section Title -->
      <div class="container">

        <div class="row gy-4">
          @foreach($chapitre as $value)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item  position-relative">
                  <div class="image">
                    <img src="{{ asset('assets/uploads/chapitre_images/'.$value->image_url) }}" class="img-fluid rounded-4" alt="">
                  </div>

                    <h3 class="text-center">{{$value->titre}}</h3>

                  <p>Nous fournissons une gamme complète de conseils spécialisés en matière de fiscalité..</p>
                  <br>
                  {{--  <a href="#" id="paiement" class="btn btn-primary float-end">Acheter</a>  --}}
                  {{--  <button id="paiement" class="btn btn-primary float-end">Acheter</button>  

                  <div id='button_payee'></div>
                  <button id="custom_button" class="btn btn-primary float-end">Acheter</button>
                  @php
                  $price = 50;
                  $id= "6799d8ed512b3c794e2f66f3";
                  $token= "test_Hg7Kjl3ZAM63UuIUpuudD9nKuu3ZAM67Kjl3Uuhn";
                  $callback_url= 'https://www.google.com';
                  $error_callback_url= 'https://www.google.com';
                  $mode='SANDBOX';
                  $feexpayclass = new Feexpay\FeexpayPhp\FeexpayClass($id, $token, $callback_url, $mode, $error_callback_url);
                    $result = $feexpayclass->init($price, "button_payee", true, "custom_button", " Paiement du module sur idealexpertisecpa", "votre callback_info")
                @endphp

                </div>
              </div>

          @endforeach






        </div>

      </div>

    </section><!-- /Services Section -->  --}}

    <!-- Call To Action Section -->
    {{--  <section id="call-to-action" class="call-to-action section light-background">

      <div class="container">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-9 text-center text-xl-start">
            <h3>Nous pouvons vous aider</h3>
            <p></p>
          </div>
          <div class="col-xl-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="contact">Prendre Rendez-Vous</a>
          </div>
        </div>

      </div>

    </section>  --}}


  </main>

  <footer id="footer" class="footer dark-background">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 footer-about">
            <a href="index.html" class="logo d-flex align-items-center">
              <span class="sitename">A PROPOS DE NOUS</span>
            </a>
            <div class="footer-contact pt-3">
              <p>est un cabinet d’expertise comptable<br> et d’ingénierie conseils à dimenssion <br>internationale…</p>
              {{--  <p>New York, NY 535022</p>
              <p class="mt-3"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
              <p><strong>Email:</strong> <span>info@example.com</span></p>  --}}
            </div>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Lien rapides</h4>
            <ul>
              <li><a href="/">Accueil</a></li>
              <li><a href="service">Nos Services</a></li>
              <li><a href="carriere">carrières</a></li>
              <li><a href="https://web53.lws-hosting.com:2096/cpsess9121598487/3rdparty/roundcube/?_task=mail&_mbox=INBOX" target="_blank">Webmail</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Impot</h4>
            <ul>
              <li><a href="https://cnss.bj/avis-recrutement-inspecteur-cipres/">CIPRES-Avis d’appel à candidatures pour le recrutement d’un inspecteur régional de la prévoyance sociale</a></li>
              {{--  <li><a href="#">Web Development</a></li>
              <li><a href="#">Product Management</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Graphic Design</a></li>  --}}
            </ul>
          </div>

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>CNSS</h4>
            <ul>
              <li><a href="https://cnss.bj/avis-recrutement-inspecteur-cipres/">CIPRES-Avis d’appel à candidatures pour le recrutement d’un inspecteur régional de la prévoyance sociale</a></li>
              {{--  <li><a href="#">Excepturi dignissimos</a></li>
              <li><a href="#">Suscipit distinctio</a></li>
              <li><a href="#">Dilecta</a></li>
              <li><a href="#">Sit quas consectetur</a></li>  --}}
            </ul>
          </div>



        </div>
      </div>
    </div>

    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center">
          <div>
              Copyrights © 2023 Tous droits réservés par Idéal Expertise CPA
          </div>
          {{--  <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>  --}}
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  {{--  <script >
    FeexPayButton.init("render",{
    id:"6799d8ed512b3c794e2f66f3",
    amount: 5000,
    token:"test_Hg7Kjl3ZAM63UuIUpuudD9nKuu3ZAM67Kjl3Uuhn" ,
    callback:()=> "",
    callback_url: your callurl if you want,
     mode: 'SANDBOX'
    custom_button: true ,
    id_custom_button:"paiement",
    custom_id: If you want to put a reference to allow you to make other requests, you can put it here but it must be a random string,
     description: "Paiement du module sur idealexpertisecpa",
    case: "MOBILE"/"CARD",  })
  </script>  --}}

</body>

</html>
