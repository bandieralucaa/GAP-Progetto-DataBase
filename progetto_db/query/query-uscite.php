<?php
$table = false;

if(isset($_POST['ricerca'])){

  $id_cliente = $_POST['id_cliente'];
  $numero_bolla = $_POST['numero_bolla'];
  $sql_documenti = "SELECT * FROM documenti doc
  LEFT JOIN pallet p ON p.id_pallet = doc.id_pallet
  LEFT JOIN locazioni l ON l.id_locazione = doc.id_locazione
  LEFT JOIN riferimenti r ON r.id_riferimento = doc.id_riferimento
  LEFT JOIN magazzini m ON m.id_magazzino = doc.id_magazzino
  WHERE doc.stato = '1'";

  if($numero_bolla == ""){
    $sql_documenti .= " AND doc.id_cliente = '$id_cliente'";
  }
  else{
    $sql_documenti .= " AND (doc.numero_bolla = '$numero_bolla' AND doc.id_cliente = '$id_cliente')";
  }
  $result_documenti = mysqli_query($conn,$sql_documenti);

  $table = true;

}

if(isset($_POST['chiudi_uscite'])){
  $data_uscita = $_POST['data_uscita'];

if(isset($_POST['array_documenti_uscita']) && is_array($_POST['array_documenti_uscita'])){
    foreach ($_POST['array_documenti_uscita'] as $chiave => $valori) {
      foreach ($valori as $valore) {
        $sql_documenti_uscita = "UPDATE documenti SET stato = '0', data_uscita = '$data_uscita' WHERE id_documento = '$valore'";

        if(!mysqli_query($conn,$sql_documenti_uscita)){
          echo "Errore nella query: " . mysqli_error($conn) . "<br>";
        }
      }
    }
  } else {
    echo "Nessun documento selezionato per la chiusura.<br>";
  }
}

$sql_clienti = "SELECT id_cliente,nome FROM clienti";
$result_clienti_uscita = mysqli_query($conn,$sql_clienti);
if(mysqli_num_rows($result_clienti_uscita)){
  while($riga = mysqli_fetch_assoc($result_clienti_uscita)){
    $array_clienti[] = $riga;
  }
}
?>
