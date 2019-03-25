<div class="col-md-12 mb-xl-5">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">

        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
<!-- Left Side Of Navbar -->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="/mylara/public/about">About me <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/mylara/public/myprojects">My Projects <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/mylara/public/posts">Blog <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/mylara/public/posts/create">Write Post <span class="sr-only">(current)</span></a>
            </li>
          </ul>

<!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
<!-- Authentication Links -->
            @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                @endif
                @else
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                {{ Auth::user()->name }}
                            </a>
                        <li class="nav-link">
                            <a title="Edit" class="btn btn-sm btn-outline-light" href="/mylara/public/home">&#x270E;
                            </a>
                        </li>

                        <li class="nav-link">
                            <a title="Logout" class="btn btn-sm btn-outline-light" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">&#x2613;
                            </a>
                        </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
            @endguest
        </ul>

<!-- search engine displayed here-->

            <!--{!! Form::open(['method'=>'GET','url'=>'search_', 'action'=>'search_motor','class'=>'navbar-form navbar-left','role'=>'search'])  !!}
                <div class="input-group custom-search-form">
                    <input id="searchinput" type="text" class="form-control" name="searching" placeholder="Search..." required>
                    <a href="{{ url('results') }}" class="btn btn-sm"><span class="glyphicon glyphicon-plus"></span>OK</a>
                </div>
            {!! Form::close() !!}-->

            <form action="results" method="get">
                    <input type="text" name="name">
                    <input class="btn btn-primary" type="submit">
             </form>
         </div>
</nav>
</div>