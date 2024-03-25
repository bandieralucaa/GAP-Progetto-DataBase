<?php
include($jump_sub_folder . 'funzioni/funz.php');

if(isset($_POST['aggiungi_dipendente'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);

  // Query per verificare se l'username esiste già
  $sql_check_username = "SELECT id_dipendente FROM dipendenti WHERE username = '$username'";
  $result_check_username = mysqli_query($conn, $sql_check_username);

  if (mysqli_num_rows($result_check_username) > 0) {
    echo "<script>alert('Username già in uso!');</script>";
  } else {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
    $sesso = $_POST['sesso'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $numero_telefono = $_POST['numero_telefono'];
    $indirizzo = mysqli_real_escape_string($conn, $_POST['indirizzo']);
    $citta = mysqli_real_escape_string($conn, $_POST['citta']);
    $cap = $_POST['cap'];
    $provincia = mysqli_real_escape_string($conn, $_POST['provincia']);
    $password = hash('sha512', $_POST['password']);
    $id_privilegio = $_POST['id_privilegio'];

    $sql_agg_dipendente = "INSERT INTO dipendenti (nome, cognome, sesso, email, numero_telefono, indirizzo, citta, cap, provincia, username, password, id_privilegio)
                      VALUES ('$nome', '$cognome', '$sesso', '$email', '$numero_telefono', '$indirizzo','$citta', '$cap', '$provincia', '$username','$password','$id_privilegio')";
    if(!mysqli_query($conn, $sql_agg_dipendente)){
      echo mysqli_error($conn);
    }
  }
}

if(isset($_POST['modifica_dipendente'])){
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $id_dipendente = $_POST['id_dipendente'];

  $sql_check_username = "SELECT id_dipendente FROM dipendenti WHERE username = '$username' AND id_dipendente != '$id_dipendente'";
  $result_check_username = mysqli_query($conn, $sql_check_username);

  if (mysqli_num_rows($result_check_username) > 0) {
    echo "<script>alert('Username già in uso!');</script>";
  } else {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
    $sesso = $_POST['sesso'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $numero_telefono = $_POST['numero_telefono'];
    $indirizzo = mysqli_real_escape_string($conn, $_POST['indirizzo']);
    $citta = mysqli_real_escape_string($conn, $_POST['citta']);
    $cap = $_POST['cap'];
    $provincia = mysqli_real_escape_string($conn, $_POST['provincia']);
    $password = hash('sha512', $_POST['password']);
    $id_privilegio = $_POST['id_privilegio'];

    $sql_mod_dipendente = "UPDATE dipendenti SET  nome = '$nome',
                                        cognome = '$cognome',
                                        sesso = '$sesso',
                                        email = '$email',
                                        numero_telefono = '$numero_telefono',
                                        indirizzo = '$indirizzo',
                                        citta = '$citta',
                                        cap = '$cap',
                                        provincia = '$provincia',
                                        username = '$username',
                                        password = '$password',
                                        id_privilegio = '$id_privilegio'
                      WHERE id_dipendente = '$id_dipendente'";

    if(!mysqli_query($conn, $sql_mod_dipendente)){
      echo "Errore, riprovare!". mysqli_error($conn);
    }
  }
}

if(isset($_POST['elimina_dipendente'])){
  $id_dipendente_eliminato = $_POST['id_dipendente'];
  elimina_riga_nel_database($conn, "dipendenti", "id_dipendente", $id_dipendente_eliminato);
}



function get_privilegio_dipendente($conn, $dipendente){
  $result_privilegio_singolo = mysqli_query($conn, "SELECT id_privilegio, tipo FROM privilegi WHERE id_privilegio = '$dipendente'");
  $singolo_privilegio = mysqli_fetch_assoc($result_privilegio_singolo);
  return $singolo_privilegio;
}

$sq = "SELECT * FROM dipendenti d
      INNER JOIN privilegi p
      ON d.id_privilegio = p.id_privilegio";

$result_dipendenti = mysqli_query($conn, $sq);
if(mysqli_num_rows($result_dipendenti) > 0){
  while($r = mysqli_fetch_assoc($result_dipendenti)){
    $array_dipendenti[] = $r;
  }
}

$sql_privilegio_da_selezionare = "SELECT id_privilegio, ruolo FROM privilegi";
$result_privilegi_da_selezionare = mysqli_query($conn, $sql_privilegio_da_selezionare);
if(mysqli_num_rows($result_privilegi_da_selezionare) > 0){
  while($r = mysqli_fetch_assoc($result_privilegi_da_selezionare)){
    $array_privilegi[] = $r;
  }
}
?>
