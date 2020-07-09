@extends('layouts.app')
@section('title', 'Add New Posts')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            @include('alert')
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="panel-title">Add new posts</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <form action="{{route('posts.create')}}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input name="title" type="text" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea name="content" type="text" id="editor" class="form-control"></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                

@endsection

