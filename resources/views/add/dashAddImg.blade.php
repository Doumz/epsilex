@extends('layouts.admin')

@section('content')
 
 <section>
  <div id="add_coiffure" class="" style="margin-left: 40px; ">
      <div class="card-header">
        <h3 class="card-title">
           <i class="ion ion-clipboard mr-1"></i>
           Add Image
        </h3>

      <div class="card-tools"> </div>
     </div>
              <!-- /.card-header -->
     <div class="card-body">
      <div class="card-header">
                <h3 class="card-title">Ajouter une Image</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('add_img') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sous-titre</label>
                    <input type="text" name="sous_titre" required class="form-control" id="exampleInputEmail1" placeholder="Enter le sous-titre">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>   
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" required class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choisie une image</label>
                      </div>
                    </div>
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