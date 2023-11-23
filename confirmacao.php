<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!–---------CSS GLOBAL ------------–>
    <link rel="stylesheet" href="css/estilo.css" />

    <!–---------CSS DO MENU RESPONSIVO ------------–>
    <link rel="stylesheet" href="css/menu.css" />

    <!–---------JAVASCRIPT ------------–>
    <script src="js/script.js"></script>

    <!–---------BIBLIOTECA DE ICONES SVG ------------–>
    <script src="https://kit.fontawesome.com/092ff46a3e.js" crossorigin="anonymous"></script>

    <!–---------Código do FAVICON ------------–>
    <link rel="shortcut icon" href="/img/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img//favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img//favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>DoctorLink | Conectando Saúde</title>
  </head>
<body>

  <!--Logo + Menu de Navegação -->

  <header class="header">
    <a href="index.html"><img src="img/logo.png" class="logo" /></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"
      ><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="index.html"><i class="fa fa-home-alt"></i> Home</a></li>
      <li><a href="especialidades.php"><i class="fa fa-stethoscope"></i> Especialidades</a></li>
      <li><a href="planos.html"><i class="fas fa-laptop-medical"></i> Planos</a></li>
      <li><a href="sobre.html"><i class="fas fa-vector-square"></i> Sobre Nós</a></li>
      <li><a href="login.html" class="alogin"><i class="fa fa-user"></i> Login</a></li>
    </ul>
  </header>

  <br><br><br>

  <div class= "linha">
      <li class="capa_item">
        <div style="position:relative;">
          <img src="img/CAPA.jpg" alt="Imagem" style="width:100%;">
          <div style="position:absolute;top:30%;left:75%;transform:translate(-50%,-25%);">
            <h4 class="capa_title">Agendamento Confirmado</h4>
            <br>
            <h4 class="capa_text">Obrigado por agendar sua consulta!</h4>
            <br>
            <h4 class="capa_text">Você receberá um e-mail de confirmação em breve.</h4>
          </div>
        </div>
      </li>
    </div>  

</main>
<!–---------RODAPE ------------–>

<div class="footer">
  <div class="row main">
    <div class="col site-info">
      <div class="footer-disclaimer">
        <div class="logo">
          <img src="./img/logo.png" alt="" />
        </div>
       <p>A DoctorLink é uma plataforma de telemedicina acessível e segura. </p>
      </div>
      <div class="footer-links" id="footer">
        <ul>
          <li><a href="index.html" alt=""><i class="fa fa-home-alt"></i> Home</a></li>
          <li><a href="especialidades.php" alt=""><i class="fa fa-stethoscope"></i> Especialidades</a></li>
          <li><a href="planos.html" alt=""><i class="fas fa-laptop-medical"></i> Planos</a></li>
          <li><a href="sobre.html" alt=""><i class="fas fa-vector-square"></i> Sobre Nós</a></li>
          
        </ul>
      </div>
    </div>
   

    <div class="col">
      <div class="footer-links">
        <p><strong>Especialidades</strong></p>
        <ul style="margin-left: 40px;">
          <li><a href="especialidades.php"><i class="fa fa-user-doctor"></i> Angiologia</a></li>
          <li><a href="especialidades.php"><i class="fa-brands fa-mendeley"></i> Assitência Pré Natal</a></li>
          <li><a href="especialidades.php"><i class="fa fa-heart"></i> Cardiologia</a></li> 
          <li><a href="especialidades.php"><i class="fa fa-stethoscope"></i> Dermatologia</a></li> 
          <li><a href="especialidades.php"><i class="fa fa-apple-whole"></i> Nutrição</a></li> 
          <li><a href="especialidades.php"><i class="fa fa-brain"></i> Neurologia</a></li> 
          <li><a href="especialidades.php"><i class="fa fa-spa"></i> Psicologia</a></li>
          <li><a href="especialidades.php"><i class="fa fa-baby"></i> Pediatria</a></li>

        </ul>
        
      </div>
    </div>

    <div class="col maps">
      <div class="place">
        <div class="map-container">
          <div class="map"></div>
        </div>
        <div class="address">
          <p><strong>Fale Conosco</strong></p>
          <p>+55 016 3234-5678</p>
          <p>email@doctorlink.com.br</p>
        </div>
      </div>
      <a href="fale-conosco.html"><img src="./img/vector-01.jpg" alt="Fale Conosco"></a>
    </div>

  </div>


  <div class="row">
    <div class="social-icons">
      <ul >
        <li><a href="#" target="_blank" alt=""><i class="fab fa-facebook"></i></a></li>
        <li><a href="#" target="_blank" alt=""><i class="fab fa-twitter"></i></a></li>
        <li><a href="#" target="_blank" alt=""><i class="fab fa-instagram"></i></a></li>
        <li><a href="#" target="_blank" alt=""><i class="fab fa-youtube"></i></a></li>
      </ul>
    </div>
  </div>

  <div class="ending-note">
    <p>Copyright © 2023 DoctorLink. Todos os direitos reservados.</p>
  </div>
</div>
<!–-------FIM RODAPE ------------–>

<!–---------BOTAO WHATSAPP ------------–>
<a class="wa" href="https://wa.me/5516992009026?text=Olá" target="_blank">
  <i style="margin-top: 16px" class="fa fa-whatsapp"></i>
</a>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</body>

</html>

