<html>
  <?php
  $jump_sub_folder = "../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  ?>
  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Gestione pallet</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 ">
              <a href='pallet.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Pallet
              </a>
              <br>
            </div>
            <div class="col-md-4">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
              <a href='dimensione_pallet.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Dimensioni pallet
              </a>
              <br>
            </div>
            <div class="col-md-4">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
              <a href='materiale_pallet.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Materiali pallet
              </a>
              <br>
            </div>
            <div class="col-md-4">
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 ">
              <a href='listino_pallet.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Listino pallet
              </a>
              <br>
            </div>
            <div class="col-md-4">
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
              <a href='../index.php' id="example" type="button" class="btn btn-outline-danger btn-lg" data-toggle="tooltip" data-placement="bottom">
                Menù principale
              </a>
            </div>
            <div class="col-md-4">
            </div>
          </div>

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
