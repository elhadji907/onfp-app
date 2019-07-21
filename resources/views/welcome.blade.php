<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ config('app.name', 'ONFP') }}</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> 
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
  <link href="{{ asset('css/scrolling-nav.css') }}" rel="stylesheet">

  {{--  <!-- Custom fonts for this template--> --}}
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/myStyle.css') }}" rel="stylesheet">
      
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

  <!-- Fonts -->
  <link rel="dns-prefetch" href="{{ asset('fonts.gstatic.com') }}">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-dark fixed-top navbar-light bg-white shadow-sm border-bottom-success" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">ACCUEIL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">A PROPOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">CONTACT</a>
          </li>
          @if (Route::has('login'))
          <li class="nav-item">
            @auth
            <a class="nav-link js-scroll-trigger" href="{{ url('/home') }}">ONFP</a>
            @else
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">CONNEXION</a>
          </li>
          <li class="nav-item">
            @if (Route::has('register'))
            <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">INSCRIPTION</a>
            @endif
            @endauth
          </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>

  <header class="bg-primary text-white">
    <div class="container text-center">
      <h1>{{ ("Bienvenue à l'ONFP") }}</h1>
      <p class="lead">{{ ("Office national de Formation professionnelle") }}</p>
    </div>
  </header>

  {{-- 
  <div class="jumbotron bg-grad" id="jumbotron">      
  </div> 
  --}}

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>About this page</h2>
          <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can  it as a boilerplate or starting point for you own landing page designs! This template features:</p>
          <ul>
            <li>Clickable nav links that smooth scroll to page sections</li>
            <li>Responsive behavior when clicking nav links perfect a one page website</li>
            <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
            <li>Minimal custom CSS so you are free to explore your own unique design options</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="services" class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Services we offer</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2>Contact us</h2>
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; ONFP 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <script src="{{ asset('js/scrolling-nav.js') }}"></script>
  
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
