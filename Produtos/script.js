
document.addEventListener('DOMContentLoaded', () => {
    const themeCheckbox = document.getElementById('theme-checkbox');
    const logo = document.querySelector('.navbar-brand img'); // Logo da navbar

    if (!themeCheckbox) {
        console.error("Elemento 'theme-checkbox' não encontrado!");
        return;
    }

    // Verifica se o modo escuro estava ativado anteriormente
    const isDarkMode = localStorage.getItem('darkMode') === 'true';
    themeCheckbox.checked = isDarkMode;
    document.body.classList.toggle('dark-mode', isDarkMode);
    document.body.classList.toggle('light-mode', !isDarkMode);

    // Define a logo dependendo do modo
    logo.src = isDarkMode ? '../img/logoDark.png' : '../img/logoLight.png';

    themeCheckbox.addEventListener('change', () => {
        const isDarkMode = themeCheckbox.checked;
        document.body.classList.toggle('dark-mode', isDarkMode);
        document.body.classList.toggle('light-mode', !isDarkMode);

        logo.src = isDarkMode ? '../img/logoDark.png' : '../img/logoLight.png';

        // Salva no localStorage
        localStorage.setItem('darkMode', isDarkMode);
    });
});



let cart = [];

function toggleCart() {
    const cartContainer = document.getElementById("cart-container");
    if (cartContainer.style.display === "none" || cartContainer.style.display === "") {
        cartContainer.style.display = "block";
    } else {
        cartContainer.style.display = "none";
    }
}


function addProduct(name, price, image) {
    const cartContainer = document.getElementById("cart-container");

    cart.push({ name, price, image });

    updateCart();
     // Exibe o carrinho automaticamente ao adicionar um item

    if (cartContainer.style.display === "none" || cartContainer.style.display === "") {
        toggleCart();
    }
}


function removeProduct(index) {
    cart.splice(index, 1);

    updateCart();
}

function clearCart() {
    if (cart.length === 0) {
        alert("Seu carrinho já está vazio.");
        return;
    }
    cart = [];
    updateCart();
    alert("Todos os produtos foram removidos!");
}

function updateCart() {
    const cartList = document.getElementById("cart-list");
    const cartTotal = document.getElementById("cart-total");

    if (!cartList || !cartTotal) {
        console.error("Elementos do carrinho não encontrados!");
        return;
    }

    cartList.innerHTML = "";
    let total = 0;

    cart.forEach((product, index) => {
        total += product.price;
        const li = document.createElement("li");
        li.classList.add("list-group-item", "d-flex", "justify-content-between", "align-items-center");

        li.innerHTML = `
            <img src="${product.image}" alt="${product.name}" class="cart-img">
            <span>${product.name} - R$ ${product.price.toFixed(2).replace(".", ",")}</span>
            <button class="btn btn-sm btn-danger" onclick="removeProduct(${index})">X</button>
        `;

        cartList.appendChild(li);
    });

    cartTotal.textContent = total.toFixed(2).replace(".", ",");
}


function finalizarCompra() {
    const clientName = document.getElementById("client-name").value.trim();

    if (clientName === "") {
        alert("Por favor, insira seu nome.");
        return;
    }

    if (cart.length === 0) {
        alert("Seu carrinho está vazio.");
        return;
    }

    const productList = cart.map(p => p.name).join(", ");
    const totalPrice = cart.reduce((sum, p) => sum + p.price, 0).toFixed(2).replace(".", ",");

    const mensagem = `Olá, meu nome é ${clientName} e gostaria de comprar:%0A${productList}%0ATotal: R$ ${totalPrice}`;
    const whatsappURL = `https://wa.me/31987305141?text=${mensagem}`;

    window.open(whatsappURL, "_blank");
}


function showProductModal(button) {
    console.log("Abrindo modal para:", button.getAttribute("data-name")); // Verifica se o evento está disparando

    let name = button.getAttribute("data-name");
    let description = button.getAttribute("data-description");
    let price = button.getAttribute("data-price");
    let image = button.getAttribute("data-image");

    document.getElementById("modalProductName").innerText = name;
    document.getElementById("modalProductPrice").innerText = "R$ " + price;
    document.getElementById("modalProductDescription").innerText = description;
    document.getElementById("modalProductImage").src = image;

    // Aplica tema no modal
    let modalContent = document.getElementById("modalContent");
    if (document.body.classList.contains("dark-mode")) {
        modalContent.classList.add("dark-modal");
    } else {
        modalContent.classList.remove("dark-modal");
    }

    $("#productModal").modal("show");
}
;

function searchProducts() {
    const searchText = document.getElementById("search-bar").value.toLowerCase(); // Texto digitado
    const productCards = document.querySelectorAll(".product-card"); // Todos os produtos exibidos

    let hasVisibleProduct = false;

    productCards.forEach(card => {
        const name = card.querySelector(".card-title").innerText.toLowerCase(); // Nome do produto
        const description = card.querySelector(".card-text").innerText.toLowerCase(); // Descrição do produto
        
        // Verifica se o texto pesquisado está no nome ou na descrição
        if (name.includes(searchText) || description.includes(searchText)) {
            card.parentElement.style.display = "block"; // Exibe o produto
            hasVisibleProduct = true;  
        } else {                    
            card.parentElement.style.display = "none"; // Oculta o produto
        }
    });

    // Exibe mensagem se nenhum produto for encontrado
    const noProductsMessage = document.getElementById("no-products-message");
    if (!hasVisibleProduct) {
        noProductsMessage.style.display = "block";
    } else {
        noProductsMessage.style.display = "none";
    }
}
