<?php
include "../config.php";

$sql = "INSERT INTO agenda(
nome,
email,
telefone,
celular,
outro,
grupo
)
VALUES (
'".$_POST["nome"]."',
'".$_POST["email"]."',
'".$_POST['telefone']."',
'".$_POST['celular']."',
'".$_POST['outro']."',
'".$_POST['grupo']."'
)";

//echo $sql;
//Executo a minha query
//echo $sql;
$query = mysqli_query($con, $sql);
//Verifico se o registro foi inserido com sucesso
if ($query == true) {
  echo "<script>alert('usuário cadastrado com sucesso');</script>";
  echo "<META http-equiv='refresh' content='1;URL=http://".$site."index.php?page=listar_contatos&contato='> ";
  
}
else {
  echo "Não foi possivel inserir o registro - entre em contato com o webmaster <br><br>".mysqli_error();
}
?>
