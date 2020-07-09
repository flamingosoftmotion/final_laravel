@extends('layouts.app')
@section('title', 'Data Siswa')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="panel">
                    <div class="panel-heading">
                        <h3 class="panel-title">Post</h3>
                        <div class="right">
                            <a href="{{route('posts.add')}}" class="btn btn-sm btn-primary">Add New Post</a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>User</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                <tr>
                                    <td> {{$post->id}} </td>
                                    <td> {{$post->title}} </td>
                                    <td> {{$post->user->name}} </td>
                                    <td>
                                        <a target="_blank" href="{{route('site.single.post',$post->slug)}}" class="btn btn-info btn-sm">View</a>
                                        <a href="#" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('footer')
    <script>
        $(document).ready(function(){
            $('#datatable').DataTable();

            $('.delete').click(function(){
            var siswa_nama = $(this).attr('siswa-nama'); //mengambil atribut siswa-nama
            var siswa_id = $(this).attr('siswa-id');
            swal({
              title: "Yakin ?",
              text: "Kamu ingin data "+siswa_nama+" terhapus ?",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                swal("Data "+siswa_nama+" berhasil dihapus!", {
                  icon: "success",
                });
                  window.location = "/siswa/"+siswa_id+"/delete"; // route deletes
              } else {
                swal("Your imaginary file is safe!");
              }
                });
            });
        });

        
    </script>
@endsection

