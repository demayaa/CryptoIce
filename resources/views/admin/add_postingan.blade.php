<?php 
if ($errors->any()) {
    foreach ($errors->all() as $error) {
        toastr()->error($error);
    }
}
?>
@extends('layouts.app')

@section('content')
	<div class="container-fluid">
	    <div class="row justify-content-center">
	        <div class="col-md-12">
	            <div class="card">
	                <div class="card-header">{{ __('Postingan Baru') }}</div>
	                <div class="card-body">
	                    <form action="" method="post" enctype="multipart/form-data">
	                        @csrf
	                        <input type="text" value="{{Auth::user()->name}}" name="author" hidden="hidden">
	                        <div class="form-group">
	                            <label for="title">Judul</label>
	                            <input  type="text" name="title" class="form-control form-control-sm" id="title">
	                        </div>
	                        <div class="form-group">
                                <select class="custom-select custom-select-sm" name="category">
                                  <option selected>Pilih Category</option>
                                  <?php foreach ($category as $res): ?>
                                      <option value="{{$res->slug}}">{{$res->category}}</option>
                                  <?php endforeach; ?>
                                </select>
	                        </div>
	                        <div class="form-group">
                                <select class=" tags mdb-select sm-form" name="tags[]" multiple>
                                  <option value="" disabled selected>Pilih Tags</option>
                                  <?php foreach ($tags as $res): ?>
                                      <option value="{{$res->slug}}">{{$res->tags}}</option>
                                  <?php endforeach; ?>
                                </select>
	                        </div>
	                        <div class="form-group">
	                            <label for="editor">Content</label>
	                            <textarea name="content" id="content" hidden="hidden"></textarea>
	                            <div id="editor"></div>
	                        </div>
	                        <div class="form-group">
	                            <label for="img">Gambar</label>
	                            <input type="file" name="img">
	                        </div>
	                        <div class="float-right">
	                            <a href="/admin/list-postingan" class="btn btn-sm btn-danger">Cencel</a>
	                            <button type="submit" id="submit" class="btn btn-sm btn-success">Publish</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
                		
	</div>
@endsection

