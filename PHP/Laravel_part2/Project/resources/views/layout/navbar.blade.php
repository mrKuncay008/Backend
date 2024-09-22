<nav class="navbar navbar-expand-lg navbar-dark bg-dark font-weight-bold">
    <a class="navbar-brand" href="#">
    <img src="https://laravel.com/img/logomark.min.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Welcome
    </a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
      <div class="collapse navbar-collapse m-2 nav_list " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Home") ? 'active':'' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "About") ? 'active':'' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == "Post") ? 'active':'' }}" href="/post">Post</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
              Select Language
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item indo_item" href="#">
                    <img src="/img/indo-logo.png" width="16px" alt="flag">
                    Indo
                </a>
              <a class="dropdown-item" href="#">
                <img src="/img/uk-logo.png" width="16px" alt="flag">
                English
            </a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="">Logout</a>
          </li>
        </ul>
      </div>
</nav>