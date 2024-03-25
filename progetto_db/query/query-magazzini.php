<?php
include('../../funzioni/funz.php');

if(isset($_POST['aggiungi_magazzino'])){

  $denominazione = mysqli_real_escape_string($conn, $_POST['denominazione']);
  $indirizzo = mysqli_real_escape_string($conn, $_POST['indirizzo']);
  $citta = mysqli_real_escape_string($conn, $_POST['citta']);
  $provincia = mysqli_real_escape_string($conn, $_POST['provincia']);
  $cap = $_POST['cap'];

  $sql = "INSERT INTO magazzini (denominazione, indirizzo, citta, provincia, cap)
    		VALUES ('$denominazione', '$indirizzo', '$citta', '$provincia', '$cap')";

  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare!" . mysqli_error($conn);
  }


}

if(isset($_POST['modifica_magazzino'])){
  $denominazione = mysqli_real_escape_string($conn, $_POST['denominazione']);
  $indirizzo = mysqli_real_escape_string($conn, $_POST['indirizzo']);
  $citta = mysqli_real_escape_string($conn, $_POST['citta']);
  $provincia = mysqli_real_escape_string($conn, $_POST['provincia']);
  $cap = $_POST['cap'];
  $id_magazzino = $_POST['id_magazzino'];

  $sql = "UPDATE magazzini SET denominazione = '$denominazione',
    							 indirizzo = '$indirizzo',
                                 citta = '$citta',
                                 provincia = '$provincia',
                                 cap = '$cap'
                                 WHERE id_magazzino = '$id_magazzino'";


  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare!";
  }
}


if(isset($_POST['elimina_magazzino'])){
  $id_magazzino_eliminato = $_POST['id_magazzino'];
  elimina_riga_nel_database($conn, "magazzini", "id_magazzino", $id_magazzino_eliminato);
}


$sq = "SELECT * FROM magazzini";
$result = mysqli_query($conn,$sq);

$array_magazzini = get_all_magazzini($conn);

?>
