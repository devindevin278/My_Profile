<nav id="navbar-example2" class="navbar sticky-top bg-body-tertiary px-3 mb-3">
    <a class="navbar-brand" href="/#">Devin's</a>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="/#profiles">Profile</a>
      </li>

      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#proficiency" role="button" aria-expanded="false">Proficiency</a>
        <ul class="dropdown-menu" >
          <li><a class="dropdown-item" href="/#skills">Skills</a></li>
          <li><a class="dropdown-item" href="/#tools">Tools</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="/#language">Languages</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/#education">Education</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/#projects">Projects</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/#More_About_Me">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ Request::is('blog*') ? 'active' : '' }}" href="/blog">Personal Blog</a>
      </li>
    </ul>

  </nav>
