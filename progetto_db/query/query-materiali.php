<?php
include('../funzioni/funz.php');

if(isset($_POST['salva_materiale'])){
  $tipo = $_POST['tipo'];

  $sql = "INSERT INTO materiali (tipo)
            VALUES ('$tipo')";

  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare";
  }

}



if(isset($_POST['modifica_materiale'])){
  $tipo = $_POST['tipo'];
  $id_materiale = $_POST['id_materiale'];
  $sql = "UPDATE materiali SET tipo = '$tipo'
                                 WHERE id_materiale = '$id_materiale'";

  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare.";
  } 

}

if(isset($_POST['elimina_materiale'])){
  $id_materiale_eliminato = $_POST['id_materiale'];
  elimina_riga_nel_database($conn, "materiali", "id_materiale", $id_materiale_eliminato);
}


$sq = "SELECT * FROM materiali";
$result = mysqli_query($conn,$sq);

$array_materiali = get_all_materiali($conn);

?>