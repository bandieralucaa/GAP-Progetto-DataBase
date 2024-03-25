<?php
#Tutti i permessi elencati qui sotto!****************************************************
/*

stato_utente -----------> per verificare se uno è loggato                   [0]
utenti_privilegio --> modificare,eliminare o creare un utente (admin_only)  [1]
modifica/elimina_privilegio --> non puoi modificare/eliminare alcune cose   [2]
listino_privilegio --> puoi accedere alla gestione dei listini (admin_only) [3]
documenti_privilegio --> puoi creare e scaricare documenti MA! questo non
                          vuol dire che puoi modificare/eliminare!          [4]

Se un utente possiede solamente il permesso [4] significa che è soltanto un "guest"!
Quindi si occupa solamente di carico e scarico delle bolle (pochi permessi)
*********************************************************************************************
*/
switch ($pagina_for) {
  case 'listini':
    if($_SESSION['dipendente'][3] != 1){
      header("location: " . $jump_sub_folder . "index.php");
    }
    break;

  case 'gestione_dipendenti':
    if($_SESSION['dipendente'][1] != 1){
      header("location: " . $jump_sub_folder . "index.php");
    }
    break;
  case 'guest_nav':
    break;
  case 'index':
    if(($_SESSION['dipendente'][1] != 1) && ($_SESSION['dipendente'][2] != 1) && ($_SESSION['dipendente'][3] != 1)){
      header("location: gestione_documenti/gestione_documenti.php");
    }
    break;
  default:
    if(($_SESSION['dipendente'][1] != 1) && ($_SESSION['dipendente'][2] != 1) && ($_SESSION['dipendente'][3] != 1)){
      header("location: ". $jump_sub_folder . "gestione_documenti/gestione_documenti.php");
    }
    break;
}

?>
