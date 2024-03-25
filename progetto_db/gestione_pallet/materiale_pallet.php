<html>
  <?php
  $jump_sub_folder = "../";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder . 'query/query-materiali.php');
  ?>
  <head>
    <style>
      #materialiPallet {
        border-bottom: none;
      }
    </style>
  </head>
  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Materiali pallet</h1>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="row">
          <div class="col-md-11 text-right">
            <a href='#' data-toggle="modal" data-target="#modal_aggiungi_materiale"  type="button" class="btn btn-outline-primary">
              Aggiungi materiale
            </a>
          </div>
        </div>
        <br>
        <div class="modal fade" id="modal_aggiungi_materiale" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aggiungi materiale</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <label>Materiale</label>
                  <input required type="text" class="form-control" name="tipo">                
                  <br>
                  <div class="modal-footer">
                    <input type="submit" name="salva_materiale" class="btn btn-success" value="Aggiungi"> 
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped text-center" id="materialiPallet">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while($row = mysqli_fetch_assoc($result)){ ?>
                  <tr>
                    <td> <?php echo $row['tipo']; ?> </td>
                    <td><a href='#' data-toggle="modal" data-target="#modal_modifica_<?php echo $row['id_materiale']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href='#' data-toggle="modal" data-target="#modal_elimina_<?php echo $row['id_materiale']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                  </tr>

                  <div class="modal fade" id="modal_modifica_<?php echo $row['id_materiale']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Modifica descrizione materiale</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="">
                            <label>Materiale</label>
                            <input required type="text" class="form-control" name="tipo" value="<?php echo $row['tipo'];?>">                
                            <input type="hidden" name="id_materiale" class="form-control" value="<?php echo $row['id_materiale'];?>">
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-warning" name="modifica_materiale" value="Modifica">
                            </div>

                          </form>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modal_elimina_<?php echo $row['id_materiale']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="hidden" name="id_materiale" class="form-control" value="<?php echo $row['id_materiale'];?>">
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-danger" name="elimina_materiale" value="Elimina">
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
        $('#materialiPallet').DataTable();
    });
</script>
  </body>
</html>
