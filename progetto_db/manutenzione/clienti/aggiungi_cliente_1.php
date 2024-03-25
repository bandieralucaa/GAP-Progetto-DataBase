<html>
  <head>
    <title>Aggiungi cliente</title>

  </head>
  <?php
  $jump_sub_folder = "../../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder . 'query/query-clienti.php');

  ?>
  <body>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1>Aggiungi cliente</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">

        <div class="container">
          <form method="post" action="">

            <div class="row">
              <div class="col-md-4">
                <input required type="text"  placeholder="Nome" value="" class="form-control input_dati" name="nome">
              </div>
              <div class="col-md-4">
                <input required type="text"  placeholder="Cognome" value="" class="form-control input_dati" name="cognome">
              </div>
              <div class="col-md-4">
                <select class="menu_a_tendina form-control input_dati" name="sesso" required>
                  <option value="" disabled selected>Sesso</option>
                  <option value="maschio">Maschio</option>
                  <option value="femmina">Femmina</option>
                </select>
              </div>
            </div>
            <br>

            <div class="row">
              <div class="col-md-3">
                <input required type="text" placeholder="Indirizzo" value="" class="form-control input_dati" name="indirizzo">
              </div>
              <div class="col-md-3">
                <input required type="text" placeholder="Città" value="" class="form-control input_dati" name="citta">
              </div>
              <div class="col-md-3">
                <input required type="text" placeholder="Provincia" value="" class="form-control input_dati" name="provincia">
              </div>
              <div class="col-md-3">
                <input required type="text" placeholder="CAP" value="" class="form-control input_dati" name="cap">
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-3">
                <input required type="text" placeholder="N telefono" class="form-control" value="" name="numero_telefono" id="numero_telefono">
              </div>
              <div class="col-md-3">
                <input required type="email" placeholder="Email" class="form-control input_dati" value="" name="email" >
              </div>

              <div class="col-md-3">
                <input required type="text"  style="text-transform: uppercase;" id="partita_iva" placeholder="Partita IVA" class="form-control input_dati" name="partita_iva">
              </div>
              <div class="col-md-3">
                <input required type="text"  placeholder="Numero FAX" class="form-control input_dati" value="" name="numero_fax" >
              </div>
            </div>

            <br>

            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6 text-center">
                <input href='#' id="example" type="submit" name="aggiungi_cliente" class="btn btn-outline-success btn-block btn-lg" value="Salva e vai ai riferimenti" data-toggle="tooltip" data-placement="bottom">
              </div>
              <div class="col-md-3">
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
