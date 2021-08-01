<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>{{ config('app.name', 'epsilex') }}</title>
      <link rel="stylesheet" href="{{ asset('css/components.css') }}">
      <link rel="stylesheet" href="{{ asset('css/icons.css ') }}">
      <link rel="stylesheet" href="{{ asset('css/responsee.css ') }}">
      <link rel="stylesheet" href="{{ asset('owl-carousel/owl.carousel.css ') }}">
      <link rel="stylesheet" href=" {{ asset('owl-carousel/owl.theme.css') }}"> 
      <!-- CUSTOM STYLE -->
      <link rel="stylesheet" href="css/template-style.css"> 
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/diseing.css"> 

      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      <header>
         <nav class="navbar navbar-expand-lg navbar-light bg-light"> 
        
          <div class="cash-conect">                  
            <div class="form-inline my-2 my-lg-0" style="margin-left:80%">
               <a href="{{route('register')}}" class="btn btn-primary">Inscription</a>
               <a href="{{route('login')}}" class="btn mr-3 btn-outline-primary">Connection</a>
             </div>
          </div>
          
            <div class="line" style="margin-top: 2%">
               <div class="top-nav">              
                  <div class="logo logo-small">
                     <a href="{{ route('index') }}">DESIGN <br /><strong>THEME</strong></a>
                  </div>                  
                  
                  <div class="s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="{{ route('index') }}">Accueil</a>
                        </li>
                        <li><a href="{{ route('product') }}">Produit</a>
                        </li>
                        <li><a href="{{ route('service') }}">Services</a>
                        </li>
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <a href="{{ route('index') }}">DESIGN <br /><strong>THEME</strong></a>
                     </li>
                  </ul>
                  <div class="s-12 l-5">
                     <ul class="top-ul chevron">
                        <li><a href="{{ route('gallery') }}">Gallery</a>
                        </li>
                        <li>
                           <a>Company</a>			    
                           <ul>
                              <li><a>Company 1</a>
                              </li>
                              <li><a>Company 2</a>
                              </li>
                              <li>
                                 <a>Company 3</a>				  
                                 <ul>
                                    <li><a>Company 3-1</a>
                                    </li>
                                    <li><a>Company 3-2</a>
                                    </li>
                                    <li><a>Company 3-3</a>
                                    </li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li><a href="{{ route('contact') }}">Contact</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>

      @yield('content')

      

      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2019, Vision Design - graphic zoo
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
               </p>
            </div>
         </div>
      </footer>
      <script type="text/javascript" src="js/responsee.js"></script> 
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
            var owl = $('#header-carousel');
            owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
           var owl = $('#news-carousel');
           owl.owlCarousel({
              nav: true,
              dots: false,
              items: 1,
              loop: true,
              navText: ["&#xf007","&#xf006"],
              autoplay: true,
              autoplayTimeout: 4000
           });
         });	
          
      </script> 
   </body>
</html>