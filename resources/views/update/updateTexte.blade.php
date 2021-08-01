@extends('layouts.admin')

@section('content')
 
 <section>
  <div id="add_coiffure" class="" style="margin-left: 40px; ">
      <div class="card-header">
        <h3 class="card-title">
           <i class="ion ion-clipboard mr-1"></i>
           Add Texte
        </h3>

      <div class="card-tools"> </div>
     </div>
              <!-- /.card-header -->
     <div class="card-body">
      <div class="card-header">
                <h3 class="card-title">Updare un Texte <em>{{ $texte->titre }}</em></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('edite_texte', ['id' => $texte->id ]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Titre</label>
                    <input type="text" name="titre" required class="form-control" id="exampleInputEmail1" value="{{ $texte->titre }}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Texte</label>
                    <input type="text" name="texte" required class="form-control" id="exampleInputEmail1" value="{{ $texte->texte }}">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
           </div> 
          </div>
 </section>

@endsection