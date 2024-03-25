<html>

  <?php
  $jump_sub_folder = "../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder. 'query/query-tabella_documenti.php');
  include('scritp-tabella.php');
  include('entrate_e_uscite_documenti/script-documenti.php');

  ?>
  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Tabella documenti</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-12 table-responsive">
              <table class="table table-striped text-center" id="tabellaDocumenti">
                <thead>
                  <tr>
                    <th>Numero bolla</th>
                    <th>Cliente</th>
                    <th>Riferimento cliente</th>
                    <th>Pallet</th>
                    <th>Quantità</th>
                    <th>Listino</th>
                    <th>Prezzo totale</th>
                    <th>Magazzino</th>
                    <th>Locazione</th>
                    <th>Data di carico</th>
                    <th>Data di uscita</th>
                    <th>Giorni totali di permanenza</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td> <?php echo $row['numero_bolla']; ?> </td>
                    <td> <?php echo $row['nome']; ?> </td>
                    <td> <?php echo $row['azienda']; ?> </td>
                    <td> <?php echo $row['nominativo']; ?> </td>
                    <td> <?php echo $row['quantita_pallet']; ?> </td>
                    <td> <?php echo $row['titolo']; ?> </td>
                    <td> <?php echo $row['prezzo_totale']; ?> </td>
                    <td> <?php echo $row['denominazione']; ?> </td>
                    <td> <?php echo $row['area']; ?> </td>
                    <td class="data_ingresso"> <?php echo $row['data_carico']; ?> </td>
                    <td class="data_uscita">
                      <?php
                      	if ($row['data_uscita']) {
                        	echo $row['data_uscita'];
                        } else {
                        	echo "Bolla non ancora chiusa";
                       	}
                      ?>
                    </td>
                    <td class="giorni_permanenza"></td>
                    <td><a href='#' data-toggle="modal" data-target="#modal_elimina_<?php echo $row['id_documento']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

                    <div class="modal fade" id="modal_elimina_<?php echo $row['id_documento']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="">
                              <label>Ne sei sicuro?</label>
                              <input type="hidden" name="id_documento" class="form-control" value="<?php echo $row['id_documento'];?>">
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" name="elimina_documento" value="Elimina">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

                   


                  </tr>
                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>

          <br>
          <br>

          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 text-center">
              <a href='gestione_documenti.php' id="example" type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Esci
              </a>
            </div>
            <div class="col-md-3">
            </div>
          </div>

        </div>
      </div>
    </main>
  </body>
  <script type='text/javascript'>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    $(document).ready(function() {
        $('#tabellaDocumenti').DataTable();
    });
</script>
</html>