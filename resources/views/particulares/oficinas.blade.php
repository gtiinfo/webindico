<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Oficinas | ÍNDICO SEGUROS</title>
  <link rel="shortcut icon" href="../assets/img/favicon.ico" />
  <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css?version=1.1" />
  <link rel="stylesheet" href="../assets/vendor/mdbootstrap/css/mdb.min.css?version=1.1" />
  <link rel="stylesheet" href="../assets/vendor/fontawesome/css/all.min.css?version=1.1" />
  <link rel="stylesheet" href="../assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="../assets/css/extend.css?version=1.1" />
  <link rel="stylesheet" href="../assets/css/style.css?version=1.1" />
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
                  <a href="index.html">
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
                          <li><a href="{{ __(route('view.home')) }}" class="active">Particulares</a></li>
                          <li><a href="{{ __(route('view.empresas')) }}">Empresas</a></li>
                          <li><a href="{{ __(route('view.indico')) }}">Índico</a></li>
                        </ul>
                        <div class="tabs-container">
                          <ul class="tabs-body">
                            <div class="item-0">
                              <li class="icon-menu-drop title">Seguros</li>
                              <div class="list-item">
                                <ul>
                                  <li class="dropdown0 icon-menu-drop">Automóvel</li>
                                  <ul class="dropdown1">
                                    <li><a href="{{ __(route('view.resp-civil-part')) }}">Responsabilidade Civil</a></li>
                                    <li><a href="{{ __(route('view.danos-proprios-part')) }}">Danos Próprios</a></li>
                                    <li><a href="{{ __(route('view.resp-civil-bombas-part')) }}">Responsabilidade Civil Bombas</a></li>
                                  </ul>
                                </ul>
                                <ul>
                                  <li ><a href="{{ __(route('view.habitacao')) }}">Multirisco Habitação</a></li>
                                </ul>
                                <ul>
                                  <li ><a href="{{ __(route('view.empregados')) }}">Empregados Domésticos</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.funeral')) }}">Funeral</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.acidente-pessoal')) }}">Acidentes Pessoais</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.viagem-part')) }}">Viagem</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="item-0">
                              <li class="icon-menu-drop">Sinistros</li>
                              <div class="list-item">
                                <ul>
                                  <li><a href="{{ __(route('view.sinistros-part')) }}">Participar Sinistro</a></li>
                                  
                                </ul>
                                <ul>
                                  <li><a href=" {{ __(route('view.consul-sinistro-part'))}} ">Consultar Sinistro</a></li>
                                </ul>
                                <ul>
                                <li><a href=" {{ __(route('view.oficinas-part'))}} ">Oficinas</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="item-0">
                              <li class="icon-menu-drop">Serviços Online</li>
                              <div class="list-item">
                                <ul>
                                  <li><a href=" {{ __(route('view.condicoes-gerais-part')) }} ">Condições Gerais</a></li>
                                </ul>
                                <li class="dropdown0 icon-menu-drop">Gestão de Valores</li>
                                <ul dropdown1>
                                  <li><a href="{{ __(route('view.aviso-cobranca')) }}">Aviso de Cobrança</a></li>
                                  <li><a href="{{ __(route('view.pag-primio-part')) }}">Pagamento Prémio</a></li>
                                  <li><a href="{{ __(route('view.reembolso-part')) }}">Reembolso</a></li>
                                  <li><a href="{{ __(route('view.recibo-part')) }}">Recibo</a></li>
                                </ul>
                                <ul>
                                  <li class="dropdown0 icon-menu-drop">Reclamações</li>
                                  <ul class="dropdown1">
                                    <li><a href=" {{ __(route('view.reclamacoes-part')) }} ">Reclamações</a></li>
                                  </ul>
                                </ul>
                                <ul>
                                  <li class="dropdown0 icon-menu-drop">Actualização de Apólice</li>
                                  <ul class="dropdown1">
                                    <li><a href=" {{ __(route('view.actualizacao-capital-part'))}} ">Actualização de Capital</a></li>
                                    <li><a href=" {{ __(route('view.actualizacao-dados-part')) }} ">Actualização de Dados</a></li>
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
              <div class="search-area bx bx-search" data-bs-toggle="modal" data-bs-target="#exampleModal">
              </div>
              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Faça a sua Pesquisa!
                      </h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <form>
                        <input type="text" class="form-control" placeholder="Pesquisar...">
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
                  <li><a href="{{ __(route('view.agencias')) }}" class="show-on-xs mobile-menu">
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
                        <li><a href="{{ __(route('view.resp-civil-part')) }}" class="menu-dropdown"
                            id="menu-dropdown">Responsabilidade Civil</a>
                        </li>
                        <li><a href="{{ __(route('view.danos-proprios-part')) }}" class="menu-dropdown" id="menu-dropdown">Danos
                            Próprios</a>
                        </li>
                        <li><a href="{{ __(route('view.resp-civil-bombas-part')) }}">Responsabilidade Civil
                            Bombas</a></li>
                      </ul>
                      <ul>
                        <li class="title">Habitação</li>
                        <li><a href="{{ __(route('view.habitacao')) }}">Multirisco Habitação</a></li>
                      </ul>
                      <ul>
                        <li class="title">Empregados</li>
                        <li><a href="{{ __(route('view.empregados')) }}">Empregados Domésticos</a></li>
                      </ul>
                      <ul>
                        <li class="title">Funeral</li>
                        <li><a href="{{ __(route('view.funeral')) }}">Funeral</li>
                      </ul>
                      <ul>
                        <li class="title">Acidentes Pessoais</li>
                        <li><a href="{{ __(route('view.acidente-pessoal')) }}">Acidentes Pessoais</a>
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
                        <li><a href="{{ __(route('view.sinistros-part')) }}">Participar Sinistro</a></li>
                      </ul>
                      <ul>
                        <li class="title">Consultar</li>
                        <li><a href=" {{ __(route('view.consul-sinistro-part'))}}">Consultar Estado do Sinistro</a></li>
                      </ul>
                      <ul>
                        <li class="title">Oficinas</li>
                        <li><a href="{{ __(route('view.oficinas-part'))}}">Oficinas</a></li>
                        
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
                        <li><a href="{{ __(route('view.condicoes-gerais-part')) }}">Condições Gerais</a></li>
                      </ul>
                      <ul>
                        <li class="title">Gestão de Valores</li>
                        <li><a href="{{ __(route('view.aviso-cobranca')) }}">Aviso de Cobrança</a></li>
                        <li><a href="{{ __(route('view.pag-primio-part')) }}">Pagamento Prémio</a></li>
                        <li><a href="{{ __(route('view.reembolso-part')) }}">Reembolso</a></li>
                        <li><a href="{{ __(route('view.recibo-part')) }}">Recibo</a></li>
                      </ul>
                      <ul>
                        <li class="title">Reclamações</li>
                        <li><a href="{{ __(route('view.reclamacoes-part')) }}">Reclamações</a></li>
                      </ul>
                      <ul>
                        <li class="title">Actualização de Apólice</li>
                        <li><a href="{{ __(route('view.actualizacao-capital-part'))}}">Actualização de Capital</a></li>
                        <li><a href="{{ __(route('view.actualizacao-dados-part')) }}">Actualização de Dados</a></li>
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

<body>
  <!-- LOADING -->
  <div class="loading-spinner">
    <div class="spinner"></div>
  </div>
  <div class="wrapper">
    <header>
        <i class="bx bx-cookie"></i>
        <h2>Cookies & Privacidades</h2>
    </header>
    <div class="data">
        <p>Os cookies são pequenos textos enviados ao navegador e que ajudam o site a armazenar informações sobre a
            sua visita ao nosso website, o que pode facilitar o próximo acesso e deixá-lo site mais útil para você,
            proporcionando-lhe uma melhor experiência de navegação. <a href="javascrip:void(0)"
                id="openModalLink"> Read more...</a></p>
    </div>
    <div class="buttons">
        <button class="button" id="acceptBtn">Accept</button>
        <button class="button" id="declineBtn">Decline</button>
    </div>
</div>

<!-- Modal -->
<div class="modal top fade" style="z-index: 1111111" id="cookieconsent3" tabindex="-1" aria-labelledby="cookieconsentLabel3"
    aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="false">
    <div class="modal-dialog" style="max-width: 800px;">
        <div class="modal-content d-block text-start">
            <div class="modal-header d-block ">
                <h2 class="modal-title text-primary-indico" id="cookieconsentLabel3">Cookies & Privacidades</h2>
                <h5 class="text-primary-indico mt-3">Como Usamos os Cookies?</h5>
                <p>
                    Esta página descreve os tipos de cookies e outras tecnologias que usamos, incluindo para efeitos de <a href="javascript:void(0)">publicidade</a>.
                </p>

                <p>
                    Os cookies são pequenos textos enviados ao navegador e que ajudam o site a armazenar informações sobre a sua visita ao nosso website, o que pode facilitar o próximo acesso e deixá-lo site mais útil para você, proporcionando-lhe uma melhor experiência de navegação. 
                </p>

                <p>
                    Outras tecnologias também podem ter essa finalidade, incluindo pixels, armazenamento local e identificadores únicos usados para identificar um navegador, app ou dispositivo. Os cookies e as outras tecnologias descritos nesta página podem ser usados para os fins explicados abaixo.
                </p>
                <p>
                    Consulte a nossa <a href="javascript:void(0)">Política de Privacidade e Protecção de Dados Pessoais</a> para saber como protegemos a sua privacidade ao usar cookies e outras informações.
                </p>
               
            </div>
            <div class="modal-body">
                <h5 class="text-primary-indico mt-3">Tipos de Cookies </h5>
                <!-- Funcionalidade checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="necessary" checked />
                    <label class="form-check-label" for="necessary">
                        <p>
                            <strong>Funcionalidade</strong>
                            <muted>registam preferências (como o idioma), informações relacionadas à e otimizações de produtos que ajudam a manter e melhorar o nosso serviço.</muted>
                        </p>
                    </label>
                </div>
                <!-- Segurança checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="analytical" />
                    <label class="form-check-label" for="analytical">
                        <p>
                            <strong>Segurança</strong>
                            <muted>são usados para questões de segurança e ajudam a autenticar usuários, evitar fraudes e protegê-lo nas interacções com o nosso serviço.</muted>
                        </p>
                    </label>
                </div>
                <!--Análise checkbox -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="marketing" />
                    <label class="form-check-label" for="marketing">
                        <p>
                            <strong>Análise</strong>
                            <muted>ajudam a colectar dados que permitem a melhoria dos nossos conteúdos e da sua experiência.</muted>
                        </p>
                    </label>
                </div>
                 <!--Publicidade checkbox -->
                 <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="marketing" />
                    <label class="form-check-label" for="marketing">
                        <p>
                            <strong>Publicidade</strong>
                            <muted>são usados para publicidade, a sua personalização e envio de anúncios.</muted>
                        </p>
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" id="acceptBtn" class="btn btn-outline-primary" data-mdb-dismiss="modal">
                    Accept necessary
                </button>
                <button type="button" id="acceptBtn" class="btn btn-primary" data-mdb-dismiss="modal">
                    Accept all
                </button>
            </div>
        </div>
    </div>
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
                  <img src="../assets/img/Icones_Contacto.png" style="height: 37px;" width="30" alt="">
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
            <label for=""><a href="{{ __(route('view.danos-proprios-part')) }}">Automóvel</a></label>
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
              <label for=""><a href="{{ __(route('view.acidente-trabalho')) }}">Acidente de Trabalho</a></label>
            </div>
          </li>
        </ul>
        <div class="img-bottom"></div>
      </li>
    </ul>
  </div><!-- END LATERAL MENU -->
  <section class="intro-box-section">
    <!-- Intro-Box -->
    <div id="intro-box" class="bg-image">
      <!-- Carousel wrapper -->
      <div id="carouselBasicExample" class="carousel slide carousel-fade" data-mdb-ride="carousel" data-interval="3000">
        <!-- Indicators -->
        <div class="carousel-indicators">
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
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
        </div>

        <!-- Inner -->
        <div class="carousel-inner slider">
          <!-- Single item -->
          <div class="carousel-item slider active" style="background-image: url(../assets/img/background.png);">
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/automovel_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-0" style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Conduza sem medo!</h1>

              </div>
            </div>
          </div>

           <!-- Single item -->
           <div class="carousel-item slider" style="background-image: url(../assets/img/slides/bombas_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5" style="z-index: 99999;max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Responsabilidade Civil Bombas</h1>
              </div>
            </div>
          </div>  

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/multiRiscoHabitacao_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5" style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Nunca perca o seu aconchego!</h1>

              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/domestica_banner.png);">
            <img src="./assets/img/slides/Meios_de_Pagamento.jpeg" class="w-100" alt="" />
            <div class="content d-flex justify-content-start align-items-center h-100 p-5" style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Cuide dos que cuidam de ti</h1>

              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/funeral_banner.png);">
            <img src="./assets/img/slides/Negocios.jpg" class="w-100" alt="" />
            <div class="content d-flex justify-content-start align-items-center h-100 p-5" style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Estaremos sempre contigo…!</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/acidents_pessoais_banner.png);">
            <img src="./assets/img/slides/Seguro_de_Habitação.jpg" class="w-100" alt="" />
            <div class="content d-flex justify-content-start align-items-center h-100 p-5" style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Proteja-te em caso de imprevistos!</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/viagem_banner.png);">
            <img src="./assets/img/slides/Seguro_de_Habitação.jpg" class="w-100" alt="" />
            <div class="content d-flex justify-content-start align-items-center h-100 p-5" style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Viaje sem medo</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/callCenter_banner.png);">
            <img src="./assets/img/slides/Seguro_de_Automovel.jpg" class="w-100" alt="" />
            <div class="content d-flex justify-content-start align-items-center h-100 p-5" style="z-index: 99999; max-width: 600px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Ligue 84/ 82 5533 <br>e Viva Sem Medo!</h1>
              </div>
            </div>
          </div>
          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/whatsapp_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5" style="z-index: 99999; max-width: 600px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Fale connosco pelo WhatsApp <br>85 2727 270</h1>
              </div>
            </div>
          </div>

        </div>

      </div>
      <!-- Carousel wrapper -->
    </div>
    <!-- End Intro-Box -->
  </section>
  <main>
    <div class="region d-flex" style="justify-content: space-around;">
      <div class="list-region mt-5">
        <div class="title">
          <p class="title">Regiões</p>
        </div>
        <ul>
          <li class="menu-item active">Sul</li>
          <li class="menu-item">Centro</li>
          <li class="menu-item">Norte</li>
        </ul>
      </div>
      <section class="box active">
        <div class="">
          <div class="box-center">
            <div class="box-medium" style="width: 650px;">
              <div class="title-bar">
                <div class="title-icon"></div>
                <h4 class="title">Oficinas</h4>
              </div>
              <div class="content">
                <div class="header d-flex">
                  <label class="">Localização</label>
                </div>
              </div>
              <label class="regiao mt-4">Maputo</label>
              <div class="list-oficinas">
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Abdul</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av Milagre Mabote 29 Maputo | Contacto: 21 415 683 / 84 830 2800</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Estoril</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. Josina Machel, n 781 | Contacto: 82 302 1016</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Gove</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Contacto: 82 713 4310</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto legend</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Valdimir Lenine nº568 Maputo Cidade de Maputo, 1100 | Contacto: 84 808 2732</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Mano</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua Marcelino dos Santos 2282, Bairro de Chamanculo | Contacto: 82465 6240 / 84 465
                      6240</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Spray Centre,SARL</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: 1912 Av. das Forças Populares de Liberação de Moçambique | Contacto: 82 419 3390/84 563
                      5698</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Entreposto / Auto Avenida</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. Marien Ngouabi Maputo | Contacto: 84 820 4273 / 21414483</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Glassfit</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. 24 de Julho, Maputo | Contacto: 21 400 879 / 21 400 880</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>InterAuto</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. da Namaacha n.950, 1110 | Contacto: 21 220 012/21 405 127</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>InterCar</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. de Angola nº 2379 Maputo | Contacto: 21 465 150</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Matchedje</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Contacto: 86 297 3710</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>MHL AUTO,SA</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. 25 De Setembro, nº1670 // Oficina & Peças- Av. de Angola, nº 3016 | Contacto: 21
                      466 061/21 466 002</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Motorcare</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua Ka Nwalanga, 141, Maputo | Contacto: 21 350 800 </p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Perfect Panel Beaters</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Avenida OUA, n.º 121 Maputo, 1100 | Contacto: 874327719</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Propeças</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: 1406 Avenida Zedequias Manganhela, Maputo | Contacto: 21 300 371 / 82 975 0981</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Ronil</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: 1954 Av. das Forças Populares de Liberação de Moçambique, Maputo | Contacto: 84 311
                      1199</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Sir Motors</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Contacto: 21 322 692</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Tecnica Industrial</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: 1107, Avenida Angola, Maputo | Contacto: 84 307 0970</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Matchedje</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. Alberto Luthuli, N° 495, R/C, Maputo | Contacto:  84 977 7771</p>
                  </div>
                </div>
              </div>
              <label class="regiao">Xai-Xai</label>
              <div class="list-oficinas">
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Narane S.U.Lda</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Xai-Xai | Contacto: 82 427 9610/84 307 9610/87 427 9610</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Langa</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Xai-Xai | Contacto: 86 398 1990/84 398 1990</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Novela</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Xai-Xai | Contacto: 87 450 4017/84 450 4017</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Mab Auto</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Xai-Xai | Contacto: 84 513 3630</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Mudumane Lda</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Xai-Xai | Contacto: 82 852 8378</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Bamba Junior, E.I</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Xai-Xai | Contacto: 84 947 0822/86 947 0822</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Manhique</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Xai-Xai | Contacto: 87 492 8940</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Sambate </label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Xai-Xai | Contacto: 82 300 1380/84 452 3411/86 452 3411</p>
                  </div>
                </div>
              </div>
              <label class="regiao">Maxixe</label>
              <div class="list-oficinas">
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Speed</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: EN1-Bairro Mademo | Contacto: 84 713 0410/ 86 713 0410</p>
                  </div>
                </div>
              </div>
              <div class="img-border-bottom"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="box">
        <div class="">
          <div class="box-center">
            <div class="box-medium" style="width: 650px;">
              <div class="title-bar">
                <div class="title-icon"></div>
                <h4 class="title">Oficinas</h4>
              </div>
              <div class="content">
                <div class="header d-flex">
                  <label>Oficinas</label>
                  <label class="ms-2">Localização</label>
                </div>
              </div>
              <label class="regiao mt-4">Beira</label>
              <div class="list-oficinas">
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Gruta</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua Armando Tivane- Beira | Contacto: 86 722 3253</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Nasma</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro do Maquinino - Beira | Contacto: 85 012 1385</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Riaze</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro da Manga- Beira | Contacto: 84 761 6013</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Vuca</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua Luis Inacio Bairro de Chaimite- Beira | Contacto: 23 328 195</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Entreposto Comercial de Moçambique</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro do Maquinino - Beira | Contacto: 84 310 2256</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Motor Care</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro do Maquinino - Beira | Contacto: 82 332 3818</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Oficinas Ravate</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro da Pontagea - Beira | Contacto: 86 548 2329</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>PintAuto</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua do Alentejo Bairro de Pioneiros - Beira | Contacto: 84 818 2227</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Ronil</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro da Pontagea - Beira | Contacto: 86 548 2329</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Unicar</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua B Thinga Pioneiros - Beira | Contacto: 87 667 7700</p>
                  </div>
                </div>
              </div>
              <label class="regiao">Chimoio</label>
              <div class="list-oficinas">
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Reparadora Lda</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro Nhamadjessa, Cidade de Chimoio | Contacto: 847137487</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Tech Lda</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro Tembwe, Cidade de Chimoio | Contacto: 8759094</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Entreposto Comercial de Moçambique</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro Josina Machel, Cidade de Chimoio | Contacto: 847137487</p>
                  </div>
                </div>
                <label class="regiao">Tete</label>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Entreposto Comercial de Moçambique</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. 25 de Junho nº 1552 | Contacto: 25 223028 / 25 222391</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Motorcare</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: E.N.7 Unidade 25 de Setembro, Chithatha, Moatize | Contacto: 25 242 220</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Ronil</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Contacto: 84 311 1199</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Técnica Industrial</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Estr. Nacional nº 7 – Bairro Chingodzi | Contacto: 25 220 627 / 84 055 54 02</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Tecnocar E.I</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Contacto: 25 220 675</p>
                  </div>
                </div>
              </div>
              <label class="regiao">Quelimane</label>
              <div class="list-oficinas">
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Chamaune Multi service, Lda</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. Samora Machel, Cidade de Quelimane | Contacto: 84 506 4656 / 84 941 0198</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Entreposto Comercial de Moçambique</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. Herois de Libertacão Nacional nº 781 | Contacto: 24 213 167</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Igor Auto Service Lda</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: R470, Cidade de Quelimane | Contacto: 84 591 7707</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Khan Auto Service, Lda</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço:  Av. 25 de Junho 1731 | Contacto: 84 765 9590</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Mahomed Al Bakar Abdul Razak</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Contacto: 84 436 7780</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Ruben Tiago Almeida Goncalves</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro do Maquinino - Beira | Contacto: 84 591 8350</p>
                  </div>
                </div>
              </div>
              <div class="img-border-bottom"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="box">
        <div class="">
          <div class="box-center">
            <div class="box-medium" style="width: 650px;">
              <div class="title-bar">
                <div class="title-icon"></div>
                <h4 class="title">Oficinas</h4>
              </div>
              <div class="content">
                <div class="header d-flex">
                  <label>Oficinas</label>
                  <label class="ms-2">Localização</label>
                </div>
              </div>
              <label class="regiao mt-4">Nampula</label>
              <div class="list-oficinas">
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Omar</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua 3. 261 Nampula | Contacto: 84 311 9217</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Auto Victor</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua Mártires de Moeda, nº 231, Bairro Muhala Belenenses | Contacto: 82 601 1930</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Entreposto Comercial de Moçambique</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: N8, Av. do Trabalho nº 2578 | Contacto: 26 212 162</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Motocare</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua da França, parcela 3 Bairro de Carrupeia Nampula, 3100 | Contacto: 26 217 251</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Pa Autosolution</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Rua da França Bº Carrupeia 344 | Contacto: 82 601 9040</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Motor Care</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Bairro do Maquinino - Beira | Contacto: 82 332 3818</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Ronil</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Cidade de Nampula | Contacto: 84 3111199</p>
                  </div>
                </div>
                <div class="list-item">
                  <div class="item-0">
                    <div class="items">
                      <label>Técnica Industrial</label>
                    </div>
                  </div>
                  <div class="item-1">
                    <p>Endereço: Av. Eduardo Modlane nº 5 | Contacto: 26 215 918/ 84 928 47 26</p>
                  </div>
                </div>

                <label class="regiao">Lichinga</label>
                <div class="list-oficinas">
                  <div class="list-item">
                    <div class="item-0">
                      <div class="items">
                        <label>Entreposto Comercial de Moçambique</label>
                      </div>
                    </div>
                    <div class="item-1">
                      <p>Endereço: Rua de Matame, Lichinga | Contacto: 27 121 275</p>
                    </div>
                  </div>

                  <label class="regiao mt-4">Pemba</label>
                  <div class="list-oficinas">
                    <div class="list-item">
                      <div class="item-0">
                        <div class="items">
                          <label>Entreposto Comercial de Moçambique</label>
                        </div>
                      </div>
                      <div class="item-1">
                        <p>Endereço: Av. 25 de Setembro nº 558 | Contacto: 27 220 551</p>
                      </div>
                    </div>
                    <div class="list-item">
                      <div class="item-0">
                        <div class="items">
                          <label>Motorcare Service</label>
                        </div>
                      </div>
                      <div class="item-1">
                        <p>Endereço: E.N.106 Bairro do Alto Giongone | Contacto: 27 220 771</p>
                      </div>
                    </div>
                    <div class="list-item">
                      <div class="item-0">
                        <div class="items">
                          <label>Técnica Industrial</label>
                        </div>
                      </div>
                      <div class="item-1">
                        <p>Endereço: Av. 25 de Setembro nº 2565 - Bairro Natite | Contacto: 21 46 76 00/ 84 283 49 10
                        </p>
                      </div>
                    </div>

                  </div>
                  <div class="img-border-bottom"></div>
                </div>
              </div>
            </div>
      </section>
    </div>
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
              <li><a href="{{ __(route('view.resp-civil-bombas-part')) }}">Resp. Civil Bombas</a></li>
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
  <script src="../assets/js/freshchat.js"></script>
  <script src="../assets/js/cookies.js"></script>
   
  </script>
</body>

</html>