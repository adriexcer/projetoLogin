<?php
//abrir sessão
session_start();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Cliente</title>
    <link rel="icon" href="../IMAGENS/icone.jpg">
    <link rel="stylesheet" href="../CSS/style_telas.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-spa'></i>

        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>

                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="icon_link">
                    <a href="#">
                        <i class='bx bxs-file'></i>
                    </a>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Cadastro</a></li>
                    <li><a href="CADASTROS/cadastroCliente.php">Cliente</a></li>
                    <li><a href="#">Fornecedor</a></li>
                    <li><a href="#">Usuario</a></li>
                    <li><a href="#">Relatórios</a></li>
                </ul>
            </li>
            <li>
                <div class="icon_link">
                    <a href="#">
                        <i class='bx bxs-package'></i>
                    </a>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Estoque</a></li>
                    <li><a href="#">Cadastro de produto</a></li>
                    <li><a href="#">Controle Entrada/Saída</a></li>
                    <li><a href="#">Cadastro de categoria</a></li>
                    <li><a href="#">Relatórios</a></li>
                </ul>
            </li>
            <li>
                <div class="icon_link">
                    <a href="#">
                        <i class='bx bxs-cart'></i>

                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">PDV</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="icon_link">
                    <a href="#">
                        <i class='bx bxs-dollar-circle'></i>
                    </a>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Financeiro</a></li>
                    <li><a href="#">Contas à pagar</a></li>
                    <li><a href="#">Contas à receber</a></li>
                    <li><a href="#">Formas de recebimento</a></li>
                    <li><a href="#">Relatórios</a></li>
                </ul>
            </li>
            <li>
                <div class="icon_link">
                    <a href="#">
                        <i class='bx bx-slider-alt'></i>

                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Configurações</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="profile-details">
                    <a href="login.php">
                        <i class='bx bx-log-out'></i>
                    </a>
                </div>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">Cadastro de Cliente</span>
        </div>


    </section>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        console.log(arrow);
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e) => {
                console.log(e);
                let arrowParent = e.target.parentElement.parentElement;

                arrowParent.classList.toggle("showMenu");
            });
        }

        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
    </script>

</body>

</html>