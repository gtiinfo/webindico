<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Agências | ÍNDICO SEGUROS</title>
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css?version=1.1" />
    <link rel="stylesheet" href="./assets/vendor/mdbootstrap/css/mdb.min.css?version=1.1" />
    <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.min.css?version=1.1" />
    <link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="./assets/css/extend.css?version=1.1" />
    <link rel="stylesheet" href="./assets/css/style.css?version=1.1" />
    <link rel="stylesheet" href="./assets/css/list-style.css">
    <link rel="stylesheet" href="./assets/vendor/hover/css/hover-min.css?version=1.1" />
</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="component mobile-only main-menu-mobile sticky-top" style="display: none;">
                    <div class="component-content">
                        <div class="row">
                            <div class="d-flex">
                                <div class="component image file-type-icon-media-link">
                                    <div class="component-content">
                                        <a href="index.html">
                                            <img src="./assets/img/logo.png" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="component link btn-mobile_menu">
                                    <div class="component-content">
                                        <div class="field-link">
                                            <div class="menu">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="component menu-mobile-wrap" style="display: none;">
                                <div class="component-content">
                                    <div class="row">
                                        <div class="component tabs col-12 loader initialized">
                                            <div class="component-content">
                                                <div class="tabs-inner">
                                                    <ul class="tabs-heading">
                                                        <li><a href="{{ __(route('view.home')) }}"
                                                                class="active">Particulares</a></li>
                                                        <li><a href="{{ __(route('view.empresas')) }}">Empresas</a></li>
                                                        <li><a href="{{ __(route('view.indico')) }}">Índico</a></li>
                                                    </ul>
                                                    <div class="tabs-container">
                                                        <ul class="tabs-body">
                                                            <div class="item-0">
                                                                <li class="icon-menu-drop title">Seguros</li>
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li class="dropdown0 icon-menu-drop">Automóvel
                                                                        </li>
                                                                        <ul class="dropdown1">
                                                                            <li><a
                                                                                    href="{{ __(route('view.resp-civil-part')) }}">Responsabilidade
                                                                                    Civil</a></li>
                                                                            <li><a
                                                                                    href="{{ __(route('view.danos-proprios-part')) }}">Danos
                                                                                    Próprios</a></li>
                                                                            <li><a
                                                                                    href="{{ __(route('view.resp-civil-bombas-part')) }}">Responsabilidade
                                                                                    Civil Bombas</a></li>
                                                                        </ul>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a href="{{ __(route('view.habitacao')) }}">Multirisco
                                                                                Habitação</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a
                                                                                href="{{ __(route('view.empregados')) }}">Empregados
                                                                                Domésticos</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a
                                                                                href="{{ __(route('view.funeral')) }}">Funeral</a>
                                                                        </li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a
                                                                                href="{{ __(route('view.acidente-pessoal')) }}">Acidentes
                                                                                Pessoais</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a
                                                                                href="{{ __(route('view.viagem-part')) }}">Viagem</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="item-0">
                                                                <li class="icon-menu-drop">Sinistros</li>
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a
                                                                                href="{{ __(route('view.sinistros-part')) }}">Participar
                                                                                Sinistro</a></li>

                                                                    </ul>
                                                                    <ul>
                                                                        <li><a
                                                                                href=" {{ __(route('view.consul-sinistro-part')) }} ">Consultar
                                                                                Sinistro</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li><a
                                                                                href=" {{ __(route('view.oficinas-part')) }} ">Oficinas</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="item-0">
                                                                <li class="icon-menu-drop">Serviços Online</li>
                                                                <div class="list-item">
                                                                    <ul>
                                                                        <li><a
                                                                                href=" {{ __(route('view.condicoes-gerais-part')) }} ">Condições
                                                                                Gerais</a></li>
                                                                    </ul>
                                                                    <li class="dropdown0 icon-menu-drop">Gestão de
                                                                        Valores</li>
                                                                    <ul dropdown1>
                                                                        <li><a
                                                                                href="{{ __(route('view.aviso-cobranca')) }}">Aviso
                                                                                de Cobrança</a></li>
                                                                        <li><a
                                                                                href="{{ __(route('view.pag-primio-part')) }}">Pagamento
                                                                                Prémio</a></li>
                                                                        <li><a
                                                                                href="{{ __(route('view.reembolso-part')) }}">Reembolso</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.recibo-part')) }}">Recibo</a>
                                                                        </li>
                                                                    </ul>
                                                                    <ul>
                                                                        <li class="dropdown0 icon-menu-drop">Reclamações
                                                                        </li>
                                                                        <ul class="dropdown1">
                                                                            <li><a
                                                                                    href=" {{ __(route('view.reclamacoes-part')) }} ">Reclamações</a>
                                                                            </li>
                                                                        </ul>
                                                                    </ul>
                                                                    <ul>
                                                                        <li class="dropdown0 icon-menu-drop">
                                                                            Actualização de Apólice</li>
                                                                        <ul class="dropdown1">
                                                                            <li><a
                                                                                    href=" {{ __(route('view.actualizacao-capital-part')) }} ">Actualização
                                                                                    de Capital</a></li>
                                                                            <li><a
                                                                                    href=" {{ __(route('view.actualizacao-dados-part')) }} ">Actualização
                                                                                    de Dados</a></li>
                                                                        </ul>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="component col-12 background-light-gray agencias">
                                        <a href="{{ __(route('view.agencias')) }}">Agências</a>
                                    </div>
                                    <div class="component col-12 background-light-gray contactos">
                                        <a href="{{ __(route('view.contacts')) }}">Contactos</a>
                                    </div>
                                    <div class="component col-12 background-light-gray perguntas">
                                        <a href="{{ __(route('view.faq')) }}">Perguntas Frequentes</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row shadow-bottom main-menu-container">
                <div class="left-top-menu-area"></div>
                <div class="container-menu">
                    <div class="logo-area">
                        <a href="./index.php">
                            <img src="./assets/img/IndicoSeguro_IconPrincipal.png" alt="Indico Seguros">
                        </a>
                    </div>
                    <div class="menu-area">
                        <div class="main-top-bar-container">
                            <div class="search-top-area">
                                <div class="triangle"></div>
                                <div class="square"></div>
                                <div class="search-area bx bx-search" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Faça a sua
                                                    Pesquisa!
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <input type="text" class="form-control"
                                                        placeholder="Pesquisar...">
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-top-menu-bar">
                                <div class="segment-area">
                                    <ul>
                                        <li class="mnu-selected">
                                            <div class="bg-shape">
                                                <div class="left-triangle"></div>
                                                <div class="right-triangle"></div>
                                            </div>
                                            <div class="content-text">
                                                <a href="{{ __(route('view.home')) }}">Particulares</a>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="bg-shape">
                                                <div class="left-triangle"></div>
                                                <div class="right-triangle"></div>
                                            </div>
                                            <div class="content-text">
                                                <a href="{{ __(route('view.empresas')) }}">Empresas</a>
                                            </div>
                                        </li>
                                        <li class="">
                                            <div class="bg-shape">
                                                <div class="left-triangle"></div>
                                                <div class="right-triangle"></div>
                                            </div>
                                            <div class="content-text">
                                                <a href="{{ __(route('view.indico')) }}">Índico</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="utility-area">
                                    <ul>
                                        <li><a href="{{ __(route('view.agencias')) }}"
                                                class="show-on-xs mobile-menu">
                                                <i class='bx bxs-location-plus'></i>
                                                <span class="hide-on-xs">Agências</span>
                                            </a></li>
                                        <li><a href="{{ __(route('view.faq')) }}" class="show-on-xs mobile-menu">
                                                <i class='bx bx-question-mark'></i>
                                                <span class="hide-on-xs">Perguntas Frequentes</span>
                                            </a></li>
                                        <li class="show-on-xs mobile-menu ">
                                            <a href="#">
                                                <i class='bx bx-menu menuToggle'></i>
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="secondary-top-menu-bar">
                            <div class="show-on-xs">
                                <a href="#" class="back-menu"></a>
                            </div>
                            <ul>
                                <li>
                                    <div class="label-title-area">
                                        <a href="#">Seguros</a>
                                    </div>
                                    <div class="label-title-link">
                                        <a href="#">Seguros</a>
                                    </div>
                                    <ul class="submenu-container">
                                        <li>
                                            <div class="container1 item-area">
                                                <ul>
                                                    <li class="title">Automóvel</li>
                                                    <li><a href="{{ __(route('view.resp-civil-part')) }}"
                                                            class="menu-dropdown" id="menu-dropdown">Responsabilidade
                                                            Civil</a>
                                                    </li>
                                                    <li><a href="{{ __(route('view.danos-proprios-part')) }}"
                                                            class="menu-dropdown" id="menu-dropdown">Danos
                                                            Próprios</a>
                                                    </li>
                                                    <li><a href="{{ __(route('view.resp-civil-bombas-part')) }}">Responsabilidade
                                                            Civil
                                                            Bombas</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Habitação</li>
                                                    <li><a href="{{ __(route('view.habitacao')) }}">Multirisco
                                                            Habitação</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Empregados</li>
                                                    <li><a href="{{ __(route('view.empregados')) }}">Empregados
                                                            Domésticos</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Funeral</li>
                                                    <li><a href="{{ __(route('view.funeral')) }}">Funeral</li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Acidentes Pessoais</li>
                                                    <li><a href="{{ __(route('view.acidente-pessoal')) }}">Acidentes
                                                            Pessoais</a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Viagem</li>
                                                    <li><a href="{{ __(route('view.viagem-part')) }}">Viagem</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="label-title-area">
                                        <a href="#">Sinistros</a>
                                    </div>
                                    <div class="label-title-link">
                                        <a href="#">Sinistros</a>
                                    </div>
                                    <ul class="submenu-container">
                                        <li>
                                            <div class="container1 item-area">
                                                <ul>
                                                    <li class="title">Participar</li>
                                                    <li><a href="{{ __(route('view.sinistros-part')) }}">Participar
                                                            Sinistro</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Consultar</li>
                                                    <li><a href=" {{ __(route('view.consul-sinistro-part')) }}">Consultar
                                                            Estado do Sinistro</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Oficinas</li>
                                                    <li><a href="{{ __(route('view.oficinas-part')) }}">Oficinas</a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="label-title-area">
                                        <a href="#">Serviços Online</a>
                                    </div>
                                    <div class="label-title-link">
                                        <a href="#">Serviços Online</a>
                                    </div>
                                    <ul class="submenu-container">
                                        <li>
                                            <div class="container1 item-area">
                                                <ul>
                                                    <li class="title">Condições Gerais</li>
                                                    <li><a href="{{ __(route('view.condicoes-gerais-part')) }}">Condições
                                                            Gerais</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Gestão de Valores</li>
                                                    <li><a href="{{ __(route('view.aviso-cobranca')) }}">Aviso de
                                                            Cobrança</a></li>
                                                    <li><a href="{{ __(route('view.pag-primio-part')) }}">Pagamento
                                                            Prémio</a></li>
                                                    <li><a href="{{ __(route('view.reembolso-part')) }}">Reembolso</a>
                                                    </li>
                                                    <li><a href="{{ __(route('view.recibo-part')) }}">Recibo</a></li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Reclamações</li>
                                                    <li><a
                                                            href="{{ __(route('view.reclamacoes-part')) }}">Reclamações</a>
                                                    </li>
                                                </ul>
                                                <ul>
                                                    <li class="title">Actualização de Apólice</li>
                                                    <li><a href="{{ __(route('view.actualizacao-capital-part')) }}">Actualização
                                                            de Capital</a></li>
                                                    <li><a href="{{ __(route('view.actualizacao-dados-part')) }}">Actualização
                                                            de Dados</a></li>
                                                </ul>
                                                <ul>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="label-title-area">
                                        <a href="{{ __(route('view.contacts')) }}">Contacto</a>
                                    </div>
                                    <div class="label-title-link">
                                        <a href="{{ __(route('view.contacts')) }}">Contacto</a>
                                    </div>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="right-top-menu-area">
                    <div class="gray-bar"></div>
                </div>

            </div>
        </div>
    </header>
    <!-- End Navbar -->
    </section>
    <!-- LOADING -->
    <div class="loading-spinner">
        <div class="spinner"></div>
    </div>
    <!-- LATERAL MENU -->
    <div class="lateral-menu">
        <ul class="menu">
            <li class="bg-bk">
                <div class="item-menu">
                    <img src="./assets/img/Icones_lateral_menu_1.png" class="w-100" alt="">
                    <p>Pagamentos</p>
                </div>
                <ul>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">M-pesa</a></label><br>
                            <small>Cód de comerciante: <strong>900148</strong></small>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">Depósitos e Transferencias</a></label><br>
                            <small>BCI MZN: 4585665410001 <br>NIB: 0008 0000 45856654101 80</small><br>
                            <small>BCI ZAR: 4585665410003 <br>NIB: 0008 0000 45856654103 74</small><br>
                            <small>BCI USD: 4585665410002 <br>NIB: 0008 0000 45856654102 77</small>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">ATM</a></label><br>
                            <small>Código de entidade: <strong>83002</strong></small>
                        </div>
                    </li>
                </ul>
                <div class="img-bottom"></div>
            </li>
            <li class="bg-bk">
                <div class="item-menu">
                    <img src="./assets/img/Icones_lateral_menu_2.png" class="w-100" alt="">
                    <p>Índico Whatsapp</p>
                </div>
                <ul>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">Seguros</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">Sinistros</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">Outros</a></label>
                        </div>
                    </li>
                </ul>
                <div class="img-bottom"></div>
            </li>
            <li class="bg-bk">
                <div class="item-menu">
                    <img src="./assets/img/Icones_lateral_menu_3.png" class="w-100" alt="">
                    <p>Contacte-nos</p>
                </div>
                <ul>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">WhatsApp</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">APP</a></label><br>
                            <small>USSD *315#</small>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">ChatBot</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <a href="#" class="text-light">
                                <div class="d-flex">
                                    <img src="./assets/img/Icones_Contacto.png" alt="">
                                    <p>Fale connosco <br>grátis</p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="#">Email</a></label>
                        </div>
                    </li>
                </ul>
                <div class="img-bottom"></div>
            </li>
            <li class="bg-bk">
                <div class="item-menu">
                    <img src="./assets/img/Icones_lateral_menu_4.png" class="w-100" alt="">
                    <p>Pedir simulação</p>
                </div>
                <ul>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a
                                    href="{{ __(route('view.danos-proprios-part')) }}">Automóvel</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="{{ __(route('view.viagem-part')) }}">Viagem</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="{{ __(route('view.funeral')) }}">Funeral</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="{{ __(route('view.acidente-trabalho')) }}">Acidente de
                                    Trabalho</a></label>
                        </div>
                    </li>
                </ul>
                <div class="img-bottom"></div>
            </li>
        </ul>
    </div><!-- END LATERAL MENU -->
    <section class="intro-box-section">
        <!-- Intro-Box -->
        <div id="intro-box d-flex" class="bg-image"
            style="background: url(./assets/img/background.png);  height: 400px;">
        </div>
        <!-- End Intro-Box -->
    </section>
    <!-- Box Inf -->
    <section class="list">
    <iframe src="https://www.google.com/maps/d/embed?mid=118c9wLgvIlxVIXXytW2ETF5KHnJ96Sk&ehbc=2E312F" width="100%" height="550"></iframe>

    <div class="list-agences">
        <div class="card-main">
            <div class="card-header">
                <div class="title">
                    <h4>Lista das Agências</h4>
                </div>
                <div class="icon">
                    <i class='bx bx-search'></i>
                </div>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência Sede</h4>
                            </div>
                            <div class="location">
                                <p>Av. Barnabé Thawé, Nº 333/659 Bairro da Sommerschield - Cidade de Maputo</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//Companhia+de+Seguros+%C3%8Dndico,+S.A.,+333%2F659,+Av.+Bernab%C3%A9+Thaw%C3%A9,+Maputo/@-25.9684791,32.5987396,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x1ee69bba1ada3f7f:0x98bd4ebd3339276!2m2!1d32.5987915!2d-25.968484?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência Sede</h4>
                        </div>
                        <div class="location">
                            <p>Av. Barnabé Thawé, Nº 333/659 Bairro da Sommerschield - Cidade de Maputo</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Matola</h4>
                            </div>
                            <div class="location">
                                <p>Av.Alberto Nkutumula Nº 580 Bairro da Matola A- Moçambique </p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//2FQ3%2BGMM+Indico+Seguros,+SA,+Maputo/@-25.9611723,32.4541576,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x1ee6859ac7cb1221:0x626ede2e0783c341!2m2!1d32.4541584!2d-25.9611736?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Matola</h4>
                        </div>
                        <div class="location">
                            <p>Av.Alberto Nkutumula Nº 580 Bairro da Matola A- Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Manhiça</h4>
                            </div>
                            <div class="location">
                                <p>Estrada Nacional Nr º 1 Manhiça Shopping Center Vila da Manhiça</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-25.41034,32.74467/@-25.4103351,32.7420951,17z?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Manhiça</h4>
                        </div>
                        <div class="location">
                            <p>Estrada Nacional Nr º 1 Manhiça Shopping Center Vila da Manhiça</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Xai-Xai</h4>
                            </div>
                            <div class="location">
                                <p>Av. Samora Machel, Shopping Xai-Xai - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-25.05536,33.65302/@-25.0553551,33.6504451,17z?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert ">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Xai-Xai</h4>
                        </div>
                        <div class="location">
                            <p>Av. Samora Machel, Shopping Xai-Xai - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Maxixe</h4>
                            </div>
                            <div class="location">
                                <p>Av. 25 de Setembro Cidade de Maxixe - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-25.05536,33.65302/@-25.0553551,33.6504451,17z?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Maxixe</h4>
                        </div>
                        <div class="location">
                            <p>Av. 25 de Setembro Cidade de Maxixe - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Vilankulo</h4>
                            </div>
                            <div class="location">
                                <p>Bairro Central, Rua da Handling - Vilankulo- Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-22.00299,+35.3195/@-22.0027633,35.2782126,13z/data=!4m6!4m5!1m0!1m3!2m2!1d35.3195!2d-22.00299?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Vilankulo</h4>
                        </div>
                        <div class="location">
                            <p>Bairro Central, Rua da Handling - Vilankulo- Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Tete</h4>
                            </div>
                            <div class="location">
                                <p>Av. Liberdade Edifício, Paraíso Misterioso Tete Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-16.15797,+33.59166/@-16.1578878,33.550464,13z/data=!4m6!4m5!1m0!1m3!2m2!1d33.59166!2d-16.15797?entry=ttu" target="_blank">Direccão</a></h4>

                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Tete</h4>
                        </div>
                        <div class="location">
                            <p>Av. Liberdade Edifício, Paraíso Misterioso Tete Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Beira</h4>
                            </div>
                            <div class="location">
                                <p>Rua Lisboa Lima, Edifício Entreposto Beira - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-19.82038,+34.84429/@-19.8202053,34.8030004,13z/data=!4m6!4m5!1m0!1m3!2m2!1d34.84429!2d-19.82038?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Beira</h4>
                        </div>
                        <div class="location">
                            <p>Rua Lisboa Lima, Edifício Entreposto Beira - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Chimoio</h4>
                            </div>
                            <div class="location">
                                <p>Rua Dr. Américo Boavida Complexo Amirana Cidade de Chimoio - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-19.10548,+33.46077/@-19.1054022,33.4195746,13z/data=!4m6!4m5!1m0!1m3!2m2!1d33.46077!2d-19.10548?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Chimoio</h4>
                        </div>
                        <div class="location">
                            <p>Rua Dr. Américo Boavida Complexo Amirana Cidade de Chimoio - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Quelimane</h4>
                            </div>
                            <div class="location">
                                <p>Av. Filipe Samuel Magaia, Nº203 Quelimane - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="4m6!4m5!1m0!1m3!2m2!1d36.87968!2d-17.88005?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Quelimane</h4>
                        </div>
                        <div class="location">
                            <p>Av. Filipe Samuel Magaia, Nº203 Quelimane - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Lichinga</h4>
                            </div>
                            <div class="location">
                                <p>Av. Filipe Samuel Magaia Edifício Vodacom Lichinga - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-13.30233,+35.2458/@-13.3023327,35.2045086,13z/data=!4m6!4m5!1m0!1m3!2m2!1d35.2458!2d-13.30233?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Lichinga</h4>
                        </div>
                        <div class="location">
                            <p>Av. Filipe Samuel Magaia Edifício Vodacom Lichinga - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Nacala</h4>
                            </div>
                            <div class="location">
                                <p>Bairro Maiaia Rua dos Anjos Nacala - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-14.54551,+40.67812/@-14.5453709,40.6370519,13z/data=!4m6!4m5!1m0!1m3!2m2!1d40.67812!2d-14.54551?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Nacala</h4>
                        </div>
                        <div class="location">
                            <p>Bairro Maiaia Rua dos Anjos Nacala - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Nampula</h4>
                            </div>
                            <div class="location">
                                <p>Bairro Muahivire, Monica Shopping Loja L Nampula - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-15.12789,+39.26428/@-15.1277829,39.2230164,13z/data=!4m6!4m5!1m0!1m3!2m2!1d39.26428!2d-15.12789?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Nampula</h4>
                        </div>
                        <div class="location">
                            <p>Bairro Muahivire, Monica Shopping Loja L Nampula - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-info">
                        <div class="content-text">
                            <div class="name">
                                <h4>Agência da Pemba</h4>
                            </div>
                            <div class="location">
                                <p>Av. Eduardo Mondlane R/C N 393 Pemba - Moçambique</p>
                            </div>
                            <div class="time">
                                <p class="time-status"></p>
                            </div>
                        </div>
                        <div class="content-icon">
                            <div class="icon-left">
                                <i class='bx bxs-direction-right'></i>
                                <h4><a href="https://www.google.com/maps/dir//-12.95917,+40.50272/@-12.9590928,40.4615293,13z/data=!3m1!4b1!4m6!4m5!1m0!1m3!2m2!1d40.50272!2d-12.95917?entry=ttu" target="_blank">Direccão</a></h4>
                            </div>
                            <div class="icon-right">
                                <i class='bx bxs-phone-call'></i>
                                <h4>Ligar</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-alert">
                    <div class="img-agencia">
                        <img src="./assets/img/background.png" alt="">
                    </div>
                    <div class="content-text">
                        <div class="name">
                            <h4>Agência da Pemba</h4>
                        </div>
                        <div class="location">
                            <p>Av. Eduardo Mondlane R/C N 393 Pemba - Moçambique</p>
                        </div>
                        <div class="time">
                            <p class="time-status"></p>
                        </div>
                    </div>
                </div>
                <div class="footer"></div>
            </div>

        </div>
    </div>
    </section>

    <footer>
        <div class="footer mt-5">
            <div class="container d-flex">
                <div class="left-content">
                    <div class="img-app">
                        <img src="./assets/img/application.png" alt="" style="width: 280px;">
                    </div>
                </div>
                <div class="center-content">
                    <div class="col-menu">
                        <ul class="menu">
                            <li class="title">Particulares</li>
                            <li><a href="{{ __(route('view.danos-proprios-part')) }}">Danos Próprios</a></li>
                            <li><a href="{{ __(route('view.resp-civil-part')) }}">Responsabilidade Civil</a></li>
                            <li><a href="{{ __(route('view.resp-civil-bombas-part')) }}">Resp. Civil
                                    Bombas</a></li>
                            <li><a href="{{ __(route('view.habitacao')) }}">Multirisco Habitação</a></li>
                            <li><a href="{{ __(route('view.empregados')) }}">Empregados Domésticos</a></li>
                            <li><a href="{{ __(route('view.funeral')) }}">Funeral</a></li>
                            <li><a href="{{ __(route('view.acidente-pessoal')) }}">Acidentes Pessoais</a></li>
                            <li><a href="{{ __(route('view.viagem-part')) }}">Viagem</a></li>


                        </ul>
                    </div>
                    <div class="col-menu">
                        <ul class="menu">
                            <li class="title">Empresas</li>
                            <li><a href="{{ __(route('view.danos-proprios-emp')) }}">Danos Próprios</a></li>
                            <li><a href="{{ __(route('view.resp-civil-auto')) }}">Responsabilidade Civil</a></li>
                            <li><a href="{{ __(route('view.saude')) }}">Saúde</a></li>
                            <li><a href="{{ __(route('view.engenharia')) }}">Engenharias</a></li>
                            <li><a href="{{ __(route('view.incendio')) }}">Incêndio</a></li>
                            <li><a href="{{ __(route('view.respCivil-emp')) }}">Responsabilidade Civil Geral</a></li>
                            <li><a href="{{ __(route('view.pme')) }}">PMEs</a></li>
                        </ul>
                    </div>
                    <div class="col-menu">
                        <ul class="menu">
                            <li class="title">Institucional</li>
                            <li><a href="{{ __(route('view.historia')) }}">História</a></li>
                            <li><a href="{{ __(route('view.equipe-gestao')) }}">Equipe de Gestão</a></li>
                            <li><a href="{{ __(route('view.artigos')) }}">Artigos</a></li>
                            <li><a href="{{ __(route('view.estru-accionista')) }}">Estrutura Accionista</a></li>
                            <li><a href="{{ __(route('view.noticia')) }}">Noticia</a></li>
                        </ul>
                    </div>
                    <div class="col-menu">
                        <ul class="menu">
                            <li class="title">Sinistros</li>
                            <li><a href="{{ __(route('view.sinistros-part')) }}">Participar Sinistro</a></li>
                            <li><a href="{{ __(route('view.consul-sinistro-part')) }}">Consultar Estado do
                                    Sinistro</a></li>
                            <li><a href="{{ __(route('view.oficinas-part')) }}">Oficinas</a></li>
                        </ul>
                    </div>
                    <div class="col-menu">
                        <ul class="menu">
                            <li class="title">Contactos</li>
                            <li><a href="#">+258 84/825533 </a></li>
                        </ul>
                    </div>

                </div>
                <div class="right-content">
                    <ul class="social-media">
                        <li><a href="https://wa.me/258852727270" target="_blank" class="me-4"><i
                                    class="fab fa-whatsapp"></i></a>
                        </li>
                        <li><a href="https://www.facebook.com/IndicoSeguros" target="_blank" class="me-4"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/indico_seguros/" target="_blank" class="me-4"><i
                                    class="fab fa-instagram"></i></a></li>
                        <li><a href="https://mz.linkedin.com/company/%C3%ADndico-seguros-sa" target="_blank"
                                class="me-4"> <i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                    <div class="certificate">
                        <img src="./assets/img/certif-removebg.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray">
            <div class="footer-contact-content d-flex">
                <div class="left-line"></div>
                <div class="footer-contact">
                    <div class="newsletter">
                        <form action="" method="" class="text-center">
                            <div class="form-newsletter  ">
                                <i class='bx bx-envelope'></i>
                                <input type="text" class="input-letter"
                                    placeholder="Receba as Newsletters aqui...">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="right-line"></div>
            </div>
            <div class="copyright">
                <p>Copyright © 2023 Companhia de Seguros Índico, SA. Todos os Direitos Reservados</p>
            </div>
        </div>
        <div class="footer-img">
            <img src="./assets/img/footer_bar.png" alt="">
        </div>
    </footer>
    <script src="./assets/vendor/jquery/js/jquery.min.js?version=1.1"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js?version=1.1"></script>
    <script src="./assets/vendor/mdbootstrap/js/mdb.min.js?version=1.1"></script>
    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/function.js"></script>

</body>

</html>
