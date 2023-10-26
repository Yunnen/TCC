<?php


  session_start();

//Puxar a Img do Usuario e colocar dentro da viaravel $Foto
if(isset($_SESSION['Foto_Usuario'])){
    $foto = $_SESSION['Foto_Usuario'];
  }else{
    $foto = "IMG/Pyra.png";
  }

?>