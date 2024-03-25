<?php
include('../../funzioni/funz.php');

if(isset($_GET['id_cliente_creato'])){
  $id_cliente_linkTo_cliente = $_GET['id_cliente_creato'];
  $sq_nomeC = "SELECT nome FROM clienti WHERE id_cliente = '$id_cliente_linkTo_cliente'";
  $result_nC = mysqli_query($conn,$sq_nomeC);
  if(mysqli_num_rows($result_nC) > 0){
    while($arr = mysqli_fetch_assoc($result_nC)){
      $nome = $arr['nome'];
    }
  }


}
  if(isset($_POST['aggiungi_riferimento'])){
    $azienda = mysqli_real_escape_string($conn, $_POST['azienda']);
    $sql_ag = "INSERT INTO riferimenti (azienda, id_cliente)
                VALUES ('$azienda', '$id_cliente_linkTo_cliente')";
      
    
    if (!mysqli_query($conn, $sql_ag)) {
        echo "Errore, riprovare!";
    }


  }

  if(isset($_POST['modifica_riferimento'])){
    $id_riferimento = $_POST['id_riferimento'];
    $azienda = mysqli_real_escape_string($conn, $_POST['azienda']);
    $sql_mod = "UPDATE riferimenti SET azienda = '$azienda'
                WHERE id_riferimento = '$id_riferimento'";
    
    if (!mysqli_query($conn, $sql_mod)) {
        echo "Errore, riprovare!";
    }

  }
  
  if(isset($_POST['elimina_riferimento'])){
    $id_riferimento_eliminato = $_POST['id_riferimento'];
    elimina_riga_nel_database($conn, "riferimenti", "id_riferimento", $id_riferimento_eliminato);

  }

  $sql = "SELECT * FROM riferimenti WHERE id_cliente = '$id_cliente_linkTo_cliente'";
  $result = mysqli_query($conn,$sql);

?>
