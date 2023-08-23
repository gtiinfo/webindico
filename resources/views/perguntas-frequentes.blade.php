<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perguntas Frequentes | ÍNDICO SEGUROS</title>
  <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="stylesheet" href="./assets/vendor/bootstrap/css/bootstrap.min.css?version=1.1" />
  <link rel="stylesheet" href="./assets/vendor/mdbootstrap/css/mdb.min.css?version=1.1" />
  <link rel="stylesheet" href="./assets/vendor/fontawesome/css/all.min.css?version=1.1" />
  <link rel="stylesheet" href="./assets/vendor/boxicons/css/boxicons.min.css">
  <link rel="stylesheet" href="./assets/css/style.css?version=1.1" />
  <link rel="stylesheet" href="./assets/vendor/hover/css/hover-min.css?version=1.1" />
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
          <a href="./index.php">
            <img src="./assets/img/IndicoSeguro_IconPrincipal.png" alt="Indico Seguros">
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

<body style="background: #f5f6f7;">
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
          <img src="./assets/img/Icones_lateral_menu_3.png" class="w-100" alt="">
          <p>Contacte-nos</p>
        </div>
        <ul>
          <li>
            <div class="icon me-2">
              <i class="fas fa-caret-right"></i>
            </div>
            <div class="text">
              <label for=""><a href="https://api.whatsapp.com/send?phone=+2588502727270&text=&source=&data="
                  target="_blank">WhatsApp</a></label>
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
                  <img src="./assets/img/Icones_Contacto.png" width="30" style="height: 37px;" alt="">
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
          <img src="./assets/img/Icones_lateral_menu_4.png" class="w-100" alt="">
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
  <section class="container" style="margin-top: 140px;">
    <div class="row">
      <div class="component container col-12 content-large qa">
        <div class="">
          <div class="row">
            <div class="row component column-splitter">
              <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="filter-menu-container" data-aos="fade-up" data-aos-delay="100">
                  <p class="title">Tópicos</p>
                  <ul class="filter-menu mobile-dropdown p-0">
                    <li class="menu-item filter-active"><a href="javascript:void(0)">Subscrição de Seguros - Geral</a>
                    </li>
                    <li class="menu-item"><a href="javascript:void(0)">Subscrição de Seguros - Bombas</a></li>
                    <li class="menu-item"><a href="javascript:void(0)">Sinistros</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="row container-menu">
                  <div class="component component-menu filter-app">
                    <div class="component search-results horizontal col-12 faq-acordion">
                      <div class="region0 active accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              <p><b>Para quê serve o SORCA?</b></p>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O SORCA destina-se ao ressarcimento dos lesados por
                                sinistros automóveis, quer sobre as pessoas (danos corporais), quer sobre os seus bens
                                (danos materiais), ou outro tipo de
                                lesões não susceptíveis de avaliação pecuniária, mas passiveis de dar origem ao dever de
                                indemnizar (danos não-patrimoniais), em consequência de actos ou omissões cometidas
                                por quem tenha a obrigação de indemnizar.<br>
                                O SORCA pode garantir a cobertura destes danos no transporte colectivo de passageiros,
                                desde que tal cobertura seja contratada e correspondente prémio pago.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <p><b>Quem são os “Terceiros” no contexto SORCA?</b></p>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">É “terceiro” todo aquele que sofra lesões ou danos que
                                podem/devem ser reparados ou indemnizados nos termos do SORCA.<br>
                                É importante saber que não são considerados “terceiros”, o tomador do seguro, o segurado
                                ou representantes legais, trabalhadores, sócios-gerentes a serviço destes, quando sejam
                                empresas, associações, fundações ou outras pessoas colectivas.<br>
                                Também não são terceiros, os pais, filhos, esposo ou esposa, irmãos ou irmãs e
                                respectivos afins do tomador do seguro e/ou segurado, ou pessoas sobre as quais estes
                                tenham dever de alimentos ou prestações indemnizatórias, decorrente de vínculos
                                especiais legais.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <p><b>Quem são os ocupantes no SORCA?</b></p>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Os ocupantes são as pessoas transportadas gratuitamente no
                                veículo seguro.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <p><b>Quem são os passageiros no SORCA?</b></p>
                            </button>
                          </h2>
                          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Os passageiros são pessoas transportadas no automóvel
                                seguro mediante pagamento.<br>
                                São exemplos de passageiros, as pessoas transportadas em táxis, transportes colectivos
                                de passageiros, carinhas escolares, entre outros.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              <p><b>Quais são os danos corporais cobertos pelo SORCA?</b></p>
                            </button>
                          </h2>
                          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">No contexto SORCA, os danos corporais são todos os
                                prejuízos resultantes da lesão à saúde física ou mental, ao beneficiário da
                                indemnização.<br>
                                Assim, na cobertura de danos corporais, estão abarcadas as despesas necessárias ao
                                restabelecimento da saúde da pessoa lesada, incluindo a assistência médica e
                                medicamentosa.<br>
                                O ressarcimento ou compensação pelos danos corporais, será sempre privilegiada, quando
                                houver concurso entre estas e os danos materiais.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              <p><b>Quais são os danos materiais cobertos pelo SORCA?</b></p>
                            </button>
                          </h2>
                          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">No contexto do SORCA, os danos corporais são todos os
                                prejuízos resultantes da lesão à saúde física ou mental, ao beneficiário da
                                indeminização.<br>
                                Assim, na cobertura de danos corporais, estão abarcadas as despesas necessárias ao
                                restabelecimento da saúde da pessoa lesada, incluindo a assistência medica e
                                medicamentosa.<br>
                                O ressarcimento ou compensação pelos danos corporais, será sempre privilegiada, quando
                                houver concurso entre estas e os danos materiais.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              <p><b>O que fazer quando o capital seguro for esgotado?</b></p>
                            </button>
                          </h2>
                          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O tomador de seguro pode repor o capital através do
                                pagamento de um prémio suplementar, correspondente ao restante tempo até o vencimento do
                                contrato.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              <p><b> O seguro pode ser transmitido por motivo de morte do tomador de seguro? E a
                                  quem?</b></p>
                            </button>
                          </h2>
                          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Sim! O SORCA transmite-se por morte de quem o tenha
                                contratado. Este, transmite-se ao segurado (pessoa no interesse de quem o segurado tenha
                                sido contratado) ou qualquer terceiro interessado.<br>
                                O interesse aqui mencionado tem a ver com uma intenção clara e legal, de ver protegidos
                                os riscos cobertos pela apólice. De contrário, a apólice pode ser considerada nula.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              <p><b> Qual é a importância de indicação da declaração do valor do veículo no contrato de
                                  seguro automóvel?</b></p>
                            </button>
                          </h2>
                          <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">A declaração do valor do bem seguro tem um impacto
                                relevante sobre a indemnização, pois, a obrigação da seguradora que tiver assumido a
                                cobertura de riscos sobre o veículo
                                seguro, fica limitada ao prejuízo ou danos sofridos, até capital seguro que é, na
                                cobertura de seguro de danos próprios sobre veículos automóveis, o valor do veículo
                                declarado pelo tomador do seguro.<br>
                                Adicionalmente, pode ser que a partir do valor declarado, a seguradora deduza o prémio a
                                pagar pelo seguro.<br>
                                Neste contexto, a Lei diz-nos que o contrato de seguro de danos, não tem como finalidade
                                enriquecer o tomador do seguro. Por isso, o tomador do seguro deve ser ressarcido pelas
                                suas perdas, na medida e proporção que efectivamente sofreu.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              <p><b> O que fazer para contratar o seguro automóvel?</b></p>
                            </button>
                          </h2>
                          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Para contratar o seguro, basta contactar-nos pelo Whatsapp
                                - 852727270, Email - contact@indicoseguros.co.mz, Facebook- Indico Seguros, Instagram
                                @indico_seguros ou pode dirigir-se à agência mais próxima de si, fazendo-se acompanhar
                                dos seguintes documentos: BI, Carta de condição, Livrete, Título de propriedade caso
                                pretenda um
                                seguro de Responsabilidade Civil e para Danos próprios adicionalmente deve apresentar
                                o NUIT, Declaração do Bairro, Declaração de Rendimentos e Carta de dados bancários.
                                De referir que para ambas coberturas deve trazer a viatura às nossas instalações, para
                                efeitos de vistoria</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                              <p><b> Como posso ter uma cotação de seguros?</b></p>
                            </button>
                          </h2>
                          <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Para ter uma cotação de seguros, pode fazer uma simulação
                                a partir da nossa linha de atendimento grátis 845533 ou pelo nosso website:
                                https://www.indicoseguros.co.mz/.
                                Pode também obter através das nossas plataformas digitais como Whatsapp-852727270,
                                Email - contact@indicoseguros.co.mz, Facebook- Indico Seguros e Instagram
                                @indico_seguros ou pode ainda dirigir-se a Agência mais próxima de si partilhando
                                documentos como: Bilhete de Identificação, Carta de Condução, e Livrete/Verbete da
                                viatura para individuais e para empresas a certidão de registo de entidade legal, o
                                Alvará e Livrete.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                              <p><b>Quais são as opções de seguros que existem para o automóvel?</b></p>
                            </button>
                          </h2>
                          <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Existem duas opções de seguro automóvel,
                                designadamente:<br>
                                <strong>a) Seguro Obrigatório de Responsabilidade Civil (Contra Terceiros), com os
                                  seguintes
                                  pacotes:</strong><br>
                                <i class="bx bx-check me-2"></i><strong>Pacote Básico</strong>: com limite de
                                Responsabilidade Civil Contra Terceiros até 3.000.000,00MT;<br>
                                <i class="bx bx-check me-2"></i><strong>Pacote Clássico</strong>: com limite de
                                Responsabilidade Civil Contra Terceiros até
                                3.000.000,00 MT, Responsabilidade Civil - Passageiros Transportados: Morte ou
                                Invalidez Permanente até 25,000.00 MT, Despesas Médicas até 5,000.00 MT, Despesas
                                de Funeral até 2,500.00 MT e Benefícios Funerários até 25,000.00 MT para o Tomador
                                e Agregado Familiar até 5 Membros; e<br>
                                <i class="bx bx-check me-2"></i><strong>Pacote Exclusivo</strong>: com limite de
                                Responsabilidade Civil contra Terceiro até
                                5.400.000,00 MT, Responsabilidade Civil - Passageiros Transportados: Morte ou
                                Invalidez Permanente até 100,000.00 MT, Despesas Médicas até 10,000.00 MT,
                                Despesas de Funeral até 5,000.00 MT e Benefícios Funerários até 25,000.00 MT para o
                                Tomador e Agregado Familiar até 5 Membros.<br><br>
                                <strong>b) Seguro de Danos Próprios (Todos os Riscos) com os seguintes
                                  pacotes:</strong><br>
                                <i class="bx bx-check me-2"></i><strong>Pacote Básico</strong>: com limite de
                                Responsabilidade Civil Contra Terceiros até 3,000,000.00
                                MT, cobertura de Choque, Colisão, Capotamento, Quebra Isolada de Vidros
                                Equipamento de Som, Responsabilidade Civil - Passageiros Transportados com os
                                limites de Morte ou Invalidez Permanente até 50,000.00 MT, Despesas Médicas até
                                10,000.00 MT e Despesas de Funeral até 5,000.00 MT;<br>
                                <i class="bx bx-check me-2"></i><strong>Pacote Clássico</strong>: com limite de
                                Responsabilidade Civil Contra Terceiros até
                                5,400,000.00 MT, cobertura de Choque, Colisão, Capotamento, Incêndio, Raio ou
                                Explosão, Quebra Isolada de Vidros, Furto ou Roubo, Equipamento de Som, Perda de Chaves,
                                Furto e Roubo de peças sobressalentes e acessórios, Responsabilidade Civil -
                                Passageiros Transportados com os limites de Morte ou Invalidez Permanente até
                                100,000.00 MT, Despesas Médicas até 10,000.00 MT e Despesas de Funeral até 5,000.00
                                MT; e<br>
                                <i class="bx bx-check me-2"></i><strong>Pacote Exclusivo</strong>: com limite de
                                Responsabilidade Civil Contra Terceiros até
                                8.000,000.00 MT, com cobertura de Choque, Colisão, Capotamento, Incêndio, Raio ou
                                Explosão, Quebra Isolada de Vidros, Furto ou Roubo, Equipamento de Som, Perda de
                                Chaves, Furto e Roubo de peças sobressalentes e acessórios, Fenómenos da natureza,
                                Greves e Tumultos, Responsabilidade Civil - Passageiros Transportados com os
                                limites de Morte ou Invalidez Permanente até 200,000.00 MT, Despesas Médicas até
                                10,000.00 MT e Despesas de Funeral até 5,000.00 MT.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                              <p><b>A partir de que momento o seguro é considerado válido?</b></p>
                            </button>
                          </h2>
                          <div id="collapseThirteen" class="accordion-collapse collapse"
                            aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O seguro é considerado válido a partir do dia e hora
                                registados no certificado do seguro.
                                O certificado é emitido após pagamento do prémio, com excepção de coberturas
                                temporárias.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading0">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                              <p><b>Como provar as autoridades que tenho um seguro automóvel válido?</b></p>
                            </button>
                          </h2>
                          <div id="collapse0" class="accordion-collapse collapse" aria-labelledby="heading0"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Deve recortar a vinheta que se encontra disponível no
                                certificado do seguro e afixar no
                                vidro para-brisas no canto inferior esquerdo. Em caso de dúvida por parte das
                                autoridades pode ainda entregar o certificado do seguro e por isso aconselhamos que
                                sempre o tenha por perto. Não se esqueça de, numa base regular, verificar a validade do
                                seguro conforme as datas indicadas no certificado</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                              <p><b> O que fazer para renovar o meu seguro?</b></p>
                            </button>
                          </h2>
                          <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Para renovar o seu seguro, pode dirigir-se a agência mais
                                próxima com a viatura (caso a
                                apólice esteja expirada) ou (se a apólice não tiver expirado) por via das nossas
                                plataformas digitais, Whatsapp-852727270, Email - contact@indicoseguros.co.mz,
                                Facebook- Indico Seguros, Instagram @indico_seguros e os documentos serão partilhados
                                pela mesma via.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                              <p><b>Onde é feita a vistoria da viatura? E como comprovar que a vistoria foi
                                  efectuada?</b></p>
                            </button>
                          </h2>
                          <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;"><strong>a) Contratação Presencial</strong>: a vistoria é
                                feita no local da contratação do seguro e é
                                facultada a declaração de vistoria que comprova o efeito da mesma a ser emitida pelo
                                técnico de subscrição;
                                <strong>b) Contratação Por Via das Plataformas Digitais</strong>: a vistoria é realizada
                                na agência mais
                                próxima, onde, no acto de emissão será facultada uma carta de vistoria com um prazo
                                de 03 dias subsequentes à contratação do seguro sob pena de anulação dos benefícios
                                em caso de verificação de sinistros. O cliente deve ainda garantir a posse da
                                Declaração de Vistoria a ser emitida pelo técnico de subscrição no local de
                                atendimento.
                                <strong>c) Contratação por via de Mediador de Seguros (corretores e agentes)</strong>: a
                                vistoria é
                                realizada junto aos nossos parceiros, na Activa - Centro Integrado de Gestão de Risco,
                                no prazo de 03 dias subsequentes à contratação do seguro sob pena de anulação dos
                                benefícios em caso de verificação de sinistros. O cliente deve ainda garantir a posse
                                da Declaração de Vistoria a ser emitida pelos agentes da Activa - Centro Integrado de
                                Gestão de Risco como meio comprovativo de realização da mesma.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                              <p><b>A seguradora oferece alguma bonificação por falta de registo de sinistros?</b></p>
                            </button>
                          </h2>
                          <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Neste momento não há desconto para esses casos, mas é
                                oferecido um desconto para
                                clientes que tenham no mínimo 10 viaturas seguradas.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading4">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                              <p><b>O que é franquia e para que serve?</b></p>
                            </button>
                          </h2>
                          <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">É o valor expresso na apólice que representa a parte do
                                prejuízo que deverá ser arcado
                                pelo segurado em caso de acidente. Se o valor do prejuízo de determinado acidente não
                                superar a franquia, a seguradora não indemnizará o segurado. A franquia é paga no acto
                                da regularização do acidente de acordo com as condições particulares da apólice e esta
                                pode variar de acordo com os termos da apólice.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading5">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                              <p><b>Posso contratar um seguro sem franquia?</b></p>
                            </button>
                          </h2>
                          <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Sim. No seguro obrigatório de responsabilidade civil
                                automóvel (Seguro contra terceiros)
                                não há exigência do pagamento de franquia em caso de sinistro.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="heading6">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                              <p><b>O meu seguro automóvel serve para os países estrangeiros?</b></p>
                            </button>
                          </h2>
                          <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O limite territorial consignado no seguro considera-se
                                limitado ao território
                                moçambicano e países limítrofes, nomeadamente: África do Sul, Suazilândia, Lesotho,
                                Namíbia, Botswana, Zâmbia, Zimbabwe e Tanzânia com excepção de Malawi.
                                Aplicando-se para estes países apenas para a cobertura de Responsabilidade Civil
                                Automóvel, sendo que para as demais aplica-se apenas ao território Moçambicano.</p>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading7">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                <p><b>O seguro automóvel é transmissível em caso de venda do carro?</b></p>
                              </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">Não, o seguro não pode ser transmissível. Após alienação
                                  da viatura o tomador de seguro
                                  deve proceder com a comunicação a seguradora dentro de 24h, sob pena de
                                  indemnização à seguradora no valor igual ao montante do prémio correspondente ao
                                  período de tempo que decorre entre a venda e o termo da anuidade do seguro. Caso o
                                  tomador de seguro não comunique, o seguro cessa com efeitos a partir das 0h do dia da
                                  venda.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading8">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                <p><b>Como posso incluir uma nova viatura na minha apólice?</b></p>
                              </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">Para incluir uma nova viatura na apólice, deve solicitar
                                  a inclusão preenchendo a
                                  proposta de seguro presencialmente ou através das nossas plataformas digitais de
                                  atendimento, facultando à seguradora o livrete e título de propriedade da viatura. De
                                  referir ainda que no acto de inclusão será necessário apresentar a viatura para
                                  efeitos de
                                  vistoria da mesma.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading9">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                <p><b>Como posso excluir uma viatura da minha apólice?</b></p>
                              </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">Para excluir a viatura da apólice, deve solicitar a
                                  exclusão indicando o motivo. Este
                                  pedido pode ser enviado presencialmente através de uma Carta a Seguradora ou através
                                  das plataformas digitais disponíveis, pelo nosso Whatsapp - 852727270, Email -
                                  contact@indicoseguros.co.mz, Facebook- Indico Seguros, Instagram @indico_seguros.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading10">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                <p><b>Como fazer para actualizar os dados da minha apólice?</b></p>
                              </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" aria-labelledby="heading10"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">Para actualizar os dados da sua apólice, pode partilhar
                                  os documentos solicitados pelo
                                  Whatsapp-852727270, Email - contact@indicoseguros.co.mz, Facebook- Indico Seguros,
                                  Instagram @indico_seguros ou submeter os mesmos na Agência mais próxima de si.</p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading11">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                <p><b>Quais são as facilidades de pagamento de prémios?</b></p>
                              </button>
                            </h2>
                            <div id="collapse11" class="accordion-collapse collapse" aria-labelledby="heading11"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">
                                  O seguro pode ser pago numa prestação anual, mas também oferecemos facilidades
                                  de pagamento de prémios em 2 modalidades nomeadamente:<br>
                                  <i class="bx bx-check me-2"></i>Trimestral para prémios acima de 20 Mil Meticais;
                                  e<br>
                                  <i class="bx bx-check me-2"></i>Semestral para prémios acima de 10 Mil Meticais.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading12">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                <p><b> E se atrasar no pagamento do prémio?</b></p>
                              </button>
                            </h2>
                            <div id="collapse12" class="accordion-collapse collapse" aria-labelledby="heading12"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">
                                  O atraso ou não pagamento do prémio implica o cancelamento automático do seu seguro
                                  a partir da data em que devia ter efectuado o pagamento da respectiva prestação.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading13">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                <p><b>Posso reactivar um seguro cancelado por falta de pagamento de prémio?</b></p>
                              </button>
                            </h2>
                            <div id="collapse13" class="accordion-collapse collapse" aria-labelledby="heading13"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">
                                  Caso a apólice seja cancelada por falta de pagamento, a mesma não poderá ser
                                  reactivada,
                                  sendo assim necessário a emissão de uma nova apólice e devida vistoria da viatura caso
                                  se trate de uma apólice automóvel.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading14">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse14" aria-expanded="false" aria-controls="collapse14">
                                <p><b> Quais são os meios de pagamento disponíveis?</b></p>
                              </button>
                            </h2>
                            <div id="collapse14" class="accordion-collapse collapse" aria-labelledby="heading14"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">
                                  O prémio de seguro pode ser pago por via de transferência e/ou depósitos bancários,
                                  presencialmente através de cartões de débito ou crédito por via do POS, cheques,
                                  MPESA, pagamentos de serviços (ATM).
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading15">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse15" aria-expanded="false" aria-controls="collapse15">
                                <p><b>Como cancelar o meu seguro?</b></p>
                              </button>
                            </h2>
                            <div id="collapse15" class="accordion-collapse collapse" aria-labelledby="heading15"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">
                                  Para cancelar o seu seguro basta enviar uma carta informando da pretensão de
                                  cancelamento com a antecedência mínima de 60 dias antes da data em que pretende que
                                  a apólice cesse os efeitos. A carta de cancelamento pode ser enviada por meio das
                                  plataformas digitais: Whatsapp-852727270, Email - contact@indicoseguros.co.mz,
                                  Facebook- Indico Seguros, Instagram @indico_seguros ou entregue a Agência mais
                                  próxima de si.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading16">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse16" aria-expanded="false" aria-controls="collapse16">
                                <p><b>O cancelamento do meu seguro dá direito à reembolso?</b></p>
                              </button>
                            </h2>
                            <div id="collapse16" class="accordion-collapse collapse" aria-labelledby="heading16"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">
                                  Sim, caso o contrato de seguro ainda esteja em vigor. Note que, se durante a anuidade
                                  em curso tiverem ocorrido sinistros com pagamento de indemnizações, não há lugar a
                                  estorno e ou reembolso do prémio.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading17">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse17" aria-expanded="false" aria-controls="collapse17">
                                <p><b>Como fazer para ter um reembolso de prémio duplicado?</b></p>
                              </button>
                            </h2>
                            <div id="collapse17" class="accordion-collapse collapse" aria-labelledby="heading17"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">
                                  Para ter direito ao reembolso do prémio duplicado, deve remeter o pedido com os
                                  seguintes documentos:<br>
                                  <i class="bx bx-check me-2"></i>Carta de solicitação de estorno do valor enviado e o
                                  motivo;<br>
                                  <i class="bx bx-check me-2"></i>Dados Bancários com carimbo e assinatura do Banco;<br>
                                  <i class="bx bx-check me-2"></i>Extrato Bancário; e<br>
                                  <i class="bx bx-check me-2"></i>Comprovativo de Transferência.<br>
                                  Enviar por meio das plataformas digitais: Whatsapp-852727270, Email -
                                  contact@indicoseguros.co.mz, Facebook- Indico Seguros, Instagram @indico_seguros ou
                                  submetendo a Agência mais próxima de si.
                                </p>
                              </div>
                            </div>
                          </div>
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="heading18">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse18" aria-expanded="false" aria-controls="collapse18">
                                <p><b> O que é Direito de Regresso?</b></p>
                              </button>
                            </h2>
                            <div id="collapse18" class="accordion-collapse collapse" aria-labelledby="heading18"
                              data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p style="text-align: justify;">
                                  O direito de regresso é a faculdade que um devedor que cumpre ou paga uma obrigação,
                                  tem de exigir de volta o que cumpriu ou pagou a pessoa directamente responsável.
                                  No SORCA em especial, a seguradora, ao indemnizar o terceiro, pode, em certas
                                  circunstâncias, ter o direito de recuperar do segurado os montantes que pagou. Assim,
                                  o direito de regresso da seguradora no SORCA, é a faculdade desta poder exigir ao
                                  tomador do seguro e/ou segurado, o reembolso do montante pago (indemnização) a
                                  terceiros lesados, sempre que verificada uma das situações específicas e especiais,
                                  que ultrapassam os riscos assumidos pela seguradora
                                </p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="region0 accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              <p><b>Como contratar o seguro nas bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Para contratar o seguro das bombas pode dirigir-se ao
                                posto de abastecimento mais
                                próximo se si, podendo ser Engen, Galp, Petromoc, Puma, Êxito, Total e BP, fazendo-se
                                acompanhar da respectiva viatura e pela documentação necessária, sendo estes, o Bilhete
                                de identidade, Carta de condução, e Livrete e o título de propriedade.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <p><b>Qual é a cobertura que vendem nas bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Nas bombas tem disponível a cobertura de responsabilidade
                                civil com extensão de
                                ocupantes da viatura segura com os seguintes benefícios:<br>
                                <i class="bx bx-check me-2"></i>Responsabilidade civil contra terceiros (3.000.000,
                                MT);<br>
                                <i class="bx bx-check me-2"></i>Morte ou invalidez permanente (25.000,00MT);<br>
                                <i class="bx bx-check me-2"></i>Despesas medicas (5.000,00MT);<br>
                                <i class="bx bx-check me-2"></i>Despesas de funeral (2.500,00MT); e<br>
                                <i class="bx bx-check me-2"></i>Benefícios funerários - Tomador de seguro e agregado
                                familiar até 5 membros
                                (25.000,00MT).
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <p><b> Qual é o preço do seguro das bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O seguro das Bombas custa actualmente 3,999.00 Meticais.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <p><b>Qual é a razão da subida do preço nas bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">A subida do preço do seguro das bombas deveu-se à
                                alteração na estrutura de custos de
                                subscrição de seguros assim como de regularização de sinistros. Com esta subida,
                                procuramos manter a nossa qualidade de serviços aos nossos clientes.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              <p><b> Como é feito o pagamento nas bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O pagamento nas bombas pode ser feito através de POS,
                                tendo disponível os serviços de
                                M-Pesa ou conta móvel. O cliente pode igualmente efectuar depósito bancário no
                                correspondente à prestação anual.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              <p><b>Pode ser efectuado um pagamento adiantado nas bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Não é possível. Mas, poderá efectuar o pagamento em
                                qualquer uma das Agências. Deve
                                levar o Certificado de Seguro, Bilhete de Identificação, Carta de Condução, Livrete da
                                viatura, NUIT e a própria viatura para que seja observada.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              <p><b>Quais são as vantagens em contratar um seguro nas bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O seguro das Bombas é uma forma rápida e flexível de
                                adquirir o seguro “a favor de
                                terceiros” - o seguro obrigatório de responsabilidade civil automóvel.
                                Pode ser encontrado nas Bombas gasolineiras Engen, Galp, Petromoc, Puma, Êxito e BP,
                                ao longo de todo o País. Para além de garantir a cobertura a terceiros possui a
                                particularidade de incluir ocupantes da viatura. Possui a vantagem adicional de
                                cobertura de despesas de funeral do segurado e sua família.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              <p><b>Qual é a melhor opção entre os seguros das bombas e os seguros que vendem nas
                                  agências?</b></p>
                            </button>
                          </h2>
                          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">As duas opções são melhores, pois, as coberturas
                                apresentadas garantem tanto a nível
                                das Bombas como Agências oferecem os benefícios mencionados de acordo com o pedido
                                do cliente. No entanto, nas agências dispomos de mais opções, enquanto o pacote
                                oferecido nas bombas é apenas um dos que estão disponíveis nas agências.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              <p><b>É possível alterar a cobertura de um seguro comprado nas bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Sim, é possível. Dirigindo-se a Agência mais próxima com o
                                certificado anterior ou
                                através do nosso Whatsapp - 852727270, Facebook – Indico Seguros, Instagram
                                @indico_seguros WeChat -- ou e-mail contact@indicoseguros.co.mz.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              <p><b>É possível substituir a viatura num seguro comprado nas bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Sim, é possível. Dirigindo-se a Agência mais próxima com o
                                certificado anterior, livrete e
                                título de propriedade e com a respectiva viatura. Pode ainda fazer o pedido através do
                                nosso Whatsapp - 852727270, Facebook – Indico Seguros, Instagram @indico_seguros
                                WeChat -- ou e-mail contact@indicoseguros.co.mz anexando os mesmos documentos.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                              <p><b>Quero cancelar o seguro das bombas. Como proceder? Tenho direito a reembolso?</b>
                              </p>
                            </button>
                          </h2>
                          <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Para cancelar o seguro das bombas, deve submeter a Carta
                                de Pedido de Cancelamento,
                                indicando o motivo de cancelamento.
                                Sim, tem direito a reembolso ou pode também usar o valor creditado para transferir para
                                uma outra apólice existente.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwelve">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                              <p><b>Quando e onde pode ser levantado o certificado digitalizado de um seguro das
                                  bombas?</b></p>
                            </button>
                          </h2>
                          <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O certificado digitalizado pode ser levantado após
                                contratação, sendo que o cliente pode
                                aproximar às instalações da seguradora ou até mesmo solicitar por via das plataformas
                                digitais.
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThirteen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                              <p><b>Como e onde solicitar a segunda via do seguro das bombas em caso de
                                  extravio/perda?</b></p>
                            </button>
                          </h2>
                          <div id="collapseThirteen" class="accordion-collapse collapse"
                            aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Em caso de extravio/perda pode fazer a solicitação da
                                segunda via em qualquer das
                                agências ou solicitar o mesmo por via das plataformas digitais, desde que faculte a
                                matrícula ou número da apólice de seguro.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="region0 accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              <p><b>Como participar o sinistro?</b></p>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Para efeitos de participação de sinistros, deverá, num
                                prazo de 8 dias, a contar a partir da
                                data da sua ocorrência, dirigir-se à agência mais próxima de si ou através das nossas
                                plataformas digitais, submeter a ocorrência por meio de um formulário de participação de
                                sinistro facultado pela companhia.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <p><b>Quais são os documentos e requisitos para participar o sinistro?</b></p>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Em caso de participação de sinistro é necessário que as
                                partes envolvidas apresentem:
                                Número auto de notícia ou o auto de notícia, cópia da carta de condução, cópia do
                                livrete
                                e título de propriedade, 2 cotações para a reparação dos danos, cópia do certificado de
                                seguro, fotos dos danos e outros documentos que se julgarem necessários para a melhor
                                análise do processo.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <p><b>Em quanto tempo é feita a peritagem?</b></p>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">A realização da peritagem deve em média ocorrer 48 horas
                                após a verificação do acidente
                                na área automóvel, sendo que para as coberturas diferentes do automóvel deve ser
                                realizada em 5 dias de acordo com o manual de procedimentos em curso na nossa
                                Companhia.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <p><b>Em quanto tempo é paga a indemnização?</b></p>
                            </button>
                          </h2>
                          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">A indemnização deve ser paga no prazo de 30 (trinta) dias
                                desde a data em o processo de
                                analise das causas, circunstâncias e consequências do acidente e o valor a indemnizar é
                                fixado.<br>
                                Após ter decorrido o prazo de 90 (noventa) dias sobre a data da participação do acidente
                                e estando claras e avaliadas as suas consequências, pode o beneficiário solicitar
                                pagamentos parciais por conta da indemnização devida, até ao máximo de 50%
                                (cinquenta por cento) do valor estimado pela seguradora, tendo em consideração o valor
                                global da indemnização.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              <p><b>A seguradora vende salvados (carros acidentados) para os clientes?</b></p>
                            </button>
                          </h2>
                          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">No processo de alienação de salvados as ofertas
                                privilegia-se as empresas do Grupo da
                                Indico e respectivos colaboradores e não havendo manifestação de interesse por parte
                                destes, a oferta será dirigida ao público onde os clientes querendo podem manifestar
                                interesse.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              <p><b>Quando se declara perda total do veículo terceiro segurado?</b></p>
                            </button>
                          </h2>
                          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Há perda total quando se verificam as seguintes
                                situações:<br>
                                a) Do ponto de vista técnico, a reparação do veículo não é viável, isto porque
                                provavelmente o veículo não poderá voltar ao seu estado original;<br>
                                b) Do ponto de vista económico, também não se mostra viável a sua reparação, isto
                                porque o valor da reparação é igual ou superior ao valor do bem.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              <p><b>O que fazer se não concordar com o repúdio do sinistro?</b></p>
                            </button>
                          </h2>
                          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Neste caso, pode recorrer aos mecanismos de registo de
                                reclamações disponíveis na
                                seguradora. Se tiver um corretor ou agente de seguro, enderece-lhe a reclamação. Este,
                                pode sua vez, encaminhará a reclamação à seguradora.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              <p><b>O que fazer se não concordar com a respostada dada ah seguradora?</b></p>
                            </button>
                          </h2>
                          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Em caso de persistência na recusa da indemnização do
                                sinistro, estão disponíveis ao
                                tomador do seguro e/ou segurado, os chamados meios judiciais de tutela de direitos de
                                direitos, tais como o recurso à entidade de supervisão de seguros, Associação
                                Moçambicana de Seguradoras e Associação Moçambicana de Consumidores.
                                Alternativamente, pode recorrer aos Tribunais e Centro de Mediação e Arbitragem.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              <p><b>Pode o terceiro participar o sinistro ah seguradora do tomador do seguro ou
                                  segurado?</b></p>
                            </button>
                          </h2>
                          <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">O processo de participação de sinistros consiste na
                                manifestação de interesse em acionar
                                o seguro para a reparação dos danos.<br>
                                Sendo a apólice contratada entre o tomador de seguro e a seguradora, o poder de
                                reclamar as coberturas contratadas é detido pelo tomador de seguro, devendo sempre
                                procurar juntar o máximo de dados e documentos do terceiro lesado ou causador do
                                sinistro.</p>
                            </div>
                          </div>
                        </div>
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                              data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              <p><b> Como proceder em caso de sinistros com veículos sem seguro?</b></p>
                            </button>
                          </h2>
                          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <p style="text-align: justify;">Sempre que uma viatura com seguro sofrer danos causados
                                por outra sem seguro, deve-se solicitar a intervenção das autoridades policiais para que
                                junto do causador do sinistro
                                seja garantida a reposição dos danos, sendo que em caso de garantida a reposição dos
                                danos, sendo que em caso de divergências entre as duas pares o processo deve seguir ao
                                tribunal.<br>
                                Ressaltar que nenhum condutor tem a autoridade legal para fazer a apreensão de
                                documentos ou viaturas de terceiros para garantir a reposição dos danos sofridos.</p>
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
      <img src="./assets/img/footer_bar.png" alt="">
    </div>
  </footer>
  <script src="./assets/vendor/jquery/js/jquery.min.js?version=1.1"></script>
  <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js?version=1.1"></script>
  <script src="./assets/vendor/mdbootstrap/js/mdb.min.js?version=1.1"></script>
  <script src="./assets/js/chatbox.js?version=1.1"></script>
  <script src="./assets/js/main.js"> </script>
  <script src="./assets/js/function.js"></script>

</body>

</html>