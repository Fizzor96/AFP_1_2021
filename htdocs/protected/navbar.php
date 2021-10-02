    <HTML>
    <head>
        <style>
          .navbar-brand
          {
            color: #FFF !important;
          }
          .navbar-brand span *
          {
            text-decoration: none !important;
            color: #e9e9e9 !important;
            transition: 0.2s ease all !important;
          }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php?P=home">Órarend</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="index.php?P=home">Kezdőlap</a>
      </li>
    <?php if($_SESSION["uid"] == NULL): ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=login">Bejelentkezés</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=register">Regisztráció</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=betekinto">Betekintő</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=orarend">Órarend</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=listClass">Felvett tárgyak</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=edit_user">Adataim</a>
      </li>
      <?php if($_SESSION["jog"] == 1): ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=admin">Admin</a>
      </li>
      <?php endif; ?>
      <li class="nav-item">
        <a class="nav-link" href="index.php?P=logout">Kijelentkezés</a>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
  
    </body>
</html>
        
    