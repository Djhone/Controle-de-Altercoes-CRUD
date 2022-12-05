
<?php
if(!empty($_GET['id'])){
    
    include('conexao.php');

    $id = $_GET['id'];

    $sqlselect = "SELECT * FROM controle_alteracao WHERE id = $id";

    $resul = $mysqli->query($sqlselect);
    
    if($resul->num_rows > 0){

        while($user_data = mysqli_fetch_assoc($resul)){
            $data = $user_data['_data'];
            $natul_alt = $user_data['natureza_alteracao'];
            $revisao = $user_data['revisao'];
            $solicitante =$user_data['solicitante'];
            $Aprovado_por = $user_data['aprovado_por'];
        }
        


    }
}
 
?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controle de alteração - editar</title>
    <link rel="stylesheet" href="style_form.css">
    
</head>
<body>
<form action="controle_alter_saveEdit.php" method="Post">
    <div id="h1">
        <h1>Controle de Alterações</h1>
        <h2>Editar</h2>
        <button id="gravar" name="update" input="submit">&#128190 <br> <p id="gravar">Gravar</p></button>
        <div id="voltar"><a id="voltar"  href="index.php"><img src="imagens/xxx.png" alt=""></a></div>
    </div>
    
        <div id="cont_alt">

           
              <p>
                    <label for="idata">Data: </label>
                    <input  type="date" name="_data" id="i_data" value="<?php echo $data ?>">
                </p>
                <p>
                    <label for="inatul_alt">Natureza da Alteração: </label><br>
                    <textarea  name="natul_alt" id="inatul_alt"  cols="33" rows="7"><?php echo $natul_alt?></textarea>
                 </p>
                 <p>
                    <label for="irevisao">Revisão: </label>
                    <input type="number" name="revisao" id="irevisao" value="<?php echo $revisao?>">
                 </p>
                 <p>
                    <label for="isolicitante">Solicitante: </label>
                    <input  type="text" name="solicitante" id="isolicitante" value="<?php echo $solicitante?>">
                 </p>
                 <p>
                    <label for="iaprovadp_por">Aprovado por: </label>
                    <input type="text" name="aprovado_por" id="iaprovadp_por" value="<?php echo $Aprovado_por?>">
                 </p>
                 <p>
                    
                    <input type="hidden" name="id" value="<?php echo $id ?> ">
                    
                 </p>
                
           </form>
           </div>
    
</body>
</html>


