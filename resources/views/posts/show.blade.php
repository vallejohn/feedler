@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-9">

            <div class="d-flex flex-row pb-3 text-muted">
                <div>
                    <img src="http://surfacegallery.com.au/sites/surfacegallery/media/2648.jpg" class="rounded-circle" style="height:36px; width:36px">
                </div>
                <div class="pl-2 align-self-center">{{ $post->user->name }}</div>
            </div>

            <h1>{{ $post->title }}</h1>
            <h5 class="text-muted">{{ $post->subtitle }}</h5>

            <div class="d-flex justify-content-start text-muted">
                <div><i class="fa fa-clock-o"></i> {{ $post->created_at->diffForHumans() }}</div>
                <div class="pl-4"><i class="fa fa-tags"></i> Technology, Economy, Social</div>
                <div class="ml-auto"><i class="fa fa-comments"></i> 32 Comments</div>
            </div>

        </div>
    </div>
    <div class="row mt-4">
        <div class="col-lg-8 offset-1">

            <p>{{ $post->body }}</p>

        </div>
    </div>
@endsection
