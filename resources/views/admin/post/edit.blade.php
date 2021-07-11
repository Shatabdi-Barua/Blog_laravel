@extends('admin.layouts.app')

@section('headSection')
 <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2/css/select2.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
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

    @include('includes.messages')

  <div class="container-fluid">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Titles</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              {{ method_field('put') }}
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="title">Post Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Give a suitable Title..." value="{{$post->title}}">
                        </div>

                        <div class="form-group">
                            <label for="subtitle">Post Sub Title</label>
                            <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Give a suitable Sub Title..." value="{{$post->subtitle}}">
                        </div>

                        <div class="form-group">
                            <label for="slug">Post Slug</label>
                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug" value="{{$post->slug}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="image">File input</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <!-- <input type="file" class="custom-file-input" id="image"> -->
                                <!-- <label class="custom-file-label" for="image">Choose file</label> -->
                                <input type="file" id="image" name="image">
                            </div>                            
                            </div>
                        </div>
                        <div class="form-group">
                          <label>Select Tags</label>
                          <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                            @foreach($tags as $tag)
                                <option value="{{ $tag->id }}"
                                @foreach($post->tags as $postTag)
                                  @if($postTag->id == $tag->id)
                                    selected
                                  @endif
                                @endforeach
                                >{{ $tag->name }}</option>
                            @endforeach
                          </select>
                        </div>

                        <div class="form-group">
                          <label>Select Categories</label>
                          <select class="select2" name="categories[]" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}"
                                @foreach($post->categories as $postCategories)
                                  @if($postCategories->id == $category->id)
                                    selected
                                  @endif
                                @endforeach>{{ $category->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" value="1" class="form-check-input" id="status" name="status"
                            @if($post->status == 1) checked
                            @endif>
                            <label class="form-check-label" for="status">Publish</label>
                        </div>
                    </div> 
                </div>                 
                </div>
                <!-- /.card-body -->
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-outline card-info">
                            <div class="card-header">
                              <h3 class="card-title">
                                Write Post Here
                              </h3>
                            </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <textarea id="summernote" name="body" placeholder="Write Blog here...">{{ $post->body }}</textarea>
                      </div>
                      <!-- <div class="card-footer">
                        Visit <a href="https://github.com/summernote/summernote/">Summernote</a> documentation for more examples and information about the plugin.
                      </div> -->
                    </div>
                  </div>
                </div>
        <!-- /.col-->      
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class= "col-lg-offset-5 btn btn-success" href="{{ route('post.index') }}">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
</div>
            <!-- Main content -->
    <section class="content">
      
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Page specific script -->
<script>
  $(document).ready(function(){
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>
@endsection
@section('footerSection')
<!-- Select2 -->
<script src="{{ asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin/dist/js/demo.js')}}"></script>
<!-- Page specific script -->
<script>
$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
  })
  </script>
@endsection