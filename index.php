<!DOCTYPE html>
<html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="public/vendor/materialize/css/materialize.min.css">
        <link rel="stylesheet" href="public/css/style.css">

        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Materialize</title>
    </head>
    <body>
        <div id="sidebar" class="orange darken-2 z-depth-2">
            <div class="sidebar-header">
                <a href="#">
                    <img src="public/images/logo.png" alt="Logo">
                </a>
            </div>
            <ul class="sidebar-menu">
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">dashboard</i> Dashboard
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">schedule</i> Agendamentos
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">group</i> Clientes
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">pie_chart</i> Módulos
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">device_hub</i> Permissões
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">format_list_bulleted</i> Objetivos
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">location_on</i> Origem
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">settings</i> Parâmetros
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">receipt</i> Planos
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">group</i> Profissionais
                    </a>
                </li>
                <li class="item-menu">
                    <a href="#" class="link-menu">
                        <i class="material-icons">format_list_bulleted</i> Serviços
                    </a>
                </li>
            </ul>
        </div>

        <!-- Start Nav header and sidenav mobile -->
        <nav id="nav-header-mobile" class="nav-extended white">
            <div class="nav-wrapper">
                <a href="#" data-target="mobile-demo" class="orange-text sidenav-trigger right">
                    <i class="material-icons">menu</i>
                </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li>
                        <a href="#!" class="dropdown-trigger orange-text darken-2" data-target="user">
                            Fulano Beltrano <i class="material-icons fr">arrow_drop_down</i>
                        </a>
                    </li>
                    <ul id="user" class="dropdown-content">
                        <li>
                            <a href="login.php" class="orange-text darken-2">Sair</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </nav>

        <ul class="sidenav orange darken-2 z-depth-2" id="mobile-demo">
            <div class="sidebar-header">
                <a href="#">
                    <img src="public/images/logo.png" alt="Logo">
                </a>
            </div>
            <li>
                <div class="user-view">
                    <a href="#">
                        <span class="white-text name">Fulano Beltrano</span>
                    </a>
                    <a href="login.php">
                        <span class="white-text email">Sair</span>
                    </a>
                </div>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">dashboard</i> Dashboard
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">schedule</i> Agendamentos
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">group</i> Clientes
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">pie_chart</i> Módulos
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">device_hub</i> Permissões
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">format_list_bulleted</i> Objetivos
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">location_on</i> Origem
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">settings</i> Parâmetros
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">receipt</i> Planos
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">group</i> Profissionais
                </a>
            </li>
            <li class="item-menu">
                <a href="#" class="link-menu">
                    <i class="material-icons">format_list_bulleted</i> Serviços
                </a>
            </li>
        </ul>
        <!-- End Nav header and sidenav mobile -->

        <section id="main">
            <h4>Bem vindo Fulano Beltrano</h4>
            <hr>
        </section>

        <!--JavaScript at end of body for optimized loading-->
        <script src="public/vendor/js/jquery-3.7.1.min.js"></script>
        <script src="public/vendor/materialize/js/materialize.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.sidenav').sidenav();

                $('select').formSelect();

                $('.dropdown-trigger').dropdown({
                    coverTrigger: false,
                    belowOrigin: true
                });
            });
        </script>
    </body>
</html>