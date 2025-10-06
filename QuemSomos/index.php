<?php

session_start()

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link rel="icon" href="../img/logoBarber.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../todasPaginas/nav.css">
    <link rel="stylesheet" href="../todasPaginas/darkMode.css">
    <link rel="stylesheet" href="../todasPaginas/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="quemSomos.css">

</head>

<body>
      <!-- Navegação -->
      <div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="#"><img src="" alt=""></a>  
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                             <a class="nav-link" href="https://slateblue-lion-896979.hostingersite.com/">INÍCIO</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link" href="../Agendamento/index.php">AGENDAR</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="../QuemSomos/index.php">SOBRE</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link" href="../Produtos/index.php">PRODUTOS</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <?php 
                                        if(isset($_SESSION['user_id'])){
                                            echo '<a class="nav-link" href="../todasPaginas/logout.php">SAIR</a>';
                                        }
                                    ?>
                                </li>
                            </ul>
                                                    <div class="theme-switch">
                                                    <input type="checkbox" id="theme-checkbox" />
                                                    <label for="theme-checkbox">
                                                        <div></div>
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24"
                                                                fill="currentColor"
                                                                class="w-6 h-6"
                                                            >
                                                                <path
                                                                    fill-rule="evenodd"
                                                                    d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z"
                                                                    clip-rule="evenodd"
                                                                ></path>
                                                            </svg>
                                                        </span>
                                                        <span>
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24"
                                                                fill="currentColor"
                                                                class="w-6 h-6"
                                                            >
                                                                <path
                                                                    d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z"
                                                                ></path>
                                                            </svg>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </nav>    
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </nav>    
                </div>
            </div>
        </div>
    </div>
                        
<!-- fim navegaçao -->
    
<!-- Inicio estabelecimento -->
<div class="container-estabelecimento">
    <img src="../img/estabelecimento1.png" alt="imagemEstabelecimento" class="imagemEstabelecimento">
    <p class="txtEstabelecimento">
        Bem-vindo à nossa barbearia! Aqui, oferecemos cortes modernos, um ambiente acolhedor e profissionais qualificados. Experimente o melhor atendimento e saia com um visual renovado.
    </p>
</div>
<!--fim estabelecimento  -->

<!-- inicio historia -->
<div class="container-historia">
    <img src="../img/estabelecimento2.png" alt="imagemEstabelecimento" class="imagemEstabelecimento">
    <p class="txtEstabelecimento">
        Bem-vindo à nossa barbearia! Aqui, oferecemos cortes modernos, um ambiente acolhedor e profissionais qualificados. Experimente o melhor atendimento e saia com um visual renovado.
    </p>
</div>
<!-- fim historia -->


<!-- Profissionais -->

<h1 id="titleProfile">Nossos Profissionais</h1>

<div class="team-grid">
    <div class="team-member">
        <img src="../img/barbeiro1.png" alt="João Silva">
        <div class="overlay">
            <h3>João Silva</h3>
            <p>Especialista em cortes modernos e barba.</p>
        </div>
    </div>

    <div class="team-member">
        <img src="../img/barbeiro1.png" alt="Carlos Mendes">
        <div class="overlay">
            <h3>Carlos Mendes</h3>
            <p>10 anos de experiência na barbearia.</p>
        </div>
    </div>

    <div class="team-member">
        <img src="../img/barbeiro1.png" alt="Lucas Ferreira">
        <div class="overlay">
            <h3>Lucas Ferreira</h3>
            <p>Especialista em cortes clássicos e fades.</p>
        </div>
    </div>
</div>


<!-- Footer -->

<footer class="footer-section">
        <div class="container">
            <div class="footer-cta pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="cta-text">
                                <h4>Encontre-nos</h4>
                                <span>Belo Horizonte - MG</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="fas fa-phone"></i>
                            <div class="cta-text">
                                <h4>Telefone</h4>
                                <span>3199794-1735</span><br>
                                <span>3198730-5141</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4 mb-30">
                        <div class="single-cta">
                            <i class="far fa-envelope-open"></i>
                            <div class="cta-text">
                                <h4>Email</h4>
                                <span>techinnova01@gmail.com</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a><img src="../img/logoAlltech.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <div class="footer-text">
                                <p>A AllTech é a revolução digital que sua empresa precisa! Especialistas em desenvolvimento de sites e aplicações web, transformamos ideias em experiências digitais envolventes, escaláveis e de alto desempenho. Seja para fortalecer sua presença online, aumentar suas conversões ou oferecer uma experiência digital impecável, criamos soluções sob medida para o seu negócio.</p>  
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Serviços</h3>
                        </div>
                        <ul>
                            <li><a href="#">Desenvolvimento de Sites</a></li>
                            <li><a href="#">Aplicações Web</a></li>
                            <li><a href="#">E-commerce</a></li>
                            <li><a href="#">Otimização de SEO</a></li>
                            <li><a href="#">Manutenção e Suporte</a></li>
                            <li><a href="#">Integração de APIs</a></li>
                            <li><a href="#">Sistemas Personalizados</a></li>
                            <li><a href="#">UX/UI Design</a></li>
                        </ul>
                    </div>                 
                </div>


                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
    <div class="footer-widget">
        <div class="footer-widget-heading">
            <h3>Fale Conosco</h3>
        </div>
        <div class="footer-text mb-25">
            <p>Precisa de um orçamento ou tem alguma dúvida? Fale conosco agora pelo WhatsApp!</p>
        </div>
        <div class="whatsapp-btn">
            <a href="https://wa.me/31997941735" target="_blank">
                <i class="fab fa-whatsapp"></i> WhatsApp
            </a>
        </div>
    </div>
</div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2025, Todos os direitos reservados, AllTech</p>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="quemSomos.js"></script>
    <script src="../todasPaginas/foraDarkMode.js"></script>
</body>
</html>
