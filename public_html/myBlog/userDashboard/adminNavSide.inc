<html>
  <!-- /************Dashboard nav *******************/ -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand fs-3 fw-bold" href="../index.php">MyBlog</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php"
              >Home</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log in</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/insert_author.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../admin/new_post.php">Post</a>
          </li>
        </ul>
        <form class="d-flex">
          <input
            class="form-control"
            type="search"
            placeholder="Search"
            aria-label="Search"
          />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- /************Dashboard nav *******************/ -->

  <!-- /************Dashboard Sidebar *******************/ -->

  <aside class="sidebar">
    <img src="logo.png" alt="logo" />
    <ul class="ul sidebar_icon">
      <li>
        <a href="adminphp.php">
          <i class="fa fa-th-large"></i>
        </a>
      </li>
      <li>
        <a href="editUsers.php">
          <i class="far fa-user"></i>
        </a>
      </li>
      <li><i class="fas fa-suitcase"></i></li>
      <li><i class="fas fa-cog"></i></li>
    </ul>
    <ul class="bottom_sidebar_icon">
      <li><i class="fa fa-bell"></i></li>
      <li><img src="logo.png" alt="" /></li>
    </ul>
  </aside>
</html>
