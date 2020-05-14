<ul class="nav nav-tabs  navbar-dark bg-dark">
  <li class="nav-item">
    <a class="nav-link {{Request :: is ('/') ? 'active' : ''}}" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request :: is ('about') ? 'active' : ''}}" href="/about">About</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{Request :: is ('contact') ? 'active' : ''}}" href="/contact">Contact</a>
  </li>
</ul>
