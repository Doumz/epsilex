
    <div class="line">
         <div id="news-carousel" class="owl-carousel owl-theme">
            @foreach($texte as $text)
              <div class="item">
                <h2>{{ $text->titre }}</h2>
                 <p class="s-12 m-12 l-8 center">{{ $text->texte }}  </p>
             </div>
            @endforeach
         </div>
    </div>
