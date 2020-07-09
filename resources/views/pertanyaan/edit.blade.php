@extends('layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1200.88px;"">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Pertanyaan
            </h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-body">
                <div class="row">
                	<div class="col-sm-6">
                		
                    <form action="{{route('pertanyaan.update', $data->id)}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                       <div class="form-group{{$errors->has('judul') ? ' has-error' : ''}}">
                              <label>Judul</label>
                              <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul" value="{{$data->judul}}">
                              @if($errors->has('judul'))
                              <span class="help-block">{{$errors->first('judul')}}</span>
                          @endif
                      </div>
                       
                      <div class="form-group{{$errors->has('isi') ? ' has-error' : ''}}">
                              <label>Isi</label>
                              <textarea type="text" class="form-control" id="isi" name="isi" placeholder="Isi Pertanyaan" style="height: 150px;"> {{$data->isi}}
                              </textarea>
                              @if($errors->has('isi'))
                              <span class="help-block">{{$errors->first('isi')}}</span>
                          @endif
                      </div>
                     
    	            	<div class="tombol_add">
    	            		<button type="submit" class="btn btn-primary">Kirim!</button>
    	            	</div>
    	            </div>
                </form>   
              </div>
	           </div>
	          <!-- /.col -->
  	        </div>
          <!-- ./row -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@stop

