<html>
  <?php
  $jump_sub_folder = "../";
  $pagina_for = "guest_nav";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder . 'query/query-accesso.php');
  ?>
  <script>
    function openWindow(pathPage,width,height){
      window.open(pathPage,"width="+width ,"height="+height);
    }
  </script>
  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Gestione documenti</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4 text-center">
            </div>
            <div class="col-md-4 text-center">
              <a href='entrate_e_uscite_documenti/entrate_documenti.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Documenti in entrata
              </a>
            </div>
            <div class="col-md-4 text-center">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-center">
            </div>
            <div class="col-md-4 text-center">
              <a href='entrate_e_uscite_documenti/uscite.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Documenti in uscita
              </a>
            </div>
            <div class="col-md-4 text-center">
            </div>
          </div>
          <br>
          <?php if(!(($_SESSION['dipendente'][1] != 1) && ($_SESSION['dipendente'][2] != 1) && ($_SESSION['dipendente'][3] != 1))){?>
          <div class="row">
            <div class="col-md-4 text-center">
            </div>
            <div class="col-md-4 text-center">
              <a href='tabella_documenti.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Tabella documenti
              </a>
            </div>
            <div class="col-md-4 text-center">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4 text-center">
            </div>
            <div class="col-md-4 text-center">
              <a href='../index.php' id="example" type="button" class="btn btn-outline-danger btn-lg" data-toggle="tooltip" data-placement="bottom">Menù principale</a>
            </div>
            <div class="col-md-4 text-center">
            </div>
          </div>
          <?php }?>
          <?php if(($_SESSION['dipendente'][1] != 1) && ($_SESSION['dipendente'][2] != 1) && ($_SESSION['dipendente'][3] != 1)){?>
          <form method="post" action="">
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4 text-center">
                <input type="submit" class="btn btn-danger" name="logout" value="Logout">
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </form>
          <?php }?>
        </div>
      </div>
    </main>
    <script type='text/javascript'>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </body>
</html>
