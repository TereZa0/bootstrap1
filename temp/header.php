<style>
  .navbar {
    z-index: 3;
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
    /* margin-top: 10px; */
  }

  #main-navbar {
    transition: 0.3s;
    display: none;
  }

  #cbutton:hover {
    color: #FFF;
    background: #7b0ec9;
    box-shadow: 0 0 50px #FFF;
  }
  .nav-link:hover {
    cursor: pointer;
  }
</style>
<script>
  function openNav() {
    document.getElementById("main-navbar").style.display = "block";
    document.getElementById("cbutton").style.display = "none";
  }

  function closeNav() {
    document.getElementById("main-navbar").style.display = "none";
    document.getElementById("cbutton").style.display = "block";
  }
</script>

<button class="btn btn-outline-secondary ms-3" id="cbutton" onclick="openNav()" style="position: fixed; z-index: 2; border: 5px solid;">
  <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
  </svg>
</button>

<nav class="navbar stick-top navbar-expand-lg navbar-dark" id="main-navbar" style="font-family: 'Segoe UI'; position: fixed;">
  <div class="container-fluid ms-5 me-5">
    <a class="navbar-brand" href="#"> <img src="../file/img/icn-removebg-preview.png" width="25px" height="25px" alt=""> Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item ms-2 me-2">
          <a class="nav-link" href="#Python">Python</a>
        </li>
        <li class="nav-item ms-2 me-2">
          <a class="nav-link" href="#php">PHP</a>
        </li>
        <li class="nav-item ms-2 me-2">
          <a class="nav-link" href="#css">CSS</a>
        </li>
        <li class="nav-item ms-2 me-2">
          <a class="nav-link" href="#html">HTML</a>
        </li>
        <li class="nav-item ms-2 me-2">
          <a class="nav-link" href="#mysql">MYSQL</a>
        </li>
        <li class="nav-item ms-2 me-2">
          <a class="nav-link" href="#js">JavaScript</a>
        </li>
        <li class="nav-item ms-2 me-2">
          <a class="nav-link" onclick="closeNav()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
              <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
              <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
            </svg>
            Close Nav
          </a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>