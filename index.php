<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Barbearia Web</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="public/img/logoBarber.png" type="image/x-icon">
    <link rel="stylesheet" href="style01.css">
    <link rel="stylesheet" href="public/todasPaginas/footer.css">
    <link rel="stylesheet" href="public/todasPaginas/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


    <style>
        .modal {
            z-index: 1050;
        }
    </style>
</head>
<body>

    <!-- Navegação -->
    <div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        
                        <a class="navbar-brand" href="#"><img src="" alt="Logo"></a>  
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="#">INÍCIO</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="public/Agendamento/index.php">AGENDAR</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="public/QuemSomos/index.php">SOBRE</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="public/Produtos/index.php">PRODUTOS</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <?php 
                                    session_start();
                                    if(isset($_SESSION['user_id'])){
                                            echo '<a class="nav-link" href="public/todasPaginas/logout.php">SAIR</a>';
                                    }?>
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
    
                    
                            </div>
                            </ul>
                    </nav>    
                </div>
            </div>
        </div>
    </div>

    <!-- Loader -->
    <div id="splash">
        <div id="logo-container">
            <h1 style="color: white;">Barber Shop</h1>
            <img src="public/img/loader.png" alt="Barber Shop" id="barbershop-logo" />
        </div>
    </div>

    <!-- Início do Slide -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicadores -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper para os slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="fill">
                    <img src="public/img/slide1.jpg" class="d-block w-100" alt="slide1">
                </div>
                <div class="carousel-caption">
                    <h2 class="animated fadeInLeft" id="tituloSlide">Transforme a experiência do cliente.</h2>
                    <p class="animated fadeInUp" id="descSlide">Amplie sua presença digital e atraia mais clientes para sua barbearia.</p>
                    <p class="animated fadeInUp"><a href="public/Agendamento/index.php" class="btn btn-transparent btn-rounded btn-large" id="btnAgendarSlide">Agendar agora!</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="fill">
                    <img src="public/img/slide2.jpg" class="d-block w-100" alt="slide2">
                </div>
                <div class="carousel-caption">
                    <h2 class="animated fadeInDown" id="tituloSlide">Destaque sua barbearia e atraia mais clientes.</h2>
                    <p class="animated fadeInUp" id="descSlide">Torne sua barbearia mais visível e conquiste mais clientes.</p>
                    <p class="animated fadeInUp"><a href="public/Agendamento/index.php" class="btn btn-transparent btn-rounded btn-large" id="btnAgendarSlide">Agendar agora!</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="fill">
                    <img src="public/img/slide3.jpg" class="d-block w-100" alt="slide3">
                </div>
                <div class="carousel-caption">
                    <h2 class="animated fadeInRight" id="tituloSlide">Sua Barbearia na mão de todos.</h2>
                    <p class="animated fadeInRight" id="descSlide" >Destaque sua barbearia e atraia mais clientes com um site profissional.</p>
                    <p class="animated fadeInRight"><a href="public/Agendamento/index.php" class="btn btn-transparent btn-rounded btn-large" id="btnAgendarSlide">Agendar agora!</a></p>
                </div>
            </div>
        </div>

        <!-- Controles -->
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <!-- Fim do Slide -->

    <!-- Inicio card profissionais -->
    <h1 class="tituloProfissionais">Seus Profissionais</h1>
    <div class="container-fluid text-center card-container">
        <div class="row justify-content-center">
            <!-- Profissional 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="profileimage">
                        <img src="public/img/barbeiro1.png" alt="barbeiroProfile">
                    </div>
                    <div >
                        <p class="Name_profile">Profissional 1</p>
                    </div>
                    <div class="schedule-btn">
                        <a href="public/Agendamento/index.php" class="btn-agendar">Agendar</a>
                    </div>
                </div>
            </div>

            <!-- Profissional 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="profileimage">
                        <img src="public/img/barbeiro1.png" alt="barbeiroProfile">
                    </div>
                    <div >
                        <p class="Name_profile">Profissional 2</p>
                    </div>
                    <div class="schedule-btn">
                        <a href="public/Agendamento/index.php" class="btn-agendar">Agendar</a>
                    </div>
                </div>
            </div>

            <!-- Profissional 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card">
                    <div class="profileimage" >
                        <img src="public/img/barbeiro1.png" alt="barbeiroProfile">
                    </div>
                    <div>
                        <p class="Name_profile">Profissional 3</p>
                    </div>
                    <div class="schedule-btn">
                        <a href="public/Agendamento/index.php" class="btn-agendar">Agendar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim card profissionais -->

 <!-- Início imagem clientes -->
    <h1 class="tituloClientes">Nossos Clientes</h1>
    <div class="carrousel">
        <!-- 🔥 Substitua os caminhos das imagens pelos corretos -->
        <div class="carrousel-item" style="background-image: url('public/img/cliente1.png');"></div>
        <div class="carrousel-item" style="background-image: url('public/img/cliente2.png');"></div>
        <div class="carrousel-item active" style="background-image: url('public/img/cliente3.png');"></div>
        <div class="carrousel-item" style="background-image: url('public/img/cliente4.png');"></div>
        <div class="carrousel-item" style="background-image: url('public/img/cliente5.png');"></div>
        <div class="carrousel-item" style="background-image: url('public/img/cliente6.png');"></div>
        <div class="carrousel-item" style="background-image: url('public/img/cliente7.png');"></div>
        <div class="carrousel-item active" style="background-image: url('public/img/cliente8.png');"></div>
        <div class="carrousel-item" style="background-image: url('public/img/cliente9.png');"></div>
        <div class="carrousel-item" style="background-image: url('public/img/cliente10.png');"></div>
    </div>
<!-- fim imagem clientes -->

<!-- inicio avaliaçoes -->
<h1 class="tituloClientes">Avaliações</h1>

<div class="reviews-container">
    <div class="cardies">
      <div class="stars">
        <div class="stars">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
      
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
      
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
      
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
      
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
      
      </div>
      <div class="infos">
        <p class="date-time">2 dias atrás</p>
        <p class="description">
            Experiência fantástica! O serviço foi excelente e superou todas as minhas expectativas. O atendimento foi muito atencioso e, sem dúvida, recomendo a quem procura qualidade e profissionalismo!
        </p>
      </div>
      <div class="author">— Cliente 1</div>
    </div>
    <div class="cardies">
      <div class="stars">
        <div class="stars">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
      
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
      
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
      
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
      
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
              <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
            </svg>
          </div>
      
      </div>
      <div class="infos">
        <p class="date-time">5 dias atrás</p>
        <p class="description">
            Correu tudo impecavelmente bem! Desde o primeiro contacto até ao final, tudo foi tratado com grande cuidado e eficiência. Sem dúvida que voltarei. Muito obrigado!
        </p>
      </div>
      <div class="author">— Cliente 2</div>
    </div>
    <!-- Adicione mais avaliações aqui -->
    
<div class="cardies">
<div class="stars">
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
  </svg>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
  </svg>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
  </svg>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
  </svg>

  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="star">
    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
  </svg>
</div>

<div class="infos">
  <p class="date-time">
                  3 dias atrás
  </p>
  <p class="description">
    Simplesmente incrível! A qualidade do serviço é impecável, e toda a equipa foi muito profissional. Fiquei muito impressionado com a atenção ao detalhe. Recomendo sem hesitar!
  </p>
</div>

<div class="author">
— Cliente 3
</div>
</div>
</div>
<!-- fim avaliaçoes -->

<!-- Início assinaturas -->
<h1 class="tituloAssinaturas">Assinaturas</h1>
<div class="container-assinaturas">
    <div class="assinatura">
        <a href="https://wa.me/31997941735?text=Olá, estou interessado na assinatura de corte de cabelo e barba ilimitado!" target="_blank">
            <img src="public/img/assinatura1.jpg" alt="Assinatura 1">
        </a>
    </div>
    <div class="assinatura">
        <a href="https://wa.me/31997941735?text=Olá, estou interessado na assinatura de corte de barba ilimitado!" target="_blank">
            <img src="public/img/assinatura2.jpg" alt="Assinatura 2">
        </a>
    </div>
    <div class="assinatura">
        <a href="https://wa.me/31997941735?text=Olá, estou interessado na assinatura de corte de cabelo ilimitado!" target="_blank">
            <img src="public/img/assinatura3.jpg" alt="Assinatura 3">
        </a>
    </div>
</div>
<!-- Fim assinaturas -->

 
<!-- inicio localizaçao -->
<div class="container-maps">
    <h1 class="tituloLocalizaçao">Localização</h1>

    <div class="map-wrapper">
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.125294822853!2d-43.940578!3d-19.9319973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa699dc336346fb%3A0x6cd7a529d18b722b!2sPra%C3%A7a%20da%20Liberdade!5e0!3m2!1spt-BR!2sbr!4v1700000000000" 
                allowfullscreen="" 
                loading="lazy"
                id="maps">
            </iframe>
            
            <iframe 
            src="https://www.google.com/maps/embed?pb=!4v1706572557931!6m8!1m7!1sCAoSLEFGMVFpcE1xT0pXdkhXcVZVZ1lEVWZtbTFtOUk4dEpmV1lCUjdrTzNFQ3FL!2m2!1d-19.9322257!2d-43.9381785!3f150!4f10!5f0.7820865974627469" 
            max-width="600" 
            max-height="450" 
            style="display: none;" 
            allowfullscreen="" 
            loading="lazy" 
            id="street">
        </iframe>
    </div>
    <button id="mapsButton" class="custom-btn" onclick="maps()">Street Viewer</button>
</div>
</div>
</body>

<!-- fim localizaçao -->
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
                                <a><img src="public/img/logoAlltech.png" class="img-fluid" alt="logo"></a>
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
<!-- fim Footer -->
            
<script src="public/todasPaginas/darkmode.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>

</html>
