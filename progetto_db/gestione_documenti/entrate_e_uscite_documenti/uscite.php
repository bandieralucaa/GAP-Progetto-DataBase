<html>
  <?php
  $jump_sub_folder = "../../";
  $pagina_for = "guest_nav";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder . 'query/query-uscite.php');
  include('script-documenti.php');
  ?>
  <body>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1>Documenti in uscita</h1>
        </div>
      </section>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="post" action="">
              <div class="row">

                <div class="col-md-6 text-center">
                  <input type="text" name="numero_bolla" class="form-control" placeholder="Numero bolla" value="">
                </div>


                <div class="col-md-6 text-center">
                  <select class="form-control" name="id_cliente">
                    <option value="" style="font-style: italic;">Seleziona...</option>
                    <?php foreach ($array_clienti as $cliente){?>
                    <option value="<?php echo $cliente['id_cliente'];?>"><?php echo $cliente['nome'];?></option>
                    <?php }?>
                  </select>

                </div>


              </div>
              <br>
              <div class="row">
                <div class="col-md-4">
                </div>

                <div class="col-md-4 text-center">
                  <input type="submit" name="ricerca" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom" value="Cerca">
                </div>
                <div class="col-md-4">
                </div>

              </div>
            </form>

            <br>
            <br>
            <?php if($table){?>
            <form method="post" action="">
              <div class="row">
                <div class="col-md-12">
                  <table class="table table-striped text-center">
                    <thead>
                      <tr>
                        <th>Nr. documento</th>
                        <th>Data di carico</th>
                        <th>Rif.cliente</th>
                        <th>Pallet</th>
                        <th>Quantità</th>
                        <th>Prezzo totale</th>
                        <th>Magazzino</th>
                        <th>Locazione</th>
                        <th>Giorni permanenza</th>
                        <th>Chiudi bolla</th>
                      </tr>
                    </thead>
                    <tbody>
                      <div id="parent">
                        <?php $cont = 0;?>
                        <?php while($row = mysqli_fetch_assoc($result_documenti)){?>
                        <tr>
                          <td><?php echo $row['numero_bolla'];?></td>
                          <td class="date_javascript"><?php echo $row['data_carico'];?></td>
                          <td><?php echo $row['azienda'];?></td>
                          <td><?php echo $row['nominativo'];?></td>
                          <td><?php echo $row['quantita_pallet'];?></td>
                          <td><?php echo $row['prezzo_totale'];?></td>
                          <td><?php echo $row['denominazione'];?></td>
                          <td><?php echo $row['area'];?></td>
                          <td class="distanze_date"><script>get_diff_dates('<?php echo $cont;?>')</script></td>
                          <td><input class="form-control check_java" type="checkbox" name="array_documenti_uscita[<?php echo $row['id_documento'];?>][]" value="<?php echo $row['id_documento'];?>" onchange="raccogli_data_maggiore('<?php echo $cont;?>');"></td>
                        </tr>
                        <?php $cont++;?>
                        <?php }?>
                      </div>
                    </tbody>
                  </table>
                </div>
              </div>
              <input type="hidden" id="numero_di_documenti" value="<?php echo $cont;?>">

              <script>get_num_documents();</script>
              <div class="row">
                <div class="col-md-5">
                </div>
                <div class="col-md-2 text-center">
                  <input type="date" id="data_uscita_documento" name="data_uscita" class="form-control" min="" max="<?php echo date("Y-m-d");?>" value="<?php echo date("Y-m-d");?>">
                </div>
                <div class="col-md-5">
                </div>
              </div>

              <br><br>
              <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 text-center">
                  <input type="submit" class="btn btn-outline-primary btn-block btn-lg" name="chiudi_uscite" value="Chiudi le bolle">
                </div>
                <div class="col-md-3">
                </div>
              </div>
            </form>
            <?php }?>
            <br>

            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6 text-center">
                <a href='../gestione_documenti.php' id="example" type="button" class="btn btn-outline-danger btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
                  Esci
                </a>
              </div>
              <div class="col-md-3">
              </div>
            </div>

          </div>
        </div>
        <br>
      </div>

    </main>
  </body>
  <script type='text/javascript'>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
  </script>

</html>
