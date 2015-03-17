<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">
        <link rel="stylesheet" href="/css/entry.css">
        <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!-- Add your site or application content here -->
    <!--        <p class="paragraf">Hello world! This is HTML5 Boilerplate.</p>-->
    
    
    <div class="content">
        <div class="circle">
            <p class="text-in-circle">Noul tau DSLR iti va aduce cadou o imprimanta foto Canon Selphy CP910.</p>
        </div>
        
        <div class="form-container">
            <p class="text-top">Inscrie-te in aplicatia "Drumul unei fotografii" cu datele tale, ataseaza o copie dupa bonul fiscal sau factura si vei primi imprimanta cadou.</p>
                @yield('content')
        </div>
        
        <div class="wrapper">
            <div class="pasul1">
               <span class="pasul1-bold">Pasul 1.</span>
               <span class="pasul1-normal">Cumpara un <span class="red">DSLR Canon</span> de la partenerii autorizati</span>
            </div>
            <div class="canon-dslr">
                <img src="/img/cannon_dslr.png" />
            </div>
            <div class="vector1">
                <img src="/img/vector_1.png" />
            </div>
            <div class="bon_de_casa">
                <img src="/img/bon_de_casa.png" />
            </div>
            <div class="pasul2">
                <span class="pasul1-bold">Pasul 3.</span>
                <p class="pasul2-normal">
                   Intra in aplicatia <span class="red">"Drumul unei fotografii"</span> si incarca o fotografie cu bonul fiscal
                </p>
            </div>
            <div class="vector2">
                <img src="/img/vector_2.png" />
            </div>
            <div class="pasul3">
                <span class="pasul1-bold">Pasul 2.</span>
                <p class="pasul3-normal">
                   Imprimanta <span class="red">Canon Selphy CP910</span> va ajunge la tine.
                </p>
            </div>
            <div class="canon_selphy">
                <img src="/img/canon_selphy.png" />
            </div>
            <div class="vector3">
                <img src="/img/vector_3.png" />
            </div>
        </div>
        
        
    </div>
    
            
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="/js/plugins.js"></script>
    <script src="/js/main.js"></script>
    
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>
</html>