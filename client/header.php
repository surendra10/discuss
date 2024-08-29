<?php error_reporting('1'); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/discuss/"><img src="./public/logo.jpg" width="150px" height="100px"/></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active"  href="http://localhost/discuss/">Home</a>
        </li>
        <?php if($_SESSION['user']['username']){ ?>
          <li class="nav-item">
          <a class="nav-link" href="./server/request.php?logout=true">Logout</a>
          <li class="nav-item">
          <a class="nav-link" href="?ask=true">Ask a Question</a>
        </li>
        <?php } ?>
        <?php if(!$_SESSION["user"]["username"]){ ?>
        <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?signup=true">Sign Up</a>
        </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Latest Question</a>
        </li>
      </ul>
    </div>
  </div>
</nav>