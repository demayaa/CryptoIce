@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            {{ __('Message') }}
        </div>
        <div class="card-body">
            <table class="table">
              <thead class="pink white-text">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">name</th>
                  <th scope="col">email</th>
                  <th scope="col">message</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($message as $msg): ?>
                    <tr>
                        <th scope="row">{{$msg->id}}</th>
                        <td>{{$msg->username}}</td>
                        <td>{{$msg->email}}</td>
                        <td>{{$msg->message}}</td>
                    </tr>
                    
                  <?php endforeach; ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection