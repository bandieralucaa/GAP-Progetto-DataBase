<html>
<?php
$jump_sub_folder = "../";
include($jump_sub_folder . 'librerie/riferimenti_css_bootstrap.php');
?>
<body>
<main role="main">
  <section class="jumbotron text-center">
    <div class="container">
      <h1>Manutenzione e configurazione</h1>
    </div>
  </section>

    <div class="album py-5 bg-light">
    <div class="container">
   
   <div class="row">
	<div class="col-md-4">
    </div>
	<div class="col-md-4 ">
	<a href='magazzini_e_locazioni/magazzino.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
		Magazzini
	</a>
    <br>
	</div>
    <div class="col-md-4">
    </div>
    </div>

	<div class="row">
	<div class="col-md-4">
    </div>
	<div class="col-md-4 ">
	<a href='magazzini_e_locazioni/locazione.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
		Locazioni di Magazzino
	</a>
    <br>
	</div>
    <div class="col-md-4">
    </div>
    </div>

	<div class="row">
	<div class="col-md-4">
    </div>
	<div class="col-md-4 text-center">
    <a  href='clienti/anagrafica_clienti.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
  		Clienti
  	</a>
    <br>
	</div>
    <div class="col-md-4">
    </div>
    </div>
    <div class="row">
	<div class="col-md-4">
    </div>
  	<div class="col-md-4 text-center">
	<a href='listini/listini.php' id="example" type="button" class="btn btn-outline-primary btn-block btn-lg" data-toggle="tooltip" data-placement="bottom">
		Listini
	</a>
    <br>
	</div>
    <div class="col-md-4">
    </div>
    </div>

	<div class="row">
    <div class="col-md-4">
    </div>
	<div class="col-md-4 text-center">
	<a href='../index.php' id="example" type="button" class="btn btn-outline-danger btn-lg" data-toggle="tooltip" data-placement="bottom">
		Menù principale
	</a>
	</div>
    <div class="col-md-4">
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

</body>
</html>
