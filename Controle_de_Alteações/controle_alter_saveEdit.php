<?php
include('conexao.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $data = $_POST['_data'];
    $natul_alt = $_POST['natul_alt'];
    $revisao = $_POST['revisao'];
    $solicitante =$_POST['solicitante'];
    $Aprovado_por = $_POST['aprovado_por'];

    $sqlUpdate = "UPDATE controle_alteracao SET _data = '$data',natureza_alteracao = '$natul_alt',revisao = '$revisao', solicitante = '$solicitante',aprovado_por = '$Aprovado_por' WHERE id='$id'";

    $result = $mysqli->query($sqlUpdate);

    

}
header('Location:index.php');
?>