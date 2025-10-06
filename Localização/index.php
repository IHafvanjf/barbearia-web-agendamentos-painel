<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Localização - Barbearia</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        
</head>
<body>

<div class="cabeçalho">
        <p class="txtCabeçalho">Ligue pra nós: +55 (99) 9 9999-9999</p>
        <div class="cabeçalhoMidias">
            <img src="../img/instagram.svg" alt="instagram" class="iconeInstagram">
            <img src="../img/facebook.svg" alt="facebook" class="iconeFacebook">
            <img src="../img/whatsapp.png" alt="whatsapp" class="iconeWhatsapp">
        </div>
    </div>

    <div class="navegaçao">
      <a href="../index.php" class="inicio">INÍCIO</a>
      <a href="../Agendamento\index.php" class="agendar">AGENDAR</a>
      <a href="../Produtos/index.php" class="produtos">PRODUTOS</a>
      <a href="../QuemSomos/index.php" class="serviços">QUEM SOMOS</a>
      <a href="index.php" class="localizacao" onclick="recarregarPagina()">LOCALIZAÇÃO</a>
      <?php 
      session_start();
      if(isset($_SESSION['user_id'])){
                echo "<a href='../logout.php'>SAIR</a>";
        }?>
    </div>

    <div class="container">
        <h1>Sua Localização</h1>
        <p>Encontre-nos no endereço abaixo:</p>
    </div>

    <button onclick="maps()" id="mapsButton" class="btn btn-outline-danger">Mudar mapa</button>
    <!-- API do Google Maps com sua chave -->
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.123456789123!2d-122.41941568467842!3d37.77492927975828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085815823456789%3A0x1a2b3c4d5e6f7g8h!2sYour%20Business%20Name!5e0!3m2!1sen!2sus!4v1234567890123" 
            width="600" 
            height="450" 
            style="border-radius: 10px; border: 4px solid rgb(161, 39, 65);" 
            allowfullscreen="" 
            loading="lazy"
            id="maps"></iframe>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!3m2!1spt-BR!2sbr!4v1731069831024!5m2!1spt-BR!2sbr!6m8!1m7!1sE0GFw94ohOmuMxr-Vw7qYA!2m2!1d-19.84019129777722!2d-43.9657584710384!3f197.07545061546585!4f10.098844176612175!5f0.7820865974627469" 
            width="600" 
            height="450" 
            style="border-radius: 10px; border: 4px solid rgb(161, 39, 65); display: none;" 
            allowfullscreen="" 
            loading="lazy" 
            id="street"></iframe>
            
    </div>

    <div id="enderecos">
             <p><strong>Endereço:</strong> Av. Exemplo, 123, Centro - Cidade, Estado, Brasil</p>
             <p><strong>Horário de Funcionamento:</strong> Segunda a Sexta, das 9h às 18h</p>
   </div>

   <footer class="footer text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Informações de contato -->
            <div class="col-12 col-md-4 mb-3 mb-md-0">
                <h5>Contato</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-telephone-fill"></i> +55 (99) 9 9999-9999</li>
                    <li><i class="bi bi-envelope-fill"></i> contato@barbearia.com</li>
                </ul>
            </div>
            <!-- Redes sociais -->
            <div class="col-12 col-md-4 text-center mb-3 mb-md-0">
                <h5>Redes sociais</h5>
                <div class="d-flex justify-content-center">
                    <a href="https://wa.me/213123123" class="btn btn-success btn-icon mr-2" target="_blank">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="https://instagram.com/barbearia" class="btn btn-dark btn-icon mr-2" target="_blank">
                        <i class="bi bi-instagram"></i>
                    </a>
                </div>
            </div>
            <!-- Logo e direitos autorais ao lado -->
            <div class="col-12 col-md-4 d-flex align-items-center justify-content-center justify-content-md-end">
                <img src="../img/logoBarber.png" alt="Logo da Barbearia" class="img-fluid" width="100">
                <p class="mt-1 ms-3 text-center text-md-end">© 2024 Barbearia. Todos os direitos reservados.</p>
            </div>
        </div>
    </div>
</footer>
<script src="script.js"></script>
</body>
</html>
