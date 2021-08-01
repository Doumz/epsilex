@extends('layouts.admin')

@section('content')
<div class=" text-center margin-tb container-fluid">
    <div class="pul-left">
      @if(Session::has('message'))
        <div class="alert  alert-success">
            <p>{{Session::get('message')}}</p>
       </div>
      @endif
        </div>
</div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            
<div class="card">
<div class="card-header">
  <h3 class="card-title">
    <i class="fas fa-chart-pie mr-1"></i>
    Slider
  </h3>
  <div class="card-tools">
    <ul class="nav nav-pills ml-auto">
      <li class="nav-item">
        <a class="" href="{{ route('slider') }}" >
        <button type="button" class="btn btn-primary t" ><i class="fas fa-plus"></i> Add </button> 
        </a>
      </li>
    </ul>
  </div>
</div><!-- /.card-header -->
<div class="card-body">
<table class="table">
<thead class="table-striped">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Titre</th>
        <th scope="col">Sous titre</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach( $slider as $slide)
      <tr>
      <th scope="row">{{ $slide->id}}</td> 
      <td>{{substr("$slide->titre",0, 10)."(...)"}}</td>
        <td>{{substr("$slide->sous_titre",0, 10)."(...)"}}</td>
        <td><img class="img-fluid" src="{{URL::asset('images/'.$slide->img)}}" height="50" width="50" alt="" style="border-radius: 50%"></td>
       <td>
        <a href="{{ route('deleteSlider', ['id' => $slide->id])}}"  class="btn btn-danger btn-sm badge-pill"> <i class="far fa-trash-alt"></i></a>
       <a href="{{ route('updateSlider', ['id' => $slide->id])}}" onclick="ShowHide('update_coiffure')">
            <i class="fas fa-edit"></i>
            <i class="fas fa-trash-o"></i>
         </a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div><!-- /.card-body -->
</div>
<!-- /.card -->
            <!-- DIRECT CHAT -->
          

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Texte
                </h3>

                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                            <a class="" href="{{ route('texte') }}" >
                            <button type="button" class="btn btn-primary t" ><i class="fas fa-plus"></i> Add </button> 
                            </a>
                      </li>
                  </ul>
               </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table">
                  <thead class="table-striped">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Texte</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>
                @foreach( $texte as $text)
                  <tr>
                  <th scope="row">{{ $text->id}}</td> 
                  <td>{{substr("$text->titre",0, 19)."(...)"}}</td>
                    <td>{{substr("$text->texte",0, 19)."(...)"}}</td>
                   <td> 
                     <a href="{{ route('deleteTexte', ['id' => $text->id])}}"  class="btn btn-danger btn-sm badge-pill"> <i class="far fa-trash-alt"></i></a>
                  <a href="{{ route('update_texte', ['id' => $text->id])}}"><i class="fas fa-edit"></i><i class="fas fa-trash-o"></i>
                    </a>
                  </td>
                  </tr>
                @endforeach
             </tbody>
          </table>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <div class="card bg-gradient-primary">
               <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>
                    <div class="card-tools">
                      <span class="badge badge-danger">8 New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <li>
                      @foreach($mage as $img)
                      <li>
                        <img src="{{URL::asset('images/'.$img->img)}}" alt="User Image">
                        <a class="users-list-name" href="#">{{substr("$img->sous_titre",0, 7)."(...)"}}</a>
                        <span class="users-list-date"></span>
                      </li>
                     @endforeach
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="javascript:">View All Users</a>
                  </div>
                
            </div> 
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
@endsection


















