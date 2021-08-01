@extends('layouts.Import')

@section('content')
 
      <section>
         <div id="head">
            <div class="line">
               <h1>Responsive image gallery</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
              <div class="margin">
                @foreach($mage as $img)
                    <div class="s-12 m-6 l-4 cash-mage">
                        <img src="{{URL::asset('images/'.$img->img)}}" class="cash-image">      
                        <p class="subtitile">{{ $img->sous_titre}}
                        </p>
                    </div>
               @endforeach                  
            </div>
         </div>
         <div id="fourth-block" style="margin-top: 8%; margin-bottom: -6%">
           @include('includes.include')
         </div>
      </section>
@endsection