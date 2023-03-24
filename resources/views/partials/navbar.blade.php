<nav class="navbar navbar-expand-lg navbar-light" style="width: 100%; background-color: teal;">
<div class="container d-flex" style="width:2000px">
    <div class="collapse navbar-collapse" id="navbarNav">
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
</nav>
      </div>