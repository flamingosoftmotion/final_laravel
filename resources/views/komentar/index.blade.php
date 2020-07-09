@extends('layouts.app')
@section('content')

<div class="content-wrapper" style="min-height: 1200.88px;"">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>
              Komentar
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
                		
                    <form action="{{ route('komentar', $data->id) }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       
                      <div class="form-group">
                              <label>Komentar</label>
                              <input type="text" class="form-control" value="{{$data->komentar}}" readonly="">

                              <input id="id" type="hidden" name="id" value="{{ $data->id }}" required readonly="">
                      </div>
                      <div class="form-group{{$errors->has('komentar') ? ' has-error' : ''}}">
                              <label>Isi</label>
                              <textarea name="komentar" type="text" id="editor" class="form-control"></textarea>
                              @if($errors->has('komentar'))
                              <span class="help-block">{{$errors->first('komentar')}}</span>
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

