@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/admin/add-tags" class="btn btn-sm btn-primary">Tambah Tags</a>
            <div class="card">
                <div class="card-header">{{ __('List Tags') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                      <?php foreach ($tags as $tag): ?>
                          <!-- html... -->
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                              {{$tag->tags}}
                              <a href="/admin/hapus-tags/{{$tag->id}}" class="badge badge-danger badge-pill">Hapus</a>
                          </li>
                      <?php endforeach; ?>    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection