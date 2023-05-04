
<nav class="navbar navbar-expand-lg navbar-light shadow-sm p-3 mb-5 bg-body rounded" style="background-color:white">
<div class="container d-flex" style="width:2000px">
  <div class="navbar-brand">
    <i class="fa-solid fa-newspaper"></i>
  </div>  
    <div class="collapse navbar-collapse justify-content-center ms-4" id="navbarSupportedContent">
      <div>  
        <ul class="navbar-nav">
          @if(Auth::user()->role_id != 1)

          @else
            <li class="nav-item dropdown">
              <button class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                dashboard
              </button>
              <ul class="dropdown-menu dropdown-menu-info">
                <li><a class="dropdown-item" href="/posts">Postingan</a></li>
                <li><a class="dropdown-item" href="/category">Kategori</a></li>
              </ul>
          @endif
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
      <button class="btn btn-outline-danger btn-rounded">
        <a href="/logout" class="text-danger">logout</a>
      </button>
    </div>
    </nav>
      </div>
