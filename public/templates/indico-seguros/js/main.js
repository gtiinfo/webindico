jQuery(function () {
  	//carrousel
    jQuery('.main-carousel').flickity({
        cellAlign: 'left',
        contain: true,
        cellSelector: '.carousel-cell',
        autoPlay: true,
        imagesLoaded: true,
        draggable: true
    });

  	//accordion
    jQuery('[data-accordion]').accordion();

  	//quick menu
    jQuery(".quick-menu .cont > li").on({
        mouseenter: function () {
            jQuery(".quick-menu .cont > li").addClass('dark_bg');
            jQuery(this).removeClass('dark_bg');
        },
        mouseleave:function () {
            jQuery(".quick-menu .cont > li").removeClass('dark_bg');
        }
    });
  
  	//mobile menu
    jQuery('.mobile-menu').click(function () {
        if(jQuery(this).hasClass('selected')){
            jQuery(this).removeClass('selected');
            jQuery('.segment-area').hide();
        } else {
            jQuery(this).addClass('selected');
            jQuery('.segment-area').show();
        }
    });
  
    	//
  	jQuery(".segment-area li").click(function (evt) {
        if (evt.clientX < jQuery(window).width() - 50) {
            jQuery(this).find('a')[0].click();
        } else {
            jQuery('.segment-area').hide();
            jQuery('.secondary-top-menu-bar').show();
        }
    });

    var lastLevel = null;

    jQuery('.label-title-link').click(function (e) {
        if(jQuery('.mobile-menu').hasClass('selected')){
            e.preventDefault();
            jQuery('.secondary-top-menu-bar > ul > li').hide();
            jQuery(this).closest('li').show();
            jQuery(this).hide();
            lastLevel = jQuery(this).closest('li').find('.submenu-container');
            lastLevel.show();
        }
    });

    jQuery('.item-area .title').click(function (e) {
        if(jQuery('.mobile-menu').hasClass('selected')){
            lastLevel = jQuery(this);
            jQuery(this).hide();
            jQuery(this).closest('.item-area').find('ul').hide();
            jQuery(this).closest('ul').show();
            jQuery(this).closest('ul').find('li:not(.title)').show();
        }
    });

    jQuery('.back-menu').click(function (e) {
        e.preventDefault();

        console.log(lastLevel);

        if(lastLevel===null){
            jQuery('.secondary-top-menu-bar').hide();
            jQuery('.segment-area').show();
            return;
        }

        if(lastLevel.hasClass('title')){
            lastLevel.show();
            lastLevel.closest('.item-area').find('ul').show();
            lastLevel.closest('ul').find('li:not(.title)').hide();
            lastLevel = lastLevel.closest('.submenu-container');
            return;
        }

        if(lastLevel.hasClass('submenu-container')){
            lastLevel.hide();
            jQuery('.secondary-top-menu-bar > ul > li').show();
            jQuery('.secondary-top-menu-bar > ul > li .label-title-link').show();
            lastLevel = null;
        }
    });
	
	jQuery(".quick-menu-toggle").click(function () {
        jQuery(".quick-menu").show();
        jQuery(this).hide();
    });
  
  //Form Ser Contactado
  jQuery('#cmbDefaultContact').change(function (e) {

        resetContactSelect();

        var value = jQuery(this).val();

        switch (value) {
            case "Email":
                showGroup('email', 'txtEmail');
                break;
            case "Telefone":
                contactTelSelected();
                break;
            case "Correio":
                correioSelected();
                break
        }
    });

  //Form Participar fraude
  jQuery('#default_contact').change(function (e) {
        hideGroup('email', 'email');
        hideGroup('phone');
        hideGroup('cell-phone');
        hideGroup('morada');

        var value = jQuery(this).val();

        switch (value) {
            case "Email":
                showGroup('email', 'email');
                break;
            case "Telefone":
                showGroup('phone', 'business_phone');
        		showGroup('cell-phone', 'telemovel');
                break;
            case "Correio":
                showGroup('morada', 'morada');
                break
        }
    });
  
    //Form Recrutamento
  	jQuery("#experiencia_inst_1").hide();
    jQuery("#experiencia_inst_2").hide();
    jQuery("input[name=tem_experiencia_profissional]").on( "change", function() {
         var val = jQuery(this).val();
        switch (val) {
            case "Sim":
                jQuery("#experiencia_inst_1").show();
                jQuery("#experiencia_inst_2").show();
            break;
            case "Não":
                jQuery("#experiencia_inst_1").hide();
                jQuery("#experiencia_inst_2").hide();
            	jQuery("#instituicao_1").val("");
            	jQuery("#instituicao_2").val("");
            break;
        }
    });
  
  //Form Ser parceiro
  hideOwnCar();  
  jQuery("input[name=driver_licence]").on( "change", function() {
         var val = jQuery(this).val();
        switch (val) {
            case "Sim":
            	showOwnCar();
            break;
            case "Não":
                hideOwnCar();
            break;
        }
    });
  
  	hideOutraFonte();
    jQuery('#origem_candidatura').change(function (e) {
          hideOutraFonte();

          var value = jQuery(this).val();
		  if(value === "Outro"){
            showOutraFonte();
          }
      });
	
  jQuery('#contacto_preferencial').change(function (e) {
        hideGroup('email', 'email');
        hideGroup('phone');
        hideGroup('cell-phone');
        hideGroup('morada');

        var value = jQuery(this).val();

        switch (value) {
            case "Email":
                showGroup('email', 'email');
                break;
            case "Telefone":
                showGroup('phone', 'business_phone');
        		showGroup('cell-phone', 'telemovel');
                break;
            case "Correio":
                showGroup('morada', 'morada');
                break
        }
    });
  
  //Form Informação Financeira
  jQuery("input[name=meio_para_envio]").on( "change", function() {
    	hideGroup('mail', 'e_mail');
        hideGroup('morada', 'morada');	
    
        var val = jQuery(this).val();
        switch (val) {
            case "E-Mail":
            	showGroup('mail', 'e_mail');
            break;
            case "Físico":
                showGroup('morada', 'morada');
            break;
        }
    });
  
  	var thisYear = new Date().getFullYear();
    for (i = thisYear - 5; i <= thisYear; i++) {
      jQuery('#exercicio_economico').append(
        jQuery("<option></option>")
        .attr("value", i)
        .text(i)
      );
    }
});

function hideOutraFonte(){
    jQuery('.outra_fonte-group .required-asterisk').attr('hidden', 'true');
    jQuery('.outra_fonte-group #outra_fonte').removeAttr('required');
  jQuery('.outra_fonte-group #outra_fonte').val('');
  	jQuery('.outra_fonte-group').hide();
}
function showOutraFonte(){
    jQuery('.outra_fonte-group .required-asterisk').removeAttr('hidden');
    jQuery('.outra_fonte-group #outra_fonte').attr('required','');
  	jQuery('.outra_fonte-group').show();
}

function hideOwnCar(){
  jQuery('.own_car-group .required-asterisk').attr('hidden', 'true');
  jQuery(".own_car-group").hide();
  jQuery('input[name="own_car"]').prop('checked', false);
  jQuery('#own_car_yes').removeAttr('required');
  jQuery('#own_car_no').removeAttr('required');
}

function showOwnCar(){
  jQuery('.own_car-group .required-asterisk').removeAttr('hidden');
  jQuery(".own_car-group").show();
  jQuery('#own_car_yes').attr('required','');
  jQuery('#own_car_no').attr('required','');
}

function contactTelSelected() {
  showGroup('phone', 'txtBusinessPhone');
  showGroup('cell-phone', 'txtPersonalPhone');
}

function correioSelected() {
  showGroup('morada', 'txtAddress');
  showGroup('cod-postal', 'txtPostalCode');
  showGroup('localidade', 'txtLocality')
}

function resetContactSelect() {
  hideGroup('email', 'txtEmail');
  hideGroup('phone');
  hideGroup('cell-phone');
  hideGroup('fax');
  hideGroup('morada');
  hideGroup('cod-postal');
  hideGroup('localidade');
}

function hideGroup(groupName, idField) {
  jQuery('.' + groupName + '-group .required-asterisk').attr('hidden', 'true');
  jQuery('.' + groupName + '-group #'+idField).removeAttr('required');
}

function showGroup(groupName, idField) {
  jQuery('.' + groupName + '-group .required-asterisk').removeAttr('hidden');
  jQuery('.' + groupName + '-group #' + idField).attr('required','');
}