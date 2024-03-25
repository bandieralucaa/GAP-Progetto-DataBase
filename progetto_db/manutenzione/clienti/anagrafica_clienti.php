<!DOCTYPE html>
<html>
  <head>
    <title>Anagrafica clienti</title>
  <?php
  $jump_sub_folder = "../../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder . 'query/query-clienti.php');
  ?>
    <style>
      #clienti {
        border-bottom: none;
      }
    </style>
  </head>
  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Anagrafica clienti</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">


        <div class="row">
          <div class="col-md-11 text-right">
            <a href='aggiungi_cliente_1.php' id="example" type="button" class="btn btn-outline-primary" data-toggle="tooltip" data-placement="bottom" title="Aggiungi cliente">
              Aggiungi cliente
            </a>
          </div>
        </div>

        <br>
        <br>


        <div class="container">
          <div class="row">
            <div class="col-md-12 table-responsive">
              <table class="table table-striped" id="clienti">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Sesso</th>
                    <th>Indirizzo</th>
                    <th>Città</th>
                    <th>CAP</th>
                    <th>Provincia</th>
                    <th>Numero di telefono</th>
                    <th>Partita IVA</th>
                    <th>Numero FAX</th>
                    <th>Email</th>
                    <th>Riferimenti</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td> <?php echo $row['nome']; ?> </td>
                    <td> <?php echo $row['cognome']; ?> </td>
                    <td> <?php echo $row['sesso']; ?> </td>
                    <td> <?php echo $row['indirizzo']; ?> </td>
                    <td> <?php echo $row['citta']; ?> </td>
                    <td> <?php echo $row['cap']; ?> </td>
                    <td> <?php echo $row['provincia']; ?> </td>
                    <td> <?php echo $row['numero_telefono']; ?> </td>
                    <td> <?php echo $row['partita_iva']; ?> </td>
                    <td> <?php echo $row['numero_fax']; ?> </td>
                    <td> <?php echo $row['email']; ?> </td>
                    <td><a class="btn btn-outline-primary" type="button" href="aggiungi_cliente_2.php?id_cliente_creato=<?php echo $row['id_cliente'];?>">Riferimenti</a></td>
                    <td><a href="#" data-toggle="modal" data-target="#modal_modifica_cliente_<?php echo $row['id_cliente']; ?>" type="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="#" data-toggle="modal" data-target="#modal_elimina_cliente_<?php echo $row['id_cliente']; ?>" type="button"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

                    <!-- Modal INIZIO MODAL MODIFICA-->
                    <div class="modal fade" id="modal_modifica_cliente_<?php echo $row['id_cliente']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifica cliente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="">
                              <label>Nome</label>
                              <input type="text" value="<?php echo $row['nome'];?>" class="form-control input_dati" name="nome">
                              <br>
                              <label>Cognome</label>
                              <input type="text" value="<?php echo $row['cognome'];?>" class="form-control input_dati" name="cognome">
                              <br>
                              <label>Sesso</label>
                              <select class="menu_a_tendina form-control input_dati" name="sesso">
                                <?php
                                                                  $options = ["maschio", "femmina"];
                                                                  foreach ($options as $option) {
                                                                    if ($option == $row['sesso']) {
                                                                      echo "<option value='$option' selected>$option - selezionato</option>";
                                                                    } else {
                                                                      echo "<option value='$option'>$option</option>";
                                                                    }
                                                                  }
                                ?>
                              </select>
                              <br>
                              <label>Indirizzo</label>
                              <input type="text" value="<?php echo $row['indirizzo'];?>" class="form-control input_dati" name="indirizzo">
                              <br>
                              <label>Città</label>
                              <input type="text" value="<?php echo $row['citta'];?>" class="form-control input_dati" name="citta">
                              <br>
                              <label>Provincia</label>
                              <input type="text" value="<?php echo $row['provincia'];?>" class="form-control input_dati" name="provincia">
                              <br>
                              <label>CAP</label>
                              <input type="text" value="<?php echo $row['cap'];?>" class="form-control input_dati" name="cap">
                              <br>
                              <label>Numero di telefono</label>
                              <input type="text" class="form-control" value="<?php echo $row['numero_telefono'];?>" name="numero_telefono">
                              <br>
                              <label>Email</label>
                              <input type="email" class="form-control input_dati" value="<?php echo $row['email'];?>" name="email">
                              <br>
                              <label>Parita iva</label>
                              <input type="text" style="text-transform: uppercase;" value="<?php echo $row['partita_iva'];?>" id="partita_iva" class="form-control input_dati" name="partita_iva">
                              <br>
                              <label>Numero Fax</label>
                              <input type="text" class="form-control input_dati" value="<?php echo $row['numero_fax'];?>" name="numero_fax">
                              <input type="hidden" name="id_cliente" class="form-control" value="<?php echo $row['id_cliente'];?>">
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-warning" name="modifica_cliente" value="Modifica">
                              </div>

                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!--FINE DELLA MODAL MODIFICA LISTINO -->

                    <div class="modal fade" id="modal_elimina_cliente_<?php echo $row['id_cliente']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="id_cliente" class="form-control" value="<?php echo $row['id_cliente'];?>">

                              <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" name="elimina_cliente" value="Elimina">
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
            <div class="col-md-6">
              <a href='../manutenzione.php' id="example" type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="tooltip" data-placement="bottom" title="Esci">
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
      $('#clienti').DataTable();
    });
  
  </script>

</html>
