@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a href="/admin/add-category" class="btn btn-sm btn-primary">Tambah Category</a>
            <div class="card">
                <div class="card-header">{{ __('List Category') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                      <?php foreach ($category as $categor): ?>
                          <!-- html... -->
                          <li class="list-group-item d-flex justify-content-between align-items-center">
                              {{$categor->category}}
                              <a href="/admin/hapus-category/{{$categor->id}}" class="badge badge-danger badge-pill">Hapus</a>
                          </li>
                      <?php endforeach; ?>    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection