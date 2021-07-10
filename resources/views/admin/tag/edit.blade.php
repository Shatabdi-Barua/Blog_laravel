@extends('admin.layouts.app')
  
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
              <form action="{{ route('tag.update', $tags->id) }}" method="post">
              {{ csrf_field() }}
              {{ method_field('put') }}
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="tagTitle">Tag Title</label>
                            <input type="text" class="form-control" id="tagTitle" name="tagTitle" placeholder="Give a suitable Title..." value="{{$tags->name}}">
                        </div>

                        <div class="form-group">
                            <label for="tagSlug">Tag Slug</label>
                            <input type="text" class="form-control" id="tagSlug" name="tagSlug" placeholder="Give a suitable Sub Title..." value="{{$tags->slug}}">
                        </div>

                     
                    </div>
                    
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