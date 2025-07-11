 <div class="main">
  <div class="top_nav"></div>
  <nav class="navbar navbar-expand-lg navbar-light shadow-sm p-0">
    <div class="container-fluid">
     <a class="navbar-brand" href="#"><img class="navlogo" src="assets/images/Buslelo.pk.png" alt=""></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

  <!-- Center Nav Links (Updated spans) -->
  <ul class="navbar-nav mb-2 mb-lg-0 d-flex flex-row align-items-center ms-auto me-auto">
    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
    <span class="text-muted px-2">|</span>

    <li class="nav-item"><a class="nav-link" href="/About">About Us</a></li>
    <span class="text-muted px-2">|</span>

    <li class="nav-item"><a class="nav-link" href="/campuses">View Buses</a></li>
    <span class="text-muted px-2">|</span>

    <li class="nav-item"><a class="nav-link" href="/admissions">My List</a></li>
    <span class="text-muted px-2">|</span>

    <li class="nav-item"><a class="nav-link" href="/gallery">Gallery</a></li>
    <span class="text-muted px-2">|</span>

    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
  </ul>

  <!-- 🔥 Search + Sign In in One Div -->
  <div class="right-actions d-none d-lg-flex">
    <i class="cr fa-solid fa-magnifying-glass text-dark"
   data-bs-toggle="modal"
   data-bs-target="#searchModal"
   style="cursor: pointer;"></i>

    <a href="signin.php" class="defborder btn rounded-0 py-2 px-lg-4 d-flex align-items-center gap-2">
      <i class="fa-solid fa-circle-user fs-2"></i>
      <div>
        <div style="font-size: 14px;">Account</div>
        <div style="font-size: 16px; font-weight: bold;">Sign In</div>
      </div>
    </a>
  </div>
</div>

    </div>
  </nav>
</div>


<!-- Search Modal -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content shadow-lg">
      <div class="modal-body">
        <input type="text" class="searchinput" placeholder="Search for location, type, or name...">
      </div>
    </div>
  </div>
</div>
