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

<body style="background: #e1e1e1;">
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
                  <img src="../assets/img/Icones_Contacto.png" width="30" height="37" alt="">
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
              <label for=""><a href="mailto:servicoaocliente@indicoseguros.co.mz">Email</a></label>
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
              <label for=""><a href="../empresas/automevel-dp-basico.html">Automóvel</a></label>
            </div>
          </li>
          <li>
            <div class="icon me-2">
              <i class="fas fa-caret-right"></i>
            </div>
            <div class="text">
              <label for=""><a href="../particulares/viagem.html">Viagem</a></label>
            </div>
          </li>
          <li>
            <div class="icon me-2">
              <i class="fas fa-caret-right"></i>
            </div>
            <div class="text">
              <label for=""><a href="../particulares/funeral.html">Funeral</a></label>
            </div>
          </li>
          <li>
            <div class="icon me-2">
              <i class="fas fa-caret-right"></i>
            </div>
            <div class="text">
              <label for=""><a href="../empresas/acidente-trabalho.html">Acidente de Trabalho</a></label>
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
          style="background-image: url(../assets/img/background.png); height: 50vh;">
          <img src="../assets/img/background.png" class="w-100" alt="" />
        </div>
      </div>
    </div>
  </section>
  <main>
    <section class="box">
      <div class="box-card">
        <div class="content-herder">
          <h2>Prestadores Médicos</h2>
          <p>Veja aqui a rede de prestadores médicos, de acordo com a região que pretende ter a assistência de saúde</p>
        </div>
        <div class="card-content">
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Maputo</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Matola</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Gaza</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Inhambane</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Sofala</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Manica</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Tete</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Zambézia</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Nampula</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Cabo Delgado</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl">
            <div class="first-lvl">
              <p>Niassa</p>
            </div>
            <div class="img-button"></div>
          </a>
          <a class="card-small first-lvl special">
            <div class="first-lvl">
              <p>Emergências
              </p>
            </div>
            <div class="img-button"></div>
          </a>
        </div>
        <div class="card-content sub">
          <div class="sub0 ">
            <div class="btn_indico ">
              <p>Clínicas e Hospitais <span>(31)</span></p>
            </div>
            <div class="btn_indico">
              <p>Clínicas Dentárias <span>(21)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia <span>(39)</span></a>
            </div>
            <div class="btn_indico">
              <p>Laboratório<span>(4)</span></a>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(32)</span></a>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(9)</span></a>
            </div>
            <div class="btn_indico">
              <p>Clínicas Dentárias <span>(3)</span></a>
            </div>
            <div class="btn_indico">
              <p>Farmácia <span>(9)</span></a>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(6)</span></a>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(2)</span></p>
            </div>
            <div class="btn_indico">
              <p>Clínicas Dentárias <span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia <span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(1)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(4)</span></p>
            </div>
            <div class="btn_indico">
              <p>Clínicas Dentárias <span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia <span>(2)</span></p>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(1)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(3)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia<span>(13)</span></p>
            </div>
            <div class="btn_indico">
              <p>Laboratório <span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(1)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Clínica Dentária <span>(2)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia<span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(1)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(7)</span></p>
            </div>
            <div class="btn_indico">
              <p>Clínica Dentária <span>(2)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia<span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(5)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(2)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia<span>(6)</span></p>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(1)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(11)</span></p>
            </div>
            <div class="btn_indico">
              <p>Clínica Dentária <span>(4)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia<span>(7)</span></p>
            </div>
            <div class="btn_indico">
              <p>Laboratório<span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(3)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(6)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia<span>(2)</span></p>
            </div>
            <div class="btn_indico">
              <p>Óptica<span>(4)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Clínicas<span>(1)</span></p>
            </div>
            <div class="btn_indico">
              <p>Farmácia<span>(2)</span></p>
            </div>
          </div>
          <div class="sub0">
            <div class="btn_indico ">
              <p>Emergências Médicas e Evacuação<span>(2)</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card-content-list ">
        <div class="accordion" id="accordionExample">
          <div class="sub01 ">
            <div class="sub02 ">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>Hospital Privado de Maputo</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua Rio Inhamiara, SommerschieldII | Contacto: +258 84 303 0968 | E-mail:
                      Midhun.Kaishnon@lenmedmaputo.co.mz/CreditControl.01@lenmedmaputo.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>Clínica de Sommerschield</h5>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Rua da Frelimo 52 | Contacto: +258 21493924/6 82356240 | E-mail:
                      clinicasommerschield@gmail.com / nonielavilanculos@yahoo.com.br</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5>AYAmed Solutions</h5>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Tomás Ribeiro n° 2 Bairro da Coop, Maputo. | Contacto: 849888000/01 / 879888001 |
                      E-mail: geral@ayamed.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h5>Instituto do Coração - ICOR</h5>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Kenneth Kaunda, n° 1111, B.Sommerschield | Contacto: 258 21411000 /843274800 |
                      E-mail:
                      filipa.fernandes@icor.co.mz / mauro.neves@icor.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h5>Clínica Privada de Maputo - Clinicare</h5>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Ângelo Azarias Chichava,Cp.1676, Nº50 | Contacto: 258 21498215 / 823066795 |
                      E-mail:
                      jameel@clinicare.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h5>Centro Médico Adriano Tivane</h5>
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Ahmed Sekou Touré, Nº 466 | Contacto: 258 846052708 / 21416441 | E-mail:
                      cmp.adrianotivane@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <h5>Centro Clínico Amparo</h5>
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Kenneth Kaunda Nº 624/640 | Contacto: 258 873379007 | E-mail:
                      info@clinicaamparo.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <h5>GM Consultórios</h5>
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Mártires da Machava, Nº 905 | Contacto: 258 847295826 | E-mail:
                      gmconsultorios@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <h5>CoopMed</h5>
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Emília Daússe | Contacto: 258 843000013 | E-mail: Henriquesibraimo@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    <h5>
                      Realife (Consultório de Fisioterapia)
                    </h5>
                  </button>
                </h2>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Francisco Orlando Magumbwe 945 R/C | Contacto: 258 844098621 / 21487601 | E-mail:
                      realife@realife.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingEleven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                    <h5>Sunshine Hospitals Maputo</h5>
                  </button>
                </h2>
                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av Eduardo Mondlane Nº 1866 | Contacto: 258 823221830 / 820066850 | E-mail:
                      accounts@sunshinehospitals.co.mz / recepcao.sunshine@outlook.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwelve">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                    <h5>Clínica Vida Plena</h5>
                  </button>
                </h2>
                <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Agostinho Neto, Nº 1194 R/C | Contacto: 258 878264360 / 820066850 | E-mail:
                      nelma.guila@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThirteen">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                    <h5>Consultório Bem - Estar</h5>
                  </button>
                </h2>
                <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Anguane, 292 | Contacto: 258 843210980 / 824870571 / 873210999 | E-mail:
                      consultoriobemestarl@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading0">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                    <h5>SS-RIS</h5>
                  </button>
                </h2>
                <div id="collapse0" class="accordion-collapse collapse" aria-labelledby="heading0"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Kwame Nkrumah n◦1546 | Contacto: 258 823092550 | E-mail:
                      ssris.contabilidade@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading1">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                    <h5>Laboratório Joaquim Chaves</h5>
                  </button>
                </h2>
                <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho Nº 382, R/C - Polana Cimento | Contacto: 21491836 / 21493663 / 24418135
                      |
                      E-mail: ana.nhaca@jcs.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading2">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                    <h5>Lac - Clínica</h5>
                  </button>
                </h2>
                <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Agostinho Neto, Nº 1997 R/C | Contacto: 258 843988721 / 21300026 / 823135210 |
                      E-mail:
                      isidrongove@lac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading3">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                    <h5>Peermed</h5>
                  </button>
                </h2>
                <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Karl Marx, 614, R/C | Contacto: 258 843726348 / 873726348 | E-mail:
                      miguelchichava@peermed.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading4">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    <h5>Analgesic Clinic</h5>
                  </button>
                </h2>
                <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladmir Lenine, Nº 2902, Bairro da Coop | Contacto: 258 877338381 / 847338381 |
                      E-mail:
                      recepcao@analgesic.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading5">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    <h5>AJUTEC/ Fisiolab</h5>
                  </button>
                </h2>
                <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho Edificio Shopping da 24 LOJA 22 | Contacto: 258 847969602 / 874854087 |
                      E-mail: ajutecmoz@gmail.com </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading6">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    <h5>Shiffa Hospital</h5>
                  </button>
                </h2>
                <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Malhangalene N°1146 | Contacto: 258 21418320 | E-mail:
                      recepcao@shifaahospital.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading7">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    <h5>Centro Médico Estrela</h5>
                  </button>
                </h2>
                <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Kenneth Kaunda | Contacto: 258 844507032 | E-mail:
                      marketing@centromedicoestrela.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading8">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    <h5>Clínica NeuroVida</h5>
                  </button>
                </h2>
                <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Olof Palme, Nº 563 | Contacto: 258 847257420 | E-mail: neuroclinic@neurovida.org
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading9">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                    <h5>Centro Médico Jotacê</h5>
                  </button>
                </h2>
                <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro costa do Sol, Mapulene - Circular de Maputo Nº 660B/B2 | Contacto: 841871147 /
                      868204562 | E-mail: jotacecons@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading9">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                    <h5>Cubamoz -Reabilitação e serviços, E.I</h5>
                  </button>
                </h2>
                <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Kamba Simango, nº 214, Bairro Sommershield | Contacto: 258846559246 | E-mail:
                      cubamozreabilitacaoeservicosei@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading11">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                    <h5>Clínica Fleming</h5>
                  </button>
                </h2>
                <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Grande Maputo - circular / Bairro de Magoanine B | Contacto: 864422233 | E-mail:
                      clinicaflemin1@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading12">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                    <h5>Icare Medical Center, Lda</h5>
                  </button>
                </h2>
                <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane, n.º 1740 R/C e 1ºandar | Contacto: 85 516 4289 / 21423789 |
                      E-mail:
                      hassan.bader@icare.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading13">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                    <h5>Clinica Lenmed Ponta</h5>
                  </button>
                </h2>
                <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua A, nr. 57, Ponta do Ouro | Contacto: 258 841519023 / 858070881 | E-mail:
                      Midhun.Kaishnon@lenmedmaputo.co.mz/CreditControl.01</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading14">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                    <h5>Consultório Marikel</h5>
                  </button>
                </h2>
                <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua da Guarda Nº 235 | Contacto: 853500003 / 878788247 / 841508300 | E-mail:
                      marikelconsultorio3@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading15">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                    <h5>Lin Medcare</h5>
                  </button>
                </h2>
                <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Maguiguana, nº1949 | Contacto: 844773662 / 829632330 / 21407903 | E-mail:
                      geral@linmedcare.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading16">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                    <h5>Centro de Saúde Privado Laulane</h5>
                  </button>
                </h2>
                <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro de Laulane, Q 48 Nº264 R/C | Contacto: 848880695 | E-mail:
                      alaudinofatima@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading17">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                    <h5>LunaMed - Consultório Mulher</h5>
                  </button>
                </h2>
                <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Emília Daússe Nº1533 | Contacto: 845559746 | E-mail: geral@lunamed.co.mz</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Ney Clínica Dentária</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av: Karl Marx, Nº 478 1º, Esq | Contacto: 258 85 206 8085 | E-mail:
                      clinica.dentaria@ney.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Ney Clínica Dentária</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua da Frelimo nº 52 - Clinica da Sommerschield | Contacto: 258 85 206 8085 | E-mail:
                      clinica.dentaria@ney.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Clínica Dentária Bonito Sorriso</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Rua da Resistência Nº 288 R/C Bairro Central | Contacto: 258826805396 |
                      E-mail: geral@bonitosorriso.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    <h5>Clínica Dente Feliz</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Julius Nyerere 1º andar | Contacto: 258 823905810/ 843125590 | E-mail:
                      nadfortes1@hotmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Consultório Dentário Sommerschield Sparkle</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Paulo Samuel Kankhomba, Nº 728 | Contacto: 258 21303819 / 828017360 | E-mail:
                      sparkle.cdsl@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Clínica Dentária Xonguissa Tinyo</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladimir Lenine | Contacto: 258 850475690 | E-mail:
                      xonguissatinyo@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading07">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5>House Clinic</h5>
                  </button>
                </h2>
                <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladimir Lenine 2015, Maputo | Contacto: 258 826838111 | E-mail:
                      elopes@houseclinic.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading08">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                    <h5>Clínica Mais Sorridente</h5>
                  </button>
                </h2>
                <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="heading08"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Paulo Samuel Kankhomba, Nº 1024 | Contacto: 258 21303819 / 828017360 | E-mail:
                      maissorridente@tvcabo.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading09">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                    <h5>Ortho Excellence</h5>
                  </button>
                </h2>
                <div id="collapse09" class="accordion-collapse collapse" aria-labelledby="heading09"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Base Ntchinga Nº 349 | Contacto: 258 844052140 / 21417907 | E-mail:
                      orthoexcellence.recepcao@tvcabo.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading010">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse010" aria-expanded="false" aria-controls="collapse010">
                    <h5>
                      Denta Med
                    </h5>
                  </button>
                </h2>
                <div id="collapse010" class="accordion-collapse collapse" aria-labelledby="heading010"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Francisco Orlando Magumbwe Nº 954 | Contacto: 258 823250040 | E-mail:
                      dentamed@tmcel.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading011">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse011" aria-expanded="false" aria-controls="collapse011">
                    <h5>Consultório Dentário Dom Orione</h5>
                  </button>
                </h2>
                <div id="collapse011" class="accordion-collapse collapse" aria-labelledby="heading011"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. de Mocambique Nº 8320, Bairro do Zimpeto | Contacto: 258 875572011 | E-mail:
                      crdomoriorre@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading012">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse012" aria-expanded="false" aria-controls="collapse012">
                    <h5>Dental Dream</h5>
                  </button>
                </h2>
                <div id="collapse012" class="accordion-collapse collapse" aria-labelledby="heading012"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Mao Tsé-Tung 911 R/C, Maputo | Contacto: 258 847476695 | E-mail:
                      dentaldream@tvcabo.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading013">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse013" aria-expanded="false" aria-controls="collapse013">
                    <h5>Smile Care</h5>
                  </button>
                </h2>
                <div id="collapse013" class="accordion-collapse collapse" aria-labelledby="heading013"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Contacto: 258 840116084 | E-mail:
                      smilecaremz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading014">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse014" aria-expanded="false" aria-controls="collapse014">
                    <h5>Dental Care</h5>
                  </button>
                </h2>
                <div id="collapse014" class="accordion-collapse collapse" aria-labelledby="heading014"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 25 de Setembro Nº 916 1 Andar | Contacto: 258 21303386 | E-mail:
                      dentalcare.clinicadentaria@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading015">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse015" aria-expanded="false" aria-controls="collapse015">
                    <h5>Dental Care</h5>
                  </button>
                </h2>
                <div id="collapse015" class="accordion-collapse collapse" aria-labelledby="heading015"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Fernando Ganhão Nº 100 | Contacto: 258 825239560 / 842567181 |
                      E-mail: dentalcare.clinicadentaria@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading016">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse016" aria-expanded="false" aria-controls="collapse016">
                    <h5>Brilho Dental</h5>
                  </button>
                </h2>
                <div id="collapse016" class="accordion-collapse collapse" aria-labelledby="heading016"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Base Ntchinga Nº 349 | Contacto: 258 868738543 | E-mail:
                      brilhodental@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading017">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse017" aria-expanded="false" aria-controls="collapse17">
                    <h5>Bio Dente</h5>
                  </button>
                </h2>
                <div id="collapse017" class="accordion-collapse collapse" aria-labelledby="heading017"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Paiva Couceiro, Nº 94 - 3 Andar, Maputo | Contacto: 258 828123634 /21400408 |
                      E-mail:
                      biodente.clinicalaboratorio@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading018">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse018" aria-expanded="false" aria-controls="collapse018">
                    <h5>Clínica Dentária Mayet</h5>
                  </button>
                </h2>
                <div id="collapse018" class="accordion-collapse collapse" aria-labelledby="heading018"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Amílcar Cabral Nº 985 R/C | Contacto: 258845309142 | E-mail:
                      clinica.mayet@outlook.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading019">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse019" aria-expanded="false" aria-controls="collapse019">
                    <h5>Topdente Clínica Dentária</h5>
                  </button>
                </h2>
                <div id="collapse019" class="accordion-collapse collapse" aria-labelledby="heading019"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Amílcar Cabral Nº 874 R/C | Contacto: 258 841189815/ 878700037 |
                      E-mail: topdente.clinicadentaria@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading020">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse020" aria-expanded="false" aria-controls="collapse020">
                    <h5>Dental Home</h5>
                  </button>
                </h2>
                <div id="collapse020" class="accordion-collapse collapse" aria-labelledby="heading020"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Olof Palme, Maputo | Contacto: 87 299 7777 | E-mail: dentalhomemz@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading021">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse021" aria-expanded="false" aria-controls="collapse021">
                    <h5>Av. Dom Alexandre, Mahotas Shopping Loja 12</h5>
                  </button>
                </h2>
                <div id="collapse021" class="accordion-collapse collapse" aria-labelledby="heading021"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Dom Alexandre, Mahotas Shopping Loja 12 | Contacto: 858893424 | E-mail:
                      eusebiojambaneconsultdent@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Farmácia Renato Ronda</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Da Marginal, Baia Mall, loja G18 | Contacto: 258825252555 | E-mail:
                      farmacia.rronda@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Medis Farmácia Amiga 24</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho, 1155, Edf. Shopping 24, Lj. 23 | Contacto: 258 21320588 | E-mail:
                      ateixeira@medis.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Medis Farmácia Calendula I</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Mao Tsé-Tung, 222/226, Polana | Contacto: 258 21497606 |
                      E-mail: ateixeira@medis.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse04">
                    <h5>Medis Farmácia Calendula II</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane Nº 2078 | Contacto: 258 21310909 | E-mail:
                      ateixeira@medis.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Medis Farmácia Franca</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane, Nº 733 | Contacto: 258 21302955 | E-mail:
                      ateixeira@medis.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Medis Farmácia Malhangalene</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Karl Marx Nº 2063 | Contacto: 258 21302034 | E-mail:
                      ateixeira@medis.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading07">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5>Medis Farmácia Rotunda</h5>
                  </button>
                </h2>
                <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladimir Lenine, 2791 - R/c, Maputo | Contacto: 258 21415693 / 21402508 | E-mail:
                      ateixeira@medis.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading08">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                    <h5>Farmácia Botika</h5>
                  </button>
                </h2>
                <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="heading08"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Kibiriti Diwane | Contacto: 258 0127664 | E-mail:
                      farmacia.botika@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading09">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                    <h5>E. E. Farmac Farmácia Chamanculo </h5>
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="heading09"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua de Zixaxa Nº 567 | Contacto: 21404375 | E-mail: alcidio.cavele@farmac.co.mz /
                      vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading010">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse010" aria-expanded="false" aria-controls="collapse010">
                    <h5>
                      E. E. Farmac Farmácia Galeno
                    </h5>
                  </button>
                </h2>
                <div id="collapse010" class="accordion-collapse collapse" aria-labelledby="heading010"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Salvador Allende Nº 294 | Contacto: 21323605 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading011">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse011" aria-expanded="false" aria-controls="collapse011">
                    <h5>E. E. Farmac Farmácia Tunduro</h5>
                  </button>
                </h2>
                <div id="collapse011" class="accordion-collapse collapse" aria-labelledby="heading011"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Samora Machel, Nº 188 | Contacto: 21324112 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading012">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse012" aria-expanded="false" aria-controls="collapse012">
                    <h5>E. E. Farmac Farmácia Brotero</h5>
                  </button>
                </h2>
                <div id="collapse012" class="accordion-collapse collapse" aria-labelledby="heading012"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Julius Nyerere, Nº 919 | Contacto: 21492447 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading013">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse013" aria-expanded="false" aria-controls="collapse013">
                    <h5>E. E. Farmac Farmácia Nacional</h5>
                  </button>
                </h2>
                <div id="collapse013" class="accordion-collapse collapse" aria-labelledby="heading013"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Joaquim Lapa,201 | Contacto: 21324587 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading014">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse014" aria-expanded="false" aria-controls="collapse014">
                    <h5>E. E. Farmac Farmácia Nova</h5>
                  </button>
                </h2>
                <div id="collapse014" class="accordion-collapse collapse" aria-labelledby="heading014"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladimir Lenine,1296 | Contacto: 21322531 | E-mail: alcidio.cavele@farmac.co.mz /
                      vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading015">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse015" aria-expanded="false" aria-controls="collapse015">
                    <h5>E. E. Farmac Farmácia Higiene</h5>
                  </button>
                </h2>
                <div id="collapse015" class="accordion-collapse collapse" aria-labelledby="heading015"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Karl Marx Nº.1602 | Contacto: 21428674 |
                      E-mail: alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading016">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse016" aria-expanded="false" aria-controls="collapse016">
                    <h5>E. E. Farmac Farmácia Pasteur</h5>
                  </button>
                </h2>
                <div id="collapse016" class="accordion-collapse collapse" aria-labelledby="heading016"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho,3059 | Contacto: 21404130 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading017">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse017" aria-expanded="false" aria-controls="collapse17">
                    <h5>E. E. Farmac Farmácia Polana</h5>
                  </button>
                </h2>
                <div id="collapse017" class="accordion-collapse collapse" aria-labelledby="heading017"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane,276 | Contacto: 21492056 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading018">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse018" aria-expanded="false" aria-controls="collapse018">
                    <h5>E. E. Farmac Farmácia Universal</h5>
                  </button>
                </h2>
                <div id="collapse018" class="accordion-collapse collapse" aria-labelledby="heading018"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane.3312 | Contacto: 21404820 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading019">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse019" aria-expanded="false" aria-controls="collapse019">
                    <h5>E. E. Farmac Farmácia Alto-maé</h5>
                  </button>
                </h2>
                <div id="collapse019" class="accordion-collapse collapse" aria-labelledby="heading019"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane.2542 | Contacto: 21404239 |
                      E-mail: alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading020">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse020" aria-expanded="false" aria-controls="collapse020">
                    <h5>E. E. Farmac Farmácia Vitália</h5>
                  </button>
                </h2>
                <div id="collapse020" class="accordion-collapse collapse" aria-labelledby="heading020"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Patrice Lumumba, 1116 | Contacto: 21326070 | E-mail: alcidio.cavele@farmac.co.mz /
                      vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading021">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse021" aria-expanded="false" aria-controls="collapse021">
                    <h5>E. E. Farmac Farmácia Victória</h5>
                  </button>
                </h2>
                <div id="collapse021" class="accordion-collapse collapse" aria-labelledby="heading021"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Mao-Tsé Tung 1556 | Contacto: 21416510 | E-mail: alcidio.cavele@farmac.co.mz /
                      vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading022">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse022" aria-expanded="false" aria-controls="collapse022">
                    <h5>E. E. Farmac Farmácia Estrela</h5>
                  </button>
                </h2>
                <div id="collapse022" class="accordion-collapse collapse" aria-labelledby="heading022"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane.2542 | Contacto: 21325192 | E-mail: alcidio.cavele@farmac.co.mz /
                      vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading023">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse023" aria-expanded="false" aria-controls="collapse023">
                    <h5>E. E. Farmac Farmácia  Internacional</h5>
                  </button>
                </h2>
                <div id="collapse023" class="accordion-collapse collapse" aria-labelledby="heading023"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Karl Marx.168 | Contacto: 21325113 | E-mail: alcidio.cavele@farmac.co.mz /
                      vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading024">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse024" aria-expanded="false" aria-controls="collapse024">
                    <h5>E. E. Farmac Farmácia Central</h5>
                  </button>
                </h2>
                <div id="collapse024" class="accordion-collapse collapse" aria-labelledby="heading024"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Karl Marx Nº.426 | Contacto: 21323893 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading025">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse025" aria-expanded="false" aria-controls="collapse025">
                    <h5>E. E. Farmac Farmácia Normal</h5>
                  </button>
                </h2>
                <div id="collapse025" class="accordion-collapse collapse" aria-labelledby="heading025"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 25 de Setembro,1686 | Contacto: 21324801 | E-mail: alcidio.cavele@farmac.co.mz /
                      vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading026">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse026" aria-expanded="false" aria-controls="collapse026">
                    <h5>E. E. Farmac Farmácia Moçambique</h5>
                  </button>
                </h2>
                <div id="collapse026" class="accordion-collapse collapse" aria-labelledby="heading026"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho,625 | Contacto: 21323830 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading027">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse027" aria-expanded="false" aria-controls="collapse027">
                    <h5>Optiworld</h5>
                  </button>
                </h2>
                <div id="collapse027" class="accordion-collapse collapse" aria-labelledby="heading027"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: E. E. Farmac Farmácia Jardim | Contacto: 21475178 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading028">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse028" aria-expanded="false" aria-controls="collapse028">
                    <h5>Farmácia Farmais</h5>
                  </button>
                </h2>
                <div id="collapse028" class="accordion-collapse collapse" aria-labelledby="heading028"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho ,Centro Comercial Polana Shopping Nº 11 | Contacto: 856161000 | E-mail:
                      farmais.clinicalaboratorio@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading029">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse029" aria-expanded="false" aria-controls="collapse029">
                    <h5>Farmácia África</h5>
                  </button>
                </h2>
                <div id="collapse029" class="accordion-collapse collapse" aria-labelledby="heading029"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Aeroporto B, Q Nº 45, Av de Moçambique, Nº 21 | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading030">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse030" aria-expanded="false" aria-controls="collapse030">
                    <h5>Farmácia África IV</h5>
                  </button>
                </h2>
                <div id="collapse030" class="accordion-collapse collapse" aria-labelledby="heading030"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro de Maxaquene C, Rua Central Nº628 | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading031">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse031" aria-expanded="false" aria-controls="collapse031">
                    <h5>Farmácia Mãe África</h5>
                  </button>
                </h2>
                <div id="collapse031" class="accordion-collapse collapse" aria-labelledby="heading31"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro das Mahotas, Av. Cardeal Alexandre, Q Nº09, Casa Nº38 | Contacto: 848407793 |
                      E-mail: egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading025">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse025" aria-expanded="false" aria-controls="collapse025">
                    <h5>Farmácia África de Paz</h5>
                  </button>
                </h2>
                <div id="collapse025" class="accordion-collapse collapse" aria-labelledby="heading025"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro do Albazine, Av. Dom Alexandre Maria dos Santos | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading026">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse026" aria-expanded="false" aria-controls="collapse026">
                    <h5>Farmácia África I</h5>
                  </button>
                </h2>
                <div id="collapse026" class="accordion-collapse collapse" aria-labelledby="heading026"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Acordos de Lusaka | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading027">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse027" aria-expanded="false" aria-controls="collapse027">
                    <h5>Farmácia África Five</h5>
                  </button>
                </h2>
                <div id="collapse027" class="accordion-collapse collapse" aria-labelledby="heading027"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Luís Cabral - Av. Namaacha | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading028">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse028" aria-expanded="false" aria-controls="collapse028">
                    <h5>Farmácia África III</h5>
                  </button>
                </h2>
                <div id="collapse028" class="accordion-collapse collapse" aria-labelledby="heading028"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro do Zimpeto Drive In, Av. de Moçambique Nº 652 | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading029">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse029" aria-expanded="false" aria-controls="collapse029">
                    <h5>Farmácia Maria Elisa – Maputo Beach Front</h5>
                  </button>
                </h2>
                <div id="collapse029" class="accordion-collapse collapse" aria-labelledby="heading029"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Costa do Sol, Av. Marginal- Maputo | Contacto: 87 194 4848 | E-mail:
                      f.mariaelisa@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading030">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse030" aria-expanded="false" aria-controls="collapse030">
                    <h5>Farmácia Maria Elisa</h5>
                  </button>
                </h2>
                <div id="collapse030" class="accordion-collapse collapse" aria-labelledby="heading030"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Kenneth Kaunda, Maputo | Contacto: 87 151 8222 | E-mail: f.mariaelisa@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading031">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse031" aria-expanded="false" aria-controls="collapse031">
                    <h5>Farmácia Khotso</h5>
                  </button>
                </h2>
                <div id="collapse031" class="accordion-collapse collapse" aria-labelledby="heading31"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Angola, parcela No 776/1, Bairro da Mafalala | Contacto: 848880777 / 877777756 |
                      E-mail: farmaciakhotso@gmail.com </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>LAC - Laboratório </h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Agostinho Neto, Nº 1997 R/C | Contacto: 258 843988721 / 21300026 / 823135210 |
                      E-mail:
                      isidrongove@lac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Laboratório Joaquim Chaves</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho Nº 382, R/C - Polana Cimento | Contacto: 21491836 / 21493663 / 24418135
                      |
                      E-mail:
                      ana.nhaca@jcs.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Laboratório Lancet - Moçambique</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. António Simbine Nº 211 | Contacto: 258 21483900/15 / 823231375 |
                      E-mail: isidrongove@lac.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    <h5>Medcare Diagnostics</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Kamba Simango Nº 71 | Contacto: 878334885 | E-mail:
                      info@medcaresdiagnostics.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Ópticlínica</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Mao Tsé-Tung N º 533 | Contacto: 258 21497905 | E-mail:
                      geral@opticlinica.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Óptica J3 Serviços</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 25 de Setembro Nº 1305, Bairro Central | Contacto: 258 831075595 | E-mail:
                      opticaj3@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Óptica J3 Serviços</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 25 de Setembro Jat IV | Contacto: 258 831075595 |
                      E-mail: opticaj3@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse43" aria-expanded="false" aria-controls="collapse04">
                    <h5>Óptica J3 Serviços</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Shoprite Maputo, Loja 11 | Contacto: 258 831075600 | E-mail:
                      opticaj3@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Óptica Zurique</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Julius Nyerere, Nº 64 R/C | Contacto: 258 874061560 / 824061560 | E-mail:
                      optica.zurique@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Óptica Universal</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Julius Nyerere, Nº 2986 | Contacto: 258 823126081 | E-mail:
                      universaloptical.mz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading07">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5>Stop Óptica</h5>
                  </button>
                </h2>
                <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Tanzânia, 39-A, Alto Maé | Contacto: 258 21408506 | E-mail:
                      gagendrarrhzi@yahoo.com.br
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading08">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                    <h5>UniÓptica</h5>
                  </button>
                </h2>
                <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="heading08"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Da Sé, Nº 114, Loja 8, Hotel Rovuma | Contacto: 258 21305698 / 827720210 | E-mail:
                      unioptica@Yahoo.com.br</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading09">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                    <h5>Maputo Optometrista, LDA</h5>
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="heading09"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho, n 1458/A, R/C, Sede| Contacto: 21 328 598 / 86 7111144 / 82 711 0144 |
                      E-mail: optomsmaputo@gmail.com </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading010">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse010" aria-expanded="false" aria-controls="collapse010">
                    <h5>
                      Maputo Optometrista, LDA
                    </h5>
                  </button>
                </h2>
                <div id="collapse010" class="accordion-collapse collapse" aria-labelledby="heading010"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane, Prédio Cinema Charlot, Nº 2734, R/C | Contacto: 87 4569704 / 82
                      456
                      9704 / 84 899 1228 | E-mail:
                      optomsmaputo@gmail.com </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading011">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse011" aria-expanded="false" aria-controls="collapse011">
                    <h5>Maputo Optometrista, LDA</h5>
                  </button>
                </h2>
                <div id="collapse011" class="accordion-collapse collapse" aria-labelledby="heading011"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 25 de Setembro, esq com Guerra Popular, n 11, R/C | Contacto: 86 1072999 / 83 107
                      2996 / 84 602 7323 | E-mail:
                      optomsmaputo@gmail.com </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading012">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse012" aria-expanded="false" aria-controls="collapse012">
                    <h5>Maputo Optometrista, LDA</h5>
                  </button>
                </h2>
                <div id="collapse012" class="accordion-collapse collapse" aria-labelledby="heading012"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. De Moçambique, Zimpeto Palm Square Nº 20 | Contacto: 86 6174305 / 84 617 4305 / 82
                      056 7882 | E-mail:
                      optomsmaputo@gmail.com </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading013">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse013" aria-expanded="false" aria-controls="collapse013">
                    <h5>Óptica Opticentro</h5>
                  </button>
                </h2>
                <div id="collapse013" class="accordion-collapse collapse" aria-labelledby="heading013"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladimir Lenine 2791 R/C Praça da OMM | Contacto: 258 21418848 | E-mail:
                      rsantos@medis.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading014">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse014" aria-expanded="false" aria-controls="collapse014">
                    <h5>Óptica e Ouriversaria Imperial</h5>
                  </button>
                </h2>
                <div id="collapse014" class="accordion-collapse collapse" aria-labelledby="heading014"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 25 de Setembro Nº 1711/17 | Contacto: 258 826264260 / 21325325 | E-mail:
                      opticaimperial@tvcabo.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading015">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse015" aria-expanded="false" aria-controls="collapse015">
                    <h5>Óptitália</h5>
                  </button>
                </h2>
                <div id="collapse015" class="accordion-collapse collapse" aria-labelledby="heading015"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Julius Nyerere, Nº 466, Maputo | Contacto: 258 845766241 / 826784374 |
                      E-mail: comercial1@optitalia.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading016">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse016" aria-expanded="false" aria-controls="collapse016">
                    <h5>Optitália 2</h5>
                  </button>
                </h2>
                <div id="collapse016" class="accordion-collapse collapse" aria-labelledby="heading016"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho, 1155 Edf. Shopping 24, Lj. 3 | Contacto: 258 821218703 | E-mail:
                      comercial1@optitalia.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading017">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse017" aria-expanded="false" aria-controls="collapse17">
                    <h5>Óptica Visual</h5>
                  </button>
                </h2>
                <div id="collapse017" class="accordion-collapse collapse" aria-labelledby="heading017"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho, Nº 726, R/C | Contacto: 258 21328820 | E-mail:
                      dbagorro@opticavisual.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading018">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse018" aria-expanded="false" aria-controls="collapse018">
                    <h5>Sodis Optocentroc</h5>
                  </button>
                </h2>
                <div id="collapse018" class="accordion-collapse collapse" aria-labelledby="heading018"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladimir Lenine, Nº 2791 | Contacto: 826279921 / 21402508 | E-mail:
                      isilda.y@dragarwal.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading019">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse019" aria-expanded="false" aria-controls="collapse019">
                    <h5>Hospital dos Olhos_Dr Argawal eye's Hospital</h5>
                  </button>
                </h2>
                <div id="collapse019" class="accordion-collapse collapse" aria-labelledby="heading019"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 3 de Fevereiro Nº 1539 | Contacto: 258 846089314 |
                      E-mail: isilda.y@dragarwal.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading020">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse020" aria-expanded="false" aria-controls="collapse020">
                    <h5>Hospital dos Olhos_Dr Argawal eye's Hospital</h5>
                  </button>
                </h2>
                <div id="collapse020" class="accordion-collapse collapse" aria-labelledby="heading020"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Rio Inhamiara, Nº 1342 Maputo | Contacto: 258 846089314 | E-mail:
                      vision.baia@visioncentrooptico.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading021">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse021" aria-expanded="false" aria-controls="collapse021">
                    <h5>Vision - Centro Óptico</h5>
                  </button>
                </h2>
                <div id="collapse021" class="accordion-collapse collapse" aria-labelledby="heading021"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua da Kassuende nº140, R/C | Contacto: 258 844996799 | E-mail:
                      profissionaisdaopticainfo@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading022">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse022" aria-expanded="false" aria-controls="collapse022">
                    <h5>Profissionais da Óptica, Lda.</h5>
                  </button>
                </h2>
                <div id="collapse022" class="accordion-collapse collapse" aria-labelledby="heading022"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho, 2607 - R/C | Contacto: 258 21305280 | E-mail:
                      profissionaisdaopticainfo@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading023">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse023" aria-expanded="false" aria-controls="collapse023">
                    <h5>Profissionais da Óptica, Lda.</h5>
                  </button>
                </h2>
                <div id="collapse023" class="accordion-collapse collapse" aria-labelledby="heading023"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane, 1656 - R/C | Contacto: 258 21320611 | E-mail:
                      profissionaisdaopticainfo@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading024">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse024" aria-expanded="false" aria-controls="collapse024">
                    <h5>Profissionais da Óptica, Lda.</h5>
                  </button>
                </h2>
                <div id="collapse024" class="accordion-collapse collapse" aria-labelledby="heading024"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Rua de Marginal, Baia Mall, Bairro Triunfo | Contacto: 258 848103161 | E-mail:
                      profissionaisdaopticainfo@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading025">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse025" aria-expanded="false" aria-controls="collapse025">
                    <h5>Óptica Única</h5>
                  </button>
                </h2>
                <div id="collapse025" class="accordion-collapse collapse" aria-labelledby="heading025"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Filipe Samuel Magaia, Nº 665 | Contacto: 258 846138161 | E-mail:
                      zahidishankhan@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading026">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse026" aria-expanded="false" aria-controls="collapse026">
                    <h5>Óptica Única</h5>
                  </button>
                </h2>
                <div id="collapse026" class="accordion-collapse collapse" aria-labelledby="heading026"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane | Contacto: 258 846138161 | E-mail:
                      zahidishankhan@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading027">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse027" aria-expanded="false" aria-controls="collapse027">
                    <h5>Optiworld</h5>
                  </button>
                </h2>
                <div id="collapse027" class="accordion-collapse collapse" aria-labelledby="heading027"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua dos Desportistas, Centro Comercial Ed. JAT 6 | Contacto: 258 850500397 | E-mail:
                      geral@opti-world.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading028">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse028" aria-expanded="false" aria-controls="collapse028">
                    <h5>Óptica Boa Vista</h5>
                  </button>
                </h2>
                <div id="collapse028" class="accordion-collapse collapse" aria-labelledby="heading028"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladimir Lenine | Contacto: 258 87023388 | E-mail:
                      paulmaylel@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading029">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse029" aria-expanded="false" aria-controls="collapse029">
                    <h5>Optimax - Clínica de Optometria</h5>
                  </button>
                </h2>
                <div id="collapse029" class="accordion-collapse collapse" aria-labelledby="heading029"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. 24 de Julho Nº 1150 | Contacto: 258 849408856 | E-mail: optimaxlda@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading030">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse030" aria-expanded="false" aria-controls="collapse030">
                    <h5>Óptica Grandvision </h5>
                  </button>
                </h2>
                <div id="collapse030" class="accordion-collapse collapse" aria-labelledby="heading030"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Vladimir Lenine R/C, Maputo | Contacto: 258 872725416 | E-mail:
                      Opticagrandvisionmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading031">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse031" aria-expanded="false" aria-controls="collapse031">
                    <h5>Clean Vision</h5>
                  </button>
                </h2>
                <div id="collapse031" class="accordion-collapse collapse" aria-labelledby="heading31"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Da Imprensa - Maputo Shopping, Bairro Central, No85, loja 308, Kampfumu, Maputo
                      Cidade | Contacto: 840308800 | E-mail: cleanvisionlimitada@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>



          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>Sunshine Hospitals Matola</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. 5 de Fevereiro Nº 750 - Matola | Contacto: 258 821784072 / 21784072 | E-mail:
                      accounts@sunshinehospitals.co.mz / recepcao.sunshine@outlook.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>Netcare Golden Clinic</h5>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Mozal, Rua da Mozal | Contacto: 258 847500000 / 864443888 | E-mail:
                      netcare.clinic@outlook.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5>Clínica da Família</h5>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Matola Rio Rua da Mozal Cel Nº 1 Q1 Boane | Contacto: 864167451 / 857066852 |
                      E-mail: sharon@christianfamilyclinic.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h5>Centro de Saúde Privado Vida Feliz </h5>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Josina Machel Nº 1874. Machava Sede | Contacto: 844346772 / 868620553 |
                      E-mail:
                      hlife054@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h5>Clínica Fomento</h5>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Matola Fomento | Contacto: 258 821783534 | E-mail:
                      williamsholdinglda@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h5>Clidis Matola</h5>
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Dr. Nkutumula Nº 511. Matola | Contacto: 84/879581057 | E-mail:
                      clidis@clidis.co.mz / Carminda.Macedo@clidis.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <h5>Clínica Fleming</h5>
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: AV. Patrice Lumumba Nº 724, Matola Fomento | Contacto: 82 088 974 2 | E-mail:
                      clinicaflemin1@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <h5>Clínica Móvel Vida Check up</h5>
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Parque Industrial de Beluluane - Mozal | Contacto: 258 823202928 / 875202928 | E-mail:
                      mirza.ussene@vidacheckup.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <h5>Centro Médico Hanyisa</h5>
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Machava KM15, Rua Josina Machel, parcela nº4 | Contacto: 842602508 / 875002508 |
                      E-mail:
                      nadmatusse@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>Clínica Dentária Família Real</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. das Indústrias talhão Nº 5569 Machava | Contacto: 258 848766432 | E-mail:
                      marygh2010@hotmail.es
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>Top tier Clínica Dentária</h5>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Namaacha Nº 58/2016 | Contacto: 864167451 / 857066852 | E-mail:
                      toptier.clinica@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5>Dental Care</h5>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Samora Machel, Nº 1205 N4 | Contacto: 258 822958267 / 849517391 |
                      E-mail: dentalcare.clinicadentaria@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>Farmácia Mikail</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua Dr. Nkutumula nº 550, cidade da Matola | Contacto: 844205450 | E-mail:
                      langa.brigida@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>Farmácia Alpha & Omega</h5>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Samora Machel - Matola, bombas | Contacto: 852333607 | E-mail:
                      gcaneca@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5>Farmácia África Mãe</h5>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Patrice Lumumba, Machava Nº 64 | Contacto: 848407793 |
                      E-mail: egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h5>Farmácia África de Deus</h5>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. das Indústrias, Nº3698, Bairro da Machava | Contacto: 848407793 |
                      E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h5>Farmácia África dos Santos</h5>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro de Bunhiça, Av. Josina Machel | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h5>Farmácia África Sixi</h5>
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Nkobe | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <h5>Farmácia África Únida</h5>
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Matiquete, Matola H, Cidade da Matola | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingEight">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    <h5>Farmácia África II</h5>
                  </button>
                </h2>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro T3 | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingNine">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                    <h5>Farmácia Tsivene</h5>
                  </button>
                </h2>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Cumbeza, Q04, Célula "B", Rua do Boquisso | Contacto: 848407793 | E-mail:
                      egefarmoz@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>Maputo Optometrista, LDA</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av: União Africana, Parque dos Poetas, n V03, 1 andar | Contacto: 87 1073994 / 83 107
                      2994
                      / 84 806 5893 | E-mail:
                      optomsmaputo@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>Maputo Optometrista, LDA</h5>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: EN4, Bairro Mussumbuluco, Novare Matola Mall, Matola | Contacto: 86 8715732 / 84 871
                      5732
                      | E-mail:
                      optomsmaputo@gmail.com </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h5>Profissionais da Óptica, Lda.</h5>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Cidade da Matola, Av. Samora Machel, nº 324 | Contacto: 258 845005789 |
                      E-mail: profissionaisdaopticainfo@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h5>Profissionais da Óptica, Lda.</h5>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Malhampsene, nº 3380- 845005789 | Contacto: 258 845005789 |
                      E-mail:
                      profissionaisdaopticainfo@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <h5>Óptica J3 Serviços</h5>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. União Africana - Parque dos Poetas | Contacto: 258 831075957 | E-mail:
                      opticaj3@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <h5>Óptica J3 Serviços</h5>
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Shoprite Matola, Loja 16 | Contacto: 258 831075956 | E-mail:
                      opticaj3@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>Centro Médico Privado a Esperança</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço:Av. Samora Machel, Nº 365 Bairro 7 | Contacto: 258 847829709 / 875829704 | E-mail:
                      cmpaesperancamaxixe@gmail.co
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>Top tier Clínica Dentária</h5>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Centro de Saúde Privado Vida Saudável | Contacto: 258 827465610 / 842172563 | E-mail:
                      Clinicavidasaudavel2014@Gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>Clínica Dentária El Francês</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua do Hospital Provincial de Xai-Xai, Bairro 9 | Contacto: 258 876858640/844016721 |
                      E-mail:
                      clinicaelfrances@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>E. E. Farmac Farmácia xai-xai</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Samora Machel, dentro da igreja católica. Xai - Xai | Contacto: 258 845039898/
                      875039898 | E-mail:
                      lissaneclinicaoptometrica@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h5>Clínica Optométrica Lissane</h5>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Samora Machel, dentro da igreja católica. Xai - Xai | Contacto: 258 845039898/
                      875039898 | E-mail:
                      lissaneclinicaoptometrica@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Clínica Boa Vida</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Tsond Zuene Nº 169 Vilânculos | Contacto: 258 847028726 | E-mail:
                      reception.boavidaclinic.mz@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Clínica Mais Saúde</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua do Município, Vilânculos | Contacto: 258 876894606 | E-mail:
                      clinicamaissaude.mz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>CID</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro central Rua da Agricultura, Vilânculos | Contacto: 258 841326256 / 874564016 |
                      E-mail:
                      ccidlimitada@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapseTwo">
                    <h5>Centro de Saude Privado Boa Vida</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading-4"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro 19 de Outubro, Vila Municipal de Vilânculos | Contacto: 258 822560474 /
                      845131490 | E-mail:
                      reception.boavidaclinic.mz@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Clínica Dentária Dental Home</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Acordos de Lusaka, 397. Inhambane | Contacto: 258 823520967 / 842992853 | E-mail:
                      dentalhome.mz@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Farmácia Massamby</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua do Matadouro | Contacto: 258 844163364 | E-mail:
                      taniamassamby25@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>E. E. Farmac Farmácia Inhambane</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Acordos Lusaka, Nº 92 | Contacto: 293/20234 | E-mail: alcidio.cavele@farmac.co.mz /
                      vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Profissionais da Óptica, Lda.</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Américo Boavida R/C B.Chambone. Maxixe | Contacto: 258849173031 | E-mail:
                      profissionaisdaopticainfo@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Clínica Avicena</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Beira Av. Poder Popular | Contacto: 258 23327990 | E-mail:
                      avicena.clinic@intra.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Clínica MMQ</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Esturro, Av. Alfredo Lawley, 6 | Contacto: 258 823877850 / 847327026 | E-mail:
                      clinicammq@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Consultório Médico da Beira</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua luís Inácio, Prédio da Emose, Porta Nº34 R/C Chaimite - Beira | Contacto: 844431369
                      | E-mail:
                      consultoriomedico.beira@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>E. E. Farmac Farmácia Manga</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: R.Antigos Correios 296/R/C | Contacto: 23/301236 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>E. E. Farmac Farmácia Flora</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: E. E. Farmac Farmácia Beira | Contacto: 23/322288 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>E. E. Farmac Farmácia Sofala</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane 440/R/C | Contacto: 23/322777 | E-mail:
                      alcidio.cavele@farmac.co.mz /
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    <h5>E. E. Farmac Farmácia Maquinino</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. de Bagamoyo 570/R/C | Contacto: 23/322999 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Farmácia Real</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro do Macurungo, cidade da Beira | Contacto: 87 151 8222 | E-mail:
                      f.mariaelisa@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading010">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse010" aria-expanded="false" aria-controls="collapse010">
                    <h5>Farmácia Mualy</h5>
                  </button>
                </h2>
                <div id="collapse010" class="accordion-collapse collapse" aria-labelledby="heading010"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro da Manga, Cidade da Beira | Contacto: 87 151 8222 | E-mail:
                      f.mariaelisa@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Farmácia Passagem de Nível</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro da Manga, Cidade da Beira | Contacto: 87 151 8222 | E-mail:
                      f.mariaelisa@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading011">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse011" aria-expanded="false" aria-controls="collapse011">
                    <h5>Farmácia Académica</h5>
                  </button>
                </h2>
                <div id="collapse011" class="accordion-collapse collapse" aria-labelledby="heading011"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro do Esturro, Cidade da Beira | Contacto: 87 151 8222 | E-mail:
                      f.mariaelisa@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading07">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5>Farmácia Maria Elisa</h5>
                  </button>
                </h2>
                <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Macute, Cidade da Beira | Contacto: 87 151 8222 | E-mail:
                      f.mariaelisa@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading08">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                    <h5>Farmácia Maria Elisa Ponta-Gêa </h5>
                  </button>
                </h2>
                <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="heading08"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro da Ponta-Gêa, Cidade da Beira | Contacto: 87 151 8222 | E-mail:
                      f.mariaelisa@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading09">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                    <h5>Farmácia Maria Elisa Crystal Box</h5>
                  </button>
                </h2>
                <div id="collapse09" class="accordion-collapse collapse" aria-labelledby="heading09"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Pioneiros, Cidade da Beira | Contacto: 87 151 8222 | E-mail:
                      f.mariaelisa@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>LAC - Laboratório </h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua Aires Ornelas, Nº 450 | Contacto: 258 23327987 | E-mail:
                      isidrongove@lac.co.mz
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Dr Argwal Eye´s Hospital</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua Luís Inácio, Chaimite - Beira | Contacto: 258 843203825 | E-mail:
                      silda.y@dragarwal.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Clínica Fátima</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Avenida Do trabalho | Contacto: 258 25123669 | E-mail:
                      clinicafatima00@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Consultório Dentário Bom Sorriso - Odontolife</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Estrada Nacional n 6 Bairro 4 | Contacto: 866254802/856081532/845585786 | E-mail:
                      info@bomsorriso.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Consultório Dentário Vida Maise</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua Pegivide, Cidade de Chimoio | Contacto: 870782636/879753282 | E-mail:
                      vidamais347@gmail.com/ amuchacona@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>E. E. Farmac Farmácia Chimoio</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Dr. Américo Boavida 265/R/C | Contacto: 251/22332 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Optica Sarai</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. 25 de setembro n. 209 R/C - Ciade de chimoio | Contacto: 824318780 | E-mail:
                      opticasarai@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Consultório Médico Fonte Vida</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Samora Machel/EN7 | Contacto: 258 848893904 / 871321560 | E-mail:
                      recpcaocmfv@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Centro Médico Lunar</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Kenneth Kaunda Nº 445 B. Francisco Manyanga | Contacto: 258 86/ 84 0442473 |
                      E-mail:
                      recepcao@lunar.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Centro Médico Home Care</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Recinto de Oásis Aldeamentos, Bairro Chithatha - Moatize | Contacto: 258843434555 |
                      E-mail:
                      homecare.adm0@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    <h5>Atlas Medclinic</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Mall de Tete Loja Nº 06, Bairro Chingodzi-Matema | Contacto: 258850337108 | E-mail:
                      atlas.contabilidadeint@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Centro Médico Santa Victória</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: EN7, Bairro Matundo, Tete | Contacto: 870000345/846592889 | E-mail:
                      recepcaocmsv@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Clínica Bom Sucesso</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Chingodzi, EN7 | Contacto: 860856934 | E-mail:
                      contabilidade@clinicabomsucesso.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading07">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5>Clínica Embondeiro</h5>
                  </button>
                </h2>
                <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Francisco Manyanga, Av. 25 De Julho, Nº 5 | Contacto: 258843205650 | E-mail:
                      recepcao@cmembondeiro.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Consultório Odontológico Dente Real</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: B. Josina Machel, Rua da O.U.A, Casa Nº 1674 | Contacto: 258853049355 | E-mail:
                      dente.real21@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Mabidente</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Francisco Manyanga | Contacto: 258 2523751/ 844380000 | E-mail:
                      admin@mabident.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>E. E. Farmac Farmácia Tete</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Kenneth Kaunda | Contacto: 252/2277a7 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>óptica J3 Services, Lda</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Kenneth Kaunda, Nº Tali Shoping | Contacto: 258 25223383 / 824783268 | E-mail:
                      opticaj3@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>óptica J3 Services, Lda</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Shoprite Tete Junction, Loja No.2 | Contacto: 258831075598 | E-mail:
                      opticaj3@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Opticlínica 2</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Francisco Mayanga, Av. 25 De Julho, Nº 5 | Contacto: 258843723194 | E-mail:
                      geral@opticlinica.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Optica Sarai</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Eduardo Mondlane, próximo a Radio Moçambique | Contacto: 846789272 | E-mail:
                      opticasarai@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Profissionais da Óptica, Lda.</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Mall de Tete Loja Nº 06, Bairro Chingodzi-Matema | Contacto: 258 849493822/ 25220077 |
                      E-mail:
                      profissionaisdaopticainfo@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Consultorio Bons Sinais</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. 7 de Setembro Nº 516 | Contacto: 867971215 / 840625361 | E-mail:
                      consultoriomedicobonssinaislda@yahoo.com.br
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>VWT - Consultório Médico e Laboratório</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. da Liberdade Nº 243 | Contacto: 878650090/847138010 | E-mail:
                      consultoriomedicoelaboratorio@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Farmácia Central</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Paulo Samuel Kankhomba, 1º Bairro, Unidade 1º de Maio | Contacto: 84 5918420 /
                      865918420 | E-mail:
                      farmaciacentral.almin@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Farmacia Império</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Eduardo Mondlane, 1º Bairro, Unidade 1º de Maio | Contacto: 82 5016700 / 865016700 |
                      E-mail:
                      farmaciaimperio@sapo.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Farmácia Calendula - Quelimane</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Josina Machel, 96/98 | Contacto: 258 24213393 | E-mail:
                      rsantos@medis.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    <h5>E. E. Farmac Farmácia Quelimane</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. 1 de Julho | Contacto: 24/213036 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>E. E. Farmac Farmácia Gurué</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. da República | Contacto: 24/910080 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>E. E. Farmac Farmácia Mocuba</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua Banco Moçambique Nº 38 R/C | Contacto: 24/810182 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Óptica Avenida, Lda</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: 1º Bairro, Unidade 24, Travessa 1 de Julho, Nº 175, R/C | Contacto: 258 84 460 1100 |
                      E-mail:
                      opticavenidalda@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Hospital Privado Sorriso</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua de Sofala, 713 Bairro de Muahivire | Contacto: 849520001 / 262147888 | E-mail:
                      geral@hospitalprivadosorriso.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>MedCare</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Monomotapa, Nº 50 R/C | Contacto: 258 843939390 / 825078818 | E-mail:
                      medcare.mz@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Consultório Saúde Agora</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Eduardo Mondlane, Bairro Bloco 1 Cidade Alta | Contacto: 258 872400014 / 842500001 |
                      E-mail:
                      info@saudeagora.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse0">
                    <h5>Clínica Universitária Lúrio</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Marrere, Rua 4250 | Contacto: 258 872400014 / 842500001 | E-mail:
                      clurio@unilurio.ac.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Clínica Muahivire</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Samora Machel Nº 502 | Contacto: 26214316/+258823930004/843930004/7 | E-mail:
                      clinicmuahivire@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Centro Médico Vitalle Lda.</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Rua Massacre de Homoine, cidade alta, Nacala Porto. | Contacto: 850269631 | E-mail:
                      c.medicovitalle@vitall.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading07">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5>Clínica Vossa Saúde</h5>
                  </button>
                </h2>
                <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua 2533, U/C Muetasse, Bairro de Muahivire, Nampula | Contacto: 848238455 | E-mail:
                      clvosaude@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading08">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                    <h5>Nacala Healthcare</h5>
                  </button>
                </h2>
                <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="heading08"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Eduardo Mondlane Bairro Maiaia, Cidade de Nacala | Contacto: 258 9110110 /
                      845152630 /8406237800 | E-mail:
                      nacalahealthcare@gmail.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading09">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                    <h5>Consultório Médico Arco-Iris</h5>
                  </button>
                </h2>
                <div id="collapse09" class="accordion-collapse collapse" aria-labelledby="heading09"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Urbano Central, Av. Josina Machel, Cidade de Nampula | Contacto:
                      855500059/858050299 | E-mail:
                      cassamogiva@cmarcoiris.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading010">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse010" aria-expanded="false" aria-controls="collapse010">
                    <h5>Hígia Consultores Médico</h5>
                  </button>
                </h2>
                <div id="collapse010" class="accordion-collapse collapse" aria-labelledby="heading010"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Nacala-Porto, Cidade Alta, Bairro Bloco I, Rua Julius Nyerere | Contacto:
                      877999988/855999988 | E-mail:
                      admin@higiacm.com</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading011">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse011" aria-expanded="false" aria-controls="collapse011">
                    <h5>Consultório Médico Ismael Neto</h5>
                  </button>
                </h2>
                <div id="collapse011" class="accordion-collapse collapse" aria-labelledby="heading011"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Mathapue, Rua do Hospital do Ceta, Mutiva – Nacala Porto | Contacto: 870640280 |
                      E-mail:
                      Mufalume.ismail@consultoriomedicoineto.co.mz</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Belo Dente</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Avenida do Trabalho, casa Nº 3143, 1º Andar | Contacto: 258 846835542 / 861737997 |
                      E-mail:
                      belodente.geral@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Dental Health Clinic, Lda (VITTAMED)</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Das FPLM, Bairro de Muhaivire, Nampula. | Contacto: 845670089 / 820901947 | E-mail:

                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Dental Fix </h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua de Inhambane Nº21, Bairro Urbano Central, Nampula | Contacto: 856124856 / 872757812
                      | E-mail:
                      dentalfix@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    <h5>Clínica Dentária Mordente</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua dos Combatentes R/C Nº 156 | Contacto: 258 870630016 / 867789260 | E-mail:
                      clinica.mordente@outlook.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Farmácia Jardim</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Muhala Expansão 2, U/C Serra da Mesa, Jardim | Contacto: 258 844146402 | E-mail:
                      farmaciajardim122@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Farmácia Calendula Nampula</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Eduardo Mondlane, 969 | Contacto: 25826217966 | E-mail:
                      ateixeira@medis.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading07">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5>Farmácia Calendula Nacala</h5>
                  </button>
                </h2>
                <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Nacala | Contacto: 2588461561212 | E-mail:
                      ateixeira@medis.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading08">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                    <h5>E. E. Farmac Farmácia Nampula</h5>
                  </button>
                </h2>
                <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="heading08"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Paulo Samuel Kankhomba 11/b | Contacto: 26/214308 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading09">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse09" aria-expanded="false" aria-controls="collapse09">
                    <h5>E. E. Farmac Farmácia Parque</h5>
                  </button>
                </h2>
                <div id="collapse09" class="accordion-collapse collapse" aria-labelledby="heading09"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Paulo Samuel Kankhomba 45/b | Contacto: 26/212332 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading010">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse010" aria-expanded="false" aria-controls="collapse010">
                    <h5>E. E. Farmac Farmácia Ilha de Moçambique</h5>
                  </button>
                </h2>
                <div id="collapse010" class="accordion-collapse collapse" aria-labelledby="heading010"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. da República | Contacto: 26/610088 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading011">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse011">
                    <h5>E. E. Farmac Farmácia Posto Monapo</h5>
                  </button>
                </h2>
                <div id="collapse011" class="accordion-collapse collapse" aria-labelledby="heading011"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Monapo - Sede | Contacto: 26/620139 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading012">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse012" aria-expanded="false" aria-controls="collapse012">
                    <h5>Farmácia Zaim</h5>
                  </button>
                </h2>
                <div id="collapse012" class="accordion-collapse collapse" aria-labelledby="heading012"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. do Trabalho, Próximo ao RH | Contacto: 258842900175 / 845004577 | E-mail:
                      zaimpharmacy@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading013">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse013" aria-expanded="false" aria-controls="collapse013">
                    <h5>Unifarma</h5>
                  </button>
                </h2>
                <div id="collapse013" class="accordion-collapse collapse" aria-labelledby="heading013"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. 25 de Setembro Nº 42 | Contacto: 258848941298 | E-mail:
                      unifarmalda.mz@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>LAC - Laboratório (Nacala)</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bloco 1, 105/20200, Cidade Alta - Nacala Porto | Contacto: 25826520391 | E-mail:
                      isidrongove@lac.co.mz
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Óptica Caxil- Nampula</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av: Francisca Manyanga, 117 | Contacto: 258 26217947 / 843531304 | E-mail:
                      opticacaxil@hotmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Óptica Caxil- Nacala</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua Paulo Samuel Kankhomba entrada do posto policial | Contacto: 258 845858035 /
                      842995880 | E-mail:
                      opticacaxil@hotmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse04">
                    <h5>Óptica Millenium</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. 25 de Setembro, Em frente ao Anfitrião Militar | Contacto: 258 872074151 | E-mail:
                      opticamillenium017@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Hava Saúde</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Chigone, Av. Alberto Chipande | Contacto: 258 27221926 / 823786162 / 829297103 |
                      E-mail:
                      havasaude@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Clidis</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Av. Julius Nyerere Nº 789 | Contacto: 258 842768958 | E-mail:
                      clidis@clidis.co.mz / Carminda.Macedo@clidis.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading03">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse03" aria-expanded="false" aria-controls="collapse03">
                    <h5>Centro Médico Embondeiro</h5>
                  </button>
                </h2>
                <div id="collapse03" class="accordion-collapse collapse" aria-labelledby="heading03"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: EN106, Bairro Alto Gingone | Contacto: 872874045/821641927 | E-mail:
                      info@provida.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading04">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse04" aria-expanded="false" aria-controls="collapse0">
                    <h5>Centro Médico Pro-vida</h5>
                  </button>
                </h2>
                <div id="collapse04" class="accordion-collapse collapse" aria-labelledby="heading04"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Bairro Eduardo Mondlane | Contacto: 258 867320728 | E-mail:
                      info@provida.co.mz</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Hospital Provincial De Pemba</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua Base Beira | Contacto: 25827221702 | E-mail:
                      clinicahpp@yahoo.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Hospital Rural de Mueda</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>Endereço: Distrito de Mueda | Contacto: 862211713 | E-mail:
                      onyeduardovidro2017@gmail.com</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>E. E. Farmac Farmácia Lichinga</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua da Praia | Contacto: 271/20323 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Farmácia Ciro</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Joaquim Alberto Chipande | Contacto: 258 823786162 / 829297103 | E-mail:
                      cirogeral@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading05">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse05" aria-expanded="false" aria-controls="collapse05">
                    <h5>Optivision, Lda</h5>
                  </button>
                </h2>
                <div id="collapse05" class="accordion-collapse collapse" aria-labelledby="heading05"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Eduardo Mondlane, Prédio Cunha Alegre, R/C | Contacto: 258 870040001 | E-mail:
                      optivision.lda@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading06">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse06" aria-expanded="false" aria-controls="collapse06">
                    <h5>Óptica Caxil</h5>
                  </button>
                </h2>
                <div id="collapse06" class="accordion-collapse collapse" aria-labelledby="heading06"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Alberto Chipande Bairro Alto Gingone,Portão do Wimbe | Contacto: 258847648376 |
                      E-mail:
                      opticacaxil@hotmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading07">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse07" aria-expanded="false" aria-controls="collapse07">
                    <h5>Óptica Única</h5>
                  </button>
                </h2>
                <div id="collapse07" class="accordion-collapse collapse" aria-labelledby="heading07"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. Eduardo Mondlane | Contacto: 258 846138161 | E-mail:
                      zahidishankhan@gmail.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading08">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse08" aria-expanded="false" aria-controls="collapse08">
                    <h5>Óptica Milénnium</h5>
                  </button>
                </h2>
                <div id="collapse08" class="accordion-collapse collapse" aria-labelledby="heading08"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Av. 25 de setembro (Pemba) | Contacto: 258872483080 | E-mail:
                      opticamillenium017@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Clínica Mais Saúde</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Bairro Sanjala. Expansão do aeroporto | Contacto: 258 873336677 / 8233336677 / 843336622
                      | E-mail:
                      clinicamaissaude.mz@gmail.com
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Farmácia Namacula</h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua dos CFM | Contacto: 258864022582 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Farmácia Chiauaula</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      Endereço: Rua dos CFM | Contacto: 58864022582 | E-mail:
                      alcidio.cavele@farmac.co.mz / vieira.cumbi@farmac.co.mz
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="sub01">
            <div class="sub02">
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading01">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse01" aria-expanded="false" aria-controls="collapse01">
                    <h5>Alll Around Medical Solution </h5>
                  </button>
                </h2>
                <div id="collapse01" class="accordion-collapse collapse" aria-labelledby="heading01"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      E-mail: info@allmedicsolutions.com
                    </p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="heading02">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapse02" aria-expanded="false" aria-controls="collapse02">
                    <h5>Medi Response</h5>
                  </button>
                </h2>
                <div id="collapse02" class="accordion-collapse collapse" aria-labelledby="heading02"
                  data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p>
                      E-mail: filipa.cabaco@mediresponse.co.mz
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="content-bottom">
        <small>Estrangeiro</small>
        <p>Contacte-nos no estrangeiro</p>
        <div class="btn_indico">
          <a href="./prestadores-medicos-estrangeiros.html">Os nossos prestadores de saúde no estrangeiro</a>
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
              <li><a href="{{ __(route('view.resp-civil-bombas-part')) }}">Responsabilidade Civil Bombas</a></li>
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
              <li><a href="{{ __(route('view.engenharia'))}}">Engenharias</a></li>
              <li><a href="{{ __(route('view.incendio')) }}">Incêndio</a></li>
              <li><a href="{{ __(route('view.respCivil-emp'))}}">Responsabilidade Civil Geral</a></li>
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
              <li><a href="{{ __(route('view.consul-sinistro-part'))}}">Consultar Estado do Sinistro</a></li>
              <li><a href="{{ __(route('view.oficinas-part'))}}">Oficinas</a></li>
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
            <li><a href="https://wa.me/258852727270" target="_blank" class="me-4"><i class="fab fa-whatsapp"></i></a>
            </li>
            <li><a href="https://www.facebook.com/IndicoSeguros" target="_blank" class="me-4"><i
                  class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://www.instagram.com/indico_seguros/" target="_blank" class="me-4"><i
                  class="fab fa-instagram"></i></a></li>
            <li><a href="https://mz.linkedin.com/company/%C3%ADndico-seguros-sa" target="_blank" class="me-4"> <i
                  class="fab fa-linkedin-in"></i></a></li>
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
                <input type="text" class="input-letter" placeholder="Receba as Newsletters aqui...">
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
  <script src="../assets/js/main.js"> </script>
  <script src="../assets/js/function.js"></script>

</body>

</html>