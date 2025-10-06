<?php
include 'authenticate.php';
session_start();

$errorMessage = $registerErrorMessage = $successMessage = '';
$showRegister = false; // Define se deve mostrar a aba de cadastro

// Captura mensagens de erro da sessão (se existirem)
if (isset($_SESSION['error_message'])) {
    $errorMessage = $_SESSION['error_message'];
    unset($_SESSION['error_message']); // Remove a mensagem após exibir
}

if (isset($_SESSION['register_error_message'])) {
    $registerErrorMessage = $_SESSION['register_error_message'];
    unset($_SESSION['register_error_message']);
    $showRegister = true; // Indica que deve mostrar a aba de cadastro
}

if (isset($_GET['success']) && $_GET['success'] == 1) {
    $successMessage = 'Sua senha foi redefinida com sucesso!';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['register'])) {
        registerUser($_POST['email'], $_POST['password']);
    } elseif (isset($_POST['login'])) {
        loginUser($_POST['email'], $_POST['password']);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../todasPaginas/darkMode.css">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../img/logoBarber.png">
   
    <title>Cadastro e Login</title>
</head>

<body>

<div class="card-switch">
    <div class="theme-switch">
        <input type="checkbox" id="theme-checkbox" />
        <label for="theme-checkbox">
            <div></div>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd" d="M9.528 1.718a.75.75 0 01.162.819A8.97 8.97 0 009 6a9 9 9 0 009 9 8.97 8.97 0 003.463-.69.75.75 0 01.981.98 10.503 10.503 0 01-9.694 6.46c-5.799 0-10.5-4.701-10.5-10.5 0-4.368 2.667-8.112 6.46-9.694a.75.75 0 01.818.162z" clip-rule="evenodd"></path>
                </svg>
            </span>
        </label>
    </div>

    <div class="wrapper">
        <label class="switch">
            <input type="checkbox" class="toggle" id="toggleSwitch" <?php echo $showRegister ? 'checked' : ''; ?>>
            <span class="slider"></span>
            <span class="card-side"></span>
            <div class="flip-card__inner">
                
                <!-- Card de Login -->
                <div class="flip-card__front">
                    <?php if ($errorMessage): ?>
                        <div class="error-message"><?php echo htmlspecialchars($errorMessage); ?></div>
                    <?php endif; ?>

                    <?php if ($successMessage): ?>
                        <div class="success-message"><?php echo htmlspecialchars($successMessage); ?></div>
                    <?php endif; ?>

                    <div class="title">Entrar</div>
                    <form class="flip-card__form" action="index.php" method="post">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email" required>
                        <input class="flip-card__input" name="password" placeholder="Senha" type="password" required>
                        <button class="flip-card__btn" type="submit" name="login">Entrar</button>
                        <div class="forgot-password">
                            <a href="../esqueciSenha/esqueceu_senha.php">Esqueci minha senha</a>
                        </div>
                    </form>
                </div>

                <!-- Card de Cadastro -->
                <div class="flip-card__back">
                    <?php if ($registerErrorMessage): ?>
                        <div class="error-message"><?php echo htmlspecialchars($registerErrorMessage); ?></div>
                    <?php endif; ?>

                    <div class="title">Cadastrar</div>
                    <form class="flip-card__form" action="index.php" method="post">
                        <input class="flip-card__input" name="email" placeholder="Email" type="email" required>
                        <input class="flip-card__input" name="password" placeholder="Senha" type="password" required>
                        <button class="flip-card__btn" type="submit" name="register">Cadastrar</button>
                    </form>
                </div>

            </div>
        </label>
    </div>   
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const showRegister = <?php echo json_encode($showRegister); ?>;
        if (showRegister) {
            document.getElementById("toggleSwitch").checked = true;
        }
    });
</script>

<script src="./script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
