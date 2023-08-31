<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Multirriscos Habitação | ÍNDICO SEGUROS</title>
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
    <div class="">
      <div class="component container col-12 content-large">
        <div class="component-content">
          <div class="row">
            <div class="component rich-text col-12 position-center">
              <div class="component-content">
                <h2 style="text-align: center;">Multirriscos Habitação</h2>
              </div>
            </div>
            <div class="component tabs col-12 tabs-table loader initialized">
              <div class="component-content">
                <div class="tabs-inner">
                  <ul class="tabs-heading p-0">
                    <li id="li2" class="item0-heading active">
                      <div class="row">
                        <div class="component content col-12">
                          <div class="field-heading">
                            <p>Coberturas Principais</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li id="li2" class="item1-heading">
                      <div class="row">
                        <div class="component content col-12">
                          <div class="field-heading">
                            <p>Extensões e Coberturas Complementares</p>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li id="li2" class="item2-heading">
                      <div class="row">
                        <div class="component content col-12">
                          <div class="field-heading">
                            <p>Cláusulas</p>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="tabs-container">
                    <div class="tab active">
                      <div class="row">
                        <div class="component content col-12">
                          <div class="component-content">
                            <div class="table-wrapper field-content">
                              <div class="indico-table-tabs table-header">
                                <div class="content-indico-table-tabs">
                                  <div style="width:275.188px">
                                    <h4>Básico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Clássico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Exclusivo</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="indico-table-sticky table-header">
                                <div class="content-indico-table-sticky">
                                  <div style="width: 343.612px;">
                                    <h4>Coberturas</h4>
                                    <h5>O que está incluído</h5>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Básico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Clássico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Exclusivo</h4>
                                  </div>
                                </div>
                              </div>
                              <table class="indico-table">
                                <thead>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Coberturas</h4>
                                      <h5>O que está incluído</h5>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4>Básico</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Clássico</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Exclusivo</h4>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Incêndio, acção mecânica de queda de Raio e Explosão</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Rajadas de vento forte e vendavais</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Tempestade Tropical</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Ciclone Tropical</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Danos por água</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Inudações</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Fenómenos Sísmicos</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Queda de Aeronaves e/ou de aparelhos aéreos análogos ou de objectos deles
                                        caídos</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Derrame de Sistemas Hibraúlicos de Protecção contra incêndio</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Choque ou Impacto de Veículos Terrestes ou Animais</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Greves, Tumultos e alteração da órdem pública (Riscos não políticos)</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Actos de vandalismo, Maliciosos ou de Sabotagem</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab">
                      <div class="row">
                        <div class="component content col-12">
                          <div class="component-content">
                            <div class="table-wrapper field-content">
                              <div class="indico-table-tabs table-header">
                                <div class="content-indico-table-tabs">
                                  <div style="width:275.188px" class="active">
                                    <h4>Básico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Clássico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Exclusivo</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="indico-table-sticky table-header">
                                <div class="content-indico-table-sticky">
                                  <div style="width: 343.612px;" class="active">
                                    <h4>Coberturas</h4>
                                    <h5>O que está incluído</h5>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Básico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Clássico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Exclusivo</h4>
                                  </div>
                                </div>
                              </div>
                              <table class="indico-table">
                                <thead>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Coberturas</h4>
                                      <h5>O que está incluído</h5>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4>Básico</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Clássico</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Exclusivo</h4>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Riscos Electricos</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        (Capital limitado ao valor correspondente ao equipamento electrónico e
                                        maquinaria com o máximo de MZN 500,000.00)</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        (Capital limitado ao valor correspondente ao equipamento electrónico e
                                        maquinaria com o máximo de MZN 1000,000.00)</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Alarmes e Aparelhos de Vigilância</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        (capital limitado ao valor correspondente ao equipamento com o máximo de MZN
                                        250,000.00)</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        (capital limitado ao valor correspondente ao equipamento com o máximo de MZN
                                        500,000.00)</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Danos em Bens dos Empregados</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 50,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Equipamento Electrónico</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4>Sim<br>
                                        (Capital limitado ao valor correspondente ao equipamento electrónico com o
                                        máximo de MZN 200,000.00)</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        (Capital limitado ao valor correspondente ao equipamento electrónico com o
                                        máximo de MZN 500,000.00)</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        (Capital limitado ao valor correspondente ao equipamento electrónico com o
                                        máximo de MZN 1000,000.00)</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Sistemas de Rega Automática</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1.5% do capital seguro com o máximo de MZN 200,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2% do capital seguro com o máximo de MZN 450,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Avarias de Frigorificos e Arcas Congeladoras</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 200,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        0.20% do capital seguro com o máximo de MZN 75,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Deterioração de Bens Refrigerados</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim <br>
                                        0.10 % do capital seguro com o máximo de MZN 50,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Danos em Bens do Senhorio</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Reconstituição de Documentos</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 200,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2 % do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Despesas com Documentos</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 200,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2 % do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Perda de Rendas</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Renda máxima mensal de MZN 80,000.00 com maximo de 90 dias</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Danos Estéticos no Imóvel</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2% do capital seguro com o máximo de MZN 1,500,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Privação Temporária do uso do local da Habitação</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim
                                        1% do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Responsabilidade civil extracontratual</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2% do capital seguro com o máximo de MZN 750,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Demolição e Remoção de Escombros</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2 % do capital seguro com o máximo de MZN 1,000,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Furto ou roubo e danos no edifício por furto ou roubo</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2 % do capital seguro com o máximo de MZN 1,000,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Quebra Isolada e acidente de Vidros, espelhos e louças sanitária</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4>Sim<br>
                                        1 % do capital seguro com o máximo de MZN 750,000.00</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1.5 % do capital seguro com o máximo de MZN 1000,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2% do capital seguro com o máximo de MZN 1,500,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Responsabilidade Civil Empregados Domésticos</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        0,5% do capital seguro com o máximo de MZN 1,000,000.00</h4>
                                    </th>
                                  </tr>

                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab">
                      <div class="row">
                        <div class="component content col-12">
                          <div class="component-content">
                            <div class="table-wrapper field-content">
                              <div class="indico-table-tabs table-header">
                                <div class="content-indico-table-tabs">
                                  <div style="width:275.188px" class="active">
                                    <h4>Básico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Clássico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Exclusivo</h4>
                                  </div>
                                </div>
                              </div>
                              <div class="indico-table-sticky table-header">
                                <div class="content-indico-table-sticky">
                                  <div style="width: 343.612px;" class="active">
                                    <h4>Coberturas</h4>
                                    <h5>O que está incluído</h5>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Básico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Clássico</h4>
                                  </div>
                                  <div style="width:275.188px">
                                    <h4>Exclusivo</h4>
                                  </div>
                                </div>
                              </div>
                              <table class="indico-table">
                                <thead>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Coberturas</h4>
                                      <h5>O que está incluído</h5>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4>Básico</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Clássico</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Exclusivo</h4>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Cláusula relativa aos Inquilinos</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Cláusula relativa aos Encargos com o Corpo de Bombeiros</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        0.10 % do capital seguro com o máximo de MZN 50,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        0.20% do capital seguro com o máximo de MZN 75,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Propriedade Horizontal</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Medidas Cautelares Anti-Roubo</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Cláusulas relativas às Rendas </h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Cláusula relativa aos Honorários de Arquitectos, Advogados e de outros
                                        Profissionais</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        0.5% do capital seguro com o máximo de MZN 250,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Cláusula relativa a Benfeitorias</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4><i class='bx bx-check'></i></h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Cláusula relativa ao Custo de Demolição, de Limpeza e de Construção de tapumes
                                      </h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        1% do capital seguro com o máximo de MZN 500,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        2% do capital seguro com o máximo de MZN 1,000,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Cláusula relativa a Encargos relacionados com a Extinção de Incêndios</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4>Sim<br>
                                        0.10 % do capital seguro com o máximo de MZN 50,000.00</h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        0.20% do capital seguro com o máximo de MZN 75,000.00</h4>
                                    </th>
                                  </tr>
                                  <tr class="indico-table-reTableHeaderRow-1">
                                    <th class="indico-table-reTableHeaderFirstCol-1">
                                      <h4>Cláusula relativa aos Honorários referentes ao Escrutínio das Plantas
                                        Municipais</h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderOddCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="indico-table-reTableHeaderEvenCol-1">
                                      <h4><i class='bx bx-x text-danger'></i></h4>
                                    </th>
                                    <th class="tranquilidade-table-reTableHeaderLastCol-1">
                                      <h4>Sim<br>
                                        0.20% do capital seguro com o máximo de MZN 75,000.00</h4>
                                    </th>
                                  </tr>
                                </tbody>
                              </table>
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
    <div class="">
            <div class="container col-12 content-small pt-0">
              <div class="component-content">
                <div class="row">
                  <div class="row column-splitter">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                      <div class="row">
                        <div class="promo">
                          <div class="content">
                            <a class="btn btn-contacts" href="#cotacao">
                              <figure>
                                <img src="../assets/img/Outros_icones_Simulador-01.png" alt="">
                              </figure>
                              <span>Pedir Simulação</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                      <div class="row">
                        <div class="promo">
                          <div class="content">
                            <a class="btn btn-contacts"
                              href="../assets/documents/SEGURO_DE_HABITACAO_v01.pdf">
                              <figure>
                                <img src="../assets/img/Outros_icones_Participação_Sinistro-01.png" alt="">
                              </figure>
                              <span>Condições Gerais</span>
                            </a>
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
    <section id="cotacao" class="cotacao mt-5">
      <div class="">
        <div class="container col-12">
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
              <div class="img-cotacao">
                <img src="../assets/img/slides/habitacao_larg.jpg" alt="">
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5">
              <div class="form-cotacao">
                <p class="title">Multirriscos Habitação</p>
                <p class="subtitle">Peça uma simulação e seja contactado(a) por um profissional. Sem compromisso.</p>
                <form action="" class="needs-validation" novalidate>
                  <div class="mb-3">
                    <p for="" class="form-label">Nome Completo</p>
                    <input type="text" class="form-control" id="" value="" required>
                    <div class="valid-feedback">
                      Campo obrigatorio!
                    </div>
                  </div>
                  <div class="mb-3">
                    <p for="" class="form-label">Telefone</p>
                    <input type="number" class="form-control" id="" value="" required>
                    <div class="valid-feedback">
                      Campo obrigatorio!
                    </div>
                  </div>
                  <div class="mb-3">
                    <p for="" class="form-label">Email</p>
                    <input type="email" class="form-control" id="" value="">
                  </div>
                  <button class="btn btn-primary btn-indico">Contacte-me</button>
                </form>
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
              <li><a href="./danos-proprios.php">Danos Próprios</a></li>
              <li><a href="./responsabilidade-civil.php">Responsabilidade Civil</a></li>
              <li><a href="./responsabilidade-civil-bombas.php">Responsabilidade Civil Bombas</a></li>
              <li><a href="./habitacao.php">Multirisco Habitação</a></li>
              <li><a href="./empregado-domesticos.php">Empregados Domésticos</a></li>
              <li><a href="./funeral.php">Funeral</a></li>
              <li><a href="./acidente-pessoas.php">Acidentes Pessoais</a></li>
              <li><a href="./viagem.php">Viagem</a></li>

              
            </ul>
          </div>
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
</body>

</html>