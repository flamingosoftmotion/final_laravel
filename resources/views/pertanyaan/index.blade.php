@extends('layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1200.88px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @include('alert')
        
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pertanyaan</h1>
            @foreach ($data_pertanyaan as $index => $data)
            <h3>Poin Reputasi Anda: {{ $data->user->reputation }}</h3>
            @endforeach
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="mr-auto card">
                      <a href="/pertanyaan/create" class="btn btn-primary btn-sm"><i class="nav-icon fas fa-plus-square" aria-hidden="true"></i> Ajukan Pertanyaan</a>
                    </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <td>No</td>
                    <td>Judul</td>
                    <td>Isi</td>
                    <td>Tag</td>
                    <td>Tanggal Dibuat</td>
                    <td>Tanggal Diperbaharui</td>
                    <td>Aksi</td>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_pertanyaan as $index => $data)
                    <tr>
                      <td>{{ $index +1 }}</td>
                      <td>{{ $data->judul }}</td>
                      <td>{!!$data->isi!!}</td>
                      <td>
                      @foreach($data->tags as $tag)
                          <a href="" class="btn btn-info btn-sm">{{$tag}}</a>
                      @endforeach
                      </td>
                      <td>{{ $data->created_at->format('d M Y')}}</td>
                      <td>{{ $data->updated_at->format('d M Y')}}</td>
                      <td>
                        <a href="{{ route('jawaban', $data->id) }}" class="btn btn-primary btn-sm">Jawab</a>
                        <a href="{{ route('pertanyaan.show', $data->id) }}"  class="btn btn-info btn-sm delete"><i class="nav-icon fas fa-eye" aria-hidden="true"></i></a>
                        <a href="{{route('pertanyaan.edit', $data->id)}}" class="btn btn-warning btn-sm"><i class="nav-icon fas fa-edit" aria-hidden="true"></i></a>
                        <a href="{{route('pertanyaan.delete', $data->id)}}" class="btn btn-danger btn-sm delete" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="nav-icon fas fa-trash" aria-hidden="true"></i>
                        </a>
                      </td>
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

