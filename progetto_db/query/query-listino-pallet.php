<?php
include('../funzioni/funz.php');

if (isset($_POST['aggiungi_prezzo'])) {
    $id_pallet = $_POST['id_pallet'];
    $id_listino = $_POST['id_listino'];
    $prezzo = $_POST['prezzo'];

    $sql = "INSERT INTO listino_pallet (id_pallet, id_listino, prezzo)
            VALUES ('$id_pallet','$id_listino','$prezzo')";

    if (!mysqli_query($conn, $sql)) {
        echo "Errore durante l'aggiunta del prezzo: " . mysqli_error($conn);
    }
}
if (isset($_POST['modifica_prezzo'])) {
    $id_listino_pallet = $_POST['id_listino_pallet'];
    $prezzo = $_POST['prezzo'];

    $sql = "UPDATE listino_pallet
            SET prezzo = '$prezzo'
            WHERE id_listino_pallet ='$id_listino_pallet'";

    if (!mysqli_query($conn, $sql)) {
        echo "Errore durante la modifica del prezzo: " . mysqli_error($conn);
    }
}

if(isset($_POST['elimina_listino_pallet'])){
    $id_listino_pallet_eliminato = $_POST['id_listino_pallet'];
    elimina_riga_nel_database($conn, "listino_pallet", "id_listino_pallet", $id_listino_pallet_eliminato);
}

if(isset($_GET['id_listino_pallet'])){
    $id_listino_pallet = $_GET['id_listino_pallet'];
    $sq = "SELECT * FROM listino_pallet lp
              LEFT JOIN listini l
              ON l.id_listino = lp.id_listino
              LEFT JOIN pallet p
              ON p.id_pallet = lp.id_pallet
              WHERE id_listino_pallet='$id_listino_pallet'";

    $result = mysqli_query($conn, $sq);

    if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        print_r($row);
      }
    }
    $array_listini = get_all_listini($conn);
    $array_pallet = get_all_pallet($conn);
  } else {
    $sq_listini_pallet = "SELECT * FROM listino_pallet lp
              LEFT JOIN listini l
              ON l.id_listino = lp.id_listino
              LEFT JOIN pallet p
              ON p.id_pallet = lp.id_pallet";
    $result = mysqli_query($conn, $sq_listini_pallet);
  
  
  }


?>