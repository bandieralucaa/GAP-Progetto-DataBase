<?php
include('../funzioni/funz.php');

if(isset($_POST['salva_pallet'])){
  $nominativo = mysqli_real_escape_string($conn, $_POST['nominativo']);
  $id_dimensione = $_POST['id_dimensione'];
  $id_materiale = $_POST['id_materiale'];
  $peso_massimo = $_POST['peso_massimo'];

  $sql = "INSERT INTO pallet (nominativo, id_dimensione, id_materiale, peso_massimo)
            VALUES ('$nominativo', '$id_dimensione', '$id_materiale', '$peso_massimo')";

  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare";
  }

}



if(isset($_POST['modifica_pallet'])){
  $nominativo = mysqli_real_escape_string($conn, $_POST['nominativo']);
  $id_dimensione = $_POST['id_dimensione'];
  $id_pallet = $_POST['id_pallet'];
  $id_materiale = $_POST['id_materiale'];
  $peso_massimo = $_POST['peso_massimo'];
  
  $sql = "UPDATE pallet SET nominativo = '$nominativo',
								 id_materiale = '$id_materiale',
                                 peso_massimo = '$peso_massimo',
  								 id_dimensione = '$id_dimensione'
                                 WHERE id_pallet = '$id_pallet'";

  if (!mysqli_query($conn, $sql)) {
    echo "Errore, riprovare." . mysqli_error($conn);
  } 

}

if(isset($_POST['elimina_pallet'])){
  $id_pallet_eliminato = $_POST['id_pallet'];
  elimina_riga_nel_database($conn, "pallet", "id_pallet", $id_pallet_eliminato);
}


$sq = "SELECT * FROM pallet";
$result = mysqli_query($conn,$sq);

if(isset($_GET['id_pallet'])){
  $id_pallet = $_GET['id_pallet'];
  $sq = "SELECT * FROM pallet p
            LEFT JOIN dimensioni d
            ON p.id_dimensione = d.id_dimensione
            LEFT JOIN materiali m
            ON m.id_materiale = p.id_materiale
            WHERE id_pallet='$id_pallet'";
  $result = mysqli_query($conn, $sq);

  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      print_r($row);
    }
  }
  $array_dimensioni = get_all_dimensioni($conn);
  $array_materiali = get_all_materiali($conn);
} else {
  $sq_pallet = "SELECT * FROM pallet p
                    LEFT JOIN dimensioni d
                    ON p.id_dimensione = d.id_dimensione
                    LEFT JOIN materiali m
            		ON m.id_materiale = p.id_materiale";
  $result = mysqli_query($conn, $sq_pallet);


}

$array_pallet = get_all_pallet($conn);

?>