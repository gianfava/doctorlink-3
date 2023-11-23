<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PEDIATRIA</title>

      <!–---------CSS médicos especialidades ------------–>
    <link rel="stylesheet" href="css/medicosEspecialidades.css" />

</head>
<body>
  <div>
    <h2>PEDIATRAS</h2>

    <!-- Tabela HTML para exibir os dados -->
    <?php
    $servidor = "localhost";
    $usuario = "id21419228_doctorlink";
    $senha = "Aa123456?";
    $bancoDeDados = "id21419228_doctorlink";

    // Conectar ao banco de dados
    $conexao = new mysqli($servidor, $usuario, $senha, $bancoDeDados);

    if ($conexao->connect_error) {
        die("Erro na conexão: " . $conexao->connect_error);
    }

    // Consulta SQL para selecionar todos os registros da tabela "medico" com especialidade
    $especialidade = "pediatria";
    $sql = "SELECT * FROM medico WHERE especialidade = ?";

    // Preparar e executar a consulta
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $especialidade);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
      while ($linha = $resultado->fetch_assoc()) {
          echo "<table class='medico-table table-responsive'>";
          echo "<tr class='name-row'><td class='big-font'>{$linha["nome"]}</td></tr>";
          echo "<tr><td><b>Especialidade:</b> {$linha["especialidade"]}</td></tr>";
          echo "<tr><td><b>Email:</b> {$linha["email"]}</td></tr>";
          echo "<tr><td><b>Contato:</b> {$linha["contato"]}</td></tr>";
          echo "<tr><td><b>Endereço:</b> {$linha["endereco"]}, {$linha["cidade"]}, {$linha["estado"]}, {$linha["pais"]}</td></tr>";
          echo "<tr class='action-row'><td><button class='btn btn-primary' data-toggle='modal' data-target='#ModalAgendamento{$linha["id"]}'>Agendar Consulta</button></td></tr>";
          echo "</table>";
          // Modal de Agendamento
         
          echo "<div class='modal fade' id='ModalAgendamento{$linha["id"]}' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>";
          echo "<div class='modal-dialog' role='document'>";
          echo "<div class='modal-content'>";
          echo "<div class='modal-header'>";
          echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
          echo "<span aria-hidden='true'>&times;</span>";
          echo "</button>";
          echo "<h2 id='exampleModalLabel'>Agendamento de Consulta</h2>";
          echo "</div>";
          echo "<div class='modal-body'>";
          echo "<form action='agendarConsulta.php' method='post'>";
          echo "<input type='hidden' name='idMedico' value='{$linha["id"]}'>";
          echo "<label for='dataHora'>Data e Hora:</label><br>";
          echo "<input type='datetime-local' id='dataHora' name='dataHora'><br>";
          echo "<br>";
          echo "<input type='submit' value='Agendar' class='btn btn-primary'>";
          echo "</form>";
          echo "</div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";

      }
      } else {
      echo "Nenhum médico de Pediatria cadastrado.";
  }
  
    
    // Fechar a conexão com o banco de dados
    $conexao->close();
    ?>
  </div>
</body>
</html>