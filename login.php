<html>
  <head>
    <?php $jump_sub_folder = "progetto_db/";?>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.6">
    <link rel="icon" href="<?php echo $jump_sub_folder;?>favicon/favicon.ico" />
    <!--LINK ALLA DOCUMENTAZIONE-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">
    <!--<link href="../manutenzione grafica.css" rel="stylesheet" type="text/css">-->
    <link href="<?php echo $jump_sub_folder;?>librerie/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo $jump_sub_folder;?>librerie/css/album.css" rel="stylesheet">
    <!--icone-->
    <link rel="stylesheet" href="<?php echo $jump_sub_folder;?>librerie/icone/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="/docs/4.4/dist/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="<?php echo $jump_sub_folder;?>librerie/js/bootstrap.js" ></script>
    <?php
    include($jump_sub_folder .'php/connect.php');
    session_start();
    include($jump_sub_folder . 'query/query-accesso.php');
    ?>
    <meta name="theme-color" content="#563d7c">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <title>GAP</title>
  </head>


  <body>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1>Login</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <form method="post" action="">
            <div class="row">
              <div class="col-md-12">
                <input required type="text" class="form-control" name="username" placeholder="username">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <input required type="password" class="form-control" name="password" placeholder="password">
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-md-12">
                <input type="submit" class="btn btn-outline-primary btn-block btn-lg" name="login" value="Accedi">
              </div>
            </div>
          </form>
          <br>
        </div>
      </div>
    </main>
  </body>
  <script type='text/javascript'>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>
</html>
