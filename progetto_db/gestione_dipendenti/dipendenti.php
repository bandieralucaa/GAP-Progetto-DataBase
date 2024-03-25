<html>

  <?php
  $jump_sub_folder = "../";

  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder . 'query/query-dipendenti.php');

  ?>
  <head>
    <head>
    <style>
      #dipendenti {
        border-bottom: none;
      }
    </style>
  </head>
  </head>


  <body>
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Gestione dipendenti</h1>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="row">
          <div class="col-md-11 text-right">
            <a href='#' type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#modal_aggiungi_dipendente">
              Aggiungi dipendente
            </a>
          </div>
        </div>

        <!-- Modal INIZIO MODAL AGGIUNGI DIPENDENTE-->
        <div class="modal fade" id="modal_aggiungi_dipendente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Aggiungi dipendente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form method="post" action="">
                  <label>Inserisci i dati di un nuovo dipendente</label>
                  <input required type="text" placeholder="nome" name="nome" class="form-control">
                  <br>
                  <input required type="text" placeholder="cognome" name="cognome" class="form-control">
                  <br>
                  <label for="sesso">Sesso:</label>
                  <select class="menu_a_tendina form-control input_dati" name="sesso" required>
                    <option value="maschio">Maschio</option>
                    <option value="femmina">Femmina</option>
                  </select>
                  <br>
                  <input required type="email" placeholder="email" name="email" class="form-control">
                  <br>
                  <input required type="text" placeholder="numero di telefono" name="numero_telefono" class="form-control">
                  <br>
                  <input required type="text" placeholder="indirizzo" name="indirizzo" class="form-control">
                  <br>
                  <input required type="text" placeholder="città" name="citta" class="form-control">
                  <br>
                  <input required type="text" placeholder="cap" name="cap" class="form-control">
                  <br>
                  <input required type="text" placeholder="provincia" name="provincia" class="form-control">
                  <br>
                  <input required type="text" placeholder="username" name="username" class="form-control">
                  <br>
                  <input required type="password" placeholder="password" name="password" class="form-control">
                  <br>
                  <label>permessi</label>
                  <select class="form-control" name="id_privilegio">
                    <option value="" style="font-style: italic;">Seleziona...</option>
                    <?php foreach($array_privilegi as $privilegio){?>
                    <option value="<?php echo $privilegio['id_privilegio'];?>"><?php echo $privilegio['ruolo'];?></option>
                    <?php }?>
                  </select>
                  <div class="modal-footer">
                    <input type="submit" class="btn btn-success" name="aggiungi_dipendente" value="Aggiungi">
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
        <!--FINE DELLA MODAL AGGIUNTA DIPENDENTE -->

        <br>
        <br>


        <div class="container">
          <div class="row">
            <div class="col-md-12 center-table">
              <table class="table table-striped text-center" id="dipendenti">
                <thead>
                  <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Ruolo</th>
                    <th>Altre informazioni</th>
                    <th>Modifica</th>
                    <th>Elimina</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($array_dipendenti as $dipendente){ ?>
                  <tr>
                    <td> <?php echo $dipendente['username']; ?> </td>
                    <td> <?php if($show_pass){echo $dipendente['password'];}else{echo "*******";}?> </td>
                    <td> <?php echo $dipendente['ruolo']?></td>
                    <td><a href='#' data-toggle="modal" data-target="#modal_informazioni_dipendente_<?php echo $dipendente['id_dipendente']; ?>" ><i class="fa fa-info-circle" aria-hidden="true"></i></a></td>
                    <td><a href='#' data-toggle="modal" data-target="#modal_modifica_dipendente_<?php echo $dipendente['id_dipendente']; ?>" ><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                    <td><a href='#' data-toggle="modal" data-target="#modal_elimina_dipendente_<?php echo $dipendente['id_dipendente']; ?>"  ><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>

                    <!-- Modal INIZIO MODAL INFORMAZIONI dipendente-->
                    <div class="modal fade" id="modal_informazioni_dipendente_<?php echo $dipendente['id_dipendente']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Informazioni dipendente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="">
                              <label>Nome</label>
                              <input readonly type="text" name="nome" class="form-control" value="<?php echo $dipendente['nome'];?>">
                              <br>
                              <label>Cognome</label>
                              <input readonly type="text" name="cognome" class="form-control" value="<?php echo $dipendente['cognome'];?>">
                              <br>
                              <label>Sesso</label>
                              <input readonly type="text" name="sesso" class="form-control" value="<?php echo $dipendente['sesso'];?>">
                              <br>
                              <label>Indirizzo email</label>
                              <input readonly type="email" placeholder="email" name="email" class="form-control" value="<?php echo $dipendente['email'];?>">
                              <br>
                              <label>Numero di telefono</label>
                              <input readonly type="text" placeholder="numero di telefono" name="numero_telefono" class="form-control" value="<?php echo $dipendente['numero_telefono'];?>">
                              <br>
                              <label>Indirizzo</label>
                              <input readonly type="text" placeholder="indirizzo" name="indirizzo" class="form-control" value="<?php echo $dipendente['indirizzo'];?>">
                              <br>
                              <label>Città</label>
                              <input readonly type="text" placeholder="città" name="citta" class="form-control" value="<?php echo $dipendente['citta'];?>">
                              <br>
                              <label>CAP</label>
                              <input readonly type="text" placeholder="cap" name="cap" class="form-control" value="<?php echo $dipendente['cap'];?>">
                              <br>
                              <label>Provincia</label>
                              <input readonly type="text" placeholder="provincia" name="provincia" class="form-control" value="<?php echo $dipendente['provincia'];?>">
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- Modal INIZIO MODAL MODIFICA dipendente-->
                    <div class="modal fade" id="modal_modifica_dipendente_<?php echo $dipendente['id_dipendente']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modifica dipendente</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="">
                              <label>Modifica i dati dell'dipendente</label>
                              <input required type="text" placeholder="nome" name="nome" class="form-control" value="<?php echo $dipendente['nome'];?>">
                              <br>
                              <input required type="text" placeholder="cognome" name="cognome" class="form-control" value="<?php echo $dipendente['cognome'];?>">
                              <br>
                              <label for="sesso">Sesso:</label>
                              <select required class="menu_a_tendina form-control input_dati" name="sesso"  value="<?php echo $dipendente['sesso'];?>">
                                <option value="maschio">Maschio</option>
                                <option value="femmina">Femmina</option>
                              </select>
                              <br>
                              <input required type="text" placeholder="email" name="email" class="form-control" value="<?php echo $dipendente['email'];?>">
                              <br>
                              <input required type="text" placeholder="numero di telefono" name="numero_telefono" class="form-control" value="<?php echo $dipendente['numero_telefono'];?>">
                              <br>
                              <input required type="text" placeholder="indirizzo" name="indirizzo" class="form-control" value="<?php echo $dipendente['indirizzo'];?>">
                              <br>
                              <input required type="text" placeholder="città" name="citta" class="form-control" value="<?php echo $dipendente['citta'];?>">
                              <br>
                              <input required type="text" placeholder="cap" name="cap" class="form-control" value="<?php echo $dipendente['cap'];?>">
                              <br>
                              <input required type="text" placeholder="provincia" name="provincia" class="form-control" value="<?php echo $dipendente['provincia'];?>">
                              <br>
                              <input required type="text" placeholder="username" name="username" class="form-control" value="<?php echo $dipendente['username'];?>">
                              <br>
                              <input required type="password" placeholder="password" name="password" class="form-control" value="<?php echo $dipendente['password'];?>">
                              <input type="hidden" name="id_dipendente" class="form-control" value="<?php echo $dipendente['id_dipendente'];?>">
                              <br>
                              <label>permessi</label>
                              <select class="form-control" name="id_privilegio">
                                <option value="<?php echo $dipendente['id_privilegio'];?>"><?php echo $dipendente['ruolo']." - selezionato";?></option>
                                <?php foreach($array_privilegi as $privilegio){?>
                                <?php if($dipendente['id_privilegio'] !== $privilegio['id_privilegio']){?>
                                <option value="<?php echo $privilegio['id_privilegio'];?>"><?php echo $privilegio['ruolo'];?></option>
                                <?php }?>
                                <?php }?>
                              </select>
                              <div class="modal-footer">
                                <input type="submit" class="btn btn-warning" name="modifica_dipendente" value="Modifica">
                              </div>
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!--FINE DELLA MODAL MODIFICA dipendente -->

                    <!-- Modal INIZIO MODAL ELIMINA dipendente-->
                    <div class="modal fade" id="modal_elimina_dipendente_<?php echo $dipendente['id_dipendente']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="hidden" name="id_dipendente" class="form-control" value="<?php echo $dipendente['id_dipendente'];?>">

                              <div class="modal-footer">
                                <input type="submit" class="btn btn-danger" name="elimina_dipendente" value="Elimina">
                              </div>
                            </form>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!--FINE DELLA MODAL ELIMINA dipendente -->
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
              <a href='../index.php' id="example" type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                Esci
              </a>
            </div>
            <div class="col-md-3">
            </div>
          </div>

          <br>
        </div>
      </div>
    </main>
  </body>
  <script type='text/javascript'>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    $(document).ready(function() {
      $('#dipendenti').DataTable();
    });
  </script>
</html>
