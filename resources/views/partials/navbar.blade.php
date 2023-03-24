<nav class="navbar navbar-expand-lg navbar-light" style="background-color: teal;">
  <div class="container bg-primary d-flex" style="width:100%">
    <div class="collapse navbar-collapse" id="navbarNav">
    <div class="row d-flex justify-content-md-center">
          <div class="col bg-dark">
          </div>
          <div class="col bg-light"></div>
          <div class="col bg-success">
          <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === "Yanuar Blog | Dashboard" ? 'active' : ''}} text-light" href="/posts">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Yanuar Blog | Home" ? 'active' : ''}} text-light" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Yanuar Blog | About" ? 'active' : ''}} text-light" href="/about">About</a>
          </li>
        </ul>
        </div>
    </div>
      </div>
    </div>
  </nav>