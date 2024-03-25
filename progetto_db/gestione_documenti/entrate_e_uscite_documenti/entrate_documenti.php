<html>

  <?php
  $jump_sub_folder = "../../";
  $pagina_for = "guest_nav";
  include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
  include($jump_sub_folder . 'query/query-bolla.php');
  include('script-documenti.php');
  ?>
  <body onload="set_riferimenti()">
    <main role="main">
      <section class="jumbotron text-center">
        <div class="container">
          <h1>Carica bolle in entrata</h1>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <form method="post" action="">
            <div class="row">
              <div class="col-md-4">
                <label>Numero bolla</label>
                <input required type="text" id="numero_bolla" class="form-control" value="<?php echo $_POST['numero_bolla'];?>" name="numero_bolla" onchange="check_duplicati()">
              </div>
              <div class="col-md-4">
                <label>Data di carico</label>
                <input type="date" id="data_di_carico" class="form-control" value="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d');?>" name="data_carico" onchange="check_duplicati();warning_distanza_data();">
              </div>
              <div class="col-md-4">
                <label>Cliente</label>
                <select required class="form-control" id="id_cliente" onchange="set_riferimenti(); check_duplicati();" name="id_cliente">
                  <option value="" style="font-style: italic;">Seleziona...</option>
                  <?php while($array_clienti = mysqli_fetch_assoc($result_clienti)){?>
                  <option value="<?php echo $array_clienti['id_cliente'];?>"><?php echo $array_clienti['nome'];?></option>
                  <?php }?>
                </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-4">
                <label>Rif.cliente</label>
                <select required class="form-control" id="id_riferimento" name="id_riferimento">
                  <option value="" style="font-style: italic;">Seleziona...</option>
                </select>
              </div>
              <div class="col-md-4">
                <label>Pallet</label>
                <select required class="form-control" id="id_pallet" name="id_pallet">
                  <option value="" style="font-style: italic;">Seleziona...</option>
                  <?php while($array_pallet = mysqli_fetch_assoc($result_pallet)){?>
                  <option value="<?php echo $array_pallet['id_pallet'];?>"><?php echo $array_pallet['nominativo'];?></option>
                  <?php }?>
                </select>
              </div>
              <div class="col-md-4">
                <label>Quantità pallet</label>
                <input required type="number" id="quantita_pallet" class="form-control" value="<?php echo $_POST['quantita_pallet'];?>" name="quantita_pallet" onchange="set_prezzo_totale()">
              </div>
            </div>
            <br>
            <div class="row">         
              <div class="col-md-4">
                <label>Magazzino</label>
                <select required class="form-control" id="id_magazzino" name="id_magazzino" onchange="set_locazioni()">
                  <option value="" style="font-style: italic;">Seleziona...</option>
                  <?php while($array_magazzini = mysqli_fetch_assoc($result_magazzini)){?>
                  <option value="<?php echo $array_magazzini['id_magazzino'];?>"><?php echo $array_magazzini['denominazione'];?></option>
                  <?php }?>
                </select>
              </div>
              <div class="col-md-4">
                <label>Locazione</label>
                <select required class="form-control" id="id_locazione" name="id_locazione">
                  <option value="" style="font-style: italic;">Seleziona...</option>
                  <option value=""></option>
                </select>
              </div>
              <div class="col-md-4">
                <label>Listino</label>
                <select required class="form-control" id="id_listino" name="id_listino" onchange="set_prezzo();set_prezzo_totale()">
                  <option value="" style="font-style: italic;">Seleziona...</option>
                  <?php while($array_listini = mysqli_fetch_assoc($result_listini)){?>
                  <option value="<?php echo $array_listini['id_listino'];?>"><?php echo $array_listini['titolo'];?></option>
                  <?php }?>
                </select>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <label>Prezzo listino</label>
                <input readonly type="text" id="prezzo_listino" name="prezzo_listino" class="form-control" onchange="set_prezzo_totale()">
              </div>
              <div class="col-md-6">
                <label>Prezzo totale</label>
                <input readonly type="text" id="prezzo_totale" name="prezzo_totale" class="form-control">
              </div>
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-md-3">
              </div>
              <div class="col-md-6 text-center">
                <input type="submit" class="btn btn-outline-success btn-block btn-lg" data-toggle="tooltip" data-placement="bottom" value="Salva" name="aggiungi_bolla">
              </div>
              <div class="col-md-3">
              </div>
            </div>
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
          </form>
        </div>
      </div>
    </main>

  </body>
</html>
