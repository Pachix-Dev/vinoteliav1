<!doctype html>
<html lang="en">
<head>
  <meta name="google-site-verification" content="{{setting('site.google-site-verification')}}" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="{{isset($curso->metas->meta_description) ? $curso->metas->meta_description : setting('site.description')}} {{isset($description) ? $description : setting('site.description')}}">
  <meta name="keywords" content="{{isset($curso->metas->meta_keywords) ? $curso->metas->meta_keywords : setting('site.keywords')}}{{isset($keywords) ? $keywords : setting('site.keywords')}}">
  <meta name="author" content="Difraxion">
  <meta name="robots" content="all">
  <meta name="geo.region" content="MX-GUA">
  <meta name="geo.placename" content="México">
  <meta name="DC.title" content="{{isset($curso->metas->meta_titulo) ? $curso->metas->meta_titulo : setting('site.title')}} {{isset($titulo) ? $titulo : setting('site.title')}}">
  <meta property="og:image:alt" content="{{isset($curso->metas->meta_titulo) ? $curso->metas->meta_titulo : setting('site.title')}}{{isset($titulo) ? $titulo : setting('site.title')}}">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta property="og:type" content="website">
  <meta property="og:title" content="{{isset($curso->metas->meta_titulo) ? $curso->metas->meta_titulo : setting('site.title')}} {{isset($titulo) ? $titulo : setting('site.title')}}">
  <meta property="og:description" content="{{isset($curso->metas->meta_description) ? $curso->metas->meta_description : setting('site.description')}}{{isset($description) ? $description : setting('site.description')}}">
  <meta property="og:image" content="{{asset('storage/' . setting('site.logo'))}}">
  <meta property="og:image:alt" content="{{isset($curso->metas->meta_titulo) ? $curso->metas->meta_titulo : setting('site.title')}} {{isset($titulo) ? $titulo : setting('site.title')}}">
  <meta property="og:site_name" content="{{setting('site.nombre')}}">
  <meta property="og:url" content="{{setting('site.url')}}">
  <meta name="twitter:title" content="{{isset($curso->metas->meta_titulo) ? $curso->metas->meta_titulo : setting('site.title')}} {{isset($titulo) ? $titulo : setting('site.title')}}">
  <meta name="twitter:description" content="{{isset($curso->metas->meta_description) ? $curso->metas->meta_description : setting('site.description')}}{{isset($description) ? $description : setting('site.description')}}">
  <meta name="twitter:image" content="{{asset('storage/' . setting('site.logo'))}}">
  <meta name="robots" content="all">
  <meta name="copyright" content="Copyright (c) 2020">
  @include('partials.assets')
  <link rel='shortcut icon' type='image/x-icon' href='{{asset('images/favicon.png')}}'/>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
  <title> {{isset($curso->metas->meta_titulo) ? $curso->metas->meta_titulo : setting('site.title')}} {{isset($titulo) ? $titulo : setting('site.title')}} -  {{isset($curso->metas->meta_keywords) ? $curso->metas->meta_keywords : setting('site.keywords')}} {{isset($keywords) ? $keywords : setting('site.keywords')}}</title>
  <!--
  Este sitio ha sido desarrollado por Difraxion Group.
  Tel. +52 01 (477) 198 09 65
  E-mail: ventas@reed.com.mx
  www.difraxion.com
  León, Guanajuato
-->
@isset($thankyou)

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '723172471879489');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"

    src="https://www.facebook.com/tr?id=723172471879489&ev=PageView&noscript=1"

    /></noscript>

    <!-- End Facebook Pixel Code -->

@endisset
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KQZQWD9');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174420968-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174420968-1');
</script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KQZQWD9"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <div id="app">
    <header id="header">
      <div class="container">
        @include('partials.menu')
     </div>
    </header>
    <main>
    @yield('content')
    </main>
    <footer>
      @include('partials.footer')
    </footer>
  </div>
  <div id="movilApp">
  <header id="movilHeader">

    <div id="cssmenu">
      <ul>
        @include('partials.menumov')
      </ul>
    </div>
    <div class="text-center">
        <a href="{{url('/')}}">
            <img src="{{asset('storage') . '/' . setting('site.logo')}}" alt="Vinotelia">
        </a>
      {{-- <img src="{{asset('storage') . '/' . setting('site.logo')}}" alt="Vinotelia"> --}}
    </div>
  </header>
  <main>
    @yield('content-mov')
  </main>

  </div>
  @include('partials.scripts')
</body>
</html>
