
<nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-body rounded" style="background-color:white">
<div class="container d-flex" style="width:2000px">
    <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
      <div>
        <i class="fa-solid fa-newspaper"></i>
      </div>  
      <div>  
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ $title === "Yanuar Blog | Dashboard" ? 'active' : ''}}" href="/posts">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Yanuar Blog | Home" ? 'active' : ''}}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Yanuar Blog | Blog" ? 'active' : ''}}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Yanuar Blog | About" ? 'active' : ''}}" href="/about">About</a>
          </li>
        </ul>
      </div>
      <div>
        <button class="btn btn-outline-danger btn-rounded">login</button>
      </div>
      </div>
    </nav>
      </div>