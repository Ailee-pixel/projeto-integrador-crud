<?php

require_once('conexao.php');

if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Insira as informações!');
}


if ($stmt = $con->prepare('SELECT id, senha FROM usuarios WHERE nome_usuario = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();

        if ($_POST['password'] === $password) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
           header('Location: dashboard.php');
        } else {
            header('Location: index.php');
        }
    }else{
        header('Location: index.php');




    }
    $stmt->close();
}

?>
    
    
