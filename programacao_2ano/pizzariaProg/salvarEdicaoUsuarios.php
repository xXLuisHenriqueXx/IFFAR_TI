<?php
    $txtConexao = mysqli_connect('localhost', 'root', '', 'pizzaria');

    $txtIdUsuario = $_GET['tId'];
    $txtNomeUsuario = $_GET['tNome'];
    $txtEmailUsuario = $_GET['tEmail'];
    $txtSenhaUsuario = sha1($_GET['tSenha']);

    $txtEdit = "UPDATE usuarios SET nomeUsuario = '" . $txtNomeUsuario . "', emailUsuario = '" . $txtEmailUsuario . "', senhaUsuario = '" . $txtSenhaUsuario . "' WHERE idUsuario = '" . $txtIdUsuario . "';";
        $txtQuery = mysqli_query($txtConexao, $txtEdit);
        echo $txtEdit;
        header("Location:listarUsuarios.php");    
?>