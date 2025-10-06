<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="icon" href="../img/logoBarber.png" type="image/x-icon">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="../todasPaginas/footer.css">
    <link rel="stylesheet" href="../todasPaginas/nav.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../todasPaginas/darkMode.css">

</head>

<body>
    <!-- Navegação -->
    <div class="navigation-wrap bg-light start-header start-style">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="#"><img src="" alt=""></a>  
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
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
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 ">
                                    <a class="nav-link" href="../QuemSomos/index.php">SOBRE</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="../Produtos/index.php">PRODUTOS</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <?php 
                                    session_start();
                                    if(isset($_SESSION['user_id'])){
                                            echo '<a class="nav-link" href="../todasPaginas/logout.php">SAIR</a>';
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
    

    <div class="container1">
  <input type="text" id="search-bar" placeholder="Search..." oninput="searchProducts()">
  <div class="search"></div>
</div>



        <h2 id="TituloProdutos" >Produtos</h2>
        <?php
          // Inclua o arquivo que contém os dados dos produtos
          $products = include 'products.php';
          ?>

<div class="container my-4">
        <div id="products-container" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        <?php
if (is_array($products)) {
    foreach ($products as $product) {
        echo '<div class="col">';
        echo '   <div class="card h-100 shadow-sm product-card barbershop-card mb-3">';
        echo '      <img src="' . htmlspecialchars($product['image'], ENT_QUOTES) . '" alt="' . htmlspecialchars($product['name'], ENT_QUOTES) . '" class="card-img-top" style="object-fit: contain; height: 150px;" width="100%">';
        echo '      <div class="card-body d-flex flex-column">';
        echo '          <h5 class="card-title text-center">' . htmlspecialchars($product['name'], ENT_QUOTES) . '</h5>';
        echo '          <p class="card-text text-center">R$ ' . number_format($product['price'], 2, ',', '.') . '</p>';
        echo '          <div class="mt-auto text-center">';

        // Botão "Adicionar ao Carrinho"
        echo '              <button class="btn btn-dark btn-sm" onclick="addProduct(\'' . addslashes($product['name']) . '\', ' . $product['price'] . ', \'' . addslashes($product['image']) . '\')">Adicionar ao Carrinho</button>';

        // Botão "Saiba Mais" (Abre o modal)
        echo '              <button class="btn btn-primary btn-sm" onclick="showProductModal(this)" 
                    data-name="' . htmlspecialchars($product["name"], ENT_QUOTES) . '" 
                    data-description="' . htmlspecialchars($product["description"], ENT_QUOTES) . '" 
                    data-price="' . number_format($product["price"], 2, ',', '.') . '" 
                    data-image="' . htmlspecialchars($product["image"], ENT_QUOTES) . '">
                    Saiba Mais
                  </button>';

        echo '          </div>';
        echo '      </div>';
        echo '   </div>';
        echo '</div>';
    }
} else {
    echo "<p>Erro: Não foi possível carregar os produtos.</p>";
}
?>

        </div>
    </div>

 <!-- Produtos -->
<!-- Carrinho de Compras -->
<div id="cart-container">
    <div id="cart" class="shadow-lg p-4 rounded">
        <div class="cart-header">
            <h2 class="d-flex align-items-center justify-content-between">
                <span>
                    <img src="../img/carrinhoCompra.png" alt="" style="max-width: 35px;"> Carrinho de Compras
                </span>
                <img src="../img/close.png" alt="Fechar" style="max-width: 35px; cursor: pointer;" onclick="toggleCart()">
            </h2>
        </div>

        <div class="cart-body">
            <label for="client-name" class="cart-label">Nome:</label>
            <input type="text" id="client-name" class="form-control cart-input" placeholder="Seu Nome" required>
            
            <ul id="cart-list" class="list-group mb-2">
                <!-- Produtos adicionados dinamicamente -->
            </ul>

            <div class="cart-footer">
                <p class="cart-total">Total: <strong>R$ <span id="cart-total">0,00</span></strong></p>
                <button type="button" class="btn btn-danger mb-2" onclick="clearCart()">Esvaziar Carrinho</button>
                <button type="button" class="btn btn-success" onclick="finalizarCompra()">Finalizar Compra</button>
            </div>
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
    
<!-- Fim -->
          
<!-- Modal de Produto -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" id="modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="modalProductName"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <img id="modalProductImage" class="img-fluid mb-3" style="max-width: 100%; border-radius: 10px;">
                <h4 id="modalProductPrice" class="font-weight-bold"></h4>
                <p id="modalProductDescription"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>




<!-- Importação correta dos scripts -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Agora pode carregar o script.js -->
<script src="script.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    </body>
</html>