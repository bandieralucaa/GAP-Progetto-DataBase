<html>

  <?php
  $jump_sub_folder = "../../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder. 'query/query-magazzini.php');
  ?>
    <head>
    <style>
      #magazzini {
        border-bottom: none;
      }
    </style>
  </head>
  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Magazzino</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">


        <div class="row">
          <div class="col-md-11 text-right">
            <a href='#' type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal_aggiungi_magazzino">
              Aggiungi magazzino
            </a>
          </div>
        </div>

        <div class="modal fade" id="modal_aggiungi_magazzino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aggiungi magazzino</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <label>Inserisci i dati del nuovo magazzino</label>
                  <input required type="text" placeholder="Denominazione" name="denominazione" class="form-control">
                  <br>
                  <input required type="text" placeholder="Indirizzo" name="indirizzo" class="form-control">
                  <br>
                  <input required type="text" placeholder="Città" name="citta" class="form-control">
                  <br>
                  <input required type="text" placeholder="Provincia" name="provincia" class="form-control">
                  <br>
                  <input required type="text" placeholder="Cap" name="cap" class="form-control">
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="aggiungi_magazzino" value="Aggiungi">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <br>
        <br>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped text-center" id="magazzini">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Indirizzo</th>
                    <th>Città</th>
                    <th>Provincia</th>
                    <th>Cap</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td> <?php echo $row['denominazione']; ?> </td>
                    <td> <?php echo $row['indirizzo']; ?> </td>
                    <td> <?php echo $row['citta']; ?> </td>
                    <td> <?php echo $row['provincia']; ?> </td>
                    <td> <?php echo $row['cap']; ?> </td>

                    <td><a href='#' data-toggle="modal" data-target="#modal_modifica_magazzino_<?php echo $row['id_magazzino']; ?>" title="Aggiungi magazzino"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <div class="modal fade" id="modal_modifica_magazzino_<?php echo $row['id_magazzino']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifica magazzino</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="">
                              <label>Modifica i dati del magazzino</label>
                              <input required type="text" placeholder="Denominazione" name="denominazione" class="form-control" value="<?php echo $row['denominazione'];?>">
                              <br>
                              <input required type="text" placeholder="Indirizzo" name="indirizzo" class="form-control" value="<?php echo $row['indirizzo'];?>">
                              <br>
                              <input required type="text" placeholder="Città" name="citta" class="form-control" value="<?php echo $row['citta'];?>">
                              <br>
                              <input required type="text" placeholder="Provincia" name="provincia" class="form-control" value="<?php echo $row['provincia'];?>">
                              <br>
                              <input required type="text" placeholder="Cap" name="cap" class="form-control" value="<?php echo $row['cap'];?>">
                              <input type="hidden" name="id_magazzino" class="form-control" value="<?php echo $row['id_magazzino'];?>">
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-warning" name="modifica_magazzino" value="Modifica">
                              </div>

                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                    <td><a href='#' data-toggle="modal" data-target="#modal_elimina_magazzino_<?php echo $row['id_magazzino']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                    <div class="modal fade" id="modal_elimina_magazzino_<?php echo $row['id_magazzino']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="id_magazzino" class="form-control" value="<?php echo $row['id_magazzino'];?>">
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" name="elimina_magazzino" value="Elimina">
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
              <a href='../manutenzione.php' id="example" type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
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
  </script>
  <script>
    $(document).ready(function() {
        $('#magazzini').DataTable();
    });
</script>
</html>
