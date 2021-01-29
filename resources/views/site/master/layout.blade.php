<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('site/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('site/assets/fonts/flaticon/font/flaticon.css') }}">
    <title>HomeSafe » @yield('title')</title>
  </head>
  <body>

  <div class="site-loader"></div>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
            <h1 class="mb-0"><a href="{{ route('site') }}" class="text-white h2 mb-0"><strong>HomeSafe<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="{{ Route::current()->getName() === 'site' ? 'active' : '' }}"><a href="{{ route('site')}} ">Home</a></li>
                  <li class="{{ Route::current()->getName() === 'site.buy' ? 'active' : '' }}"><a href="{{ route('site.buy') }}">Vendas</a></li>
                  <li class="{{ Route::current()->getName() === 'site.rent' ? 'active' : '' }}"><a href="{{ route('site.rent') }} ">Alugar</a></li>
                  <li class="{{ Route::current()->getName() === 'site.about' ? 'active' : '' }}"><a href="{{ route('site.about') }} ">Sobre</a></li>
                  <li class="{{ Route::current()->getName() === 'site.contact' ? 'active' : '' }}"><a href="{{ route('site.contact') }} ">Contactos</a></li>
                </ul>
              </nav>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(../site/assets/images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-success text-white px-3 mb-3 property-offer-type rounded">Esta sendo alugada</span>
              <h1 class="mb-2">Luanda -- Benfica</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">50.000KZ</strong></p>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url(../site/assets/images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <span class="d-inline-block bg-danger text-white px-3 mb-3 property-offer-type rounded">Esta sendo vendida</span>
              <h1 class="mb-2">Benguela -- Lubito</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">100.000KZ</strong></p>
            </div>
          </div>
        </div>
      </div>

    </div>
    <!-- Fim do Menu -->
        @yield('content')
    <!-- Rodape -->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Serviços</h3>
              <ul class="list-unstyled">
                  <li><a href="#">Login</a></li>
                  <li><a href="#">Cadastramento</a></li>
                </ul>
              </div>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Menu de navegação</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                <li><a href="{{ route('site') }}">Home</a></li>
                  <li><a href="route('site.buy') }}">Vendas</a></li>
                  <li><a href="route('site.rent') }}">Alugada</a></li>
                </ul>
              </div>
            </div>
         </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Redes socias</h3>
                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://meuportifolio.com" target="_blank" >AronDev</a>
            </p>
          </div>
        </div>
      </div>
    </footer>
  </div>
<script src="{{ asset('site/assets/js/script.js') }}"></script>
</html>
