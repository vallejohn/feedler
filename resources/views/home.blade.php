@extends('master')

@section('content')
    <div class="row">
        <div class="col-lg-6 pb-5">
            <div class="d-flex justify-content-end">
                <div class="mr-auto p-0 mb-4"><h5 class="text-muted">Latests</h5></div>
                <div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Filter
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">All</button>
                            <button class="dropdown-item" type="button">Articles</button>
                            <button class="dropdown-item" type="button">Blogs</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Post --}}
            @foreach ($posts as $post)
                <div class="media mb-2">
                    <img class="d-flex mr-2 rounded-circle hidden-md-down" style="width:64px; height:64px" src="http://surfacegallery.com.au/sites/surfacegallery/media/2648.jpg" alt="Generic placeholder image">
                    <div class="media-body">
                        <div class="card">
                            <div class="card-block">
                                <h6 class="mt-0">{{ $post->title }}</h6>
                                <div class="d-flex flex-row mb-2 text-muted small">
                                    <div>{{ $post->user->name }}</div>
                                    <div class="pl-3"><i class="fa fa-clock-o"></i> {{ $post->created_at->diffForHumans() }}</div>
                                </div>
                                <p class="small">
                                    {{str_limit($post->body, 100)  }}
                                </p>
                                <div class="d-flex flex-row text-muted small">
                                    <div><i class="fa fa-thumbs-up"></i> 146 Likes</div>
                                    <div class="pl-3"><i class="fa fa-comment"></i> 65 Comments</div>
                                    <div class="ml-auto">
                                        <a href="">{{ $post->type->name }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- End of Post --}}
        </div>

        {{-- Top Stories --}}
        <div class="col-lg-6">
            <div class="d-flex justify-content-end mb-4">
                <div class="mr-auto p-0"><h5 class="text-muted">Top Stories</h5></div>
                <div>
                    <a href="" class="btn btn-secondary btn-sm">View All</a>
                </div>
            </div>

            {{-- Card Post --}}
            <div class="card mb-4">
                <img class="card-img-top" style="height:180px" src="http://www.dickson-constant.com/medias/images/catalogue/api/m654-grey-680.jpg" alt="Card image cap">
                <div class="card-block">
                    <h4 class="card-title">Praesent eu tellus quis orci fermentum sollicitudin</h4>
                    <p class="card-text">
                        This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.
                    </p>

                    <div class="d-flex justify-content-start">
                        <div>
                            <img src="http://surfacegallery.com.au/sites/surfacegallery/media/2648.jpg" class="rounded-circle" style="height:36px; width:36px">
                        </div>
                        <div class="pl-2 text-muted align-self-center small">
                            Daniel Woodrell
                        </div>
                        <div class="ml-auto align-self-center">
                            <a href="#" class="btn btn-primary">Read Story</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End of Card Post --}}

        </div>
    </div>
@endsection
