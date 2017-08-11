@extends('show_post_master')

@section('content')

    <header
            style="background-image: url('http://orig00.deviantart.net/d43e/f/2016/196/2/8/material_design_wallpaper_red_034_by_charlie_henson-daa22ts.png')">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="d-flex align-items-end pb-3" style="height: 15rem;">
                        <div>
                            <h1 style="color: #ffffff">{{ $post->title }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
                <div class="d-flex justify-content-start text-muted pb-4">
                    <div><i class="fa fa-clock-o"></i> {{ $post->created_at->diffForHumans() }}</div>
                    <div class="pl-4"><i class="fa fa-tags"></i> Technology, Economy, Social</div>
                    <div class="ml-auto"><i class="fa fa-comments"></i> 32 Comments</div>
                </div>
                <p>{{ $post->body }}</p>
            </div>
        </div>
    </div>
@endsection
