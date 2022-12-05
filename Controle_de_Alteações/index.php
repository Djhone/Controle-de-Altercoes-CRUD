
<?php

 include('conexao.php');
 $sqlselect = "SELECT id,_data, natureza_alteracao, revisao, solicitante, aprovado_por  FROM  controle_alteracao";

 $result = $mysqli->query($sqlselect);

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

    
}else{
$Aprovado_por = "";    
$natul_alt = "";
$solicitante = "";
}
 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>controle de alteração</title>
    <link rel="stylesheet" href="style-tabelas.css">
</head>
<body>
<div id="h1">
   <h1>Controle de Alterações</h1>
   <h2>Tabela</h2>
   <div id="incluir"><a id="incluir"  href="controle_alter_form.php"><img id="incluir" src="imagens/incluir.png" alt=""></a></div>

   <form method="post">
   
   
    </div>
    
        
    </div>

        <div id="tabela">
            <table class="article-table" >
                
                <colgroup>
                    <col class="Data">
                    <col class="Natureza">
                    <col class="Revisao">
                    <col class="Solicitante">
                    <col class="AprovadoPor">
                    <col class="Acao">
                
                </colgroup>

                <thead>
                    <tr>
                    
                        <th scope="col">Data</th>
                        <th scope="col">Natureza de Alteração</th>
                        <th scope="col">Revisão</th>
                        <th scope="col">Solicitante</th>
                        <th scope="col">Aprovado por</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result)){
                        echo "<tr>";
                        
                        echo "<td>".$user_data['_data']."</td>";
                        echo "<td>".$user_data['natureza_alteracao']."</td>";
                        echo "<td>".$user_data['revisao']."</td>";
                        echo "<td>".$user_data['solicitante']."</td>";
                        echo "<td>".$user_data['aprovado_por']."</td>";
                        echo "<td>
                        <button class='ver'><a class='ver'href='controle_alter_mostrar.php?id= $user_data[id]'>&#128269;</a></button>

                        <button class='edit'><a class='edit'href='controle_alter_edit.php?id= $user_data[id]'>&#9998;</a></button>

                        <button class='excluir'><a class='excluir'href='controle_alter_delete.php?id= $user_data[id]'>&#128465</a></button>
                        </td>";
                        echo "</tr>";
                    }
                ?>
            
                </tbody>
                <tfoot>
            
                </tfoot>
            </table >
            
       
         
                    <input type="hidden" name="id" value="<?php echo $id ?> ">
                   
                 </p>
                
           </form>
        
</body>
</html>