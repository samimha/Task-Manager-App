<div class="blog-masthead">
    <div class="container">
      <nav class="nav blog-nav">
        <a class="blog-nav-item active" href="/">Welcome</a>
        <a class="blog-nav-item" href="/tasks">Tasks</a>
        <a class="blog-nav-item" href="/blog">Blog</a>
        <a class="blog-nav-item" href="/about">About</a>
        @if (Auth::check())
          <a class="blog-nav-item nav-link ml-auto" href="#">{{ Auth::user()->name }}</a>
        @else
        <a class="blog-nav-item nav-link ml-auto" href="/login">Login</a>
        @endif
      </nav>
    </div>
  </div>