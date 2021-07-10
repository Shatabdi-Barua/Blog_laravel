@extends('admin.layouts.app')

@section('headSection')
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('main-content')
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Post Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
        <div class="row">
          <div class="col-sm-4">
            <h3 class="card-title">Title</h3>
          </div>
          <div class="col-sm-4 d-flex justify-content-center">
                <a class= "btn btn-success" href="{{ route('post.create') }}">Add New Post</a>
          </div>
          <div class="col-sm-4">
          <div class="card-tools" style="float:right">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
          </div>
          
        </div>
          
          <!-- <a class= "col-lg-offset-5 btn btn-success" href="{{ route('post.create') }}">Add New Post</a> -->
            
         
        </div>
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
                  <thead>                  
                  <tr>
                    <th>Serial No.</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Slug</th>
                    <!-- <th>Body</th> -->
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($posts as $post)
                    <tr>
                      <td>{{ $loop->index+1 }}</td>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->subtitle }}</td>
                      <td>{{ $post->slug }}</td>
                      <!-- <td>{!! htmlspecialchars_decode($post->body) !!}</td> -->
                      <td><a href="{{ route('post.edit', $post->id ) }}"><i class="far fa-edit"></i></a></td>
                      <td> 
                      <form method="post" id="delete-form-{{$post->id}}" action="{{ route('post.destroy', $post->id )}}" style="display: none;">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      </form>
                      <!-- <a href="" 
                      onclick="if(confirm('are you sure?'))
                      {
                        event.preventDefault();
                        document.getElementById('delete-form-{{$post->id }}').submit();
                        } 
                        else{
                          event.preventDefault();
                          }"                      
                     ><i class="fas fa-trash-alt"></i></a> -->
                     <a href="" onclick="deletePost(event, 'delete-form-{{$post->id}}')"><i class="fas fa-trash-alt"></i></a>
                      </td>
                    </tr>
                  @endforeach
                 
                
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Serial No.</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Slug</th>
                    <!-- <th>Body</th> -->
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                  </tfoot>
                </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
@section('footerSection')
  <!-- DataTables  & Plugins -->
<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
  </script>
  <script>
  function deletePost(event, id)
  {
    event.preventDefault();
    $("#"+id).submit();
    // var id = id.value();
    // console.log(id1);
  }
</script>
@endsection