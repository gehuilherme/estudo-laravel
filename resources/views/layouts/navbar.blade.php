<nav class="navbar navbar-expand navbar-dark bg-green text-light">
  <div class="container">
    <a href="/" class="navbar-brand">
      <i class="fas fa-syringe"></i>
      <span class="brand-text font-weight-light">???</span>
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Patients</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administration
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Users</a>
          <a class="dropdown-item" href="#">System Params</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Contact us</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      
    </ul>
  </div>
</nav>

<script>
  $(document).ready(function() {
      $('.dropdown-toggle').dropdown();
  });
</script>