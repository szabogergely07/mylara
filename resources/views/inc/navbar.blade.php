<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <ul>
            <li></li>
          </ul>
        </button>
        <div class="container" id="navbar">
        <a class="navbar-brand" href="/mylara/public">{{config('app.name', 'LSAPP')}}</a>
          <ul class="navbar-nav">
            <li class="nav-item">
                <a href="/mylara/public">Home</a>
                <a href="/mylara/public/about">About</a>
                <a href="/mylara/public/services">Services</a>
                <a href="/mylara/public/posts">Blog</a>
                <a href="/mylara/public/posts/create">Create Post</a>
            </li>
          </ul>
        </div>
      </nav>




{{-- <nav class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">{{config('app.name', 'LSAPP')}}</a>
          </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/services">Services</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav> --}}