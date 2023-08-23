<!doctype html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prestadores Medicos | ÍNDICO SEGUROS</title>
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
                                                                        <li><a href="{{ __(route('view.advogados')) }}">Advogados</a></li>
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
                                                        governação <br>corporativa</a></li>
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
                                                <li><a href="{{ __(route('view.advogados')) }}">Advogados</a></li>
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
        <div id="intro-box" class="bg-image">
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item  slider active"
                    style="background-image: url(../assets/img/background.png); height: 400px;">
                    <img src="../assets/img/background.png" class="w-100" alt="" />
                </div>
            </div>
        </div>
    </section>
    <main style="background: #f5f6f7;">
        <section class="container">
            <div class="row">
                <div class="content-herder border-0">
                    <h2>Prestadores Médicos</h2>
                    <p>Veja aqui a rede de prestadores médicos, de acordo com a região que pretende ter a assistência de
                        saúde</p>
                </div>
                <div class="component container col-12 content-large qa">
                    <div class="">
                        <div class="row">
                            <div class="row component column-splitter">
                                <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                                    <div class="filter-menu-container" data-aos="fade-up" data-aos-delay="100">
                                        <p class="title">Regiões</p>
                                        <ul class="filter-menu mobile-dropdown p-0">
                                            <li class="menu-item filter-active"><a href="javascript:void(0)">Sul</a>
                                            </li>
                                            <li class="menu-item"><a href="javascript:void(0)">Centro</a></li>
                                            <li class="menu-item"><a href="javascript:void(0)">Norte</a></li>
                                            <div class="special">
                                                <p class="title mt-3">Outros</p>
                                                <li class="menu-item"><a href="javascript:void(0)">Estrangeiros</a>
                                                </li>
                                                <li class="menu-item"><a href="javascript:void(0)">Emergência</a></li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                                    <div class="row container-menu">
                                        <div class="component component-menu filter-app">
                                            <div class="component search-results horizontal col-12 faq-acordion">
                                                <div class="list-content">
                                                    <div class="region0 active">
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Maputo</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas e Hospitais</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Hospital Privado de Maputo</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Rua Rio Inhamiara,
                                                                                    SommerschieldII | Contacto: +258 84
                                                                                    303 0968 |
                                                                                    E-mail:
                                                                                    Midhun.Kaishnon@lenmedmaputo.co.mz/CreditControl.01@lenmedmaputo.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica de Sommerschield</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Rua da Frelimo 52 |
                                                                                    Contacto: +258 21493924/6 82356240 |
                                                                                    E-mail:
                                                                                    clinicasommerschield@gmail.com /
                                                                                    nonielavilanculos@yahoo.com.br</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>AYAmed Solutions</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Tomás Ribeiro n° 2
                                                                                    Bairro da Coop, Maputo. | Contacto:
                                                                                    849888000/01 / 879888001 |
                                                                                    E-mail: geral@ayamed.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Instituto do Coração - ICOR</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Kenneth Kaunda, n°
                                                                                    1111, B.Sommerschield | Contacto:
                                                                                    258
                                                                                    21411000 /843274800 | E-mail:
                                                                                    filipa.fernandes@icor.co.mz /
                                                                                    mauro.neves@icor.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Privada de Maputo - Clinicare
                                                                            </h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Ângelo Azarias
                                                                                    Chichava,Cp.1676, Nº50 | Contacto:
                                                                                    258
                                                                                    21498215
                                                                                    / 823066795 |
                                                                                    E-mail:
                                                                                    jameel@clinicare.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Centro Médico Adriano Tivane</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Ahmed Sekou Touré, Nº
                                                                                    466 | Contacto: 258 846052708 /
                                                                                    21416441 |
                                                                                    E-mail:cmp.adrianotivane@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Centro Clínico Amparo</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Kenneth Kaunda Nº
                                                                                    624/640 | Contacto: 258 873379007 |
                                                                                    E-mail:
                                                                                    info@clinicaamparo.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>GM Consultórios</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Mártires da Machava, Nº
                                                                                    905 | Contacto: 258 847295826 |
                                                                                    E-mail:
                                                                                    gmconsultorios@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>CoopMed</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Emília Daússe |
                                                                                    Contacto: 258 843000013 | E-mail:
                                                                                    Henriquesibraimo@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>
                                                                                Realife (Consultório de Fisioterapia)
                                                                            </h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Francisco Orlando
                                                                                    Magumbwe 945 R/C | Contacto: 258
                                                                                    844098621
                                                                                    /
                                                                                    21487601 | E-mail:
                                                                                    realife@realife.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Sunshine Hospitals Maputo</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av Eduardo Mondlane Nº 1866
                                                                                    | Contacto: 258 823221830 /
                                                                                    820066850
                                                                                    |
                                                                                    E-mail:
                                                                                    accounts@sunshinehospitals.co.mz /
                                                                                    recepcao.sunshine@outlook.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Vida Plena</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Agostinho Neto, Nº 1194
                                                                                    R/C | Contacto: 258 878264360 /
                                                                                    820066850 | E-mail:
                                                                                    nelma.guila@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Consultório Bem - Estar</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Anguane, 292 |
                                                                                    Contacto: 258 843210980 / 824870571
                                                                                    /
                                                                                    873210999
                                                                                    | E-mail:
                                                                                    consultoriobemestarl@gmail.com</p>
                                                                            </div>
                                                                        </div>

                                                                        <div class="sub-content">
                                                                            <h5>SS-RIS</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Kwame Nkrumah n◦1546 |
                                                                                    Contacto: 258 823092550 | E-mail:
                                                                                    ssris.contabilidade@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Laboratório Joaquim Chaves</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 24 de Julho Nº 382, R/C
                                                                                    - Polana Cimento | Contacto:
                                                                                    21491836
                                                                                    /
                                                                                    21493663 / 24418135
                                                                                    |
                                                                                    E-mail: ana.nhaca@jcs.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Lac - Clínica</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Agostinho Neto, Nº 1997
                                                                                    R/C | Contacto: 258 843988721 /
                                                                                    21300026 / 823135210 |
                                                                                    E-mail:
                                                                                    isidrongove@lac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Peermed</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Karl Marx, 614, R/C |
                                                                                    Contacto: 258 843726348 / 873726348
                                                                                    |
                                                                                    E-mail:
                                                                                    miguelchichava@peermed.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Analgesic Clinic</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Vladmir Lenine, Nº
                                                                                    2902, Bairro da Coop | Contacto: 258
                                                                                    877338381 / 847338381 |
                                                                                    E-mail:
                                                                                    recepcao@analgesic.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>AJUTEC/ Fisiolab</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 24 de Julho Edificio
                                                                                    Shopping da 24 LOJA 22 | Contacto:
                                                                                    258
                                                                                    847969602 / 874854087 |
                                                                                    E-mail: ajutecmoz@gmail.com </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Shiffa Hospital</h5>
                                                                            <div class="sub-content">
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Malhangalene N°1146
                                                                                        | Contacto: 258 21418320 |
                                                                                        E-mail:
                                                                                        recepcao@shifaahospital.co.mz
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Centro Médico Estrela</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Kenneth Kaunda |
                                                                                        Contacto: 258 844507032 |
                                                                                        E-mail:
                                                                                        marketing@centromedicoestrela.co.mz
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Clínica NeuroVida</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Olof Palme, Nº 563
                                                                                        | Contacto: 258 847257420 |
                                                                                        E-mail:
                                                                                        neuroclinic@neurovida.org
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Centro Médico Jotacê</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Bairro costa do Sol,
                                                                                        Mapulene - Circular de Maputo Nº
                                                                                        660B/B2 |
                                                                                        Contacto: 841871147 /
                                                                                        868204562 | E-mail:
                                                                                        jotacecons@gmail.com</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Cubamoz -Reabilitação e serviços,
                                                                                    E.I</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Rua Kamba Simango, nº
                                                                                        214, Bairro Sommershield |
                                                                                        Contacto:
                                                                                        258846559246 | E-mail:
                                                                                        cubamozreabilitacaoeservicosei@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Clínica Fleming</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Grande Maputo -
                                                                                        circular / Bairro de Magoanine B
                                                                                        | Contacto:
                                                                                        864422233 | E-mail:
                                                                                        clinicaflemin1@gmail.com</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Icare Medical Center, Lda</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Eduardo Mondlane,
                                                                                        n.º 1740 R/C e 1ºandar |
                                                                                        Contacto: 85 516
                                                                                        4289 / 21423789 |
                                                                                        E-mail:
                                                                                        hassan.bader@icare.co.mz</p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clinica Lenmed Ponta</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua A, nr. 57, Ponta do
                                                                                    Ouro | Contacto: 258 841519023 /
                                                                                    858070881
                                                                                    | E-mail:
                                                                                    Midhun.Kaishnon@lenmedmaputo.co.mz/CreditControl.01
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Consultório Marikel</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua da Guarda Nº 235 |
                                                                                    Contacto: 853500003 / 878788247 /
                                                                                    841508300
                                                                                    | E-mail:
                                                                                    marikelconsultorio3@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Lin Medcare</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Maguiguana, nº1949 |
                                                                                    Contacto: 844773662 / 829632330 /
                                                                                    21407903
                                                                                    | E-mail:
                                                                                    geral@linmedcare.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Centro de Saúde Privado Laulane</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro de Laulane, Q 48
                                                                                    Nº264 R/C | Contacto: 848880695 |
                                                                                    E-mail:
                                                                                    alaudinofatima@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>LunaMed - Consultório Mulher</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Emília Daússe Nº1533 |
                                                                                    Contacto: 845559746 | E-mail:
                                                                                    geral@lunamed.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas Dentárias</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Ney Clínica Dentária</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av: Karl Marx, Nº 478 1º,
                                                                                    Esq | Contacto: 258 85 206 8085 |
                                                                                    E-mail:
                                                                                    clinica.dentaria@ney.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Ney Clínica Dentária</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua da Frelimo nº 52 -
                                                                                    Clinica da Sommerschield | Contacto:
                                                                                    258 85
                                                                                    206 8085 | E-mail:
                                                                                    clinica.dentaria@ney.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Dentária Bonito Sorriso</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Rua da Resistência Nº
                                                                                    288 R/C Bairro Central | Contacto:
                                                                                    258826805396 |
                                                                                    E-mail: geral@bonitosorriso.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Dente Feliz</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Julius Nyerere 1º andar
                                                                                    | Contacto: 258 823905810/ 843125590
                                                                                    |
                                                                                    E-mail:
                                                                                    nadfortes1@hotmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Consultório Dentário Sommerschield
                                                                                Sparkle</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Paulo Samuel Kankhomba,
                                                                                    Nº 728 | Contacto: 258 21303819 /
                                                                                    828017360 | E-mail:
                                                                                    sparkle.cdsl@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Dentária Xonguissa Tinyo</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Vladimir Lenine |
                                                                                    Contacto: 258 850475690 | E-mail:
                                                                                    xonguissatinyo@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>House Clinic</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Vladimir Lenine 2015,
                                                                                    Maputo | Contacto: 258 826838111 |
                                                                                    E-mail:
                                                                                    elopes@houseclinic.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Mais Sorridente</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Paulo Samuel Kankhomba,
                                                                                    Nº 1024 | Contacto: 258 21303819 /
                                                                                    828017360 | E-mail:
                                                                                    maissorridente@tvcabo.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Ortho Excellence</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Base Ntchinga Nº 349 |
                                                                                    Contacto: 258 844052140 / 21417907 |
                                                                                    E-mail:
                                                                                    orthoexcellence.recepcao@tvcabo.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>
                                                                                Denta Med
                                                                            </h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Francisco Orlando
                                                                                    Magumbwe Nº 954 | Contacto: 258
                                                                                    823250040 |
                                                                                    E-mail:
                                                                                    dentamed@tmcel.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Consultório Dentário Dom Orione</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. de Mocambique Nº 8320,
                                                                                    Bairro do Zimpeto | Contacto: 258
                                                                                    875572011 | E-mail:
                                                                                    crdomoriorre@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Dental Dream</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Mao Tsé-Tung 911 R/C,
                                                                                    Maputo | Contacto: 258 847476695 |
                                                                                    E-mail:
                                                                                    dentaldream@tvcabo.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Smile Care</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Contacto: 258 840116084 | E-mail:
                                                                                    smilecaremz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Dental Care</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 25 de Setembro Nº 916 1
                                                                                    Andar | Contacto: 258 21303386 |
                                                                                    E-mail:
                                                                                    dentalcare.clinicadentaria@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Dental Care</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Fernando Ganhão Nº 100
                                                                                    | Contacto: 258 825239560 /
                                                                                    842567181
                                                                                    |
                                                                                    E-mail:
                                                                                    dentalcare.clinicadentaria@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Brilho Dental</h5>
                                                                            </button>
                                                                            </h2>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Base Ntchinga Nº 349 |
                                                                                    Contacto: 258 868738543 | E-mail:
                                                                                    brilhodental@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Bio Dente</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Paiva Couceiro, Nº 94 -
                                                                                    3 Andar, Maputo | Contacto: 258
                                                                                    828123634
                                                                                    /21400408 |
                                                                                    E-mail:
                                                                                    biodente.clinicalaboratorio@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Dentária Mayet</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Amílcar Cabral Nº 985
                                                                                    R/C | Contacto: 258845309142 |
                                                                                    E-mail:
                                                                                    clinica.mayet@outlook.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Topdente Clínica Dentária</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Amílcar Cabral Nº 874
                                                                                    R/C | Contacto: 258 841189815/
                                                                                    878700037 |
                                                                                    E-mail:
                                                                                    topdente.clinicadentaria@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Dental Home</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Olof Palme, Maputo |
                                                                                    Contacto: 87 299 7777 | E-mail:
                                                                                    dentalhomemz@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Av. Dom Alexandre, Mahotas Shopping Loja
                                                                                12</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Dom Alexandre, Mahotas
                                                                                    Shopping Loja 12 | Contacto:
                                                                                    858893424
                                                                                    |
                                                                                    E-mail:
                                                                                    eusebiojambaneconsultdent@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Renato Ronda</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. Da Marginal, Baia
                                                                                    Mall, loja G18 | Contacto:
                                                                                    258825252555 |
                                                                                    E-mail:
                                                                                    farmacia.rronda@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Medis Farmácia Amiga 24</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 24 de Julho, 1155, Edf.
                                                                                    Shopping 24, Lj. 23 | Contacto: 258
                                                                                    21320588 | E-mail:
                                                                                    ateixeira@medis.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Medis Farmácia Calendula I</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Mao Tsé-Tung, 222/226,
                                                                                    Polana | Contacto: 258 21497606 |
                                                                                    E-mail: ateixeira@medis.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Medis Farmácia Calendula II</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Eduardo Mondlane Nº
                                                                                    2078 | Contacto: 258 21310909 |
                                                                                    E-mail:
                                                                                    ateixeira@medis.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Medis Farmácia Franca</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Eduardo Mondlane, Nº
                                                                                    733 | Contacto: 258 21302955 |
                                                                                    E-mail:
                                                                                    ateixeira@medis.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Medis Farmácia Malhangalene</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Karl Marx Nº 2063 |
                                                                                    Contacto: 258 21302034 | E-mail:
                                                                                    ateixeira@medis.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Medis Farmácia Rotunda</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Vladimir Lenine, 2791 -
                                                                                    R/c, Maputo | Contacto: 258 21415693
                                                                                    /
                                                                                    21402508 | E-mail:
                                                                                    ateixeira@medis.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Botika</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Kibiriti Diwane |
                                                                                    Contacto: 258 0127664 | E-mail:
                                                                                    farmacia.botika@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Chamanculo </h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua de Zixaxa Nº 567 |
                                                                                    Contacto: 21404375 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>
                                                                                E. E. Farmac Farmácia Galeno
                                                                            </h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Salvador Allende Nº 294
                                                                                    | Contacto: 21323605 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Tunduro</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Samora Machel, Nº 188 |
                                                                                    Contacto: 21324112 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Brotero</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Julius Nyerere, Nº 919
                                                                                    | Contacto: 21492447 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Nacional</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Joaquim Lapa,201 |
                                                                                    Contacto: 21324587 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Nova</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Vladimir Lenine,1296 |
                                                                                    Contacto: 21322531 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Higiene</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Karl Marx Nº.1602 |
                                                                                    Contacto: 21428674 |
                                                                                    E-mail: alcidio.cavele@farmac.co.mz
                                                                                    / vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Pasteur</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 24 de Julho,3059 |
                                                                                    Contacto: 21404130 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Polana</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Eduardo Mondlane,276 |
                                                                                    Contacto: 21492056 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Universal</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Eduardo Mondlane.3312 |
                                                                                    Contacto: 21404820 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Alto-maé</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Eduardo Mondlane.2542 |
                                                                                    Contacto: 21404239 |
                                                                                    E-mail: alcidio.cavele@farmac.co.mz
                                                                                    / vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Vitália</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Patrice Lumumba, 1116 |
                                                                                    Contacto: 21326070 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Victória</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Mao-Tsé Tung 1556 |
                                                                                    Contacto: 21416510 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Estrela</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Eduardo Mondlane.2542 |
                                                                                    Contacto: 21325192 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia  Internacional
                                                                            </h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Karl Marx.168 |
                                                                                    Contacto: 21325113 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Central</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Karl Marx Nº.426 |
                                                                                    Contacto: 21323893 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Normal</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 25 de Setembro,1686 |
                                                                                    Contacto: 21324801 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Moçambique</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 24 de Julho,625 |
                                                                                    Contacto: 21323830 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Optiworld</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: E. E. Farmac Farmácia
                                                                                    Jardim | Contacto: 21475178 |
                                                                                    E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Farmais</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 24 de Julho ,Centro
                                                                                    Comercial Polana Shopping Nº 11 |
                                                                                    Contacto:
                                                                                    856161000 | E-mail:
                                                                                    farmais.clinicalaboratorio@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro Aeroporto B, Q Nº
                                                                                    45, Av de Moçambique, Nº 21 |
                                                                                    Contacto:
                                                                                    848407793 | E-mail:
                                                                                    egefarmoz@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África IV</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro de Maxaquene C, Rua
                                                                                    Central Nº628 | Contacto: 848407793
                                                                                    |
                                                                                    E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Mãe África</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro das Mahotas, Av.
                                                                                    Cardeal Alexandre, Q Nº09, Casa Nº38
                                                                                    |
                                                                                    Contacto: 848407793 |
                                                                                    E-mail: egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África de Paz</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro do Albazine, Av. Dom
                                                                                    Alexandre Maria dos Santos |
                                                                                    Contacto:
                                                                                    848407793 | E-mail:
                                                                                    egefarmoz@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África I</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Acordos de Lusaka |
                                                                                    Contacto: 848407793 | E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África Five</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro Luís Cabral - Av.
                                                                                    Namaacha | Contacto: 848407793 |
                                                                                    E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África III</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro do Zimpeto Drive In,
                                                                                    Av. de Moçambique Nº 652 | Contacto:
                                                                                    848407793 | E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Maria Elisa – Maputo Beach
                                                                                Front</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro Costa do Sol, Av.
                                                                                    Marginal- Maputo | Contacto: 87 194
                                                                                    4848 |
                                                                                    E-mail:
                                                                                    f.mariaelisa@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Maria Elisa</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Kenneth Kaunda, Maputo
                                                                                    | Contacto: 87 151 8222 | E-mail:
                                                                                    f.mariaelisa@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Khotso</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Angola, parcela No
                                                                                    776/1, Bairro da Mafalala |
                                                                                    Contacto:
                                                                                    848880777 / 877777756 |
                                                                                    E-mail: farmaciakhotso@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Laboratório</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>LAC - Laboratório </h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. Agostinho Neto, Nº
                                                                                    1997 R/C | Contacto: 258 843988721 /
                                                                                    21300026
                                                                                    / 823135210 |
                                                                                    E-mail:
                                                                                    isidrongove@lac.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Laboratório Joaquim Chaves</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 24 de Julho Nº 382, R/C
                                                                                    - Polana Cimento | Contacto:
                                                                                    21491836 /
                                                                                    21493663 / 24418135
                                                                                    |
                                                                                    E-mail:
                                                                                    ana.nhaca@jcs.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Laboratório Lancet - Moçambique</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. António Simbine Nº 211
                                                                                    | Contacto: 258 21483900/15 /
                                                                                    823231375
                                                                                    |
                                                                                    E-mail: isidrongove@lac.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Medcare Diagnostics</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Kamba Simango Nº 71 |
                                                                                    Contacto: 878334885 | E-mail:
                                                                                    info@medcaresdiagnostics.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Ópticlínica</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. Mao Tsé-Tung N º 533 |
                                                                                    Contacto: 258 21497905 | E-mail:
                                                                                    geral@opticlinica.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Óptica J3 Serviços</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 25 de Setembro Nº 1305,
                                                                                    Bairro Central | Contacto: 258
                                                                                    831075595 | E-mail:
                                                                                    opticaj3@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Óptica J3 Serviços</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. 25 de Setembro Jat IV |
                                                                                    Contacto: 258 831075595 |
                                                                                    E-mail: opticaj3@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Óptica J3 Serviços</h5>
                                                                            <div class="sub-content">
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Shoprite Maputo, Loja
                                                                                        11 | Contacto: 258 831075600 |
                                                                                        E-mail:
                                                                                        opticaj3@gmail.com</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica Zurique</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Julius Nyerere, Nº
                                                                                        64 R/C | Contacto: 258 874061560
                                                                                        /
                                                                                        824061560 | E-mail:
                                                                                        optica.zurique@gmail.com</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica Universal</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Julius Nyerere, Nº
                                                                                        2986 | Contacto: 258 823126081 |
                                                                                        E-mail:
                                                                                        universaloptical.mz@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Stop Óptica</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Tanzânia, 39-A,
                                                                                        Alto Maé | Contacto: 258
                                                                                        21408506 | E-mail:
                                                                                        gagendrarrhzi@yahoo.com.br
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>UniÓptica</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Rua Da Sé, Nº 114, Loja
                                                                                        8, Hotel Rovuma | Contacto: 258
                                                                                        21305698
                                                                                        / 827720210 | E-mail:
                                                                                        unioptica@Yahoo.com.br</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Maputo Optometrista, LDA</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. 24 de Julho, n
                                                                                        1458/A, R/C, Sede| Contacto: 21
                                                                                        328 598 / 86
                                                                                        7111144 / 82 711 0144 |
                                                                                        E-mail: optomsmaputo@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>
                                                                                    Maputo Optometrista, LDA
                                                                                </h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Eduardo Mondlane,
                                                                                        Prédio Cinema Charlot, Nº 2734,
                                                                                        R/C |
                                                                                        Contacto: 87 4569704 / 82
                                                                                        456
                                                                                        9704 / 84 899 1228 | E-mail:
                                                                                        optomsmaputo@gmail.com </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Maputo Optometrista, LDA</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. 25 de Setembro, esq
                                                                                        com Guerra Popular, n 11, R/C |
                                                                                        Contacto:
                                                                                        86 1072999 / 83 107
                                                                                        2996 / 84 602 7323 | E-mail:
                                                                                        optomsmaputo@gmail.com </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Maputo Optometrista, LDA</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. De Moçambique,
                                                                                        Zimpeto Palm Square Nº 20 |
                                                                                        Contacto: 86
                                                                                        6174305 / 84 617 4305 / 82
                                                                                        056 7882 | E-mail:
                                                                                        optomsmaputo@gmail.com </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica Opticentro</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Vladimir Lenine
                                                                                        2791 R/C Praça da OMM |
                                                                                        Contacto: 258
                                                                                        21418848 | E-mail:
                                                                                        rsantos@medis.co.mz</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica e Ouriversaria Imperial</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. 25 de Setembro Nº
                                                                                        1711/17 | Contacto: 258
                                                                                        826264260 /
                                                                                        21325325 | E-mail:
                                                                                        opticaimperial@tvcabo.co.mz
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptitália</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Julius Nyerere, Nº
                                                                                        466, Maputo | Contacto: 258
                                                                                        845766241 /
                                                                                        826784374 |
                                                                                        E-mail:
                                                                                        comercial1@optitalia.co.mz</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Optitália 2</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. 24 de Julho, 1155
                                                                                        Edf. Shopping 24, Lj. 3 |
                                                                                        Contacto: 258
                                                                                        821218703 | E-mail:
                                                                                        comercial1@optitalia.co.mz</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica Visual</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. 24 de Julho, Nº
                                                                                        726, R/C | Contacto: 258
                                                                                        21328820 | E-mail:
                                                                                        dbagorro@opticavisual.co.mz</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Sodis Optocentroc</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Vladimir Lenine, Nº
                                                                                        2791 | Contacto: 826279921 /
                                                                                        21402508 |
                                                                                        E-mail:
                                                                                        isilda.y@dragarwal.com</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Hospital dos Olhos_Dr Argawal eye's
                                                                                    Hospital</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. 3 de Fevereiro Nº
                                                                                        1539 | Contacto: 258 846089314 |
                                                                                        E-mail: isilda.y@dragarwal.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Hospital dos Olhos_Dr Argawal eye's
                                                                                    Hospital</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Rua Rio Inhamiara, Nº
                                                                                        1342 Maputo | Contacto: 258
                                                                                        846089314 |
                                                                                        E-mail:
                                                                                        vision.baia@visioncentrooptico.co.mz
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Vision - Centro Óptico</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Rua da Kassuende nº140,
                                                                                        R/C | Contacto: 258 844996799 |
                                                                                        E-mail:
                                                                                        profissionaisdaopticainfo@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Profissionais da Óptica, Lda.</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. 24 de Julho, 2607 -
                                                                                        R/C | Contacto: 258 21305280 |
                                                                                        E-mail:
                                                                                        profissionaisdaopticainfo@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Profissionais da Óptica, Lda.</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Eduardo Mondlane,
                                                                                        1656 - R/C | Contacto: 258
                                                                                        21320611 |
                                                                                        E-mail:
                                                                                        profissionaisdaopticainfo@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Profissionais da Óptica, Lda.</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Rua de Marginal,
                                                                                        Baia Mall, Bairro Triunfo |
                                                                                        Contacto: 258
                                                                                        848103161 | E-mail:
                                                                                        profissionaisdaopticainfo@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica Única</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Filipe Samuel
                                                                                        Magaia, Nº 665 | Contacto: 258
                                                                                        846138161 |
                                                                                        E-mail:
                                                                                        zahidishankhan@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica Única</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Eduardo Mondlane |
                                                                                        Contacto: 258 846138161 |
                                                                                        E-mail:
                                                                                        zahidishankhan@gmail.com</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Optiworld</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Rua dos Desportistas,
                                                                                        Centro Comercial Ed. JAT 6 |
                                                                                        Contacto: 258
                                                                                        850500397 | E-mail:
                                                                                        geral@opti-world.com</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica Boa Vista</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Vladimir Lenine |
                                                                                        Contacto: 258 87023388 | E-mail:
                                                                                        paulmaylel@gmail.com</p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Optimax - Clínica de Optometria</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. 24 de Julho Nº 1150
                                                                                        | Contacto: 258 849408856 |
                                                                                        E-mail:
                                                                                        optimaxlda@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Óptica Grandvision </h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Av. Vladimir Lenine
                                                                                        R/C, Maputo | Contacto: 258
                                                                                        872725416 |
                                                                                        E-mail:
                                                                                        Opticagrandvisionmoz@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="sub-content">
                                                                                <h5>Clean Vision</h5>
                                                                                <div class="accordion-body">
                                                                                    <p>Endereço: Rua Da Imprensa -
                                                                                        Maputo Shopping, Bairro Central,
                                                                                        No85, loja
                                                                                        308,
                                                                                        Kampfumu, Maputo
                                                                                        Cidade | Contacto: 840308800 |
                                                                                        E-mail:
                                                                                        cleanvisionlimitada@gmail.com
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Matola</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Sunshine Hospitals Matola</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. 5 de Fevereiro Nº 750
                                                                                    - Matola | Contacto: 258 821784072 /
                                                                                    21784072 | E-mail:
                                                                                    accounts@sunshinehospitals.co.mz /
                                                                                    recepcao.sunshine@outlook.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Netcare Golden Clinic</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Mozal, Rua da Mozal |
                                                                                    Contacto: 258 847500000 / 864443888
                                                                                    | E-mail:
                                                                                    netcare.clinic@outlook.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica da Família</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Matola Rio Rua da Mozal Cel
                                                                                    Nº 1 Q1 Boane | Contacto: 864167451
                                                                                    /
                                                                                    857066852 |
                                                                                    E-mail:
                                                                                    sharon@christianfamilyclinic.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Centro de Saúde Privado Vida Feliz </h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Josina Machel Nº 1874.
                                                                                    Machava Sede | Contacto: 844346772 /
                                                                                    868620553 |
                                                                                    E-mail:
                                                                                    hlife054@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Fomento</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Matola Fomento | Contacto:
                                                                                    258 821783534 | E-mail:
                                                                                    williamsholdinglda@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clidis Matola</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua Dr. Nkutumula Nº 511.
                                                                                    Matola | Contacto: 84/879581057 |
                                                                                    E-mail:
                                                                                    clidis@clidis.co.mz /
                                                                                    Carminda.Macedo@clidis.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Fleming</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: AV. Patrice Lumumba Nº 724,
                                                                                    Matola Fomento | Contacto: 82 088
                                                                                    974 2
                                                                                    | E-mail:
                                                                                    clinicaflemin1@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Móvel Vida Check up</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Parque Industrial de
                                                                                    Beluluane - Mozal | Contacto: 258
                                                                                    823202928 /
                                                                                    875202928 | E-mail:
                                                                                    mirza.ussene@vidacheckup.co.mz</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Centro Médico Hanyisa</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Machava KM15, Rua Josina
                                                                                    Machel, parcela nº4 | Contacto:
                                                                                    842602508
                                                                                    / 875002508 |
                                                                                    E-mail:
                                                                                    nadmatusse@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas Dentárias</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Dentária Família Real</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. das Indústrias talhão
                                                                                    Nº 5569 Machava | Contacto: 258
                                                                                    848766432
                                                                                    | E-mail:
                                                                                    marygh2010@hotmail.es
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Top tier Clínica Dentária</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Namaacha Nº 58/2016 |
                                                                                    Contacto: 864167451 / 857066852 |
                                                                                    E-mail:
                                                                                    toptier.clinica@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Dental Care</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Samora Machel, Nº 1205
                                                                                    N4 | Contacto: 258 822958267 /
                                                                                    849517391
                                                                                    |
                                                                                    E-mail:
                                                                                    dentalcare.clinicadentaria@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Mikail</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Rua Dr. Nkutumula nº 550,
                                                                                    cidade da Matola | Contacto:
                                                                                    844205450 |
                                                                                    E-mail:
                                                                                    langa.brigida@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Alpha & Omega</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Samora Machel - Matola,
                                                                                    bombas | Contacto: 852333607 |
                                                                                    E-mail:
                                                                                    gcaneca@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África Mãe</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro Patrice Lumumba,
                                                                                    Machava Nº 64 | Contacto: 848407793
                                                                                    |
                                                                                    E-mail: egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">>
                                                                            <h5>Farmácia África de Deus</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. das Indústrias, Nº3698,
                                                                                    Bairro da Machava | Contacto:
                                                                                    848407793
                                                                                    |
                                                                                    E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África dos Santos</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro de Bunhiça, Av.
                                                                                    Josina Machel | Contacto: 848407793
                                                                                    |
                                                                                    E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África Sixi</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro Nkobe | Contacto:
                                                                                    848407793 | E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África Únida</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro Matiquete, Matola H,
                                                                                    Cidade da Matola | Contacto:
                                                                                    848407793
                                                                                    | E-mail:
                                                                                    egefarmoz@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia África II</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro T3 | Contacto:
                                                                                    848407793 | E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Tsivene</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro Cumbeza, Q04, Célula
                                                                                    "B", Rua do Boquisso | Contacto:
                                                                                    848407793 | E-mail:
                                                                                    egefarmoz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Maputo Optometrista, LDA</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av: União Africana, Parque
                                                                                    dos Poetas, n V03, 1 andar |
                                                                                    Contacto: 87
                                                                                    1073994 / 83 107
                                                                                    2994
                                                                                    / 84 806 5893 | E-mail:
                                                                                    optomsmaputo@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Maputo Optometrista, LDA</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: EN4, Bairro Mussumbuluco,
                                                                                    Novare Matola Mall, Matola |
                                                                                    Contacto: 86
                                                                                    8715732 / 84 871
                                                                                    5732
                                                                                    | E-mail:
                                                                                    optomsmaputo@gmail.com </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Profissionais da Óptica, Lda.</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Cidade da Matola, Av.
                                                                                    Samora Machel, nº 324 | Contacto:
                                                                                    258
                                                                                    845005789 |
                                                                                    E-mail:
                                                                                    profissionaisdaopticainfo@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Profissionais da Óptica, Lda.</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro Malhampsene, nº
                                                                                    3380- 845005789 | Contacto: 258
                                                                                    845005789 |
                                                                                    E-mail:
                                                                                    profissionaisdaopticainfo@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Óptica J3 Serviços</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. União Africana - Parque
                                                                                    dos Poetas | Contacto: 258 831075957
                                                                                    |
                                                                                    E-mail:
                                                                                    opticaj3@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Óptica J3 Serviços</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Shoprite Matola, Loja 16 |
                                                                                    Contacto: 258 831075956 | E-mail:
                                                                                    opticaj3@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Gaza</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Centro Médico Privado a Esperança</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço:Av. Samora Machel, Nº 365
                                                                                    Bairro 7 | Contacto: 258 847829709 /
                                                                                    875829704 | E-mail:
                                                                                    cmpaesperancamaxixe@gmail.co
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Top tier Clínica Dentária</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Centro de Saúde Privado
                                                                                    Vida Saudável | Contacto: 258
                                                                                    827465610 /
                                                                                    842172563 | E-mail:
                                                                                    Clinicavidasaudavel2014@Gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas Dentárias</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Dentária El Francês</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Rua do Hospital Provincial
                                                                                    de Xai-Xai, Bairro 9 | Contacto: 258
                                                                                    876858640/844016721 |
                                                                                    E-mail:
                                                                                    clinicaelfrances@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia xai-xai</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. Samora Machel, dentro
                                                                                    da igreja católica. Xai - Xai |
                                                                                    Contacto:
                                                                                    258 845039898/
                                                                                    875039898 | E-mail:
                                                                                    lissaneclinicaoptometrica@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Optométrica Lissane</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. Samora Machel, dentro
                                                                                    da igreja católica. Xai - Xai |
                                                                                    Contacto:
                                                                                    258 845039898/
                                                                                    875039898 | E-mail:
                                                                                    lissaneclinicaoptometrica@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Inhambane</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Boa Vida</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. Tsond Zuene Nº 169
                                                                                    Vilânculos | Contacto: 258 847028726
                                                                                    |
                                                                                    E-mail:
                                                                                    reception.boavidaclinic.mz@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Mais Saúde</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Rua do Município,
                                                                                    Vilânculos | Contacto: 258 876894606
                                                                                    | E-mail:
                                                                                    clinicamaissaude.mz@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>CID</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro central Rua da
                                                                                    Agricultura, Vilânculos | Contacto:
                                                                                    258
                                                                                    841326256 / 874564016 |
                                                                                    E-mail:
                                                                                    ccidlimitada@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>Centro de Saude Privado Boa Vida</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Bairro 19 de Outubro, Vila
                                                                                    Municipal de Vilânculos | Contacto:
                                                                                    258
                                                                                    822560474 /
                                                                                    845131490 | E-mail:
                                                                                    reception.boavidaclinic.mz@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínica Dentárias</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Clínica Dentária Dental Home</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. Acordos de Lusaka,
                                                                                    397. Inhambane | Contacto: 258
                                                                                    823520967 /
                                                                                    842992853 | E-mail:
                                                                                    dentalhome.mz@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Farmácia Massamby</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Rua do Matadouro |
                                                                                    Contacto: 258 844163364 | E-mail:
                                                                                    taniamassamby25@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="sub-content">
                                                                            <h5>E. E. Farmac Farmácia Inhambane</h5>
                                                                            <div class="accordion-body">
                                                                                <p>Endereço: Av. Acordos Lusaka, Nº 92 |
                                                                                    Contacto: 293/20234 | E-mail:
                                                                                    alcidio.cavele@farmac.co.mz /
                                                                                    vieira.cumbi@farmac.co.mz
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                    <div class="sub-0">
                                                                        <div class="sub-content">
                                                                            <h5>Profissionais da Óptica, Lda.</h5>
                                                                            <div class="accordion-body">
                                                                                <p>
                                                                                    Endereço: Av. Américo Boavida R/C
                                                                                    B.Chambone. Maxixe | Contacto:
                                                                                    258849173031
                                                                                    |
                                                                                    E-mail:
                                                                                    profissionaisdaopticainfo@gmail.com
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="region0">
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Sofala</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas Dentárias</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Manica</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas Dentárias</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Tete</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas Dentárias</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Zambézia</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="region0">
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Nampula</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas e Hospitais</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas Dentárias</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Laboratório</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Cabo Delgado</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Óptica</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Niassa</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Clínicas</p>
                                                                    </div>
                                                                </div>
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>Farmácia</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="region0">
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>África do Sul</p>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Brasil</p>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Índia</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="region0">
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Alll Around Medical Solution</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>E-mail: info@allmedicsolutions.com</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="list-item">
                                                            <div class="item0">
                                                                <p>Medi Response</p>
                                                            </div>
                                                            <div class="item1">
                                                                <div class="item2">
                                                                    <div>
                                                                        <p>E-mail: filipa.cabaco@mediresponse.co.mz</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
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
