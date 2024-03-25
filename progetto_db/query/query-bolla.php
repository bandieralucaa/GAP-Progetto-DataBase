<?php
if(isset($_POST['aggiungi_bolla'])){
$numero_bolla = $_POST['numero_bolla'];
$data_carico = $_POST['data_carico'];
$id_cliente = $_POST['id_cliente'];
$quantita_pallet = $_POST['quantita_pallet'];
$id_riferimento = $_POST['id_riferimento'];
$id_locazione = $_POST['id_locazione'];
$id_pallet = $_POST['id_pallet'];
$id_magazzino = $_POST['id_magazzino'];
$id_listino = $_POST['id_listino'];
$prezzo_listino = $_POST['prezzo_listino'];
$prezzo_totale = $_POST['prezzo_totale'];

$sql_aggiungi_doc = "INSERT INTO documenti (numero_bolla,data_carico,id_cliente, quantita_pallet, id_riferimento,
                                                  id_locazione, id_pallet, id_magazzino, id_listino, prezzo_listino, prezzo_totale)
                    VALUES ('$numero_bolla','$data_carico','$id_cliente', '$quantita_pallet', '$id_riferimento',
                            '$id_locazione', '$id_pallet', '$id_magazzino', '$id_listino',
              '$prezzo_listino', '$prezzo_totale')";


if(!mysqli_query($conn,$sql_aggiungi_doc)){
  echo "Errore, riprovare!";
}

if(isset($_POST['aggiungi_bolla'])){
  header("location: ../gestione_documenti.php");
}



}
$sql_cliente = "SELECT * FROM clienti";
$result_clienti = mysqli_query($conn,$sql_cliente);

$sql_locazione = "SELECT * FROM locazioni";
$result_locazioni = mysqli_query($conn,$sql_locazione);

$sql_magazzini = "SELECT * FROM magazzini";
$result_magazzini = mysqli_query($conn,$sql_magazzini);

$sql_pallet = "SELECT * FROM pallet";
$result_pallet = mysqli_query($conn,$sql_pallet);

$sql_listini = "SELECT * FROM listini";
$result_listini = mysqli_query($conn,$sql_listini);

$sql_listino_pallet = "SELECT * FROM listino_pallet";
$result_listino_pallet = mysqli_query($conn,$sql_listino_pallet);




?>
