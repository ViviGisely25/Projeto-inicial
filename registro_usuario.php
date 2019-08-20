
<?php
require_once ('db.class.php'); // Conecta ao banco de dados
// COLOQUE AQUI O CÓDIGO PARA RECEBIMENTO DOS DADOS DO FORMULÁRIO
 


// Escreva Aqui uma variável em php que contenha o comando do SQL para inserir dados

$usuario=$_POST['usuario'];
$senha=$_POST['senha'];
$email=$_POST['email'];

$conec=new db();
$link=$conec->conecta_mysql();
$sql="INSERT INTO usuarios(usuario,email,senha)values('$usuario','$senha','$email')";

if(mysqli_query($link,$sql)){
    echo "Usuario registrado com sucesso!";
}else{
    echo"Erro ao registrar o usuario!";
}

?>
