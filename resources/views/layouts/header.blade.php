  <header>
      <!-- Intro settings -->
      <style>
          #intro {
              /* Margin to fix overlapping fixed navbar */
              margin-top: 58px;
          }

          @media (max-width: 991px) {
              #intro {
                  /* Margin to fix overlapping fixed navbar */
                  margin-top: 45px;
              }
          }
      </style>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
          <div class="container-fluid">
              <!-- Navbar brand -->
              <a class="navbar-brand" target="_blank" href="https://mdbootstrap.com/docs/standard/">
                  <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="16" alt="" loading="lazy"
                      style="margin-top: -3px;" />
              </a>
              <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#navbarExample01"
                  aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarExample01">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item active">
                          <a class="nav-link" aria-current="page" href="{{ route('posts.index') }}">Home</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('posts.create') }}" rel="nofollow"
                              target="_blank">Create Post</a>
                      </li>
                  </ul>

                  <ul class="navbar-nav d-flex flex-row">
                      {{-- <!-- Icons -->
                      <li class="nav-item me-3 me-lg-0">
                          <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                              target="_blank">
                              <i class="fab fa-youtube"></i>
                          </a>
                      </li> --}}
                      
                  </ul>
                  <a href="{{ route('login') }}" class="btn btn-primary" style="margin: 10px;">Login</a>
                  <a href="{{ route('register') }}" class="btn btn-primary" style="margin: 10px;">Register</a>
              </div>
          </div>
      </nav>
      <!-- Navbar -->

      <!-- Jumbotron -->
      <div id="intro" class="p-5 text-center bg-light">
          <h1 class="mb-3 h2">Blog Page</h1>
          <p class="mb-3">You can create your post <a href="{{ route('posts.create') }}">here</a></p>
          <a class="btn btn-primary m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" rel="nofollow" data-mdb-ripple-init
              target="_blank">Start tutorial</a>
          <a class="btn btn-primary m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank" data-mdb-ripple-init
              role="button">Download MDB UI KIT</a>
      </div>
      <!-- Jumbotron -->
  </header>
  <!--Main Navigation-->
