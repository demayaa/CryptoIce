<?php
use Illuminate\Support\Str;
?>
@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/admin/add-postingan" class="btn btn-sm btn-primary">Tambah Postingan</a>
            <div class="card">
                <div class="card-header">{{ __('List Postingan') }}</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                          <thead class="grey lighten-2">
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Judul</th>
                              <th scope="col">Author</th>
                              <th scope="col">Category</th>
                              <th scope="col">Tags</th>
                              <th scope="col">Link</th>
                              <th scope="col">Thumbnail</th>
                              <th scope="col">Publish</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($postingan as $post): ?>
                                  <tr>
                                      <th scope="row">{{$post->id}}</th>
                                      <td>{{ Str::limit($post->title, 10) }}</td>
                                      <td><i class="fas fa-user-edit fas-sm"></i> {{$post->author}}</td>
                                      <td><span class="badge badge-sm badge-primary">{{$post->category}}</span></td>
                                      <?php $tags = explode(",", $post->tags); ?>
                                      <td><?php foreach ($tags as $tag): ?>
                                          <span class="badge badge-sm badge-primary">{{$tag}}</span>
                                      <?php endforeach; ?></td>
                                      <td>https://cryptoice.biz/blog/{{$post->slug}}</td>
                                      <td><img src="{{url('/data_file/'.$post->img)}}" alt="thumbnail" class="img-thumbnail" style="width: 200px"></td>
                                      <td>{{$post->created_at}}</td>
                                      <td>
                                          <a href="/admin/hapus-postingan/{{$post->id}}" class="badge badge-sm badge-danger">Trash</a>
                                          <a href="" class="badge badge-sm badge-primary">Edit</a>
                                      </td>
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