<?php
include '../Controller/ReclamationC.php';

$pc = new ReclamationC();


    $id = $_GET['idR'];
  
        $pc->DeleteReclamation($idR);

        header('Location:ListReclamation.php');
        
    
  
?>
