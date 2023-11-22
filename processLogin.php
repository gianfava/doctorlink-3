<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeUser = $_POST["nomeUser"];
    $senhaUsuario = $_POST["senha"]; // A senha inserida pelo usuário

   // Conecte-se ao banco de dados
    $servidor = "localhost";
    $usuario = "id21419228_doctorlink";
    $senhaBD = "Aa123456?";
    $bancoDeDados = "id21419228_doctorlink";

    $conexao = new mysqli($servidor, $usuarioDB, $senhaBD, $bancoDeDados);

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Consulta SQL para verificar as credenciais do usuário
    $sql = "SELECT * FROM usuario WHERE nomeUser = '$nomeUser'";
    $resultado = $conexao->query($sql);

    if ($resultado) {
        if ($resultado->num_rows == 1) {
            $row = $resultado->fetch_assoc();
            $senhaArmazenada = $row["senha"]; 
            if ($senhaUsuario === $senhaArmazenada) {
            // A senha está correta
            // Verificar se é o administrador
            if ($nomeUser === 'admin' && $senhaUsuario === 'admin') {
                // Administrador
                session_start(); // Inicie a sessão
                $_SESSION['nomeUser'] = $nomeUser; // Armazene o nome do usuário na sessão
                header('Location: admin.php'); // Redirecionamento para a página do administrador
                exit; // Importante para parar a execução após o redirecionamento
            } else {
                // Usuário normal
                session_start(); // Inicie a sessão
                $_SESSION['nomeUser'] = $nomeUser; 
                $_SESSION['nomeUser'] = $row['nome'];
                $_SESSION['sexoFromDB'] = $row['sexo'];
                $_SESSION['endereco'] = $row['endereco'];
                $_SESSION['emailFromDB'] = $row['email'];
                $_SESSION['planoFromDB'] = $row['plano'];
                $_SESSION['tipoSanguineoFromDB'] = $row['tipoSanguineo'];
                $_SESSION['qualMedicamentoFromDB'] = $row['qualMedicamento'];
                header('Location: logado.php'); // Redirecionamento para a página do usuário normal
                exit; // Importante para parar a execução após o redirecionamento
            }
        } else {
            $mensagemErro = "Credenciais de login inválidas.";
        }
    } else {
        $mensagemErro = "Credenciais de login inválidas.";
    }

    $conexao->close();
} else {
    $mensagemErro = "Método de requisição inválido.";
}

// Redirecionamento com base na mensagem de erro
if (isset($mensagemErro)) {
    header("Location: login.html?erro=" . urlencode($mensagemErro));}
    exit;
}
?>