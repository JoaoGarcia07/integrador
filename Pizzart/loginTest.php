<?php
include "../include/MySql.php";
include "../include/functions.php";

session_start();
$_SESSION['nome'] = "";
$_SESSION['rafalindox'] = "";

$email = "";
$senha = "";
$msgErro = "";
$emailErro = "";
$senhaEro = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['email'])) {
        $emailErro = "Email e obrigatorio";
    } else {
        $email = test_input($_POST['email']);
    }


    if (empty($_POST['senha'])) {
        $senhaEro = "Senha é Obrigatório";
    } else {
        $senha = test_input($_POST['senha']);
    }    
    
    if ($email && $senha) {
        $sql = $pdo->prepare("SELECT * FROM USUARIO WHERE email=? AND senha=?");
        if ($sql->execute(array($email, md5($senha)))){
            $info = $sql->fetchAll(PDO::FETCH_ASSOC);
            if (count($info) > 0) {
                foreach($info as $key=>$values){
                $_SESSION['nome'] = $values['nome'] ;
                $_SESSION['rafalindox'] = '1';
            }
                header('location:principal.php');
            } else {
                $msgErro = "Usuario Nao Cadastrado!";
            }
        }    
    } else {
            $msgErro = "usuario nao cadastrado";
    }
}




?>


<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="stylesheet" href="../css/style.css">

</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset>
            <legend>LOGIN</legend>
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $email ?>">
            <br>
            <label for="$senha">Senha</label>
            <input type="password" name="senha" value="<?php echo $senha ?>">
            <br>
            <input type="submit" value="login" name="login">
        </fieldset>
        <h3><a href="cadUsuario.php">nao possui conta? Cadastre-se aqui!</a> </h3>
    </form>
    <span><?php echo $msgErro ?></span>
</body>

</html>=================