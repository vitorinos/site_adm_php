<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/SchoolOfNet/PHP/site_adm_php/public/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/SchoolOfNet/PHP/site_adm_php/public/css/style.css">

    <title>Painel administrativo</title>
  </head>
  <body class="d-flex flex-column">
      <div id="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a href="" class="navbar-brand">AdminSON</a>
          <span class="navbar-text">
            Painel administrativo de Sites
          </span>
        </nav>
      </div>
      <div id="main">
        <div class="row">
          <div class="col">
            <ul id="main-menu" class="nav flex-column nav-pills bg-secondary text-white p-2">
              <li class="nav-item">
                <span class="nav-link text-white-50"><small>Menu</small></span>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link active">Páginas</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Usuários</a>
              </li>
            </ul>
          </div>
          <div id="content" class="col-10">
            <?php include $content; ?>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="/SchoolOfNet/PHP/site_adm_php/public/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>