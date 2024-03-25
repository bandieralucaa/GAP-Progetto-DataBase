<html>
  <?php
  $jump_sub_folder = "";
  $pagina_for = "index";
  include('librerie/riferimenti_css_bootstrap.php');
  include('librerie/permessi.php');
  include('query/query-accesso.php');
  ?>
  <body>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1>Gestione Allocazione Pallet</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
              <a href='gestione_pallet/home_pallet.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Gestione pallet
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
              <a href='gestione_documenti/gestione_documenti.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Gestione documenti
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
              <a href='manutenzione/manutenzione.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Manutenzione e configurazione
              </a>
            </div>
            <div class="col-md-4">
            </div>
          </div>

          <br>
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
              <a href='gestione_dipendenti/dipendenti.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Gestione dipendenti
              </a>
            </div>
            <div class="col-md-4">
            </div>
          </div>

          <br>
          <form method="post" action="">
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4 text-center">
                <input type="submit" name="logout" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" value="Logout">
              </div>
              <div class="col-md-4">
              </div>
            </div>
          </form>
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
