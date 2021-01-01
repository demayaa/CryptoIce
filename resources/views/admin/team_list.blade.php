<?php
use Illuminate\Support\Str;
?>
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/admin/add-team" class="btn btn-sm btn-primary">Tambah Team</a>
            <div class="card">
                <div class="card-header">{{ __('List Team') }}</div>

<div class="card-body">
    <div class="table-responsive">
        <table class="table">
            <thead class="grey lighten-2">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Twitter Link</th>
                    <th scope="col">Telegram Link</th>
                    <th scope="col">Jobs</th>
                    <th scope="col">Images</th>
                    <th scope="col">Quote</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($teams as $team): ?>
                <tr>
                    <th scope="row">{{$team->id}}</th>
                    <th>{{$team->name}}</th>
                    <th>{{$team->twitter}}</th>
                    <th>{{$team->telegram}}</th>
                    <th>{{$team->jobs}}</th>
                    <th><img src="{{url('/data_file/team/'.$team->images)}}" alt="thumbnail" class="img-thumbnail" style="width: 200px"></th>
                    <th>{{$team->quote}}</th>
                    <th><a href="/admin/hapus-team/{{$team->id}}" class="badge badge-sm badge-danger">Trash</a></th>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

            </div>
        </div>
    </div>
</div>
@endsection