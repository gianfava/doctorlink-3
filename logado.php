<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="<?php echo 'css/estilo.css'; ?>" />
<link rel="stylesheet" href="<?php echo 'css/menu.css'; ?>" />
<script src="<?php echo 'js/script.js'; ?>"></script>


    <!-- BIBLIOTECA DE ICONES SVG -->
    <script src="https://kit.fontawesome.com/092ff46a3e.js" crossorigin="anonymous"></script>

    <!-- Código do FAVICON -->
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>DoctorLink | Conectando Saúde</title>

</head>

<body>

    <!-- Logo + Menu de Navegação -->
    <header class="header">
        <a href="index.html"><img src="img/logo.png" class="logo" /></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
            <li><a href="index.html"><i class="fa fa-home-alt"></i> Home</a></li>
            <li><a href="especialidades.php"><i class="fa fa-stethoscope"></i> Especialidades</a></li>
            <li><a href="planos.html"><i class="fas fa-laptop-medical"></i> Planos</a></li>
            <li><a href="sobre.html"><i class="fas fa-vector-square"></i> Sobre Nós</a></li>
          </ul>
    </header>

    <br><br>

    <!-- Início da página pacientes -->
    <main>
        <?php if (isset($_SESSION['nomeUser'])) : ?>
            <div class="profile-container">
                <div class="profile">
                    <img src="SQL fotoUser" alt="Foto de perfil">
                </div>
                $pastaUploads = 'caminho/para/a/pasta/uploads/';

                <!-- Botões -->
                <div class="section">
                    <div class="absolute">
                        <button onclick="toggleInfo()">Informações Pessoais</button>
                        <button onclick="toggleCondMedica()">Condições Médicas</button>
                    </div>
                    <div id="Info">
                        <br>
                        <p><span class="titulo">Nome:</span><br><span class="conteudo">
                                <?php echo $_SESSION['nomeUser']; ?>
                            </span></p>

                        <p><br><br><span class="titulo">Sexo:</span><br><span class="conteudo">
                                <?php echo $_SESSION['sexoFromDB']; ?>
                            </span></p>
                        <p><br><br><span class="titulo">Endereço:</span><br><span class="conteudo">
                                <?php echo $_SESSION['endereco']; ?>
                            </span></p>
                        <p><br><br><span class="titulo">Email:</span><br><span class="conteudo">
                                <?php echo $_SESSION['emailFromDB']; ?>
                            </span></p>
                        <p><br><br><span class="titulo">Plano:</span><br><span class="conteudo">
                                <?php echo $_SESSION['planoFromDB']; ?>
                            </span></p>
                    </div>

                    <div id="CondMedica" class="hidden">
                        <br><br>
                        <p><br><span class="titulo">Tipo Sanguíneo:</span><br><span class="conteudo">
                                <?php echo $_SESSION['tipoSanguineoFromDB']; ?>
                            </span><br></p>
                        <br><br>
                        <h3>Medicamentos Utilizados</h3>
                        <p>
                            <?php echo $_SESSION['qualMedicamentoFromDB']; ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p>Sessão não iniciada ou informações não disponíveis.</p>
        <?php endif; ?>
    </main>

    <script>
        // Função botões - página pacientes

        // Exibe as informações pessoais por padrão
        document.getElementById('Info').classList.remove('hidden');

        // Funções para mostrar/ocultar as seções
        function toggleInfo() {
            var Info = document.getElementById('Info');
            Info.classList.remove('hidden');
            document.getElementById('CondMedica').classList.add('hidden');
        }

        function toggleCondMedica() {
            var Info = document.getElementById('Info');
            Info.classList.add('hidden');
            document.getElementById('CondMedica').classList.remove('hidden');
        }
    </script>

    <!-- RODAPÉ -->
    <div class="footer">
        <!-- Conteúdo do rodapé -->
    </div>

    <!-- Botão do WhatsApp -->
    <a class="wa" href="https://wa.me/5516992009026?text=Olá" target="_blank">
        <i style="margin-top:16px" class="fa fa-whatsapp"></i>
    </a>

</body>

</html>
