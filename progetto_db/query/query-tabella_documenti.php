<?php
include('../funzioni/funz.php');

if(isset($_POST['elimina_documento'])){
  $id_documento_eliminato = $_POST['id_documento'];
  $eliminazione_riuscita = elimina_riga_nel_database($conn, "documenti", "id_documento", $id_documento_eliminato);
  if (!$eliminazione_riuscita) {
    echo "Errore, riprovare!";
  }

}

$sq = "SELECT * FROM documenti de
	   LEFT JOIN clienti c ON de.id_cliente = c.id_cliente
	   LEFT JOIN pallet p ON de.id_pallet = p.id_pallet
	   LEFT JOIN locazioni l ON de.id_locazione = l.id_locazione
	   LEFT JOIN magazzini m ON de.id_magazzino = m.id_magazzino
	   LEFT JOIN listini li ON de.id_listino = li.id_listino
	   LEFT JOIN riferimenti r ON de.id_riferimento = r.id_riferimento; ";

$result = mysqli_query($conn,$sq);

if (!$result) {
  echo "Errore, riprovare!";
}


?>
