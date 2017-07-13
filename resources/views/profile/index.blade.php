@extends('master')

@section('content')
    {{-- Profile Header --}}
    <div class="row">
        <div class="col-lg-4 pb-4">
            <div class="media">
                <img class="d-flex mr-3 rounded profile-image" src="https://68.media.tumblr.com/4b084eb505fda17a440cddc2fd20c480/tumblr_nl5p65rP6H1sigvjco1_400.png" alt="Generic placeholder image">
                <div class="media-body">
                    <h3 class="mt-0 mb-0">Daniel Woodrell</h3>
                    <p class="text-muted">@dan_woodrell</p>
                </div>
            </div>
        </div>
        <div class="col-lg-8 pb-4">
            <div class="d-flex flex-row">
                <div class="pr-4">
                    <h5 class="mb-0 h5-cc">34.2K</h5>
                    <span class="small text-muted">Readers</span>
                </div>
                <div class="pr-4">
                    <h5 class="mb-0 h5-cc">3.5M</h5>
                    <span class="small text-muted">Followers</span>
                </div>
                <div class="pr-4">
                    <h5 class="mb-0 h5-cc">325</h5>
                    <span class="small text-muted">Articles</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Profile Body --}}
    <div class="row">
        {{-- Side Bar --}}
        <div class="col-lg-3">
            <div class="row pb-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-block small">
                            <p class="mb-0"><i class="fa fa-flag"></i> Chattanooga, TN</p>

                            <p class="mb-0"><i class="fa fa-calendar"></i> Joined October 2015</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Bio
                        </div>
                        <div class="card-block">
                            <p class="small justify">
                                Daniel Woodrell was born and now lives in the Missouri Ozarks. He left school and
                                enlisted in
                                the Marines the week he turned seventeen...
                            </p>
                            <a href="bio.html" class="btn btn-outline-info btn-sm btn-block">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-2">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            Unpublished Articles
                        </div>
                        <div class="card-block">
                            <h6><a href="">Fermentum at leo</a></h6>
                            <h6><a href="">Phasellus ornare nibh turpis</a></h6>
                            <h6><a href="">Aenean auctor ante</a></h6>
                            <h6><a href="">Vivamus pellentesque</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Latest Posts --}}
        <div class="col-lg-6 pb-2">

            <div class="card">
                <div class="card-header">
                    Latest
                </div>
                <div class="card-block">
                    <div class="card mb-3">
                        <img class="card-img-top" src="http://artemid.pl/wp-content/uploads/2014/10/QDSMoAMTYaZoXpcwBjsL__DSC0104-1-769x180.jpg" alt="Card image cap">
                        <div class="card-block">
                            <h4 class="card-title">Card title</h4>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in
                                to additional content. This content is a little bit longer.
                            </p>

                            <div class="d-flex justify-content-end small text-muted">
                                <div class="mr-auto ml-0">
                                    <i class="fa fa-user"></i> Daniel Woodrell
                                </div>
                                <div class="pr-4">
                                    <i class="fa fa-thumbs-up"></i> 173
                                </div>
                                <div>
                                    <i class="fa fa-comments"></i> 324
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card mb-2">
                <div class="card-header">
                    Following
                </div>
                <div class="card-block">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text small" style="margin-bottom:.5rem">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                    <div class="d-flex justify-content-end small">
                        <div class="mr-auto ml-0 text-muted">
                            <i class="fa fa-user"></i> Daniel Woodrell
                        </div>
                    </div>
                    <hr class="mb-0">
                </div>
                <div class="card-block">
                    <h6 class="card-title">Card title</h6>
                    <p class="card-text small" style="margin-bottom:.5rem">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. </p>
                    <div class="d-flex justify-content-end small">
                        <div class="mr-auto ml-0 text-muted">
                            <i class="fa fa-user"></i> Daniel Woodrell
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="btn btn-primary btn-sm btn-block">See more posts</a>
        </div>

    @endsection
