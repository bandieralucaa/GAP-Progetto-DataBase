<html>
<?php
$jump_sub_folder = "../";
include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
include($jump_sub_folder . 'query/query-listino-pallet.php');
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
        <h1>Listino Pallet</h1>
      </div>
    </section>
    <div class="album py-5 bg-light">
      <div class="row">
        <div class="col-md-11 text-right">
          <a href='#' data-toggle="modal" data-target="#modal_aggiungi_listino_pallet"  type="button" class="btn btn-outline-primary">
            Aggiungi listino pallet
          </a>
        </div>
      </div>
      <br>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <table class="table table-striped text-center" id="pallet">
              <thead>
                <tr>
                  <th>Pallet</th>
                  <th>Listino</th>
                  <th>Prezzo</th>
                  <th>Elimina</th>
                </tr>
              </thead>
              <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                  <td><?php echo $row['nominativo']; ?></td>
                  <td><?php echo $row['titolo']; ?></td>
                  <td><?php echo $row['prezzo']; ?></td>
                  <td><a href='#' data-toggle="modal" data-target="#modal_elimina_<?php echo $row['id_listino_pallet']; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                </tr>

                <div class="modal fade" id="modal_elimina_<?php echo $row['id_listino_pallet']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <input type="hidden" name="id_listino_pallet" class="form-control" value="<?php echo $row['id_listino_pallet'];?>">
                          <div class="modal-footer">
                            <input type="submit" class="btn btn-danger" name="elimina_listino_pallet" value="Elimina">
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

    <!-- Modal per l'aggiunta dei prezzi -->
    <div class="modal fade" id="modal_aggiungi_listino_pallet" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Aggiungi Prezzo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="">
              <div class="form-group">
                <label for="selectPallet">Seleziona il Pallet</label>
                <select class="form-control" id="id_pallet" name="id_pallet">
                <option value="" style="font-style: italic;">Seleziona...</option>
                  <?php
                    $array_pallet = get_all_pallet($conn);
                    foreach ($array_pallet as $pallet){?>
                <option value="<?php echo $pallet['id_pallet'];?>"><?php echo $pallet['nominativo'];?></option>
                  <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label for="selectListino">Seleziona il Listino</label>
                <select class="form-control" id="id_listino" name="id_listino">
                  <option value="" style="font-style: italic;">Seleziona...</option>
                  <?php
                    $array_listini = get_all_listini($conn);
                    foreach ($array_listini as $listino){?>
                <option value="<?php echo $listino['id_listino'];?>"><?php echo $listino['titolo'];?></option>
                  <?php }?>
                </select>
              </div>
              <div class="form-group">
                <label for="prezzo">Prezzo</label>
                <input type="text" class="form-control" id="prezzo" name="prezzo" placeholder="Inserisci il prezzo">
              </div>
              <div class="modal-footer">
              <input type="submit" class="btn btn-success" name="aggiungi_prezzo" value="Aggiungi">
              </div>
            </form>
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