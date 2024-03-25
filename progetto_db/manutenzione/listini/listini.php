<html>

  <?php
  $jump_sub_folder = "../../";
  $pagina_for = "listini";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder. 'query/query-listini.php');

  ?>
  <head>
    <style>
      #listini {
        border-bottom: none;
      }
    </style>
  </head>
  <body>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1>Listini</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">


        <div class="row">
          <div class="col-md-11 text-right">
            <a href='#' data-toggle="modal" data-target="#modal_aggiungi"  type="button" class="btn btn-outline-primary">
              Aggiungi listino
            </a>
          </div>
        </div>
        <div class="modal fade" id="modal_aggiungi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aggiungi listino</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <label>Inserisci il nome del listino</label>
                  <input required type="text" name="titolo" class="form-control">

                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="aggiungi_listino" value="Aggiungi">
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
            <div class="col-md-12 text-center">
              <table class="table table-striped" id="listini">
                <thead>
                  <tr>
                    <th>Nome listino</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>

                  <?php foreach($array_listini as $listino){ ?>
                  <tr>
                    <td> <?php echo $listino['titolo']; ?> </td>
                    <td><a href="#" data-toggle="modal" data-target="#modal_modifica_<?php echo $listino['id_listino']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href="#" data-toggle="modal" data-target="#modal_elimina_<?php echo $listino['id_listino']?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                  </tr>


                  <div class="modal fade" id="modal_modifica_<?php echo $listino['id_listino']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">modifica listino</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="">
                            <label>modifica il nome del listino</label>
                            <input type="text" name="titolo" class="form-control" value="<?php echo $listino['titolo'];?>">
                            <input type="hidden" name="id_listino" class="form-control" value="<?php echo $listino['id_listino'];?>">
                            <div class="modal-footer">
                              <input type="submit" class="btn btn-warning" name="modifica_listino" value="Modifica">
                            </div>

                          </form>

                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="modal fade" id="modal_elimina_<?php echo $listino['id_listino']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="hidden" name="id_listino" class="form-control" value="<?php echo $listino['id_listino'];?>">

                            <div class="modal-footer">
                              <input type="submit" class="btn btn-danger" name="elimina_listino" value="Elimina">
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
    $(document).ready(function() {
      $('#listini').DataTable();
    });
  </script>

</html>
