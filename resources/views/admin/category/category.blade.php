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
   @include('includes.messages')
  <div class="container-fluid">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Titles</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action = "{{ route('category.store') }}" method="post">
              {{ csrf_field() }}
                <div class="card-body">
                    <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="categoryTitle">Category Title</label>
                            <input type="text" class="form-control" id="categoryTitle" name="categoryTitle" placeholder="Give a suitable Title...">
                        </div>                       

                        <div class="form-group">
                            <label for="categorySlug">Category Slug</label>
                            <input type="text" class="form-control" id="categorySlug" name="categorySlug" placeholder="Slug">
                        </div>
                    </div>
                    
                </div>                 
                </div>
                <!-- /.card-body -->
        
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a class= "col-lg-offset-5 btn btn-success" href="{{ route('category.index') }}">Back</a>
                </div>
              </form>
            </div>
            <!-- /.card -->
    </div>

  </div>
  <!-- /.content-wrapper -->

@endsection  