<?php
//session_start();


include ('conectar_db.php');

$nome = $_POST['nome'];
$data_de_nascimento=$_POST['data_de_nascimento'];
$email=$_POST['email'];
$num=$_POST['telefone'];
$sexo=$_POST['sexo'];
$cpf=$_POST['cpf'];
$endereco=$_POST['endereco'];
$n_endereco =$_POST['n_endereco'];
$cpf=$_POST['cep'];
$bairro=$_POST['bairro'];
$cidade=$_POST['cidade'];
$estado=$_POST['estado'];






$sqlc = "INSERT INTO tbcadastromd (nomeCompleto, datadeNascimento, email, telefone, sexo, ncpf, endereco, n_endereco, cep, bairro, cidade, estado )
VALUES ('$nome', '$data_de_nascimento','$email','$num','$sexo','$cpf','$endereco','$n_endereco','$cpf','$bairro','$cidade','$estado')";



  /*  $sqlv = "UPDATE tbvagas
    SET statusVag = 'Ocupado'
    WHERE  vaga = '$vaga'";*/  



$sqlcp = "INSERT INTO  tbcupons (dataEntrada,dataSaida,periodoEstimado,periodoTotal,valorEstimado)
VALUES ('$dataEntrada','$dataSaida','$periodoEstimado','$periodoTotal','$valorEstimado')";

$resultc = mysqli_query($conexao,$sqlc);
/*$resultv = mysqli_query($conexao,$sqlv);
$resultcp = mysqli_query($conexao,$sqlcp);*/



//echo '<script>alert("Cadastro concluido com sucessius")</script>';

//$_SESSION['cadastrado'] = '<script>alert("Cadastro concluido com sucesso")</script>';
//$_SESSION['cad']=true;



?>