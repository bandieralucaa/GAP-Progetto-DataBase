<?php


function isDataExists($data1){
    $data_components = explode('-', $data1[0]);
    $day = intval($data_components[2]);
    return checkdate($data1[1], $day, $data1[2]);
}


function controlla_data_se_minore_uguale($data_ingresso){
    	if(date('"' . $data_ingresso[0] . '-' . $data_ingresso[1] . '-' . $data_ingresso[2] . '"') <= date("d-m-Y")){
            return true;
        }
	return false;
}

function stampa_alert_distanza_date($data_ingresso, $numMaxAlertData){
    $data2 = explode("-", date("d-m-Y"));
    $unita = array("giorni", "mesi", "anni");
    $distanza = 0;
    for ($i = 2; $i >= 0; $i--) {
        if ($data_ingresso[$i] != $data2[$i]) {
            $distanza = abs($data2[$i] - $data_ingresso[$i]);
            echo "<script type='text/javascript'>
                alert('ne sei sicuro? le date distano di ' + $distanza + ' $unita[$i]');
                window.location = 'aggiungi_pallet.php'
                </script>";
            break;
        }
    }
}



function elimina_riga_nel_database($conn, $nome_tabella, $nome_id_colonna, $id_riferimento) {
    $sql_command = "DELETE FROM " . $nome_tabella . " WHERE " . $nome_id_colonna . " = '$id_riferimento'";

    if (mysqli_query($conn, $sql_command)) {
        return true;
    } else {
        echo "Errore durante l'eliminazione: " . mysqli_error($conn);
        return false;
    }
}




?>
