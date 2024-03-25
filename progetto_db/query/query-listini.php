<?php
include('../../funzioni/funz.php');

if(isset($_POST['aggiungi_listino'])){

$titolo = mysqli_real_escape_string($conn, $_POST['titolo']);


$sql = "INSERT INTO listini (titolo)
		VALUES ('$titolo')";

if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare!";
}

}

if(isset($_POST['modifica_listino'])){

  $id_listino =$_POST['id_listino'];
  $titolo = mysqli_real_escape_string($conn, $_POST['titolo']);
  $sql = "UPDATE listini SET titolo ='$titolo'
                          WHERE id_listino='$id_listino'";

  
  if (!mysqli_query($conn, $sql)) {
      echo "Errore, riprovare!";
  }
}

if(isset($_POST['elimina_listino'])){
  $id_listino_eliminato = $_POST['id_listino'];
  elimina_riga_nel_database($conn, "listini", "id_listino", $id_listino_eliminato);
}
$array_listini = get_all_listini($conn);


 ?>
