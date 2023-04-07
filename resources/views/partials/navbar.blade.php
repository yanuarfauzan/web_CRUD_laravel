
<nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-body rounded" style="background-color:white">
<div class="container d-flex" style="width:2000px">
  <div class="navbar-brand">
    <i class="fa-solid fa-newspaper"></i>
  </div>  
    <div class="collapse navbar-collapse justify-content-center ms-4" id="navbarSupportedContent">
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
    </div>
    <div class="d-flex align-items-center">
      <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:transparent; border: none;" >
        <i class="fa-solid fa-magnifying-glass me-3"></i>
      </button>
      <button class="btn btn-outline-danger btn-rounded">login</button>
    </div>
    </nav>
      </div>

      <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body d-flex align-items-center">
        <i class="fa-solid fa-magnifying-glass me-3"></i> <input type="text" class="form-control" placeholder="apa yang ingin kamu cari?">
      </div>
    </div>
  </div>
</div>