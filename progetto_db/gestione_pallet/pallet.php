<html>
  <?php
  $jump_sub_folder = "../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder . 'query/query-pallet.php');
  include("script-pallet.php")
  ?>
  <head>
    <style>
      #pallet {
        border-bottom: none;
      }
    </style>
  </head>
  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Pallet</h1>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="row">
          <div class="col-md-11 text-right">
            <a href='#' data-toggle="modal" data-target="#modal_aggiungi_pallet"  type="button" class="btn btn-outline-primary">
              Aggiungi pallet
            </a>
          </div>
        </div>
        <br>
        <div class="modal fade" id="modal_aggiungi_pallet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aggiungi pallet</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <label>Descrizione pallet</label>
                  <input required type="text" class="form-control" name="nominativo">                
                  <br>
                  <label>Dimensione pallet (in mm)</label>
                  <select required class="menu_a_tendina form-control" name="id_dimensione">
                    <option value="" style="font-style: italic;">Seleziona...</option>
                    <?php
    					$array_dimensioni = get_all_dimensioni($conn);
  						foreach ($array_dimensioni as $dimensione){?>
                    <option value="<?php echo $dimensione['id_dimensione'];?>"><?php echo $dimensione['descrizione'];?></option>
                    <?php }?>
                  </select>
                  <br>
                  <label>Materiale</label>
                  <select required class="menu_a_tendina form-control" name="id_materiale">
                    <option value="" style="font-style: italic;">Seleziona...</option>
                    <?php
                    $array_materiali = get_all_materiali($conn);
                    foreach ($array_materiali as $materiale){?>
                    <option value="<?php echo $materiale['id_materiale'];?>"><?php echo $materiale['tipo'];?></option>
                    <?php }?>
                  </select>
                  <br>
                  <label>Peso massimo supportato (kg)</label>
                  <input required type="text" name="peso_massimo" class="form-control" value="0.00">

                  <div class="modal-footer">
                    <input type="submit" name="salva_pallet" class="btn btn-success" value="Aggiungi"> 
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped text-center" id="pallet">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Dimensione (in mm)</th>
                    <th>Materiale</th>
                    <th>Peso massimo supportato (in kg)</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td> <?php echo $row['nominativo']; ?> </td>
                    <td> <?php echo $row['descrizione']; ?> </td>
                    <td> <?php echo $row['tipo']; ?> </td>
                    <td> <?php echo $row['peso_massimo']; ?> </td>

                    <td><a href='#' data-toggle="modal" data-target="#modal_modifica_<?php echo $row['id_pallet']; ?>" title="Modifica pallet"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href='#' data-toggle="modal" data-target="#modal_elimina_<?php echo $row['id_pallet']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                  </tr>

                  <div class="modal fade" id="modal_modifica_<?php echo $row['id_pallet']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifica pallet</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="">
                            <label>Nome</label>
                            <input type="text" name="nominativo" class="form-control" value="<?php echo $row['nominativo'];?>">
                            <br>
                            <label>Dimensione (in mm)</label>
                            <select class="menu_a_tendina form-control" name="id_dimensione">
                              <option value="<?php echo $row['id_dimensione'];?>" ><?php echo $row['descrizione'] . " - selezionato";?></option>
                              <?php
                                                                  $array_dimensioni = get_all_dimensioni($conn);
                                                                  foreach ($array_dimensioni as $dimensione){
                                                                    if ($dimensione['id_dimensione'] == $row['id_dimensione']) {
                                                                      continue;
                                                                    }
                              ?>
                              <option value="<?php echo $dimensione['id_dimensione'];?>"><?php echo $dimensione['descrizione'];?></option>
                              <?php }?>
                            </select>

                            <label>Materiale pallet</label>
                            <select class="menu_a_tendina form-control" name="id_materiale">
                              <option value="<?php echo $row['id_materiale'];?>"><?php echo $row['tipo'] . " - selezionato";?></option>
                              <?php foreach ($array_materiali as $materiale){?>
                              <?php if($row['id_materiale'] !== $materiale['id_materiale']){ ?>
                              <option value="<?php echo $materiale['id_materiale'];?>"><?php echo $materiale['tipo'];?></option>
                              <?php }?>
                              <?php }?>
                            </select>
                            <br>
                            <label>Peso massimo supportato (kg)</label>
                            <input required type="text" name="peso_massimo" class="form-control" value="<?php echo $row['peso_massimo'];?>">

                            <input type="hidden" name="id_pallet" class="form-control" value="<?php echo $row['id_pallet'];?>">
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-warning" name="modifica_pallet" value="Modifica">
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modal_elimina_<?php echo $row['id_pallet']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="hidden" name="id_pallet" class="form-control" value="<?php echo $row['id_pallet'];?>">
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-danger" name="elimina_pallet" value="Elimina">
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>
                  </div>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
            </div>
            <div class="col-md-6 text-center">
              <a href='home_pallet.php' id="example" type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Esci
              </a>
            </div>
            <div class="col-md-3">
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
    <script>
      $(document).ready(function() {
        $('#pallet').DataTable();
      });
    </script>
  </body>
</html>
