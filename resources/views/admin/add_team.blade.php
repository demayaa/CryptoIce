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
	                    <form action="/admin/add_team/post" method="post" enctype="multipart/form-data">
	                        @csrf
	                        <div class="form-group">
	                            <label for="name">Name</label>
	                            <input  type="text" name="name" class="form-control form-control-sm" id="name">
	                        </div>
	                        <div class="form-group">
	                            <label for="tw">Twitter link</label>
	                            <input  type="text" name="twitter" class="form-control form-control-sm" id="tw">
	                        </div>
	                        <div class="form-group">
	                            <label for="tg">Telegram link</label>
	                            <input  type="text" name="telegram" class="form-control form-control-sm" id="tg">
	                        </div>
	                        <div class="form-group">
	                            <label for="jobs">Jobs</label>
	                            <input  type="text" name="jobs" class="form-control form-control-sm" id="jobs">
	                        </div>
                            <div class="form-group shadow-textarea">
                                <label for="exampleFormControlTextarea6">Quote</label>
                                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." name="quote"></textarea>
                            </div>
	                        <div class="form-group">
	                            <label for="img">Gambar</label>
	                            <input type="file" name="images">
	                        </div>
	                        <div class="float-right">
	                            <a href="/admin/team-list" class="btn btn-sm btn-danger">Cencel</a>
	                            <button type="submit" id="submit" class="btn btn-sm btn-success">Publish</button>
	                        </div>
	                    </form>
	                </div>
	            </div>
	        </div>
	    </div>
                		
	</div>
@endsection

