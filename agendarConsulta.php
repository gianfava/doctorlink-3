<?php
ob_start();  // Inicia o buffer de saída

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    // Defina as variáveis com as informações do seu banco de dados
    $servidor = "localhost";
    $usuario = "id21419228_doctorlink";
    $senha = "Aa123456?";
    $bancoDeDados = "id21419228_doctorlink";


    // Conecte-se ao banco de dados
    $conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

    // Verifique a conexão
    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Pegue os dados do formulário
    $idUsuario = $_SESSION["idUsuario"];
    $idMedico = $_POST["idMedico"];

    // Verifique se o usuário está logado
    if ($idUsuario == null) {
        header("Location: processLogin.php");
    }

    // Verifique se o médico existe
    $sql = "SELECT id FROM medico WHERE id = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $idMedico);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if ($resultado->num_rows == 0) {
        echo "O médico não existe.";
    } else {
        // Insira os dados na tabela de agendamentos
        $sql = "INSERT INTO agendamento (idUsuario, idMedico, dataHora) VALUES (?, ?, ?)";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("iis", $idUsuario, $idMedico, $dataHora);
        $stmt->execute();

        // Redirecione para a página de confirmação
        header("Location: confirmacao.php");
    }

    ob_end_flush();  // Limpa o buffer de saída e desliga a saída do buffer
}




?>



 
 

 