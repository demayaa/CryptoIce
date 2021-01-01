@extends('blog.app') @section('content')
<!--Main Layout-->
<main style="margin-top: -50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 mb-5">
                <div class="text-center">
                    <div class="card card-body mb-3 blue-grey lighten-4">
                        <p class="mb-0 mt-0 blue-grey-text">Advertise Here</p>
                    </div>
                </div>
                <div class="card card-cascade">
                    <!-- Card image -->
                    <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{url('/data_file/'.$postingan->img)}}" alt="Card image cap" />
                        <a href="#!">
                            <div class="mask rgba-black-slight"></div>
                        </a>
                    </div>
                    <div class="card-body card-body-cascade">
                        <div class="text-center">
                            <h4 class="card-title font-weight-bold">{{$postingan->title}}</h4>
                            <ul class="list-unstyled list-inline font-small">
                              <li class="list-inline-item pr-2 black-text"><i class="far fa-clock pr-1"></i>{{$postingan->created_at->format('m/d/Y')}}</li>
                              <li class="list-inline-item pr-2 black-text"><i class="fas fa-user-edit fas-sm pr-1"></i>{{$postingan->author}}</li>
                             </ul>
                        </div>
                        <div class="">
                            <p class="mb-0 mt-0">Category : <a href="/posts/category/{{$postingan->category}}" class="trigger teal info-color text-white">{{$postingan->category}}</a></p>
                            <?php $tags = explode(",", $postingan->tags); ?>
                            <p class="mt-0 mt-0">Tags : <?php foreach ($tags as $tag): ?>
                                <span class="trigger teal lighten-4">{{$tag}}</span>
                                <?php endforeach; ?>
                            </p>
                        </div>
                        <div class="content mt-5">
                            {!! $postingan->content !!}
                        </div>
                        <hr>
                        <div class="text-center">
                            <h5>Share On</h5>
                            <!--Twitter-->
                            <a href="https://twitter.com/intent/tweet?text=https://cryptoice.biz/posts/{{$postingan->slug}}" class="btn btn-sm btn-tw"><i class="fab fa-twitter pr-1"></i> Twitter</a>
                        </div>
                    </div>
                </div>
            </div>
            @include('blog.sidebar')
            <div class="card card-body mb-5 blue-grey lighten-4">
                <p class="text-center mb-0 mt-0 blue-grey-text">Advertise Here</p>
            </div>
            <hr/>
        </div>
    </div>
</main>

<!--Main Layout-->
@endsection
