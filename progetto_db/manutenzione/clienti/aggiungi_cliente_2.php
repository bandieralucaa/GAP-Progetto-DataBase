<html>
  <head>
    <title>Pagina 2</title>
  </head>

  <?php
  $jump_sub_folder = "../../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder. 'query/query-riferimenti.php');

  ?>
  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Riferimenti per il cliente <?php echo $nome?></h1>
        </div>
      </section>

      <div class="album py-5 bg-light">

        <div class="row">
          <div class="col-md-11 text-right">

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_aggiungi">
              Aggiungi riferimento
            </button>

            <div class="modal fade" id="modal_aggiungi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nome riferimento</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body text-center">
                    <form method="post" action="">
                      <input type="text" value="" class="form-control" name="azienda">
                      <div class="modal-footer">
                        <input type="submit" class="btn btn-success" name="aggiungi_riferimento" value="Aggiungi">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <br>


          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <table class="table table-striped small">
                  <thead>
                    <tr>
                      <th>Riferimento numero</th>
                      <th>Nome riferimento</th>
                      <th>Modifica</th>
                      <th>Elimina</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $cont = 1;?>
                    <?php while($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                      <td><?php echo $cont;?></td>
                      <td><?php echo $row['azienda'];?></td>
                      <td><a href="#" data-toggle="modal" data-target="#modal_modifica_<?php echo $row['id_riferimento']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                      <td><a href="#" data-toggle="modal" data-target="#modal_elimina_<?php echo $row['id_riferimento']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                      <?php $cont++;?>
                      <div class="modal fade" id="modal_modifica_<?php echo $row['id_riferimento']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">modifica il riferimento</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form method="post" action="">
                                <label>modifica il nome del riferimento</label>
                                <input type="text" name="azienda" class="form-control" value="<?php echo $row['azienda'];?>">
                                <input type="hidden" name="id_riferimento" class="form-control" value="<?php echo $row['id_riferimento'];?>">

                                <div class="modal-footer">
                                  <input type="submit" class="btn btn-warning" name="modifica_riferimento" value="Modifica">
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="modal fade" id="modal_elimina_<?php echo $row['id_riferimento']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="hidden" name="id_riferimento" class="form-control" value="<?php echo $row['id_riferimento'];?>">
                                <div class="modal-footer">
                                  <input type="submit" class="btn btn-danger" name="elimina_riferimento" value="Elimina">
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
              <div class="col-md-12">
                <a href='anagrafica_clienti.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom" title="Salva e chiudi">
                  Salva e chiudi
                </a>
              </div>
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
    </script>

    </html>
