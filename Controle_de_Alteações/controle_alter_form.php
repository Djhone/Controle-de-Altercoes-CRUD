<?php

if(isset($_POST['natul_alt'])){

    include('conexao.php');

    $data = $_POST['_data'];
    $natul_alt = $_POST['natul_alt'];
    $revisao = $_POST['revisao'];
    $solicitante =$_POST['solicitante'];
    $Aprovado_por = $_POST['aprovado_por'];

    $mysqli->query("INSERT INTO controle_alteracao (_data, natureza_alteracao, revisao, solicitante, aprovado_por ) VALUES('$data', '$natul_alt', '$revisao',' $solicitante', '$Aprovado_por ')");

    header('Location:index.php ');
    

   
}
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controle de alteração - Formulario</title>
    <link rel="stylesheet" href="style_form.css">
    
</head>
<body>
    
    <div id="h1">
        <h1>Controle de Alterações</h1><br><br>
        
    
<form method="post">
   <button id="gravar" input="submit">&#128190 <br> <p id="gravar">Gravar</p></button>
   <div id="voltar"><a id="voltar"  href="index.php"><img src="imagens/voltar.png" alt=""></a></div>
   
    </div>
    
        <div id="cont_alt">
        
            <form action="controle_alter_form.php" method="Post">
           
              <p>
                    <label for="idata">Data: </label>
                    <input type="date" name="_data" id="idata">
                </p>
                <p>
                    <label for="inatul_alt">Natureza da Alteração: </label><br>
                    <textarea name="natul_alt" id="inatul_alt" cols="33" rows="7"></textarea>
                 </p>
                 <p>
                    <label for="irevisao">Revisão: </label>
                    <input type="number" name="revisao" id="irevisao">
                 </p>
                 <p>
                    <label for="isolicitante">Solicitante: </label>
                    <input type="text" name="solicitante" id="isolicitante">
                 </p>
                 <p>
                    <label for="iaprovadp_por">Aprovado por: </label>
                    <input type="text" name="aprovado_por" id="iaprovadp_por">
                 </p>
                 
                
           </form>
           </div>
        
</body>
</html>