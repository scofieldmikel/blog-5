@extends('admin.layouts.app')

@section('head')
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/simplemde/simplemde.min.css') }}">

    <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection

@section('main-content')

    <!-- Content Wrapper. Contains page content -->
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
                        <h3 class="card-title">Title</h3>
                    </div>
                </div>
                @include('includes.messages')
                <form action="{{ route('post.update', $post->id) }}" method="POST">
                  {{ csrf_field() }}
                  {{ method_field('PATCH') }}
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <!-- /.card-header -->
                            <!-- form start -->

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" 
                                    placeholder="Title" value="{{ $post->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="subtitle"> Sub Title</label>
                                    <input type="text" class="form-control" id="title" name="subtitle"
                                        placeholder="Sub Title" value="{{ $post->subtitle }}">
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{ $post->slug }}">
                                </div>



                                <!-- /.card-body -->

                                {{-- <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </div> --}}

                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- right column -->
                        <div class="col-md-6">

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="image">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="image" name="image">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                               
                               
                               
                                <div class="form-group" style="margin-top: 18px;">
                                    <label>Select Tags</label>
                                    <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a Tag" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true" name="tags[]">
                                      @foreach ($tags as $tag)
                                         <option  value="{{ $tag->id }}"
                                            @foreach ($post->tags as $postTag)
                                                    @if ($postTag->id == $tag->id)
                                                        selected
                                                    @endif
                                                @endforeach
                                            >{{ $tag->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>

                                <div class="form-group"  style="margin-top: 18px;">
                                      <label>Select Category</label>
                                      <select class="select2 select2-hidden-accessible" multiple="multiple" data-placeholder="Select a Category" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                @foreach ($post->categories as $postCategory)
                                                    @if ($postCategory->id == $category->id)
                                                        selected
                                                    @endif
                                                @endforeach
                                                >{{ $category->name }}</option>
                                        @endforeach
                                      </select>
                                    </div>
                                  
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="status" name="status" value="1" @if ($post->status == 1) checked @endif >
                                        <label class="form-check-label" for="publish">Publish</label>
                                    </div>

                            </div>
                            <!-- /.card-header -->
                            {{-- </form> --}}
                            <!-- form start -->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Write Post Body Here
                                    </h3>
                                </div>
            
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea id="summernote" name="body" ">
                                        {{ $post->body }}
                                    </textarea>
                                </div>

                            </div>
                        </div>
                        <!-- /.col-->
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
                    </div>
                </form>
            </div>
        </section>


        <!-- Main content -->
        {{-- <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Write Post Body Here
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <textarea id="summernote">
                Place <em>some</em> <u>text</u> <strong>here</strong>
              </textarea>
            </div>

          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->

    </section> --}}
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('footer')
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('admin/plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            // Summernote
            $('#summernote').summernote({
                height: 400,
                focus: true,
                
            });

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });

            

    </script>


@endsection
