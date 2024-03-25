<?php

function get_all_pallet($conn){
  $array_pallet = array();
  $sq = "SELECT * FROM pallet";
  $result = mysqli_query($conn, $sq);
  while($row = mysqli_fetch_assoc($result)){
    $array_pallet[] = $row;
  }
  return $array_pallet;
}


function get_all_listini($conn){
  $array_listini = array();
  $sq = "SELECT * FROM listini";
  $result = mysqli_query($conn, $sq);
  while($row = mysqli_fetch_assoc($result)){
    $array_listini[] = $row;
  }
  return $array_listini;
}

function get_all_magazzini($conn){
  $array_magazzini = array();
  $sq = "SELECT * FROM magazzini";
  $result = mysqli_query($conn, $sq);
  while($row = mysqli_fetch_assoc($result)){
    $array_magazzini[] = $row;
  }
  return $array_magazzini;
}

function get_all_locazioni($conn){
  $array_locazioni = array();
  $sq = "SELECT * FROM locazioni";
  $result = mysqli_query($conn, $sq);
  while($row = mysqli_fetch_assoc($result)){
    $array_locazioni[] = $row;
  }
  return $array_locazioni;
}

function get_all_dimensioni($conn){
  $array_dimensioni = array();
  $sq = "SELECT * FROM dimensioni";
  $result = mysqli_query($conn, $sq);
  while($row = mysqli_fetch_assoc($result)){
    $array_dimensioni[] = $row;
  }
  return $array_dimensioni;
}


function get_all_materiali($conn){
  $array_materiali = array();
  $sq = "SELECT * FROM materiali";
  $result = mysqli_query($conn, $sq);
  while($row = mysqli_fetch_assoc($result)){
    $array_materiali[] = $row;
  }
  return $array_materiali;
}

function get_listino_data($id_listino, $id_pallet, $conn){
  $array_listino_data = array();
  $sq = "SELECT * FROM listino_pallet WHERE id_pallet = '$id_pallet' AND id_listino = '$id_listino'";
  $result = mysqli_query($conn, $sq);
  while($row = mysqli_fetch_assoc($result)){
    $array_listino_data[] = $row;
  }
  return $array_listino_data;
}

?>
