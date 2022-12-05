<?php
if(!empty($_GET['id'])){
    
    include('conexao.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM controle_alteracao WHERE id = $id";

    $resul = $mysqli->query($sqlselect);
    
    if($resul->num_rows > 0){
        $sqlDelete = "DELETE FROM controle_alteracao WHERE id=$id";
        $resultDelete = $mysqli->query($sqlDelete);
    }
}
 header('Location:index.php');
?>