<?php
include('../../funzioni/funz.php');

if(isset($_POST['aggiungi_locazione'])){

  $area = mysqli_real_escape_string($conn, $_POST['area']);
  $id_magazzino = $_POST['id_magazzino'];

  $sql = "INSERT INTO locazioni (area, id_magazzino)
    		VALUES ('$area', '$id_magazzino')";

  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare!";
  }


}

if(isset($_POST['modifica_locazione'])){
  $area = mysqli_real_escape_string($conn, $_POST['area']);
  $id_magazzino = $_POST['id_magazzino'];

  $id_locazione = $_POST['id_locazione'];

  $sql = "UPDATE locazioni SET area = '$area',
                                 id_magazzino = '$id_magazzino'
                                 WHERE id_locazione = '$id_locazione'";



  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare!";
  }
}


if(isset($_POST['elimina_locazione'])){
  $id_locazione_eliminata = $_POST['id_locazione'];
  elimina_riga_nel_database($conn, "locazioni", "id_locazione", $id_locazione_eliminata);
}

if(isset($_GET['id_locazione'])){
  $id_locazione = $_GET['id_locazione'];
  $sq = "SELECT * FROM locazioni l
            LEFT JOIN magazzini m
            ON l.id_magazzino = m.id_magazzino
            WHERE id_locazione='$id_locazione'";
  $result = mysqli_query($conn, $sq);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  }
  $array_magazzini = get_all_magazzini($conn);
} else {
  $sq_locazioni = "SELECT * FROM locazioni l
                    LEFT JOIN magazzini m
                    ON l.id_magazzino = m.id_magazzino";
  $result = mysqli_query($conn, $sq_locazioni);


}

$array_locazioni = get_all_locazioni($conn);


?>
