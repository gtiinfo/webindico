// Menu
$(".field-link .menu").on("click", function () {
  let menu = $(".field-link .menu");
  let menuMobile = $(".menu-mobile-wrap");

  if ($(this).hasClass("show")) {
    $(this).removeClass("show");
    menuMobile.removeClass("show");
  } else {
    menu.removeClass("show");
    menuMobile.removeClass("show");

    $(this).addClass("show");
    menuMobile.addClass("show");
  }
});

$('.item-0 > li').on('click', function (event) {
  event.preventDefault();
  $(this).next().toggleClass('active');
  $('.dropdown0').on('click', function (event) {
    event.preventDefault();
    $(this).next().toggleClass('active');
  });
});

// // Show loading spinner
// function showLoadingSpinner() {
//   var spinner = document.querySelector('.loading-spinner');
//   spinner.style.display = 'block';
// }

// // Hide loading spinner
// function hideLoadingSpinner() {
//   var spinner = document.querySelector('.loading-spinner');
//   spinner.style.display = 'none';
// }

// // Attach event handlers for page load events
// window.addEventListener('load', hideLoadingSpinner);
// window.addEventListener('beforeunload', showLoadingSpinner);

// habitacao
jQuery(function () {
  let tabs = jQuery(".tab");
  let tabHeadingItems = jQuery(".tabs-heading li");

  tabHeadingItems.on("click", function () {
    // Remove a classe 'active' de todos os elementos <li> e tabs
    tabHeadingItems.removeClass("active");
    tabs.removeClass("active");

    // Obtém o índice do elemento <li> clicado
    let currentIndex = jQuery(this).index();

    // Adiciona a classe 'active' ao elemento <li> clicado e ao próximo tab
    jQuery(this).addClass("active");
    tabs.eq(currentIndex).addClass("active");
  });
});

//prestadores medicos

jQuery(function () {
  let card = jQuery(".card-small");
  let sub0 = jQuery(".sub0");
  let sub01 = jQuery(".sub01");


  card.on("click", function () {
    // Remove a classe 'active' de todos os elementos <li> e tabs
    card.removeClass("active");
    sub0.removeClass("active");
    sub01.removeClass("active");

    // Obtém o índice do elemento <a> (card) clicado
    let currentIndex = card.index(jQuery(this));

    // Adiciona a classe 'active' ao elemento <a> (card) clicado e ao tab correspondente
    jQuery(this).addClass("active");
    sub0.eq(currentIndex).addClass("active");
    sub01.eq(currentIndex).addClass("active");
  });

  let list = jQuery(".btn_indico");
  let sub02 = jQuery(".sub02");
  list.on("click", function () {
    // Remove a classe 'active' de todos os elementos <li> e tabs
    list.removeClass("active");
    sub02.removeClass("active");

    // Obtém o índice do elemento <li> clicado
    let currentIndex = list.index(jQuery(this));

    // Adiciona a classe 'active' ao elemento <li> clicado
    jQuery(this).addClass("active");
    sub02.eq(currentIndex).addClass("active");
  });
});

//prestadores v2
$(".menu-item").on("click", function () {
  let region = $(".region0");
  let menuItem = $(".menu-item");
  // Remove a classe "filter-active" de todos os elementos com a classe "menu-item"
  menuItem.removeClass("filter-active");
  region.removeClass("active");

  let currentIndex = menuItem.index($(this));

  // Adiciona a classe "filter-active" apenas ao elemento clicado
  $(this).addClass("filter-active");
  region.eq(currentIndex).addClass("active");
});

$('.item0').on('click', function (event) {
  event.preventDefault();
  $(this).next().toggleClass('active');
  $('.item2 > div').on('click', function (event) {
    event.preventDefault();
    $(this).next().toggleClass('active');
    $('.sub-0 .sub-content > h5').on('click', function (event) {
      event.preventDefault();
      $(this).next().toggleClass('active');
    });
  });
});

//oficinas
$(".list-region > ul > li").on("click", function () {
  let region = $(".region .box");
  let menuItem = $(".list-region > ul > li");
  menuItem.removeClass("active");
  region.removeClass("active");

  let currentIndex = menuItem.index($(this));

  $(this).addClass("active");
  region.eq(currentIndex).addClass("active");
}); 

$(".list-oficinas .list-item").on("click", function () {
  $(this).find(".item-1").toggleClass("active");
});



$(".participarSinistro").on("click", function () {
  var popup = $(".popup");
  popup.addClass("open-popup");
});

$("#btnSimular").on("click", function () {
  var selectBox = $("#tipoSimulacao");
  var selectedValue = selectBox.val();

  
  if (selectedValue === "rc") {
    window.open("../../particular/responsabilidade-civil", "_self");
  } else if (selectedValue === "dp") {
    window.open("../../particular/danos-proprios", "_self");
  }
});

// $("#btnParticipar").on("click", function () {
//   var selectBox = $("#tipoSeguroParticular");
//   var selectedValue = selectBox.val();

//   if (selectedValue === "automovel") {
//     $(".card-form").addClass("active");
//     $(".form").submit(function (e) {
//       e.preventDefault(); // Impede o envio padrão do formulário

//       // Definir a ação do formulário
//       $(".form").attr("action", "./sinistro/auto.php");

//       // Continuar com o envio do formulário
//       this.submit();
//     });
//   } else if (selectedValue === "habitacao") {
//     $(".card-form").addClass("active");
//     $(".form").submit(function (e) {
//       e.preventDefault();

//       $(".form").attr("action", "./sinistro/habitacao.php");

//       this.submit();
//     });
//   } else if (selectedValue === "acidentesPessoais") {
//     $(".card-form").addClass("active");
//     $(".form").submit(function (e) {
//       e.preventDefault();

//       $(".form").attr("action", "./sinistro/acidentes-pessoais.php");

//       this.submit();
//     });
//   } else if (selectedValue === "funeral") {
//     $(".card-form").addClass("active");
//     $(".form").submit(function (e) {
//       e.preventDefault();

//       $(".form").attr("action", "./sinistro/funeral.php");
//       this.submit();
//     });
//   }
// });

// $("#btnEmpresas").on("click", function () {
//   var selectBox = $("#tipoSeguraEmpresa");
//   var selectedValue = selectBox.val();

//   // Verifique o valor selecionado e abra o PDF correspondente
//   if (selectedValue === "automovel") {
//     var auto = "Automóvel";
//     $(".card-form").addClass("active");
//     $(".title-card").text(auto);
//     $(".teste").val(auto);
//     $(".caminho").attr("href", "../../assets/documents/formularios/F.DS.01.R0 - Participacao Automovel  vFinal Editavel  Multilanguage 2022 - A.pdf");

//   } else if (selectedValue === "acidenteTrabalho") {
//     var acidenteTrabalho = "Acidente Trabalho";
//     $(".card-form").addClass("active");
//     $(".title-card").text(acidenteTrabalho);
//     $(".teste").val(acidenteTrabalho);
//     $(".caminho").attr("href", "../../assets/documents/formularios/Anexo2. VII Formulario Para Acidentes de Trabalho v04.pdf");

//     // window.open("../../assets/documents/formularios/Anexo2. VII Formulario Para Acidentes de Trabalho v04.pdf", "_self");
//   } else if (selectedValue === "multirisco") {
//     var multi = "Multirisco Habitação";
//     $(".card-form").addClass("active");
//     $(".title-card").text(multi);
//     $(".teste").val(multi);
//     $(".caminho").attr("href", "../../assets/documents/formularios/Anexo2. IIF.DS.04.R0 - Moz Property Loss Damage V04.pdf");

//   } else if (selectedValue === "engenharia") {
//     var eng = "Engenharia";
//     $(".card-form").addClass("active");
//     $(".title-card").text(eng);
//     $(".teste").val(eng);
//     $(".caminho").attr("href", "../../assets/documents/formularios/Anexo2. IIF.DS.04.R0 - Moz Property Loss Damage V04.pdf");

//   } else if (selectedValue === "transporteMercadorias") {
//     var transporteMercadorias = "Transporte Mercadorias"
//     $(".card-form").addClass("active");
//     $(".title-card").text(transporteMercadorias);
//     $(".teste").val(transporteMercadorias);
//     $(".caminho").attr("href", "../../assets/documents/formularios/Anexo2. VI F.DS.08.R0 - GIT Claim form V04.pdf");

//   } else if (selectedValue === "saude") {
//     var saude = "Saúde";
//     $(".card-form").addClass("active");
//     $(".title-card").text(saude);
//     $(".teste").val(saude);
//     $(".caminho").attr("href", "../../assets/documents/formularios/Pedido de Reembolso v04.pdf");
//   }
// });

//agences
// $(document).ready(function() {
//   $('.card-info').on('click', function() {
//     console.log('Card info clicked');
//     var card = $(this).closest('.card');
//     var cardAlert = card.find('.card-alert');

//     $('.card-alert').not(cardAlert).removeClass('active');
//     cardAlert.toggleClass('active');
//   });
// });

// $('.card').on('click', function (event) {
//   event.preventDefault();
//   console.log('Click PAULO');
//    $('.card-alert').removeClass('active');
//    $(this).next('.card-alert').addClass('active');
//    $('.card-info').not(this).removeClass('active');
//    $(this).addClass('active');
//   //  var position = $(this).offset().bottom;
//   //   $('.card-body').animate({
//   //     scrollTop: position
//   //   }, 500);
// });


// time status agences
function checkTime() {
  const agora = new Date();
  const diaSemana = agora.getDay();
  const hora = agora.getHours();
  
  const statusElemento = $(".time-status");
  
  if (diaSemana >= 1 && diaSemana <= 5) { 
    if (hora >= 8 && hora < 17) {
      statusElemento.text("Aberto até as 17 horas");
    } else {
      statusElemento.text("Fechado até as 08 horas");
    }
  } else if (diaSemana === 6) { 
    if (hora >= 8 && hora < 12) {
      statusElemento.text("Aberto até as 12 horas");
    } else {
      statusElemento.text("Fechado no sábado");
    }
  } else {
    statusElemento.tex("Fechado no domingo");
  }
}

checkTime();
setInterval(checkTime(), 60000);

$(".novSimulacao").on("click", function () {
  $('#tipoViatura').val(""); // Limpar qualquer seleção inicial

  // Definir a opção padrão selecionada
  $('#tipoViatura option:selected').removeAttr('selected');
  $('#tipoViatura option:first').attr('selected', 'selected');
  $(".valorPremio").text("");
  $(".capViatura").val("");
  $(".ocupants").val("");
})

$(".simulr.basico-rc").on("click", function () {
  $(".card-simuladores").addClass("active");
  if ($(".input-in").hasClass("d-flex")) {
    $(".input-in").removeClass("d-flex");
  }
  $(".input-in").addClass("d-none");

  $(".simular").on("click", function () {
    var selectBox = $("#tipoViatura");
    var selectedValue = selectBox.val();
    var valorPremio = $(".valorPremio");
    if (selectedValue == "1") {
      valorPremio.text("Prémio: 3,250.00 MZN");
    } else if (selectedValue == "2") {
      valorPremio.text("Prémio: 3,250.00 MZN")
    } else if (selectedValue == "3") {
      valorPremio.text("Prémio: 7,000.00 MZN")
    } else if (selectedValue == "4") {
      valorPremio.text("Prémio: 3,250.00 MZN")
    } else if (selectedValue == "5") {
      valorPremio.text("Prémio: 7,000.00 MZN")
    } else if (selectedValue == "6") {
      valorPremio.text("Prémio: 2,000.00 MZN")
    } else if (selectedValue == "7") {
      valorPremio.text("Prémio: 3,500.00 MZN")
    } else if (selectedValue == "8") {
      valorPremio.text("Prémio: 3,000.00 MZN")
    } else if (selectedValue == "9") {
      valorPremio.text("Prémio: 3,250.00 MZN")
    }
  })

});

$(".simulr.classico-rc").on("click", function () {
  $(".card-simuladores").addClass("active");
  if ($(".input-in").hasClass("d-none")) {
    $(".input-in").removeClass("d-none");
  }
  $(".input-in").addClass("d-flex");
  $(".simular").on("click", function () {
    var selectBox = $("#tipoViatura");
    var selectedValue = selectBox.val();
    var valorPremio = $(".valorPremio");
    var ocupante = $(".ocupants").val();
    var calcPremio;
    if (selectedValue == "1") {
      valorPremio.text("Prémio: 3,999.00 MZN");
    } else if (selectedValue == "2") {
      valorPremio.text("Prémio: 3,999.00 MZN");
    } else if (selectedValue == "3") {
      valorPremio.text("Prémio: 8,200.00 MZN");
    } else if (selectedValue == "4") {
      calcPremio = parseInt((3999 + 300) / ocupante);
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "5") {
      calcPremio = parseInt((7000 + 500) / ocupante);
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "6") {
      valorPremio.text("Prémio: 2,000.00 MZN");
    } else if (selectedValue == "7") {
      valorPremio.text("Prémio: 3,500.00 MZN");
    } else if (selectedValue == "8") {
      valorPremio.text("Prémio: 3,000.00 MZN");
    } else if (selectedValue == "9") {
      valorPremio.text("Prémio: 3,999.00 MZN");
    }
  })
});

$(".simulr.exclusivo-rc").on("click", function () {
  $(".card-simuladores").addClass("active");
  if ($(".input-in").hasClass("d-none")) {
    $(".input-in").removeClass("d-none");
  }
  $(".input-in").addClass("d-flex");
  $(".simular").on("click", function () {
    var selectBox = $("#tipoViatura");
    var selectedValue = selectBox.val();
    var valorPremio = $(".valorPremio");
    var ocupante = $(".ocupants").val();
    var calcPremio;
    if (selectedValue == "1") {
      valorPremio.text("Prémio: 3,999.00 MZN");
    } else if (selectedValue == "2") {
      valorPremio.text("Prémio: 3,999.00 MZN");
    } else if (selectedValue == "3") {
      valorPremio.text("Prémio: 8,200.00 MZN");
    } else if (selectedValue == "4") {
      calcPremio = parseInt((6300 + 500) / ocupante);
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "5") {
      calcPremio = parseInt((7000 + 500) / ocupante);
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "6") {
      valorPremio.text("Prémio: 2,000.00 MZN");
    } else if (selectedValue == "7") {
      valorPremio.text("Prémio: 3,500.00 MZN");
    } else if (selectedValue == "8") {
      valorPremio.text("Prémio: 3,000.00 MZN");
    } else if (selectedValue == "9") {
      valorPremio.text("Prémio: 3,999.00 MZN");
    }
  })
});

$(".simulr.basico-dp").on("click", function () {
  $(".card-simuladores").addClass("active");

  $(".simular").on("click", function () {
    var selectBox = $("#tipoViatura");
    var selectedValue = selectBox.val();
    var valorPremio = $(".valorPremio");
    var capViatura = $(".capViatura").val();
    var calcPremio;
    if (selectedValue == "1") {
      calcPremio = 0.04 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "2") {
      calcPremio = 0.05 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "3") {
      calcPremio = 0.06 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "4") {
      calcPremio = 0.055 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "5") {
      calcPremio = 0.065 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "6") {
      calcPremio = 0.025 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "7") {
      calcPremio = 0.03 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "8") {
      calcPremio = 0.04 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "9") {
      calcPremio = 0.04 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    }
  })

});

$(".simulr.classico-dp").on("click", function () {
  $(".card-simuladores").addClass("active");

  $(".simular").on("click", function () {
    var selectBox = $("#tipoViatura");
    var selectedValue = selectBox.val();
    var valorPremio = $(".valorPremio");
    var capViatura = $(".capViatura").val();
    var calcPremio;
    if (selectedValue == "1") {
      calcPremio = 0.05 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "2") {
      calcPremio = 0.06 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "3") {
      calcPremio = 0.07 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "4") {
      calcPremio = 0.06 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "5") {
      calcPremio = 0.06 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "6") {
      calcPremio = 0.0275 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "7") {
      calcPremio = 0.035 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "8") {
      calcPremio = 0.045 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "9") {
      calcPremio = 0.05 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    }
  })
});

$(".simulr.exclusivo-dp").on("click", function () {
  $(".card-simuladores").addClass("active");
  $(".simular").on("click", function () {
    var valorPremio = $(".valorPremio");
    var capViatura = $(".capViatura").val();
    var calcPremio;
    if (selectedValue == "1") {
      calcPremio = 0.065 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
      console.log(v)
    } else if (selectedValue == "2") {
      calcPremio = 0.07 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "3") {
      calcPremio = 0.075 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "4") {
      calcPremio = 0.07 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "5") {
      calcPremio = 0.08 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "6") {
      calcPremio = 0.03 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "7") {
      calcPremio = 0.04 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "8") {
      calcPremio = 0.05 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    } else if (selectedValue == "9") {
      calcPremio = 0.065 * capViatura;
      valorPremio.text("Prémio: " + calcPremio + " MZN");
    }
  })
});

$(".card-simuladores .close").on("click", function () {
  $(".card-simuladores").removeClass("active");

  $('#tipoViatura').val(""); // Limpar qualquer seleção inicial
  $('#tipoViatura option:selected').removeAttr('selected');
  $('#tipoViatura option:first').attr('selected', 'selected');
  $(".valorPremio").text("");

});

$(".cont").on("click", function () {
  $(".card-simuladores").removeClass("active");
  $(".card-form").addClass("active");

});
$(".card-form .close").on("click", function () {
  $(".card-form").removeClass("active");
  $(".box .box-center .box-medium").removeClass("active");

});

$(".denucia").on("click", function () {
  $(".card-form").addClass("active");
  $(".box .box-center .box-medium").addClass("active");
});


$(document).ready(function() {
  $(".btn-pay").on("click", function() {
    var selectBox = $("#tipoPag");
    var selectedValue = selectBox.val();
    if (selectedValue === "1") {
      console.log("MPesa!");
    } else if (selectedValue === "2") {
      console.log("E-mola");
    } else if (selectedValue === "3") {
      console.log("shop");
      window.open("./pay.php", "_self");
    } else {
      alert("Selecione uma das opções!");
    }
  });
});



let m = document.querySelector('.more');
let ocultar = document.querySelector('.ocultar');
function more() {
  ocultar.classList.add('active');
  m.classList.add('active');

}
function less() {
  ocultar.classList.remove('active');
  m.classList.remove('active');
}
jQuery(function () {
  //lateral-menu
  jQuery(".lateral-menu .menu > li").on({
    mouseenter: function () {
      jQuery(".lateral-menu .menu > li").addClass('dark-bg');
      jQuery(this).removeClass('dark-bg');
    },
    mouseleave: function () {
      jQuery(".lateral-menu .menu > li").removeClass('dark-bg');
    }
  });
});

//validacao 
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })


})()

new Swiper('.slides-1', {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  }
});

/**
 * Init swiper slider with 3 slides at once in desktop view
 */
new Swiper('.slides-3', {
  speed: 600,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 40
    },

    1200: {
      slidesPerView: 3,
    }
  }
});
const menuItems = document.querySelectorAll('.tabs-body li');

menuItems.forEach((item, index) => {
  item.addEventListener('click', () => {
    const dropdown = document.getElementById(`dropdown${index}`);
    dropdown.classList.toggle('active');
  });
});

/**
 * Gallery Slider
 */
new Swiper('.gallery-slider', {
  speed: 400,
  loop: true,
  centeredSlides: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false
  },
  slidesPerView: 'auto',
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    640: {
      slidesPerView: 3,
      spaceBetween: 20
    },
    992: {
      slidesPerView: 5,
      spaceBetween: 20
    }
  }
});


(function () {
  window.addEventListener('load', () => {
    let menuContainer = select('.container-menu');
    if (menuContainer) {
      let menuIsotope = new Isotope(menuContainer, {
        itemSelector: '.component-menu'
      });

      let menuFilters = select('#filters-menu li', true);

      on('click', '#filters-menu li', function (e) {
        e.preventDefault();
        menuFilters.forEach(function (el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        menuIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        menuIsotope.on('arrangeComplete', function () {
          AOS.refresh()
        });
      }, true);
    }

  });
});


