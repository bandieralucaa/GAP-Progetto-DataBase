<?php
include('../../funzioni/funz.php');
if((isset($_POST['aggiungi_cliente'])) || (isset($_POST['salva_esci_agg']))){

  $nome = mysqli_real_escape_string($conn, $_POST['nome']);
  $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
  $sesso = $_POST['sesso'];
  $indirizzo = mysqli_real_escape_string($conn, $_POST['indirizzo']);
  $citta = mysqli_real_escape_string($conn, $_POST['citta']);
  $provincia = mysqli_real_escape_string($conn, $_POST['provincia']);
  $cap = $_POST['cap'];
  $numero_telefono = $_POST['numero_telefono'];
  $partita_iva = $_POST['partita_iva'];
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $numero_fax = $_POST['numero_fax'];

  $sql = "INSERT INTO clienti (nome, cognome, sesso, indirizzo, citta, provincia, 
  								cap, numero_telefono, partita_iva, email, numero_fax)
		VALUES ('$nome', '$cognome', '$sesso', '$indirizzo', '$citta', '$provincia', 
        '$cap', '$numero_telefono', '$partita_iva', '$email', '$numero_fax')";

  if (mysqli_query($conn, $sql)) {
    $id_cliente_creato = mysqli_insert_id($conn);
    if(isset($_POST['aggiungi_cliente'])){
      header("location: aggiungi_cliente_2.php?id_cliente_creato=".$id_cliente_creato);
    }
  } 
  else {
    $error_message = mysqli_error($conn);
    echo "Si è verificato un errore durante l'esecuzione delle query: " . $error_message;
  }


}

if(isset($_POST['modifica_cliente'])){
  $nome = mysqli_real_escape_string($conn, $_POST['nome']);
  $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
  $sesso = $_POST['sesso'];
  $indirizzo = mysqli_real_escape_string($conn, $_POST['indirizzo']);
  $citta = mysqli_real_escape_string($conn, $_POST['citta']);
  $provincia = mysqli_real_escape_string($conn, $_POST['provincia']);
  $cap = $_POST['cap'];
  $numero_telefono = $_POST['numero_telefono'];
  $partita_iva = $_POST['partita_iva'];
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $numero_fax = $_POST['numero_fax'];

  $id_cliente = $_POST['id_cliente'];

  $sql = "UPDATE clienti SET nome ='$nome',
  							   cognome ='$cognome',
	                           sesso ='$sesso',
	                           indirizzo ='$indirizzo',
	                           citta ='$citta',
	                           provincia ='$provincia',
	                           cap ='$cap',
	                           numero_telefono = '$numero_telefono',
                               email = '$email',
	                           partita_iva = '$partita_iva',
	                           numero_fax ='$numero_fax'
	                           WHERE id_cliente='$id_cliente'";

  if (mysqli_query($conn, $sql)) {
    echo '<script>window.location.href="anagrafica_clienti.php"</script>';
  } 
}
if(isset($_POST['elimina_cliente'])) {
    $id_cliente_eliminato = $_POST['id_cliente'];

    // Elimina il cliente dalla tabella 'clienti'
    elimina_riga_nel_database($conn, "clienti", "id_cliente", $id_cliente_eliminato);

    // Elimina tutti i riferimenti correlati al cliente dalla tabella 'riferimenti'
    $sql_elimina_rif = "DELETE FROM riferimenti WHERE id_cliente = '$id_cliente_eliminato'";
    mysqli_query($conn, $sql_elimina_rif);
}

$sq = "SELECT * FROM clienti";
$result = mysqli_query($conn,$sq);




?>
