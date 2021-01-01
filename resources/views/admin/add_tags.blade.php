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
	                <div class="card-header">{{ __('Tags Baru') }}</div>
	                <div class="card-body">
	                    <form action="" method="post">
	                        @csrf
	                        <div class="form-group">
	                            <label for="tags">Tags</label>
	                            <input  type="text" name="tags" class="form-control form-control-sm" id="tags">
	                        </div>
	                        <div class="float-right">
	                            <a href="/admin/list-tags" class="btn btn-sm btn-danger">Cencel</a>
	                            <button type="submit" class="btn btn-sm btn-success">Tambah</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
                		
	</div>
@endsection