  <?php
  session_start();
  if(!(isset($_SESSION['dipendente']))){
    echo "<script>alert('Questa è una pagina privata devi accedere per entrare...');
          window.location.href='" . $jump_sub_folder . "../login.php';
          </script>";
  }
  if(!isset($pagina_for)){
    $pagina_for = "";
  }
  include($jump_sub_folder . 'librerie/permessi.php');
  ?>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.6">
  <link rel="icon" href="<?php echo $jump_sub_folder;?>favicon/favicon.ico" />
  <!--LINK ALLA DOCUMENTAZIONE-->
  <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/album/">


  <link href="<?php echo $jump_sub_folder;?>librerie/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php echo $jump_sub_folder;?>librerie/css/album.css" rel="stylesheet">
  <!--icone-->
  <link rel="stylesheet" href="<?php echo $jump_sub_folder;?>librerie/icone/css/font-awesome.min.css">

  <!--select bootstrap-->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />

  <!--DataTables-->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script>window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="<?php echo $jump_sub_folder;?>librerie/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  <!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->

  <script src="<?php echo $jump_sub_folder;?>librerie/js/bootstrap.js" ></script>
  <?php
  include($jump_sub_folder . 'query/query-global.php');
  include($jump_sub_folder .'php/connect.php');
  include($jump_sub_folder . 'query/variabili-globali.php');

  ?>
  <meta name="theme-color" content="#563d7c">
  <title>GAP</title>

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

