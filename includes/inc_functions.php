<?php

// ########## Format affichage code ##########
// $data -> entrée à formater (...)
// $type -> type de formatage (1 -> tableau | 2 -> Object)

function formAffCode($data, $type) {
  echo '<pre>';
  ($type == 1) ? print_r($data) : var_dump($data);
  echo '</pre>';
}

// ########## Format taille fichier ##########
// $data -> octets

function formAffTaille($data) {
  // Initialisation
  $taille = '';
  // Formatage
  if ($data>=1000000) {
    $taille = (substr($data/1000000,0,4)).' Mo';
  } else if ($data>=1000) {
    $taille = (substr($data/1000,0,4)).' Ko';
  } else {
    $taille = $data.' octets';
  }
  // Retour
  return $taille;
}


?>
