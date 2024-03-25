<?php
include('../funzioni/funz.php');

if(isset($_POST['salva_dimensione'])){
  $descrizione = $_POST['descrizione'];

  $sql = "INSERT INTO dimensioni (descrizione)
            VALUES ('$descrizione')";

  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare";
  }

}



if(isset($_POST['modifica_dimensione'])){
  $descrizione = $_POST['descrizione'];
  $id_dimensione = $_POST['id_dimensione'];
  $sql = "UPDATE dimensioni SET descrizione = '$descrizione'
                                 WHERE id_dimensione = '$id_dimensione'";

  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare.";
  } 

}

if(isset($_POST['elimina_dimensione'])){
  $id_dimensione_eliminato = $_POST['id_dimensione'];
  elimina_riga_nel_database($conn, "dimensioni", "id_dimensione", $id_dimensione_eliminato);
}


$sq = "SELECT * FROM dimensioni";
$result = mysqli_query($conn,$sq);

$array_dimensioni = get_all_dimensioni($conn);

?>