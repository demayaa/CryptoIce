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
	                <div class="card-header">{{ __('Category Baru') }}</div>
	                <div class="card-body">
	                    <form action="" method="post">
	                        @csrf
	                        <div class="form-group">
	                            <label for="category">Category</label>
	                            <input  type="text" name="category" class="form-control form-control-sm" id="category">
	                        </div>
	                        <div class="float-right">
	                            <a href="/admin/list-category" class="btn btn-sm btn-danger">Cencel</a>
	                            <button type="submit" class="btn btn-sm btn-success">Tambah</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
                		
	</div>
@endsection