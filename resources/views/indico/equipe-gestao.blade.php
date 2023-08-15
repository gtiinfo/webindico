<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equipe de Gestão | ÍNDICO SEGUROS</title>
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
    <section class="box" style="margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="component-content title">
                        <h3>Equipe de Gestão</h3>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="box-center">
                <div class="box-medium pt-0" style="margin: 0 auto;">
                    <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel"
                        data-interval="3000">
                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="3"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="4"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="5"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="6"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="7"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="8"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="9"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="10"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="11"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="12"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="13"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="14"
                                aria-label="Slide 3"></button>
                            <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="15"
                                aria-label="Slide 3"></button>
                        </div>

                        <!-- Inner -->
                        <div class="carousel-inner slider">
                            <!-- Single item -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Ruben.png);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Ruben Fernando Chivale</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Administrador Delegado (CEO)</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Fundador e Administrador Delegado. Ocupou várias posições de
                                                            gestão na actividade
                                                            financeira não monetária (Seguros) nos últimos 23 anos. É
                                                            Presidente do Conselho de
                                                            Direcção da Associação Moçambicana de Seguradoras (AMS),
                                                            Presidente do Pelouro de Seguros
                                                            na Confederação das Associações Económicas de Moçambique
                                                            (CTA) onde ocupou também o cargo
                                                            de Vice-Presidente do Pelouro de Política e Serviços
                                                            Financeiros e Membro do Conselho de
                                                            Administração do Instituto Moçambicano de Governação
                                                            Corporativa.</p>

                                                        <p>Advogado e membro da Ordem dos Advogados de Moçambique há
                                                            mais de 20 anos e Docente
                                                            Universitário há mais de 15 anos. Licenciado em Direito e
                                                            Mestre em Ciências Jurídicas
                                                            pela Faculdade de Direito da Universidade Eduardo Mondlane
                                                            (em cooperação com a
                                                            Universidade Nova de Lisboa).</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Olívio.jpg)">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Olívio Manuel Melembe</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Administrador do Pelouro de Administração e Finanças
                                                                    (CFO)</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem mais de 15 anos de experiência, licenciado em
                                                            Contabilidade e Auditoria pelo
                                                            Instituto
                                                            Superior de Contabilidade e Auditoria de Moçambique (ISCAM).
                                                        </p>

                                                        <p>Mestre em Gestão e Administração de Negócios, Finanças e
                                                            Sustentabilidade (MBA-FS) pela
                                                            University of Cumbria (UK).</p>

                                                        <p>Possui o Diploma em Seguros (Dip. CII) pelo Chartered
                                                            Insurance Institute (UK). É
                                                            Contabilista Certificado pela Ordem dos Contabilistas de
                                                            Moçambique (OCAM) e pelo
                                                            Institute
                                                            of Certified Management Accountants of Australia (CMA).</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Nasma.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Nasma Ossemane Omar</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Admnistradora do Pelouro de Operações (COO)</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 11 anos de experiência na actividade financeira não
                                                            monetária (seguros) com
                                                            especialização em gestão de riscos, sinistros, vendas,
                                                            liderança e gestão de equipes.</p>

                                                        <p>É mestre em Gestão de Empresas pelo Instituto Superior de
                                                            Altos Estudos e Negócios
                                                            -ISAEN e licenciada em Ciências Jurídicas pela Universidade
                                                            Técnica de
                                                            Moçambique.</p>

                                                        <p>Possui certificação em seguros (Cert CII) e diploma (Dip CII-
                                                            em curso) pelo
                                                            Chartered Insurance Institute, UK.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Dario.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Dário Sevene</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Director de Contabilidade e Finanças</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 12 anos de experiência profissional, dos quais 5 anos
                                                            como Auditor Externo Sénior na
                                                            PricewaterhouseCoopers Moçambique, Lda. e 2 anos no sector
                                                            bancário.</p>

                                                        <p>Licenciado em Contabilidade & Finanças pela Universidade
                                                            Eduardo Mondlane, Certificado em
                                                            Normas Internacionais de Relato Financeiro pela Global
                                                            Academy of Finance and Management
                                                            (GAFAM - USA).<br>
                                                            É Membro da Ordem dos Contabilistas e Auditores de
                                                            Moçambique (OCAM) desde 2017, e do
                                                            Institute of Certified Management Accountants da Austrália
                                                            desde 2021.</p>

                                                        <p>Actualmente, finalista do curso de Mestrado em Economia e
                                                            Gestão de Petróleo e Gás na
                                                            Faculdade
                                                            de Economia da Universidade Eduardo Mondlane e na fase final
                                                            de obtenção do grau de
                                                            contabilista
                                                            certificado pela Association of Chartered Certified
                                                            Accountant (UK), assim como o Diploma
                                                            em
                                                            Seguros pelo Chartered Insurance Institute (UK).</p>

                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Nilsa.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Nilsa Folige</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora do Gabinete de Qualidade e Controlo
                                                                    Interno</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 15 anos experiência profissional, tendo ocupado vários
                                                            cargos intermédios como
                                                            Directora do Gabinete de Qualidade e Controlo Interno e de
                                                            Supervisora na KPMG
                                                            Auditores e Consultores, SA.</p>
                                                        <p>Licenciada em Contabilidade & Auditoria pelo Instituto
                                                            Superior de Contabilidade e
                                                            Auditoria de Moçambique (ISCAM), pós-graduada em Auditoria.
                                                        <p>
                                                        <p>Actualmente, finalista do curso de Mestrado em Contabilidade
                                                            & Auditoria, ministrado pela
                                                            mesma Instituição.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Nelsa.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Nelsa Judite Chissano</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora de Sinistros Automóvel</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 13 anos de experiência na actividade financeira não
                                                            monetária (Seguros) com
                                                            especialização na gestão de cobranças, gestão de sinistro e
                                                            liderança.</p>

                                                        <p>Possui certificação em seguros pelo Chattered Insurance
                                                            Institute (UK) e COP-
                                                            Certificate Of Profficiency (Zimbabwe).</p>

                                                        <p>Actualmente, finalista do curso de mestrado em Gestão
                                                            Empresarial pela
                                                            Universidade A Politécnica e, Diploma em Seguros pelo
                                                            Chartered Insurance
                                                            Institute (UK).</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Lagrimina.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Lagrimina Da Alsácia Pinto Matavel </h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora de Administração e Recursos Humanos</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 11 anos de experiência na área de administração e
                                                            recursos humanos, dos quais 7
                                                            na actividade financeira não monetária (seguros), tendo
                                                            igualmente passagem pela
                                                            firma de auditoria KPMG, SA e Grupo Visabeira.</p>

                                                        <p>Licenciada em Tradução e Interpretação de Português/Inglês
                                                            pela Universidade
                                                            Eduardo Mondlane.<br>
                                                            É membro da Associação Moçambicana de Profissionais de
                                                            Recursos Humanos e
                                                            certificada em Gestão de Recursos Humanos pelo ACCPA, Gestão
                                                            de Recursos
                                                            Humanos e Aspectos Práticos da Lesgislação Laboral
                                                            Moçambicana pelo KADOSH
                                                            Consultores.<br>
                                                            Actualmente, finalista do curso de Mestrado em Gestão
                                                            Estratégica de Recursos
                                                            Humanos na Universidade São Tomás de Moçambique.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12 col-sm-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Alison.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Alison Yumna Sidique Jamal</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora de Produção Corporate</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 7 anos experiência profissional na área financeira não
                                                            monetária (Seguros), tendo
                                                            ocupado
                                                            várias posições de gestão nas áreas de subscrição, gestão de
                                                            risco, sinistros, gestão de
                                                            clientes e
                                                            liderança.</p>

                                                        <p>Licenciada em Gestão de Empresas pela Universidade Eduardo
                                                            Mondlane – Faculdade de
                                                            Economia.<br>

                                                            Possui Certificação em seguros pelo Chartered Insurance
                                                            Institute, UK (CII) e ACCPA
                                                            (ACCPA-Certified) em AML/CFT Compliance pela Associação de
                                                            Profissionais de Compliance
                                                            Certificados de África (ACCPA).</p>

                                                        <p>Actualmente, mestranda em Gestão de Empresas pela
                                                            Universidade São Tomas de Moçambique e
                                                            Diploma em curso em seguros pelo Chartered Insurance
                                                            Institute, UK.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Amanda.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Amanda Teresa Franguane</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora de Sinistros Corporate</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 6 anos de experiência em seguros, com maior enfoque na
                                                            análise e gestão de risco,
                                                            resseguro,
                                                            sinistros e gestão de equipes de alto desempenho.</p>

                                                        <p>Licenciada em Direito pela Universidade São Tomás de
                                                            Moçambique.</p>

                                                        <p>Actualmente, mestranda em Direito de Trabalho na Universidade
                                                            Técnica de Moçambique e em
                                                            curso o Certificate em Seguros pelo Chartered Insurance
                                                            Institute (UK).</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Cleidy.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Cleidy Massangaia</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora de Controlo de Crédito</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 5 anos de experiência na indústria seguradora no ramo não
                                                            vida na área de Gestão de
                                                            Cobranças.</p>

                                                        <p>Licenciada em Contabilidade e Auditoria pela Universidade São
                                                            Tomás de Moçambique.</p>

                                                        <p>Possui certificação em Técnicas de cobranças, negociação,
                                                            Gestão de vendas, atendimento
                                                            ao
                                                            cliente, planificação, prevenção de Branqueamento de
                                                            Capitais e combate ao Financiamento e
                                                            terrorismo, entre vários cursos de seguros de riscos
                                                            especiais bem como na área de Gestão.
                                                        </p>

                                                        <p>Actualmente, mestranda em Gestão empresarial pela
                                                            Universidade São Tomás de Moçambique.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Channelsa.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Channelsa Silvana Ranifete</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora Regional Sul</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 5 anos de experiência na indústria seguradora, ramo não
                                                            vida, com especialidade em
                                                            gestão de riscos, controlo de crédito e liderança.</p>
                                                        <p>Licenciada em Gestão Financeira e Bancária pela Universidade
                                                            A Politécnica.</p>

                                                        <p>Actualmente, mestranda em Gestão de Empresas pela
                                                            Universidade São Tomas de
                                                            Moçambique e em curso o Certificate em Seguros pelo
                                                            Chartered Insurance
                                                            Institute (UK).</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/roberto.jpeg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Roberto Bertil Casimiro</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Director Regional Centro</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 8 anos de experiência em gestão, desempenhando as funções
                                                            de gerente de agência, com
                                                            enfoque no atendimento e assistência a grandes clientes e na
                                                            análise e regularização de
                                                            sinistros.</p>

                                                        <p>Licenciado em Ciências Atuariais pela Universidade Zambeze e
                                                            Pós-graduado em Metodologia
                                                            de Ensino pela Universidade Púngué.</p>

                                                        <p>Possuí certificação ACCPA (ACCPA-Certified) em AML/CFT
                                                            Compliance pela Associação de
                                                            Profissionais de Compliance Certificados de África (ACCPA).
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Henriques.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Henriques Cássimo Marojo</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Director Regional Centro</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 8 anos de experiência na área financeira não monetária
                                                            tendo desempenhado funções de
                                                            subscrição de riscos, gestão de clientes, sinistros e
                                                            liderança.</p>

                                                        <p>Licenciado em Gestão de Empresas pela Universidade São Tomas
                                                            de Moçambique.</p>

                                                        <p>Possui Certificação Profissional em Informática e Segurança
                                                            Electrónica pelo Instituto de
                                                            Formação Profissional Above e ACCPA (ACCPA-Certified) em
                                                            AML/CFT Compliance pela
                                                            Associação de Profissionais de Compliance Certificados de
                                                            África (ACCPA).</p>

                                                        <p>Actualmente, mestrando em Gestão de Empresas pela
                                                            Universidade São Tomas de Moçambique e
                                                            em curso o Certificate em Seguros pelo Chartered Insurance
                                                            Institute (UK).</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Lecastre.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Lecastre Paulo Ngulube</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora da Direcção de Comunicação e Marketing
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 5 anos de experiência na actividade financeira não
                                                            monetária (seguros), com
                                                            especialização em
                                                            atendimento e gestão de clientes, contact center e
                                                            liderança.</p>

                                                        <p>Licenciada em Relações Internacionais e Diplomacia pela
                                                            Universidade Joaquim Chissano
                                                            (UJC).</p>

                                                        <p>Com certificações em matérias de Comunicação Comercial e
                                                            Técnicas de Atendimento
                                                            (Inbound/Outbound/Social Media) pela Quality Contact
                                                            Centers.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Maura.jpg);">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Maura A. Fernando Cumaio</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Directora do Gabinete Jurídico e Complince</h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem 8 anos de experiência profissional, tendo actuado como
                                                            advogada e consultora jurídica
                                                            nas áreas de
                                                            banca e seguros.</p>

                                                        <p>Possui certificação em AML (anti-money laundering) e em CGE
                                                            (corporate governance and
                                                            ethics),
                                                            ambas pelo ACCPA (entidade certificadora de profissionais de
                                                            compliance e ética –
                                                            California) e foi
                                                            nomeada 49º melhor profissional de compliance em África em
                                                            2020.</p>

                                                        <p>É implementadora certificada da ISO 37301 pela PECB (entidade
                                                            certificadora de
                                                            profissionais pela ISO -
                                                            Canadá) e é oficial de ética credenciada pelo TEI (África do
                                                            Sul).</p>

                                                        <p>É Vice-Presidente da Comissão de Assuntos Jurídicos e
                                                            Conformidade da AMS.<br>
                                                            Licenciada em Direito pelo Instituto Superior de Ciência e
                                                            Tecnologia de Moçambique,
                                                            Pós-Graduada e
                                                            Mestranda em Ciências Jurídicas pela Faculdade de Direito da
                                                            Universidade Eduardo
                                                            Mondlane.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="content-header">
                                            <div class="row">
                                                <div class="col-4 col-md-4 col-sm-12">
                                                    <div class="img-profile"
                                                        style="background: url(../assets/img/profile/Arson.jpg); ">
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-8 col-sm-12">
                                                    <div class="text-content">
                                                        <div class="row">
                                                            <div class="component-content">
                                                                <h3>Arson André Ribisse</h3>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="component-content sub-title">
                                                                <h3>Director do Gabinete de Tecnologia de Informação
                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="component-content body-text">
                                                        <p>Tem mais de 7 anos de experiência, dos quais dois anos na
                                                            firma de auditoria KPMG
                                                            Moçambique onde
                                                            se especializou em Auditoria Informática em diversos
                                                            sectores de actividade financeiro
                                                            monetário e não
                                                            monetário, indústrias e​ ​telefonias móveis.</p>

                                                        <p>Licenciado em Engenharia Informática pelo Instituto Superior
                                                            de Ciências e Tecnologia de
                                                            Moçambique.</p>

                                                        <p>Actuou também em várias empresas como consultor e
                                                            implementador técnico e funcional de
                                                            ERP
                                                            Primavera, administrador de sistemas, redes e segurança e é
                                                            fundador de uma startup de
                                                            tecnologia de
                                                            informação e marketing digital e os últimos dois anos no
                                                            sector financeiro não monetário,
                                                            e é
                                                            implementador e coordenador da Norma ISO/IEC 27001.</p>
                                                        <p>Actualmente, mestrando em Engenharia Informática (MSC-SI)
                                                            pelo Instituto Superior de
                                                            Ciências e
                                                            Tecnologia de Moçambique.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
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
