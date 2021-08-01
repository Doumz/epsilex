@extends('layouts.Import')

@section('content')

      <section>
         <!-- CAROUSEL -->  	
         <div id="carousel">
            <div id="header-carousel" class="owl-carousel owl-theme">
              @foreach($slider as $slide)
               <div class="item">
                  <img src="{{URL::asset('images/'.$slide->img)}}" class="cash-img" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>{{ $slide->titre}}</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>{{ $slide->sous_titre}}
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
              @endforeach
               
            </div>
         </div>
         <!-- FIRST BLOCK --> 	
         <div id="first-block">
            <div class="line">
               <h2>Some awesome blocks</h2>
               <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-sli-people icon2x"></i>
                     <h3>About</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-sli-shield icon2x"></i>
                     <h3>Company</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-sli-puzzle icon2x"></i>
                     <h3>Services</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-sli-globe-alt icon2x"></i>
                     <h3>Contact</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- SECOND BLOCK --> 	
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                        <h1>Amazing title</h1>
                        <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
                        <a class="button rounded-btn submit-btn s-12 l-4 center" href="{{ route('product') }}">Read more</a>  			
                     </article>
                  </div>
               </div>
            </div>
         </div>
         <!-- GALLERY --> 	
         <div id="third-block">
            <div class="line">
               <h2>Responsive gallery</h2>
               <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="{{ asset('img/first-small.jpg') }}" alt="alternative text">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="{{ asset('img/second-small.jpg') }}" alt="alternative text">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="{{ asset('img/third-small.jpg') }}" alt="alternative text">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="{{ asset('img/fourth-small.jpg') }}" alt="alternative text">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div id="fourth-block">
           @include('includes.include')
         </div>
      </section>

@endsection
      