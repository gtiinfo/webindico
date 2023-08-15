<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inquerito de Analise de Marca | ÍNDICO SEGUROS</title>
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css?version=1.1" />
    <link rel="stylesheet" href="../assets/vendor/mdbootstrap/css/mdb.min.css?version=1.1" />
    <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.min.css?version=1.1" />
    <link rel="stylesheet" href="../assets/vendor/boxicons/css/boxicons.min.css">
    <link rel="stylesheet" href="../assets/css/extend.css?version=1.1" />
    <link rel="stylesheet" href="../assets/css/style.css?version=1.1" />
    <link rel="stylesheet" href="../assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="../assets/css/chatbot.css?version=1.1" />
    <link rel="stylesheet" href="../assets/vendor/hover/css/hover-min.css?version=1.1" />
</head>
<header class="header">
    <div class="container-fluid">
        <div class="row">
            <div class="component mobile-only main-menu-mobile sticky-top" style="display: none;">
                <div class="component-content">
                    <div class="row">
                        <div class="d-flex">
                            <div class="component image file-type-icon-media-link">
                                <div class="component-content">
                                    <a href="{{ __(route('view.home')) }}">
                                        <img src="../assets/img/logo.png" alt="">
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
                                                    <li><a href="{{ __(route('view.home')) }}">Particulares</a></li>
                                                    <li><a href="{{ __(route('view.empresas')) }}">Empresas</a></li>
                                                    <li><a href="{{ __(route('view.indico')) }}"
                                                            class="active">Índico</a></li>
                                                </ul>
                                                <div class="tabs-container">
                                                    <ul class="tabs-body">
                                                        <div class="item-0">
                                                            <li class="icon-menu-drop title">Institucional</li>
                                                            <div class="list-item">
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">Identidade
                                                                        Corporativa</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="{{ __(route('view.dados-empresas')) }}">Dados
                                                                                da Empresa</a></li>
                                                                        <li><a
                                                                                href="{{ __(route('view.historia')) }}">História</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.proposito')) }}">Proposito</a>
                                                                        </li>
                                                                    </ul>
                                                                </ul>
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">Governação</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="../assets/documents/Codigo_Governacao_Corporativa.pdf">Código
                                                                                de
                                                                                governação corporativa</a></li>
                                                                        <li><a
                                                                                href="../assets/img/Organograma_2023.png">Organograma</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.estru-accionista')) }}">Estrutura
                                                                                Accionista</a></li>
                                                                        <li><a
                                                                                href="{{ __(route('view.orgao-sociais')) }}">Órgãos
                                                                                Sociais</a></li>
                                                                        <li><a href="{{ __(route('view.doc-insti')) }}">Documentos
                                                                                institucionais</a></li>
                                                                    </ul>
                                                                </ul>
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">Informação
                                                                        Financeira</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="{{ __(route('view.relatorio-conta')) }}">Relatório
                                                                                & Contas</a></li>
                                                                    </ul>
                                                                </ul>
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">Recursos
                                                                        Humanos</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="{{ __(route('view.equipe-gestao')) }}">Equipe
                                                                                de Gestão</a></li>
                                                                        <li><a
                                                                                href="{{ __(route('view.programa-talento')) }}">Programa
                                                                                de Talentos</a></li>
                                                                        <li><a
                                                                                href="{{ __(route('view.recrutamento')) }}">Recrutamento</a>
                                                                        </li>
                                                                    </ul>
                                                                </ul>
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">As nossas
                                                                        Políticas</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a href="{{ __(route('view.helpdesk')) }}">Help
                                                                                Desk - Ética</a></li>
                                                                        <li><a
                                                                                href="../assets/documents/Codigo_Etica_Conduta.pdf">Código
                                                                                de ética e conduta</a></li>
                                                                        <li><a
                                                                                href="../assets/documents/Politica_Corrupcao_Proposta_Revisao_VF.pdf">Política
                                                                                de prevenção e combate <br>a corrupção e
                                                                                fraude</a></li>
                                                                        <li><a
                                                                                href="../assets/documents/Politica_Brindes_Presentes_VF.pdf">Política
                                                                                de brindes</a></li>
                                                                        <li><a
                                                                                href="../assets/documents/Politica_Identificacao_clientes.pdf">Política
                                                                                de Identificacao <br>de Clientes</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="../assets/documents/Politica_PrevencaoCombate_Assedio_Trabalho_VF.pdf">Política
                                                                                de prevenção e combate ao <br>assédio no
                                                                                trabalho </a></li>
                                                                        <li><a
                                                                                href="../assets/documents/Politica_Proteccao_Denunciante.pdf">Política
                                                                                de Protecção ao Denunciante</a></li>
                                                                    </ul>
                                                                </ul>
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">
                                                                        Sustentabilidade</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="{{ __(route('view.relatorio')) }}">Relatórios</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.certificacoes')) }}">Certificações</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.agremiacoes')) }}">Agremiações</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.resp-social')) }}">Responsabilidade
                                                                                Social</a></li>
                                                                    </ul>
                                                                </ul>
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">Parcerias</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="{{ __(route('view.fornecedores')) }}">Fornecedores</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.mediadores')) }}">Mediadores</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.oficina')) }}">Oficinas</a>
                                                                        </li>
                                                                        <li><a
                                                                                href="{{ __(route('view.presta-medicos')) }}">Prestadores
                                                                                Médicos</a></li>
                                                                    </ul>
                                                                </ul>
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">Satisfação</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="../assets/documents/Politica_Qualidade.pdf">Política
                                                                                de
                                                                                Qualidade</a></li>
                                                                        <li><a
                                                                                href="../assets/documents/Processo_Gestao_Reclamaes.pdf">Política
                                                                                de
                                                                                Gestão de
                                                                                Reclamações</a></li>
                                                                        <li><a
                                                                                href="{{ __(route('view.inq-analise-marca')) }}">Inquérito
                                                                                de Análise de Marca </a></li>
                                                                    </ul>
                                                                </ul>
                                                                <ul>
                                                                    <li class="dropdown0 icon-menu-drop">Canal de
                                                                        Denúncias</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="{{ __(route('view.denucias')) }}">Denúncias</a>
                                                                        </li>
                                                                    </ul>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-0">
                                                            <li class="icon-menu-drop">Sala da Imprensa</li>
                                                            <div class="list-item">
                                                                <ul>
                                                                    <li class=" dropdown0 icon-menu-drop">Notícias</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="{{ __(route('view.noticia')) }}">Notícias</a>
                                                                        </li>
                                                                    </ul>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="item-0">
                                                            <li class="icon-menu-drop">Educação Financeira</li>
                                                            <div class="list-item">
                                                                <ul>
                                                                    <li class=" dropdown0 icon-menu-drop">Literácia
                                                                        Financeira</li>
                                                                    <ul class="dropdown1">
                                                                        <li><a
                                                                                href="{{ __(route('view.artigos')) }}">Artigos</a>
                                                                        </li>
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
                    <a href="{{ __(route('view.home')) }}">
                        <img src="../assets/img/IndicoSeguro_IconPrincipal.png" alt="Indico Seguros">
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
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Faça a sua Pesquisa!
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
                                    <li class="">
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
                                    <li class="mnu-selected">
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
                                    <li><a href="{{ __(route('view.agencias')) }}">Agências</a></li>
                                    <li><a href="{{ __(route('view.faq')) }}">Perguntas Frequentes</a></li>
                                    <li class="show-on-xs mobile-menu">
                                        <a href="#"></a>
                                        <span class="hide-on-xs"></span>
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
                                    <a href="#">Institucional</a>
                                </div>
                                <div class="label-title-link">
                                    <a href="#">Institucional</a>
                                </div>
                                <ul class="submenu-container">
                                    <li>
                                        <div class="container1 item-area">
                                            <ul>
                                                <li class="title">Identidade Corporativa</li>
                                                <li><a href="{{ __(route('view.dados-empresas')) }}">Dados da
                                                        Empresa</a></li>
                                                <li><a href="{{ __(route('view.historia')) }}">História</a></li>
                                                <li><a href="{{ __(route('view.proposito')) }}">Proposito</a></li>
                                            </ul>
                                            <ul>
                                                <li class="title">Governação</li>
                                                <li><a href="../assets/documents/Codigo_Governacao_Corporativa.pdf">Código
                                                        de
                                                        governação corporativa</a></li>
                                                <li><a href="../assets/img/Organograma_2023.png">Organograma</a></li>
                                                <li><a href="{{ __(route('view.estru-accionista')) }}">Estrutura
                                                        Accionista</a></li>
                                                <li><a href="{{ __(route('view.orgao-sociais')) }}">Órgãos Sociais</a>
                                                </li>
                                                <li><a href="{{ __(route('view.doc-insti')) }}">Documentos
                                                        institucionais</a></li>
                                            </ul>
                                            <ul>
                                                <li class="title">Informação Financeira</li>
                                                <li><a href="{{ __(route('view.relatorio-conta')) }}">Relatório &
                                                        Contas</a></li>
                                            </ul>
                                            <ul>
                                                <li class="title">Recursos Humanos</li>
                                                <li><a href="{{ __(route('view.equipe-gestao')) }}">Equipe de
                                                        Gestão</a></li>
                                                <li><a href="{{ __(route('view.programa-talento')) }}">Programa de
                                                        Talentos</a></li>
                                                <li><a href="{{ __(route('view.recrutamento')) }}">Recrutamento</a>
                                                </li>
                                            </ul>
                                            <ul>
                                                <li class="title">As nossas Políticas</li>
                                                <li><a href="{{ __(route('view.helpdesk')) }}">Help Desk - Ética</a>
                                                </li>
                                                <li><a href="../assets/documents/Codigo_Etica_Conduta.pdf">Código
                                                        de ética e conduta</a></li>
                                                <li><a
                                                        href="../assets/documents/Politica_Corrupcao_Proposta_Revisao_VF.pdf">Política
                                                        de prevenção e combate <br>a corrupção e
                                                        fraude</a></li>
                                                <li><a href="../assets/documents/Politica_Brindes_Presentes_VF.pdf">Política
                                                        de brindes</a></li>
                                                <li><a href="../assets/documents/Politica_Identificacao_clientes.pdf">Política
                                                        de Identificacao <br>de Clientes</a></li>
                                                <li><a
                                                        href="../assets/documents/Politica_PrevencaoCombate_Assedio_Trabalho_VF.pdf">Política
                                                        de prevenção e combate ao <br>assédio no trabalho </a></li>
                                                <li><a href="../assets/documents/Politica_Proteccao_Denunciante.pdf">Política
                                                        de Protecção ao Denunciante</a></li>
                                            </ul>
                                            <ul>
                                                <li class="title">Sustentabilidade</li>
                                                <li><a href="{{ __(route('view.relatorio')) }}">Relatórios</a></li>
                                                <li><a href="{{ __(route('view.certificacoes')) }}">Certificações</a>
                                                </li>
                                                <li><a href="{{ __(route('view.agremiacoes')) }}">Agremiações</a></li>
                                                <li><a href="{{ __(route('view.resp-social')) }}">Responsabilidade
                                                        Social</a></li>
                                            </ul>
                                            <ul>
                                                <li class="title">Parcerias</li>
                                                <li><a href="{{ __(route('view.fornecedores')) }}">Fornecedores</a>
                                                </li>
                                                <li><a href="{{ __(route('view.mediadores')) }}">Mediadores</a></li>
                                                <li><a href="{{ __(route('view.oficina')) }}">Oficinas</a></li>
                                                <li><a href="{{ __(route('view.presta-medicos')) }}">Prestadores
                                                        Médicos</a></li>
                                            </ul>
                                            <ul>
                                                <li class="title">Satisfação</li>
                                                <li><a href="../assets/documents/Politica_Qualidade.pdf">Política de
                                                        Qualidade</a></li>
                                                <li><a href="../assets/documents/Processo_Gestao_Reclamaes.pdf">Política
                                                        de Gestão de
                                                        Reclamações</a></li>
                                                <li><a href="{{ __(route('view.inq-analise-marca')) }}">Inquérito de
                                                        Análise de Marca </a></li>
                                            </ul>
                                            <ul>
                                                <li class="title">Canal de Denúncias</li>
                                                <li><a href="{{ __(route('view.denucias')) }}">Denúncias</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="label-title-area">
                                    <a href="#">Sala da Imprensa</a>
                                </div>
                                <div class="label-title-link">
                                    <a href="#">Sala da Imprensa</a>
                                </div>
                                <ul class="submenu-container">
                                    <li>
                                        <div class="container1 item-area">
                                            <ul>
                                                <li class="title">Notícias</li>
                                                <li><a href="{{ __(route('view.noticia')) }}">Notícias</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <div class="label-title-area">
                                    <a href="#">Educação Financeira</a>
                                </div>
                                <div class="label-title-link">
                                    <a href="#">Educação Financeira</a>
                                </div>
                                <ul class="submenu-container">
                                    <li>
                                        <div class="container1 item-area">
                                            <ul>
                                                <li class="title">Literácia Financeira</li>
                                                <li><a href="{{ __(route('view.artigos')) }}">Artigos</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
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

<body>
    <!-- LOADING -->
    <div class="loading-spinner">
        <div class="spinner"></div>
    </div>
    <!-- LATERAL MENU -->
    <div class="lateral-menu">
        <ul class="menu">
            <li class="bg-bk">
                <div class="item-menu">
                    <img src="../assets/img/Icones_lateral_menu_1.png" class="w-100" alt="">
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
                            <label for=""><a href="#">E-mola</a></label><br>
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
                    <img src="../assets/img/Icones_lateral_menu_2.png" class="w-100" alt="">
                    <p>Índico Whatsapp</p>
                </div>
                <ul>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="https://wa.me/258852727270">Seguros</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="https://wa.me/258852727270">Sinistros</a></label>
                        </div>
                    </li>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a href="https://wa.me/258852727270">Outros</a></label>
                        </div>
                    </li>
                </ul>
                <div class="img-bottom"></div>
            </li>
            <li class="bg-bk">
                <div class="item-menu">
                    <img src="../assets/img/Icones_lateral_menu_3.png" class="w-100" alt="">
                    <p>Contacte-nos</p>
                </div>
                <ul>
                    <li>
                        <div class="icon me-2">
                            <i class="fas fa-caret-right"></i>
                        </div>
                        <div class="text">
                            <label for=""><a
                                    href="https://api.whatsapp.com/send?phone=+2588502727270&text=&source=&data=">WhatsApp</a></label>
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
                                    <img src="../assets/img/Icones_Contacto.png" width="30" height="37"
                                        alt="">
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
                            <label for=""><a
                                    href="mailto:servicoaocliente@indicoseguros.co.mz">Email</a></label>
                        </div>
                    </li>
                </ul>
                <div class="img-bottom"></div>
            </li>
            <li class="bg-bk">
                <div class="item-menu">
                    <img src="../assets/img/Icones_lateral_menu_4.png" class="w-100" alt="">
                    <p>Pedir simulação</p>
                </div>
                <ul>
                    <li>
                      <div class="icon me-2">
                        <i class="fas fa-caret-right"></i>
                      </div>
                      <div class="text">
                        <label for=""><a href="{{ __route('view.danos-proprios-part') }}">Automóvel</a></label>
                      </div>
                    </li>
                    <li>
                      <div class="icon me-2">
                        <i class="fas fa-caret-right"></i>
                      </div>
                      <div class="text">
                        <label for=""><a href="{{ __route('view.viagem-part') }}">Viagem</a></label>
                      </div>
                    </li>
                    <li>
                      <div class="icon me-2">
                        <i class="fas fa-caret-right"></i>
                      </div>
                      <div class="text">
                        <label for=""><a href="{{ __route('view.funeral') }}">Funeral</a></label>
                      </div>
                    </li>
                    <li>
                      <div class="icon me-2">
                        <i class="fas fa-caret-right"></i>
                      </div>
                      <div class="text">
                        <label for=""><a href="{{ __route('view.acidente-trabalho') }}">Acidente de Trabalho</a></label>
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
            style="background: url(../assets/img/background.png); height: 400px;">
        </div>
        <!-- End Intro-Box -->
    </section>
    <!-- Box-Proposito -->
    <section class="box">
        <div class="">
            <div class="box-center">
                <div class="box-medium" style="max-width: 650px;">
                    <div class="title-bar">
                        <div class="title-icon"></div>
                        <h4 class="title">Inquérito de Análise de Marca</h4>
                    </div>
                    <div class="content">
                        <p>Ajude-nos a melhorar a qualidade do nosso atendimento, bem como dos nossos produtos e
                            serviços,
                            preenchendo o inquérito de análise de marca.</p>
                        <a href="./inquerito-marca.html" class="text-center my-2">FAÇA A AVALIAÇÃO DA SUA EXPERIÊNCIA
                            DE CONSUMO
                            AQUI!</a>
                    </div>
                    <div class="img-border-bottom"></div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer mt-5">
            <div class="container d-flex">
                <div class="left-content">
                    <div class="img-app">
                        <img src="../assets/img/application.png" alt="" style="width: 280px;">
                    </div>
                </div>
                <div class="center-content">
                    <div class="col-menu">
                        <ul class="menu">
                            <li class="title">Particulares</li>
                            <li><a href="{{ __(route('view.danos-proprios-part')) }}">Danos Próprios</a></li>
                            <li><a href="{{ __(route('view.resp-civil-part')) }}">Responsabilidade Civil</a></li>
                            <li><a href="{{ __(route('view.resp-civil-bombas-part')) }}">Responsabilidade Civil
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
                        <img src="../assets/img/certif-removebg.png" alt="">
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
            <img src="../assets/img/footer_bar.png" alt="">
        </div>
    </footer>
    <script src="../assets/vendor/jquery/js/jquery.min.js?version=1.1"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js?version=1.1"></script>
    <script src="../assets/vendor/mdbootstrap/js/mdb.min.js?version=1.1"></script>
    <script src="../assets/js/main.js"></script>
    <script src="../assets/js/function.js"></script>

</body>

</html>
