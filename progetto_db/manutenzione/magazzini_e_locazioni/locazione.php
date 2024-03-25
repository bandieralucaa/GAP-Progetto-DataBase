<html>

  <?php
  $jump_sub_folder = "../../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder. 'query/query-locazioni.php');
  ?>

  <head>
    <style>
      #locazioni {
        border-bottom: none;
      }
    </style>
  </head>

  <body>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1>Locazioni di magazzino</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">


        <div class="row">
          <div class="col-md-11 text-right">
            <a href='#' type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal_aggiungi_locazione" title="Aggiungi locazione di magazzino">
              Aggiungi locazione di magazzino
            </a>
          </div>
        </div>

        <div class="modal fade" id="modal_aggiungi_locazione" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aggiungi locazione</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <label>Inserisci i dati della nuova locazione</label>
                  <input required type="text" placeholder="area" name="area" class="form-control">
                  <br>
                  <label>Magazzino</label>
                  <select class="menu_a_tendina form-control" name="id_magazzino">
                    <option value="" style="font-style: italic;">Seleziona...</option>

                    <?php

                    $array_magazzini = get_all_magazzini($conn);

                    foreach ($array_magazzini as $magazzino){?>
                    <option value="<?php echo $magazzino['id_magazzino'];?>"><?php echo $magazzino['denominazione'];?></option>
                    <?php }?>
                  </select>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="aggiungi_locazione" value="Aggiungi">
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
              <table class="table table-striped text-center" id="locazioni">
                <thead>
                  <tr>
                    <th>Descrizione</th>
                    <th>Magazzino</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td> <?php echo $row['area']; ?> </td>
                    <td> <?php echo $row['denominazione']; ?> </td>
                    <td><a href='#' data-toggle="modal" data-target="#modal_modifica_locazione_<?php echo $row['id_locazione']; ?>" title="Modifica locazione di magazzino"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>

                    <div class="modal fade" id="modal_modifica_locazione_<?php echo $row['id_locazione']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifica locazione</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="">
                              <label>Modifica i dati della locazione</label>
                              <input required type="text" placeholder="descrizione" name="area" class="form-control" value="<?php echo $row['area'];?>">
                              <br>
                              <input type="hidden" name="id_locazione" class="form-control" value="<?php echo $row['id_locazione'];?>">
                              <br>
                              <label>Magazzino</label>
                              <select class="menu_a_tendina form-control" name="id_magazzino">
                                <option value="<?php echo $row['id_magazzino'];?>"><?php echo $row['denominazione'] . " - selezionato";?></option>
                                <?php foreach ($array_magazzini as $magazzino){?>
                                <?php if($row['id_magazzino'] !== $magazzino['id_magazzino']){ ?>
                                <option value="<?php echo $magazzino['id_magazzino'];?>"><?php echo $magazzino['denominazione'];?></option>
                                <?php }?>
                                <?php }?>
                              </select>
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-warning" name="modifica_locazione" value="Modifica">
                              </div>

                            </form>

                          </div>
                        </div>
                      </div>
                    </div>

                    <td><a href='#' data-toggle="modal" data-target="#modal_elimina_locazione_<?php echo $row['id_locazione']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

                    <div class="modal fade" id="modal_elimina_locazione_<?php echo $row['id_locazione']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="id_locazione" class="form-control" value="<?php echo $row['id_locazione'];?>">

                              <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" name="elimina_locazione" value="Elimina">
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
  </script>
  <script>
    $(document).ready(function() {
      $('#locazioni').DataTable();
    });
  </script>
</html>
