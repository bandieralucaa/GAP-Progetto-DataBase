<?php
$sql_json_clienti = "SELECT id_cliente,nome FROM clienti";
$result_json_clienti = mysqli_query($conn,$sql_json_clienti);
if(mysqli_num_rows($result_json_clienti)>0){
  while($row_json_clienti = mysqli_fetch_assoc($result_json_clienti)){
    $array_json_clienti[] = $row_json_clienti;
  }
  $json_clienti = json_encode($array_json_clienti, JSON_HEX_APOS);
}


$sql_json_riferimenti = "SELECT * FROM riferimenti";
$result_json_riferimenti = mysqli_query($conn,$sql_json_riferimenti);
if(mysqli_num_rows($result_json_riferimenti)>0){
  while($row_json_riferimenti = mysqli_fetch_assoc($result_json_riferimenti)){
    $array_json_riferimenti[] = $row_json_riferimenti;
  }
  $json_riferimenti = json_encode($array_json_riferimenti, JSON_HEX_APOS);
}

$sql_json_locazioni = "SELECT * FROM locazioni";
$result_json_locazioni = mysqli_query($conn,$sql_json_locazioni);
if(mysqli_num_rows($result_json_locazioni)>0){
  while($row_json_locazioni = mysqli_fetch_assoc($result_json_locazioni)){
    $array_json_locazioni[] = $row_json_locazioni;
  }
  $json_locazioni = json_encode($array_json_locazioni, JSON_HEX_APOS);
}


$sql_json_listino_pallet = "SELECT * FROM listino_pallet";
$result_json_listino_pallet = mysqli_query($conn,$sql_json_listino_pallet);
if(mysqli_num_rows($result_json_listino_pallet)>0){
  while($row_json_listino_pallet = mysqli_fetch_assoc($result_json_listino_pallet)){
    $array_json_listino_pallet[] = $row_json_listino_pallet;
  }
  $json_listino_pallet = json_encode($array_json_listino_pallet, JSON_HEX_APOS);
}


$sql_json_doc = "SELECT * FROM documenti";
$result_json_doc = mysqli_query($conn,$sql_json_doc);
if(mysqli_num_rows($result_json_doc)>0){
  while($row_json_doc = mysqli_fetch_assoc($result_json_doc)){
    $array_json_doc[] = $row_json_doc;
  }
  $json_doc = json_encode($array_json_doc, JSON_HEX_APOS);
}




?>
