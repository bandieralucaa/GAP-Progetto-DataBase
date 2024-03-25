<?php

if(isset($_POST['login'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password_dipendente = mysqli_real_escape_string($conn, $_POST['password']);
  $password_dipendente = hash('sha512', $_POST['password']);
  $username = stripcslashes($username);
  $password_dipendente = stripcslashes($password_dipendente);
  
  $sql_accesso = "SELECT * FROM dipendenti";
  $result_accesso = mysqli_query($conn,$sql_accesso);
  
  if(mysqli_num_rows($result_accesso) > 0){
    while($riga = mysqli_fetch_assoc($result_accesso)){
      if($riga['username'] == $username && $riga['password'] == $password_dipendente){
        inizializzazione_accesso($conn, $riga['id_privilegio']);
        echo "<script>alert('Benvenuto " . $username . " ');
              window.location.href='" . $jump_sub_folder . "';
              </script>";
      }
    }
  }
  echo "<script>alert('Password errata');</script>";
}

function inizializzazione_accesso($conn, $id_privilegio){
  $sql_privilegi = "SELECT * FROM privilegi WHERE id_privilegio = $id_privilegio";
  $result_privilegio = mysqli_query($conn, $sql_privilegi);
  if(mysqli_num_rows($result_privilegio) > 0){
    while($row = mysqli_fetch_assoc($result_privilegio)){
      $array_privilegio  = $row;
    }
  }
  $_SESSION['dipendente'] = array($stato_dipendente, $array_privilegio['dipendenti_privilegio'], $array_privilegio['modifica_elimina_privilegio'],
  $array_privilegio['listini_privilegio'], $array_privilegio['documenti_privilegio']);
}


if(isset($_POST['logout'])){
  $_SESSION = array();
  session_destroy();
  header("location: " . $jump_sub_folder . "../login.php");
}

?>

