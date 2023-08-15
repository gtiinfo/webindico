<!doctype html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Responsabilidade Civil | ÍNDICO SEGUROS</title>
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
                          <li><a href="{{ __(route('view.empresas')) }}"  class="active">Empresas</a></li>
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
                                    <li><a href="{{ __(route('view.resp-civil-auto')) }}">Responsabilidade Civil</a></li>
                                    <li><a href="{{ __(route('view.danos-proprios-emp')) }}">Danos Próprios</a></li>
                                  </ul>
                                </ul>
                                <ul>
                                  <li ><a href="{{ __(route('view.acidente-trabalho')) }}">Acidentes de Trabalho</a></li>
                                </ul>
                                <ul>
                                  <li ><a href="{{ __(route('view.saude')) }}">Saúde</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.saude')) }}">Engenharias</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.incendio')) }}">Incêndio</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.respCivil-emp')) }}">Responsabilidade Civil</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.pme')) }}">PMEs</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.negocio')) }}">Multiriscos Negócio</a></li>
                                </ul>
                                
                              </div>
                            </div>
                            <div class="item-0">
                              <li class="icon-menu-drop">Sinistros</li>
                              <div class="list-item">
                                <ul>
                                  <li><a href="{{ __(route('view.sinistro-emp')) }}">Participar de Sinistro</a></li>
                                  
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.cons-sinistro-emp')) }}">Consultar Sinistro</a></li>
                                </ul>
                                <ul>
                                  <li><a href="{{ __(route('view.oficinas-emp')) }}">Oficinas</a></li>
                                </ul>
                              </div>
                            </div>
                            <div class="item-0">
                              <li class="icon-menu-drop">Serviços Online</li>
                              <div class="list-item">
                                <ul>
                                  <li><a href="{{ __(route('view.condicoes-gerais-emp')) }}">Condições Gerais</a></li>
                                </ul>
                                <li class="dropdown0 icon-menu-drop">Gestão de Valores</li>
                                <ul dropdown1>
                                  <li><a href="{{ __(route('view.aviso-cobranca-emp')) }}">Aviso de Cobrança</a></li>
                                  <li><a href="{{ __(route('view.pag-premio-emp')) }}">Pagamento Prémio</a></li>
                                  <li><a href="{{ __(route('view.reembolso-emp')) }}">Reembolso</a></li>
                                  <li><a href="{{ __(route('view.recibo-emp')) }}">Recibo</a></li>
                                </ul>
                                <ul>
                                  <li class="dropdown0 icon-menu-drop">Denúcia</li>
                                  <ul class="dropdown1">
                                    <li><a href="{{ __(route('view.part-fraude-emp')) }}">Participar de Fraude</a></li>
                                    <li><a href="{{ __(route('view.reclamacoes')) }}">Reclamações</a></li>
                                  </ul>
                                </ul>
                                <ul>
                                  <li class="dropdown0 icon-menu-drop">Actualização de Apólice</li>
                                  <ul class="dropdown1">
                                    <li><a href="{{ __(route('view.actualizacao-capital-emp')) }}">Actualização de Capital</a></li>
                                    <li><a href="{{ __(route('view.actualizacao-dados-emp')) }}">Actualização de Dados</a></li>
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
                  <li class="">
                    <div class="bg-shape">
                      <div class="left-triangle"></div>
                      <div class="right-triangle"></div>
                    </div>
                    <div class="content-text">
                      <a href="{{ __(route('view.home')) }}">Particulares</a>
                    </div>
                  </li>
                  <li class="mnu-selected">
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
                        <li><a href="{{ __(route('view.resp-civil-auto')) }}" class="menu-dropdown" id="menu-dropdown">Responsabilidade Civil</a></li>
                        <li><a href="{{ __(route('view.danos-proprios-emp')) }}" class="menu-dropdown" id="menu-dropdown">Danos Próprios</a></li>
                      </ul>
                      <ul>
                        <li class="title">Acidentes de Trabalho</li>
                        <li><a href="{{ __(route('view.acidente-trabalho')) }}">Acidentes de Trabalho</a></li>
                      </ul>
                      <ul>
                        <li class="title">Saúde</li>
                        <li><a href="{{ __(route('view.saude')) }}">Saúde</a></li>
                      </ul>
                      <ul>
                        <li class="title">Engenharias</li>
                        <li><a href="{{ __(route('view.saude')) }}">Engenharias</a></li>
                      </ul>
                      <ul>
                        <li class="title">Incêndio</li>
                        <li><a href="{{ __(route('view.incendio')) }}">Incêndio</a></li>
                      </ul>
                      <ul>
                        <li class="title">Responsabilidade Civil</li>
                        <li><a href="{{ __(route('view.respCivil-emp')) }}">Responsabilidade Civil Geral</a></li>
                      </ul>
                      <ul>
                        <li class="title">PMEs</li>
                        <li><a href="{{ __(route('view.pme')) }}">PMEs</a></li>
                      </ul>
                      <ul>
                        <li class="title">Negócio</li>
                        <li><a href="{{ __(route('view.negocio')) }}">Multiriscos Negócio</a></li>
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
                        <li><a href="{{ __(route('view.sinistro-emp'))}}">Participar do Sinistro</a>
                        </li>
                      </ul>
                      <ul>
                        <li class="title">Consultar</li>
                        <li><a href="{{ __(route('view.cons-sinistro-emp')) }}">Consultar Estado do Sinistro</a></li>
                      </ul>
                      <ul>
                        <li class="title">Oficinas</li>
                        <li><a href="{{ __(route('view.oficinas-emp')) }}">Oficinas</a></li>
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
                        <li><a href="{{ __(route('view.condicoes-gerais-emp')) }}">Condições Gerais</a></li>
                      </ul>
                      <ul>
                        <li class="title">Gestão de Valores</li>
                        <li><a href="{{ __(route('view.aviso-cobranca-emp')) }}">Aviso de Cobrança</a></li>
                        <li><a href="{{ __(route('view.pag-premio-emp')) }}">Pagamento Prémio</a></li>
                        <li><a href="{{ __(route('view.reembolso-emp')) }}">Reembolso</a></li>
                        <li><a href="{{ __(route('view.recibo-emp')) }}">Recibo</a></li>
                      </ul>
                      <ul>
                        <li class="title">Denúcia</li>
                        <li><a href="{{ __(route('view.part-fraude-emp')) }}">Participar Fraude</a></li>
                        <li><a href="{{ __(route('view.reclamacoes')) }}">Reclamações</a></li>
                      </ul>
                      <ul>
                        <li class="title">Actualização de Apólice</li>
                        <li><a href="{{ __(route('view.actualizacao-capital-emp')) }}">Actualização de Capital</a></li>
                        <li><a href="{{ __(route('view.actualizacao-dados-emp')) }}">Actualização de Dados</a></li>
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
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="10"
            aria-label="Slide 3"></button>
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="11"
            aria-label="Slide 3"></button>
          <button type="button" data-mdb-target="#carouselBasicExample" data-mdb-slide-to="12"
            aria-label="Slide 3"></button>
        </div>

        <!-- Inner -->
        <div class="carousel-inner slider">
          <!-- Single item -->
          <div class="carousel-item slider active" style="background-image: url(../assets/img/background.png);">
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/automovel_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-0"
              style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Conduza sem medo!</h1>

              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/frotas_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999;  max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Não deixe que o imprevisto lhe paralise</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/maquinaria_banner.png);">
            <img src="./assets/img/slides/Meios_de_Pagamento.jpeg" class="w-100" alt="" />
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999;  max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Não deixe que o imprevisto lhe paralise</h1>

              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider"
            style="background-image: url(../assets/img/slides/acidentesTRabalho_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999;  max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Cuide do seu activo mais valioso!</h1>

              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/saude_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Cuide do seu activo mais valioso!</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/engenharias_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Construa com segurança. Construa sem medo…!</h1>
              </div>
            </div>
          </div>
          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/incendio_banner_1.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Não deixe que o imprevisto lhe paralize</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/negocios_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">A solução ideal para o seu negócio</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/respCivil_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Construa com segurança. Construa sem medo…!</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/PME_banner.png);">
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999; max-width: 450px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">A solução para o sucesso dos empreendedores!</h1>
              </div>
            </div>
          </div>
          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/callCenter_banner.png);">
            <img src="./assets/img/slides/Seguro_de_Automovel.jpg" class="w-100" alt="" />
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999; max-width: 600px;">
              <div class="text-white text-center text-md-start">
                <h1 class="mb-5 title">Ligue 84/ 82 5533 <br>e Viva Sem Medo!</h1>
              </div>
            </div>
          </div>

          <!-- Single item -->
          <div class="carousel-item slider" style="background-image: url(../assets/img/slides/whatsapp_banner.png);">
            <img src="./assets/img/slides/Seguro_de_Automovel.jpg" class="w-100" alt="" />
            <div class="content d-flex justify-content-start align-items-center h-100 p-5"
              style="z-index: 99999; max-width: 600px;">
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
    <section class="box">
      <div class="box-center" style="max-width: 1200px;">
        <div class="header-content-main">
          <h4>
            Temos para si soluções diferenciadas no seguro obrigatório automóvel, para além de garantir a cobertura dos
            danos causados a terceiros, esta pode ainda estender-se aos ocupandes da viatura segura. E com a extensão
            para despesas médicas, o seguro garante a cobertura destas despesas até ao limite indicado na cobertura.
          </h4>
        </div>
        <div class="table-producto">
          <div class="table-header">
            <div class="item-container">
              <div class="table-item dif" style="background: url(../assets/img/slides/Seguro_de_Automovel.jpg);"></div>
              <div class="table-separador">
                <div class="table-separador-title">
                  Riscos Cobertos
                </div>
              </div>
              <div class="table-item">

                <h2>Básico</h2>
                <p>É o seguro com o preço mais reduzido e oferece o limite mínimo de cobertura apenas aos
                  terceiros lesados.</p>
              </div>
              <div class="table-item">

                <h2>Clássico</h2>
                <p>O pacote clássico inclui a cobertura aos ocupantes do veículo seguro e garante a cobertura ao limite
                  mínimo de responsabilidade civil.</p>
              </div>
              <div class="table-item">

                <h2>Exclusivo</h2>
                <p>O pacote exclusivo, oferece um limite maior de indeminização e cobertura aos ocupantes do veículo
                  seguro.</p>
              </div>
            </div>
          </div>
          <div class="table-content">
            <ul class="content-list">
              <li class="list-item info">
                <div class="col-name lv2">
                  <p>Responsabilidade Civil Contra Terceiros</p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    3,000,000.00 MT
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    3,000,000.00 MT
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    3,000,000.00 MT
                  </p>
                </div>
              </li>
              <li class="list-item info">
                <div class="col-name lv2">
                  <p>Morte ou Invalidez Permanente</p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-x text-danger'></i></span>
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    25,000.00 MT
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    100,000.00 MT
                  </p>
                </div>
              </li>
              <li class="list-item info">
                <div class="col-name lv2">
                  <p>Despensas Médicas</p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-x text-danger'></i></span>
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    5,000.00 MT
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    10,000.00 MT
                  </p>
                </div>
              </li>
              <li class="list-item info">
                <div class="col-name lv2">
                  <p>Despesas de Funeral</p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-x text-danger'></i></span>
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    2,500.00 MT
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    5,500.00 MT
                  </p>
                </div>
              </li>
              <li class="list-item info">
                <div class="col-name lv2">
                  <p>Benefícios Funerários-Tomador e agregado familiar até 5 membros</p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span>
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    25,000.00 MT
                  </p>
                </div>
                <div class="col-detalh">
                  <p>
                    <span><i class='bx bx-check'></i></span><br>
                    25,000.00 MT
                  </p>
                </div>
              </li>
              <li class="list-item button">
                <div class="item-button spacer">&nbsp;</div>
                <div class="item-button">
                  <div class="simulr basico-rc">
                    <a href="javascript:void(0)">Simular</a>
                  </div>
                </div>
                <div class="item-button">
                  <div class="simulr classico-rc">
                    <a href="javascript:void(0)">Simular</a>
                  </div>
                </div>
                <div class="item-button">
                  <div class="simulr exclusivo-rc">
                    <a href="javascript:void(0)">Simular</a>
                  </div>
                </div>
              </li>
            </ul>

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
                        <a class="btn btn-contacts" href="../assets/documents/Seguro_Automovel_v01.pdf">
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
      <?php
      // if (!empty($_POST["send"])) {
      //   $name = $_POST["name"];
      //   $dataNasc = $_POST["dataNasc"];
      //   $endereco = $_POST["endereco"];
      //   $contacto = $_POST["contacto"];
      //   $email = $_POST["email"];
      //   $numBi = $_POST["numBi"];
      //   $ocupacao = $_POST["ocupacao"];
      //   $registo = $_POST["registo"];
      //   $marca = $_POST["marca"];
      //   $modelo = $_POST["modelo"];
      //   $numMotor = $_POST["numMotor"];
      //   $numQuadro = $_POST["numQuadro"];
      //   $tipoViatura = $_POST["tipoViatura"];

      //   // $destinatario = "paulo.maculuve@bluteki.com";
      //   $destinatario = "contact@indicoseguros.co.mz";
      //   $assuntoEmail = "Cotação do Cliente $name";

      //   $headers = "From:  $email" . "\r\n"; // Endereço de e-mail do remetente
      //   $headers .= "MIME-Version: 1.0" . "\r\n";

      //   $corpo = "Dados do Cliente \n\nNome do Cliente: $name \nData de Nascimento: $dataNasc \nEndereço: $endereco \nContacto: $contacto \nE-mail: $email \nNº do Bilhete de Identidade: $numBi \nOcupação: $ocupacao \n\n\nDados da Viatura \n\nRegisto: $registo \nMarca: $marca \nModelo: $modelo \nNúmero do Motor: $numMotor \nNúmero do Quadro: $numQuadro \n Tipo de Viatura: $tipoViatura";
      //   if (mail($destinatario, $assuntoEmail, $corpo, $headers)) { ?>
          <!-- <div class="alert alert-success text-center" role="alert">
            E-mail enviado com sucesso!
          </div> -->
          <?php
        // } else {
          ?>
          <!-- <div class="alert alert-danger text-center" role="alert">
            E-mail não enviado!
          </div> -->
          <?php
        // }

      // }

      ?>
      <div class="card-simuladores">
        <div class="close"></div>
        <div class="header-title">
          <div class="img-header">
            <img src="../assets/img/IconsTiposSeguro_Auto_grande.png" alt="">
          </div>
          <div class="text-header">
            <p>Simulador Auto</p>
          </div>
        </div>
        <div class="content-body">
          <div class="input">
            <small>Tipo da Viatura</small>
            <select class="form-control" required id="tipoViatura" name="">
              <option disabled="" selected=""> -- Seleccione uma opção -- </option>
              <option value="1">Ligeiros, LVD / 4X4</option>
              <option value="2">Camiões abaixo de 3.5 toneladas</option>
              <option value="3">Camiões acima de 3.5 toneladas</option>
              <option value="4">Mini Bus - 15 lugares</option>
              <option value="5">Autocarros</option>
              <option value="6">Atrelados domésticos</option>
              <option value="7">Atrelados Comerciais</option>
              <option value="8">Motociclos</option>
              <option value="9">Veículos especiais</option>
            </select>
            <div class="input-in">
              <div class=" input">
                <small>Ocupantes</small>
                <input type="number" class="ocupants form-control">
              </div>
            </div>
            <div class="d-flex">
              <div class="input me-md-3">
                <button id class="btn btn-indico btn-primary simular">Simular</button>
              </div>
              <div class="input">
                <button class="btn btn-indico btn-primary novSimulacao">Nova simulação</button>
              </div>
            </div>
            <div class="input">
              <p class="valorPremio">
              </p>
            </div>
            <div class="input">
              <button class="btn btn-indico btn-primary cont">Continuar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card-form overflow-y-scroll">
        <form action="pagamento.php" method="POST">
          <div class="close"></div>
          <div class="title">
            <h5>Dados Pessoais</h5>
          </div>
          <div class="list-inpts">
            <div class="mb-3">
              <label for="">Nome do Cliente</label>
              <div>
                <input type="text" class="form-control" name="name" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="">Data de Nascimento</label>
              <div>
                <input type="date" class="form-control" name="dataNasc" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="">Endereço</label>
              <div>
                <input type="text" class="form-control" name="endereco" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="">Contacto</label>
              <div>
                <input type="text" class="form-control" name="contacto" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="">E-mail</label>
              <div>
                <input type="text" class="form-control" name="email" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="">Nº do Bilhete de Identidade </label>
              <div>
                <input type="text" class="form-control" name="numBi" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="">Ocupação</label>
              <div>
                <input type="text" class="form-control" name="ocupacao" required>
              </div>
            </div>
            <div class="title">
              <h5>Dados da Viatura</h5>
            </div>
            <div class="list-inpts">
              <div class="mb-3">
                <label for="">Registo</label>
                <div>
                  <input type="text" class="form-control" name="registo" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="">Marca</label>
                <div>
                  <input type="text" class="form-control" name="marca" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="">Modelo</label>
                <div>
                  <input type="text" class="form-control" name="modelo" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="">Número do motor</label>
                <div>
                  <input type="text" class="form-control" name="numMotor" required>
                </div>
              </div>
              <div class="mb-3">
                <label for="">Número do quadro</label>
                <div>
                  <input type="text" class="form-control" name="numQuadro" required>
                </div>
              </div>
              <div class="mb-4">
                <label for="">Tipo de veículo </label>
                <select class="form-control" required id="tipoViatura" name="tipoViatura" required>
                  <option disabled="" selected=""> -- Seleccione uma opção -- </option>
                  <option value="1">Ligeiros, LVD / 4X4</option>
                  <option value="2">Camiões abaixo de 3.5 toneladas</option>
                  <option value="3">Camiões acima de 3.5 toneladas</option>
                  <option value="4">Mini Bus - 15 lugares</option>
                  <option value="5">Autocarros</option>
                  <option value="6">Atrelados domésticos</option>
                  <option value="7">Atrelados Comerciais</option>
                  <option value="8">Motociclos</option>
                  <option value="9">Veículos especiais</option>
                </select>
              </div>
              <div class="mb-3">
                <input type="submit" class="btn btn-indico btn-primary" name="send" value="Enviar">
              </div>
            </div>
          </div>
        </form>
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
  <script src="../assets/js/chatbox.js?version=1.1"></script>
  <script src="../assets/js/main.js"> </script>
  <script src="../assets/js/function.js"></script>
</body>

</html>