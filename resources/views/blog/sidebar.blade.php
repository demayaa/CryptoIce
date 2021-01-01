<?php
use App\Category;
use App\Tags;
$cat = Category::all();
$tags = Tags::all();
?>

<div class="col-md-4 mb-5">
    <div class="card shadow  mb-5 light-blue lighten-1">
        <div class="card-body">
            <h4 class="text-center font-weight-bold cyan-lighter-hover mb-3">About Us</h4>
            <p class="white-darker-hover text-left">CryptoIce is a discussion group about cryptocurrency, airdrops, defi, and others.</p>
        </div>
    </div>
    <p class="font-weight-bold cyan-lighter-hover mb-3">Category</p>
    <ul class="list-group mb-5">
        <?php foreach ($cat as $val): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="/posts/category/{{$val->category}}" class="black-text">{{$val->category}}</a>
        </li>
        <?php endforeach; ?>
        
    </ul>
    <p class="font-weight-bold cyan-lighter-hover mb-3">Tags</p>
    <ul class="list-group mb-5">
        <?php foreach ($tags as $v): ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$v->tags}}
        </li>
        <?php endforeach; ?>
        
    </ul>
    <div class="card card-body shadow">
        <h4 class="text-center font-weight-bold cyan-lighter-hover mb-3">Feedback</h4>
        <form action="/feedback" method="post">
            @csrf
            <!-- Material input -->
            <div class="md-form">
                <i class="fas fa-user prefix"></i>
                <input type="text" id="inputIconEx2" class="form-control" name="username" />
                <label for="inputIconEx2">Username</label>
            </div>
            <!-- Material input -->
            <div class="md-form">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" id="inputIconEx1" class="form-control" name="email"/>
                <label for="inputIconEx1">E-mail address</label>
            </div>
            <div class="form-group shadow-textarea">
                <label for="exampleFormControlTextarea6">Message</label>
                <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Write something here..." name="message"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-info">Send</button>
            </div>
        </form>
    </div>
</div>
