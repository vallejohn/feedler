<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <a class="navbar-brand" href="/"><strong>Feedler</strong></a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
            @endif
        </ul>
        <div class="d-flex flex-row navbar-nav">
            @if (Auth::check())
                <div class="align-self-center">
                    <img class="d-flex rounded-circle hidden-md-down" style="width:32px; height:32px" src="http://surfacegallery.com.au/sites/surfacegallery/media/2648.jpg" alt="Generic placeholder image">
                </div>
                <div class="align-self-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <form action="/logout" method="post">
                                {{ csrf_field() }}
                                <a class="dropdown-item" onclick="$(this).closest('form').submit()" href="#">Logout</a>
                            </form>
                        </div>
                    </li>
                </div>
            @else
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Join Feedler</a>
                    </li>
                </ul>
            @endif
        </div>
    </div>
</nav>
