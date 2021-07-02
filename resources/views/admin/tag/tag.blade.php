@extends('admin.layouts.app')

@section('main-content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Text Editors</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Text Editors</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
      <div class="container-fluid">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tag</h3>
              </div>
            </div>
            @include('includes.messages')
  <div class="row">
      <!-- left column -->
      
  <div class="offset-lg-2 col-md-8">
              <!-- general form elements -->
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="{{ route('tag.store') }}" method="POST">
                    {{ csrf_field()  }}
                    <div class="card-body">
                      <div class="form-group">
                        <label for="title">Tag Name</label>
                        <input type="text" class="form-control" id="title" name="name" placeholder="Name">
                      </div>
                     
                        <div class="form-group">
                          <label for="slug">Slug</label>
                          <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug">
                        </div>

                        
                        
                    <!-- /.card-body -->
                    {{-- <div class="card-footer"> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a>
                      {{-- </div> --}}
                
                  </form>
                </div>
                <!-- /.card -->
  </div>
<!-- right column -->

  <!-- /.card-header -->
  <!-- form start -->
  </div>
      </div>

  
        {{-- <div class="card-footer">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div> --}}
  </section>

 
    <!-- ./row -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->  

@endsection <!-- Content Wrapper. Contains page content -->
