<?php
include("DAOcontacts.php");

include("head.php");

$name = $_POST["name"];
$telephone = $_POST["telephone"];
$email = $_POST["email"];

if(addContact($connection, $name, $telephone, $email)){?>
    <p Class ="alert-success"> contato <?=$name?> adcionado com sucesso! </p><?php
}else{
    $ErrorMsg=mysqli_error($connection);
?>
<p Class = "alert-danger"> falha ao adicionar contato <?=$name?>. erro:<?=$ErrorMsg?></p>
<?php 
}
mysqli_close($connection);
?>
<a href="add-contact-form.php" class="btn btn-primary">Voltar</a>