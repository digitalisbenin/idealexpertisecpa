<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Idealexpertisecpa/ Services</title>
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

  <!-- =======================================================
  * Template Name: Flattern
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="services-page">

  <header id="header" class="header sticky-top">

    {{--  <div style="background-color: #318ce7; color: white;" class="topbar d-flex align-items-center light-background">
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
    </div>  --}}
    <!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

        <div class="container position-relative d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">

              <img src="{{asset('assets/img/hero-carousel/logoideal.jpeg')}}" alt=" logo" height="80px">
              {{--  <h1 class="sitename">Idealexpertisecpa</h1>  --}}
            </a>

            <nav id="navmenu" class="navmenu">
              <ul class="montserrat fw-bold" style="font-size: 2px;" >
                <li><a href="{{ url('/') }}" class="montserrat fw-bold {{ Request::is('/') ? 'active' : '' }}" style="font-size: 18px;" >Accueil</a></li>
            
                <li class="dropdown">
                    <a href="#" class="montserrat fw-bold {{ Request::is('propos') || Request::is('clients') || Request::is('galerie') || Request::is('carriere') ? 'active' : '' }}" style="font-size: 18px;">
                        <span>A propos</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                    </a>
                    <ul>
                        <li><a href="{{ url('/propos') }}" class="{{ Request::is('propos') ? 'active' : '' }}">QUI SOMMES-NOUS</a></li>
                        <li><a href="{{ url('/clients') }}" class="{{ Request::is('clients') ? 'active' : '' }}">NOS CLIENTS</a></li>
                        <li><a href="{{ url('/galerie') }}" class="{{ Request::is('galerie') ? 'active' : '' }}">GALERIE</a></li>
                        <li><a href="{{ url('/carriere') }}" class="{{ Request::is('carriere') ? 'active' : '' }}">CARRIERE</a></li>
                    </ul>
                </li>
            
                <li><a href="{{ url('/service') }}" class="montserrat fw-bold {{ Request::is('service') ? 'active' : '' }}"style="font-size: 18px;" >Nos Services</a></li>
                <li><a href="{{ url('/formation') }}" class="montserrat fw-bold text-danger {{ Request::is('formation') ? 'active' : '' }} " style="font-size: 18px;" >Formations</a></li>
                <li><a href="{{ url('/contact') }}" class="montserrat fw-bold {{ Request::is('contact') ? 'active' : '' }}" style="font-size: 18px;">Contacts</a></li>
            
                @auth
                <li class="dropdown">
                  <a href="#" class="montserrat fw-bold {{ Request::is('tableau') || Request::is('user-resultes') || Request::is('mes-cours') ? 'active' : '' }} "style="font-size: 18px;" >
                      <span>{{ Auth::user()->name }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
                  </a>
                  <ul>
                      @if(Auth::check() && Auth::user()->role_id == 1)
                      <li><a href="{{ url('tableau') }}" class="{{ Request::is('tableau') ? 'active' : '' }}">TABLEAU DE BORD</a></li>
                      @endif
                      <li><a href="{{ url('user-resultes#resultats') }}" class="{{ Request::is('user-resultes') ? 'active' : '' }}">MES RESULTATS</a></li>
                      <li><a href="{{ url('/mes-cours') }}" class="{{ Request::is('mes-cours') ? 'active' : '' }}">MES FORMATIONS</a></li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">DECONNEXION</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                      </form>
                  </ul>
              </li>
                    <li>
                        <a href="{{ url('cart') }}" class="montserrat fw-bold {{ Request::is('cart') ? 'active' : '' }}" style="font-size: 18px;">
                            Panier <span class="badge badge-pill bg-success cart-count">0</span>
                        </a>
                    </li>
                @else
                    <li><a href="{{ url('/login') }}" class="montserrat fw-bold {{ Request::is('login') ? 'active' : '' }}" style="font-size: 18px;" >Connexion</a></li>
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
        <h1 class="mb-2 mb-lg-0">Quiz module</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="/">Accueil</a></li>
            <li class="current"> Quiz Module</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

</div><!-- End Page Title -->



    <!-- Services Section -->
    <section id="services" class="services section">
       
      <div class="container">
        <div class="mt-0 " style="margin-left: 6rem; margin-right: 6rem;">

            <div class="d-flex mx-5">

                {{--  <div class="d-flex bg-primary text-white rounded-pill py-2 px-3 mt-3">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="bi bi-question-circle-fill" style="width: 24px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
              </svg>
              <p class="ms-2 mt-2">Posez votre question</p>
            </div>  --}}




            </div>
            @foreach ($quiz as $value)
                <div class="row">
                    <div class="col-12 ">
                        <div class="section-title">

                            <h2 class="wow fadeInUp" data-wow-delay=".4s">{{ $value->title }}</h2>
                            {{-- <p class="wow fadeInUp" data-wow-delay=".6s">{{ $value->chapitre->id }}</p> --}}
                        </div>
                    </div>
                </div>

                @php
                // Filtrer les Notequiz pour l'utilisateur connecté et le quiz actuellement affiché
                $chapitreID = $value->chapitre->id
               

        
            @endphp
                {{-- <div
        class="flex ml-32 mr-32 mt-9  rounded-lg text-black px-4 py-2"
      >
        <p class="font-sans">Résultats 1 - 50 sur un total d'environ 1090</p>
        <p class="ml-auto font-sans">Résolues | Fréquentes|</p>
      </div> --}}

                <div class="col mb-6">

                    <form action="{{ url('user-results') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="quiz_id" value="{{ $value->id }}">
                        <input type="hidden" name="chapitre_id" value="{{ $chapitreID }}">
                        @php
                            $quizID = $value->id;
                        @endphp
                        <!-- Texte principal -->
                        @foreach ($value->questions as $valus)
                            <div style="margin-left: 3rem; margin-right: 6rem; margin-bottom: 1rem  ">
                                <a href="" class="text-decoration-none hover text-dark">
                                    <h1 class="h3 font-monospace">{{ $valus->title }}</h1>
                                </a>

                                @php
                                    $reponses = $repose->where('question_id', $valus->id);
                                @endphp
                                @foreach ($reponses as $reponse)
                                    {{--  <p class="text-left " style="font-size: 20px;" >{{$reponse->title}} </p>
          <p class="text-left">, {{$reponses->is_correct}} </p>   --}}

                                    {{--  <div class="form-check">
            <input class="form-check-input" type="radio" name="reponse" value="{{ $reponse->id }}" id="reponse_{{ $reponse->id }}">
            <label class="form-check-label" for="reponse_{{ $reponse->id }}">
                {{ $reponse->title }}
            </label>
        </div>  --}}

                                    <div class="form-check">
                                        <!-- Utiliser un nom unique basé sur l'ID de la question -->
                                        <input class="form-check-input" type="radio" name="reponse_{{ $valus->id }}"
                                            value="{{ $reponse->id }}" id="reponse_{{ $reponse->id }}"
                                            style="transform: scale(1.5); margin-right: 10px;" required>
                                        <label class="form-check-label fs-5 " for="reponse_{{ $reponse->id }}">
                                            {{ $reponse->title }}
                                        </label>
                                    </div>
                                @endforeach


                            </div>
                        @endforeach

                        <!-- Informations supplémentaires -->
                        {{--  <div class="ms-auto d-flex ">
        <!-- Section réponses et vues -->


        <!-- Section image et auteur -->
        <div class="d-flex">
          <div class="me-13">
            <h5 class="text-right">Réponses :</h5>
            @php
            $reponses = $repose->where('discution_id', $value->id);
        @endphp

        @foreach ($reponses as $reponse)

            <p class="text-left"   ">  {{ $reponse->titre }} :  {{ $reponse->user->name }} {{ $reponse->user->prenom }} </p>
        @endforeach

          </div>
          <div class="ms-auto d-flex">

            <div class="me-4">



            </div>
        </div>
        </div>
      </div>  --}}
                        {{--  <div class="ms-auto d-flex">
        <!-- Section image et auteur -->
        <div class="d-flex" style="margin-left: auto;">
            <div class="me-13" style="text-align: right;">
                <h5>Réponses :</h5>
                @php
                    $reponses = $repose->where('discution_id', $value->id);
                @endphp

                @foreach ($reponses as $reponse)
                    <p style="font-size: 20px;">
                        {{ $reponse->titre }} :  {{ $reponse->user->name }} {{ $reponse->user->prenom }}
                    </p>
                @endforeach
            </div>
        </div>
    </div>  --}}



                </div>


                @if (auth()->check())
                    @php
                        // Filtrer les Notequiz pour l'utilisateur connecté et le quiz actuellement affiché
$filteredNotequiz = $notequiz->where('quiz_id', $value->id);

// Vérifier si un des statuts est égal à "valider"
$hasValidatedStatus = $filteredNotequiz->contains('status', 'valider');
                    @endphp

                    @if (!$hasValidatedStatus)
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Envoyer</button>
                        </div>
                     @else
              <div class="text-center">
                  <span class="text-success">Quiz terminé et validé !</span>
              </div>
          @endif
                @endif



                {{--  <button type="submit" class="btn btn-success">Envoyer</button>  --}}
                </form>
                <div class="ms-auto d-flex">
                    <!-- Section image et auteur -->
                    {{--  <div class="d-flex ms-auto me-4"> <!-- Ajout de me-4 pour la marge à droite -->
        <div class="me-13" style="text-align: right;">
            <h5>Réponses :</h5>
              @php
                $reponses = $repose->where('discution_id', $value->id);
            @endphp

            @foreach ($reponses as $reponse)
                <p style="font-size: 20px;">
                    {{ $reponse->titre }} :  {{ $reponse->user->name }} {{ $reponse->user->prenom }}
                </p>
            @endforeach
        </div>
    </div>  --}}
                </div>

        </div>
        @endforeach

        <div style="height: 20px;"></div>

    </div>

      </div>

    </section><!-- /Services Section -->

  

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

</body>

</html>
