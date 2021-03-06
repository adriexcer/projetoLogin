<?php
//abrir sessão
session_start();

/*if ((!isset($_SESSION['usuario']) == true) and (!isset($_SESSION['senha']) == true)) {
    header('Location: login.php');
} else {
    $logado = $_SESSION['usuario'];
}*/
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Home</title>
    <link rel="icon" href="IMAGENS/icone.png">
    <link rel="stylesheet" href="CSS/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxs-spa'></i>
            <span class="logo_name">VidaCerealista</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="#">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Dashboard</a></li>
                </ul>
            </li>
            <li>
                <div class="icon_link">
                    <a href="#">
                        <i class='bx bxs-file'></i>
                        <span class="link_name">Cadastro</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
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
                        <span class="link_name">Estoque</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
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
                        <span class="link_name">PDV</span>
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
                        <span class="link_name">Financeiro</span>
                    </a>
                    <i class='bx bxs-chevron-down arrow'></i>
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
                        <span class="link_name">Configurações</span>
                    </a>
                    <ul class="sub-menu blank">
                        <li><a class="link_name" href="#">Configurações</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <img src="IMAGENS/usuario2.png" alt="profile">
                    </div>

                    <div class="usuario">
                        <div class="profile_name">Usuário</div>
                    </div>
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

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>


</html>