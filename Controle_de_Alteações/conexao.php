<?PHP 
    $usuario = 'root';
    $senha = '';
    $database = 'sistema_site';
    $host = 'localhost';


$mysqli = new mysqli($host, $usuario, $senha, $database);
 
if($mysqli->error){
    die("falha ao conectar ao banco de dados");
}
?>