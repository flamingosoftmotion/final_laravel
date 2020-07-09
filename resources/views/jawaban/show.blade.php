@extends('layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jawaban</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @include('alert')
        
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <td>No</td>
                    <td>Jawaban</td>
                    <td>Pertanyaan</td>
                    <td>Tanggal Dibuat</td>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_jawaban as $index => $data)
                    <tr>
                      <td>{{ $index +1 }}</td>
                      <td>{{ $data->isi}}</td>
                      <td>{{ $data->pertanyaan->isi}}</td>
                      <td>{{ $data->created_at->format('d M Y')}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@stop
@section('footer')
<script src="{{ asset('/admin') }}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{ asset('/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@stop