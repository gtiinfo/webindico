function participate() {
    if (validar()) {
    var participationData = createJsonString();
    var simString = window.location.protocol + '/api/participation';
    var response;
    jQuery.ajax(
        {
            url: simString,
            type: 'POST',
            dataType: 'json',
            contentType: 'application/json',
            data: participationData,
            headers: {
                'cache-control': 'no-cache',

            },
            beforeSend: function() {
                // Mostra o spinner antes da chamada Ajax
                $('#loading-spinner').show();
            },
            success: function (data, status, xhr) {
               if(data.successful){
                Swal.fire({
                    title: 'Sucesso!',
                    text: data.message,
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
                // alert(data.message);
               }else{
                Swal.fire({
                    title: 'Erro!',
                    text: data.message,
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
               }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    title: 'Erro!',
                    text: 'Ocorreu um erro ao enviar esse formulario!!',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            },
            complete: function() {
                $('#loading-spinner').hide();
            }
        }
    );

}


}


function createJsonString() {
    var participationData = {
        "claimRequestReport": {
            "numberOfVehicles": jQuery('#num_veiculos_envolvidos option:selected').text(),
            "dateOfAccident": jQuery('#data_acidente').val(),
            "hourOfAccident": jQuery('#hora_acidente').val(),
            "placeOfAccident": jQuery('#local_acidente').val(),
            "anyHurt": jQuery('#feridos_acidente option:selected').text(),
            "anyMaterialDamageOtherThanTheCars": jQuery('#houve_danos_materiais option:selected').text(),
            "witnesses": jQuery('#testemunhas').val(),
            "firstMotorClaimVehicle": {
                "insured": {
                    "surname": jQuery('#apelidos_a').val(),
                    "names": jQuery('#segurado_nomes_a').val(),
                    "address": jQuery('#segurado_morada_a').val(),
                    "phone": jQuery('#segurado_telefone_a').val(),
                    "profession": jQuery('#segurado_profissao_a').val(),
                    "email": jQuery('#segurado_email_a').val()
                },
                "vehicle": {
                    "make": jQuery('#sim_brand_a option:selected').text(),
                    "model": jQuery('#sim_model_a option:selected').text(),
                    "plate": jQuery('#n_matricula_ou_motor_a').val()
                },
                "insuranceCompany": {
                    "name": jQuery('#nome_seguro_a').val(),
                    "policyNumber": jQuery('#num_apolice_a').val(),
                    "branch": jQuery('#balcao_a').val(),
                    "expireDate": jQuery('#cartao_valido_ate_a').val(),
                    "areDamagesInsured": jQuery('#os_danos_estao_seguros_a option:selected').text()
                },
                "driverRequest": {
                    "address": jQuery('#condutorcheck_a').is(':checked') ? jQuery('#segurado_morada_a').val() : jQuery('#condutor_morada_a').val(),
                    "age": parseInt(jQuery('#condutor_idade_a').val()),
                    "category": jQuery('#condutor_categoria_a').val(),
                    "driversLicense": jQuery('#condutor_licenca_n_a').val(),
                    "email": jQuery('#condutorcheck_a').is(':checked') ? jQuery('#segurado_email_a').val() : jQuery('#condutor_email_a').val(),
                    "expiresIn": jQuery('#condutor_valida_de_a').val() + ' a ' + jQuery('#condutor_valida_a_a').val(),
                    "isUsualTheCarDriver": jQuery('#condutor_habitual_a option:selected').text(),
                    "issuedBy": jQuery('#condutor_emitido_por_a').val(),
                    "issuedIn": jQuery('#condutor_emitido_em_a').val(),
                    "phone": jQuery('#condutorcheck_a').is(':checked') ? jQuery('#segurado_telefone_a').val() : jQuery('#condutor_telefone_a').val(),
                    "profession": jQuery('#condutorcheck_a').is(':checked') ? jQuery('#segurado_profissao_a').val() : jQuery('#condutor_profissao_a').val(),
                    "surname": jQuery('#condutorcheck_a').is(':checked') ? jQuery('#apelidos_a').val() : jQuery('#condutor_apelidos_a').val(),
                    "firstName": jQuery('#condutorcheck_a').is(':checked') ? jQuery('#segurado_nomes_a').val() : jQuery('#condutor_nomes_a').val()
                },
                "observations": jQuery('#observacoes_a').val(),
                "visibleDamages": jQuery('#danos_visiveis_a').val()
            },
            "secondMotorClaimVehicle": {
                "insured": {
                    "surname": jQuery('#apelidos_b').val(),
                    "names": jQuery('#segurado_nomes_b').val(),
                    "address": jQuery('#segurado_morada_b').val(),
                    "phone": jQuery('#segurado_telefone_b').val(),
                    "profession": jQuery('#segurado_profissao_b').val(),
                    "email": jQuery('#segurado_email_b').val()
                },
                "vehicle": {
                    "make": jQuery('#sim_brand_b option:selected').text(),
                    "model": jQuery('#sim_model_b option:selected').text(),
                    "plate": jQuery('#n_matricula_ou_motor_b').val()
                },
                "insuranceCompany": {
                    "name": jQuery('#nome_seguro_b').val(),
                    "policyNumber": jQuery('#num_apolice_b').val(),
                    "branch": jQuery('#balcao_b').val(),
                    "expireDate": jQuery('#cartao_valido_ate_b').val(),
                    "areDamagesInsured": jQuery('#os_danos_estao_seguros_b option:selected').text()
                },
                "driverRequest": {
                    "address": jQuery('#condutorcheck_b').is(':checked') ? jQuery('#segurado_morada_b').val() : jQuery('#condutor_morada_b').val(),
                    "age": jQuery('#condutor_idade_b').val(),
                    "category": jQuery('#condutor_categoria_b').val(),
                    "driversLicense": jQuery('#condutor_licenca_n_b').val(),
                    "email": jQuery('#condutorcheck_b').is(':checked') ? jQuery('#segurado_email_b').val() : jQuery('#condutor_email_b').val(),
                    "expiresIn": jQuery('#condutor_valida_de_b').val() + ' a ' + jQuery('#condutor_valida_a_b').val(),
                    "isUsualTheCarDriver": jQuery('#condutor_habitual_b').val(),
                    "issuedBy": jQuery('#condutor_emitido_por_b').val(),
                    "issuedIn": jQuery('#condutor_emitido_em_b').val(),
                    "phone": jQuery('#condutorcheck_b').is(':checked') ? jQuery('#segurado_telefone_b').val() : jQuery('#condutor_telefone_b').val(),
                    "profession": jQuery('#condutorcheck_b').is(':checked') ? jQuery('#segurado_profissao_b').val() : jQuery('#condutor_profissao_b').val(),
                    "surname": jQuery('#condutorcheck_b').is(':checked') ? jQuery('#apelidos_b').val() : jQuery('#condutor_apelidos_b').val(),
                    "firstName": jQuery('#condutorcheck_b').is(':checked') ? jQuery('#segurado_nomes_b').val() : jQuery('#condutor_nomes_b').val()
                },
                "observations": jQuery('#observacoes_b').val(),
                "visibleDamages": jQuery('#danos_visiveis_b').val()
            },
            "firstVehicleAccidentCircunstanceRequest": {
                "wasParked": jQuery('#estava_estacionado_a').is(':checked') ? 'X' : '',
                "wasLeavingParking": jQuery('#saia_do_estacionado_a').is(':checked') ? 'X' : '',
                "wasParking": jQuery('#ia_estacionar_a').is(':checked') ? 'X' : '',
                "wasExiting": jQuery('#saia_parque_estacionamento_a').is(':checked') ? 'X' : '',
                "wasEntering": jQuery('#entrava_num_parque_de_estacionamento_a').is(':checked') ? 'X' : '',
                "wasCirculing": jQuery('#circulava_numa_rotunda_a').is(':checked') ? 'X' : '',
                "wasEnteringRoundAbout": jQuery('#entrava_numa_rotunda_a').is(':checked') ? 'X' : '',
                "hitTheOtherVehicleFromBehind": jQuery('#embateu_na_traseira_de_outro_a').is(':checked') ? 'X' : '',
                "sameDirectionDiferentLane": jQuery('#circulava_no_mesmo_sentido_a').is(':checked') ? 'X' : '',
                "changingLanes": jQuery('#mudava_de_fila_a').is(':checked') ? 'X' : '',
                "wasSpeeding": jQuery('#ultrapassava_a').is(':checked') ? 'X' : '',
                "turnLeft": jQuery('#virava_a_esquerda_a').is(':checked') ? 'X' : '',
                "turnRight": jQuery('#virava_a_direita_a').is(':checked') ? 'X' : '',
                "reverse": jQuery('#recuava_a').is(':checked') ? 'X' : '',
                "reservedLane": jQuery('#circulava_na_parte_da_faixa_a').is(':checked') ? 'X' : '',
                "atTurn": jQuery('#apresentava_se_pela_direita_a').is(':checked') ? 'X' : '',
                "ranRedLight": jQuery('#nao_respeitou_um_sinal_de_dar_a').is(':checked') ? 'X' : '',
                "numberOfFilledBoxes": parseInt(jQuery('#numero_total_circunstancias_a').val())
            },
            "secondVehicleAccidentCircunstanceRequest": {
                "wasParked": jQuery('#estava_estacionado_b').is(':checked') ? 'X' : '',
                "wasLeavingParking": jQuery('#saia_do_estacionado_b').is(':checked') ? 'X' : '',
                "wasParking": jQuery('#ia_estacionar_b').is(':checked') ? 'X' : '',
                "wasExiting": jQuery('#saia_parque_estacionamento_b').is(':checked') ? 'X' : '',
                "wasEntering": jQuery('#entrava_num_parque_de_estacionamento_b').is(':checked') ? 'X' : '',
                "wasCirculing": jQuery('#circulava_numa_rotunda_a').is(':checked') ? 'X' : '',
                "wasEnteringRoundAbout": jQuery('#entrava_numa_rotunda_b').is(':checked') ? 'X' : '',
                "hitTheOtherVehicleFromBehind": jQuery('#embateu_na_traseira_de_outro_b').is(':checked') ? 'X' : '',
                "sameDirectionDiferentLane": jQuery('#circulava_no_mesmo_sentido_b').is(':checked') ? 'X' : '',
                "changingLanes": jQuery('#mudava_de_fila_b').is(':checked') ? 'X' : '',
                "wasSpeeding": jQuery('#ultrapassava_b').is(':checked') ? 'X' : '',
                "turnLeft": jQuery('#virava_a_esquerda_b').is(':checked') ? 'X' : '',
                "turnRight": jQuery('#virava_a_direita_b').is(':checked') ? 'X' : '',
                "reverse": jQuery('#recuava_b').is(':checked') ? 'X' : '',
                "reservedLane": jQuery('#circulava_na_parte_da_faixa_b').is(':checked') ? 'X' : '',
                "atTurn": jQuery('#apresentava_se_pela_direita_b').is(':checked') ? 'X' : '',
                "ranRedLight": jQuery('#nao_respeitou_um_sinal_de_dar_b').is(':checked') ? 'X' : '',
                "numberOfFilledBoxes": parseInt(jQuery('#numero_total_circunstancias_b').val())
            },
            "firstStrikeRequest": {
                "p1": jQuery('input[name="marker_1_a"]').is(':checked') ? 'X' : '',
                "p2": jQuery('input[name="marker_2_a"]').is(':checked') ? 'X' : '',
                "p3": jQuery('input[name="marker_3_a"]').is(':checked') ? 'X' : '',
                "p4": jQuery('input[name="marker_4_a"]').is(':checked') ? 'X' : '',
                "p5": jQuery('input[name="marker_5_a"]').is(':checked') ? 'X' : '',
                "p6": jQuery('input[name="marker_6_a"]').is(':checked') ? 'X' : '',
                "p7": jQuery('input[name="marker_7_a"]').is(':checked') ? 'X' : '',
                "p8": jQuery('input[name="marker_8_a"]').is(':checked') ? 'X' : '',
                "p9": jQuery('input[name="marker_9_a"]').is(':checked') ? 'X' : '',
                "p10": jQuery('input[name="marker_10_a"]').is(':checked') ? 'X' : '',
                "p11": jQuery('input[name="marker_11_a"]').is(':checked') ? 'X' : '',
                "p12": jQuery('input[name="marker_12_a"]').is(':checked') ? 'X' : '',
                "p13": jQuery('input[name="marker_13_a"]').is(':checked') ? 'X' : '',
                "p14": jQuery('input[name="marker_14_a"]').is(':checked') ? 'X' : '',
                "p15": jQuery('input[name="marker_15_a"]').is(':checked') ? 'X' : '',
                "p16": jQuery('input[name="marker_16_a"]').is(':checked') ? 'X' : '',
                "p17": 'X',
                "p18": jQuery('input[name="marker_18_a"]').is(':checked') ? 'X' : '',
                "p19": jQuery('input[name="marker_19_a"]').is(':checked') ? 'X' : '',
                "p20": jQuery('input[name="marker_20_a"]').is(':checked') ? 'X' : '',
                "p21": jQuery('input[name="marker_21_a"]').is(':checked') ? 'X' : '',
                "p22": jQuery('input[name="marker_22_a"]').is(':checked') ? 'X' : '',
                "p23": jQuery('input[name="marker_23_a"]').is(':checked') ? 'X' : '',
                "p24": jQuery('input[name="marker_24_a"]').is(':checked') ? 'X' : '',
                "p25": jQuery('input[name="marker_25_a"]').is(':checked') ? 'X' : '',
                "p26": jQuery('input[name="marker_26_a"]').is(':checked') ? 'X' : '',
                "p27": jQuery('input[name="marker_27_a"]').is(':checked') ? 'X' : '',
                "p28": jQuery('input[name="marker_28_a"]').is(':checked') ? 'X' : '',
                "p29": jQuery('input[name="marker_29_a"]').is(':checked') ? 'X' : '',
                "p30": jQuery('input[name="marker_30_a"]').is(':checked') ? 'X' : '',
                "p31": jQuery('input[name="marker_31_a"]').is(':checked') ? 'X' : '',
                "p32": jQuery('input[name="marker_32_a"]').is(':checked') ? 'X' : '',
                "p33": jQuery('input[name="marker_33_a"]').is(':checked') ? 'X' : '',
                "p34": jQuery('input[name="marker_34_a"]').is(':checked') ? 'X' : '',
                "p35": 'X',
                "p36": 'X',
                "p37": 'X'
            },

            "secondStrikeRequest": {
                "p1": jQuery('input[name="marker_1_b"]').is(':checked') ? 'X' : '',
                "p2": jQuery('input[name="marker_2_b"]').is(':checked') ? 'X' : '',
                "p3": jQuery('input[name="marker_3_b"]').is(':checked') ? 'X' : '',
                "p4": jQuery('input[name="marker_4_b"]').is(':checked') ? 'X' : '',
                "p5": jQuery('input[name="marker_5_b"]').is(':checked') ? 'X' : '',
                "p6": jQuery('input[name="marker_6_b"]').is(':checked') ? 'X' : '',
                "p7": jQuery('input[name="marker_7_b"]').is(':checked') ? 'X' : '',
                "p8": jQuery('input[name="marker_8_b"]').is(':checked') ? 'X' : '',
                "p9": jQuery('input[name="marker_9_b"]').is(':checked') ? 'X' : '',
                "p10": jQuery('input[name="marker_10_b"]').is(':checked') ? 'X' : '',
                "p11": jQuery('input[name="marker_11_b"]').is(':checked') ? 'X' : '',
                "p12": jQuery('input[name="marker_12_b"]').is(':checked') ? 'X' : '',
                "p13": jQuery('input[name="marker_13_b"]').is(':checked') ? 'X' : '',
                "p14": jQuery('input[name="marker_14_b"]').is(':checked') ? 'X' : '',
                "p15": jQuery('input[name="marker_15_b"]').is(':checked') ? 'X' : '',
                "p16": jQuery('input[name="marker_16_b"]').is(':checked') ? 'X' : '',
                "p17": 'X',
                "p18": jQuery('input[name="marker_18_b"]').is(':checked') ? 'X' : '',
                "p19": jQuery('input[name="marker_19_b"]').is(':checked') ? 'X' : '',
                "p20": jQuery('input[name="marker_20_b"]').is(':checked') ? 'X' : '',
                "p21": jQuery('input[name="marker_21_b"]').is(':checked') ? 'X' : '',
                "p22": jQuery('input[name="marker_22_b"]').is(':checked') ? 'X' : '',
                "p23": jQuery('input[name="marker_23_b"]').is(':checked') ? 'X' : '',
                "p24": jQuery('input[name="marker_24_b"]').is(':checked') ? 'X' : '',
                "p25": jQuery('input[name="marker_25_b"]').is(':checked') ? 'X' : '',
                "p26": jQuery('input[name="marker_26_b"]').is(':checked') ? 'X' : '',
                "p27": jQuery('input[name="marker_27_b"]').is(':checked') ? 'X' : '',
                "p28": jQuery('input[name="marker_28_b"]').is(':checked') ? 'X' : '',
                "p29": jQuery('input[name="marker_29_b"]').is(':checked') ? 'X' : '',
                "p30": jQuery('input[name="marker_30_b"]').is(':checked') ? 'X' : '',
                "p31": jQuery('input[name="marker_31_b"]').is(':checked') ? 'X' : '',
                "p32": jQuery('input[name="marker_32_b"]').is(':checked') ? 'X' : '',
                "p33": jQuery('input[name="marker_33_b"]').is(':checked') ? 'X' : '',
                "p34": jQuery('input[name="marker_34_b"]').is(':checked') ? 'X' : '',
                "p35": 'X',
                "p36": 'X',
                "p37": 'X'
            },
            "crashImage": {
                "filename": "Pontos de Embate",
                "extension": "png",
                "data": jQuery("#img_canvas")[0].toDataURL().replace(/^data:image\/[a-z]+;base64,/, "")
            },
            "bothDriversSigned": jQuery('#assinaturas option:selected').text(),
            "accidentDescription": jQuery('#descricao_acidente').val(),
            "vehicleSpeed": jQuery('#velocidade_acidente').val(),
            "otherWitnesses": jQuery('#identificacao_testemunhas').val(),
            "opinion": jQuery('#quem_foi_culpado').val(),
            "wasCheckedbyAuthorities": jQuery('#levantado_pelas_autoridades option:selected').text(),
            "processNumber": jQuery('#numero_processo').val(),
            "wasTestedForAlcohol": jQuery('#teste_anti_alcool option:selected').text(),
            "policyStation": jQuery('#posto_brigada_esquadra').val(),
            "officerName": jQuery('#nome_agente').val(),
            "which": jQuery('#teste_anti_alcool_qual').val(),
            "testResult": jQuery('#teste_anti_alcool_resultado').val(),
            "firstVehicleDescription": {
                "type": jQuery('#caracteristicas_segurado option:selected').text(),
                "colour": jQuery('#cor_segurado').val(),
                "owner": jQuery('#titular_registo_segurado').val(),
                "previousDamage": jQuery('#existiam_danos_segurado').val(),
                "isStuck": jQuery('#pode_circular_segurado option:selected').text(),
                "neededTow": jQuery('#rebocava_segurado option:selected').text(),
                "garage": jQuery('#oficina_reparadora_segurado').val(),
                "garageAddress": jQuery('#endereco_telefone_segurado').val(),
                "inspectionDate": jQuery('#data_peritagem_segurado').val()
            },
            "secondVehicleDescription": {
                "type": jQuery('#caracteristicas_terceiro option:selected').text(),
                "colour": jQuery('#cor_terceiro').val(),
                "owner": jQuery('#titular_registo_terceiro').val(),
                "previousDamage": jQuery('#existiam_danos_terceiro').val(),
                "isStuck": jQuery('#pode_circular_terceiro option:selected').text(),
                "neededTow": jQuery('#rebocava_terceiro option:selected').text(),
                "garage": jQuery('#oficina_reparadora_terceiro').val(),
                "garageAddress": jQuery('#endereco_telefone_terceiro').val(),
                "inspectionDate": jQuery('#data_peritagem_terceiro').val()
            },
            "otherDamage": {
                "nameAndAddress": jQuery('#nome_morada_proprietarios').val(),
                "damage": jQuery('#natureza_danos').val()
            },
            "firstWounded": {
                "name": jQuery('#nome_feridos_1').val(),
                "address": jQuery('#morada_feridos_1').val(),
                "profession": jQuery('#profissao_idade_1').val(),
                "age": "0",
                "wounds": jQuery('#lesoes_sofridas_1').val(),
                "firstAid": jQuery('#primeiros_socorros_1').val(),
                "hostpital": jQuery('#hospitalizado_em_1').val(),
                "identify": jQuery('#indique_se_era_1 option:selected').text()
            },
            "secondWounded": {
                "name": jQuery('#nome_feridos_2').val(),
                "address": jQuery('#morada_feridos_2').val(),
                "profession": jQuery('#profissao_idade_2').val(),
                "age": "0",
                "wounds": jQuery('#lesoes_sofridas_2').val(),
                "firstAid": jQuery('#primeiros_socorros_2').val(),
                "hostpital": jQuery('#hospitalizado_em_2').val(),
                "identify": jQuery('#indique_se_era_2 option:selected').text()
            },
            "isOtherDriverInsured": jQuery('#condutor_outro_veiculo_e option:selected').text(),
            "specify": jQuery('#segurado_condutor_especifique').val(),
            "claimDateLocation": {
                "location": jQuery('#local_participacao').val(),
                "date": jQuery('#data').val()
            }
        }
    };

    return JSON.stringify(participationData);
}




function loadBrands(veiculo) {
    var newelements = '';
    var data = getBrands();

    var parsed = JSON.parse(data);
    jQuery.each(parsed, function (i, object) {
        newelements += '<option value="' + object.id + '">' + object.name + '</option>';
    });

    jQuery('#sim_brand_' + veiculo).html(newelements);
}

function loadModelsByBrand(brand_id, veiculo) {
    var newelements = '';
    var data = getModelsByBrand(brand_id);

    var parsed = JSON.parse(data);
    jQuery.each(parsed, function (i, object) {
        newelements += '<option value="' + object.id + '">' + object.name + '</option>';
    });

    jQuery('#sim_model_' + veiculo).html(newelements);
    // TODO: hide loader
    jQuery('#sim_model_' + veiculo).removeAttr('disabled');
}
// ===== marcas e modelos =====

function countcircunstancias() {
    var adicionar = 0;
    jQuery(".checkbox_circunstancia_b").each(function () {
        if (jQuery(this).is(':checked')) {
            adicionar++;
        }
    });
    jQuery('#numero_total_circunstancias_b').val(adicionar);


    var adicionar = 0;
    jQuery(".checkbox_circunstancia_a").each(function () {
        if (jQuery(this).is(':checked')) {
            adicionar++;
        }
    });
    jQuery('#numero_total_circunstancias_a').val(adicionar);
}

jQuery(document).ready(function () {

    countcircunstancias();

    jQuery("#tipo_esquema_select").change(function () {

        jQuery('.esquemas-container').css("display", "none");
        if (jQuery(this).val() == "") {
            jQuery('.esquemas-container').css("display", "block");
        } else {
            jQuery('.' + jQuery(this).val()).css("display", "block");
        }
        // alert();
    });

    jQuery(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    jQuery(function () {
        jQuery('.txtNumeric').keydown(function (e) {
            if (e.shiftKey || e.ctrlKey || e.altKey) {
                e.preventDefault();
            } else {
                var key = e.keyCode;
                if (!((key == 8) || (key == 46) || (key >= 35 && key <= 40) || (key >= 48 && key <= 57) || (key >= 96 && key <= 105))) {
                    e.preventDefault();
                }
            }
        });
    });


    // ===== START data e hora =====
    jQuery('.data').pickadate({
        monthsFull: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
        monthsShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
        weekdaysShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
        showMonthsShort: true,
        today: 'Hoje',
        clear: 'Limpar',
        close: 'Cancelar',
        selectMonths: true,
        selectYears: 200,
        format: 'yyyy/mm/dd'
    });

    jQuery('#hora_acidente').pickatime({
        clear: 'Limpar ',
        format: 'HH:i',
        interval: 5,
        formatLabel: 'HH:i',
        formatSubmit: 'HH:i',
        hiddenPrefix: 'prefix__',
        hiddenSuffix: '__suffix'
    });
    // ===== END data e hora =====

    // ===== START marcas e modelos =====

    loadBrands('a');
    loadBrands('b');

    jQuery('#sim_brand_a').change(function () {

        if (jQuery('#sim_brand_a').val() == "999999") {
            jQuery('#sim_model_a').removeClass("required_a");
            jQuery('#marca_e_modelo_a').css('display', 'block');
        } else {
            jQuery('#sim_model_a').addClass("required_a");
            jQuery('#marca_e_modelo_a').css('display', 'none');
        }
        if (jQuery('#sim_brand_a').val() != "" && jQuery('#sim_brand_a').val() != "999999") {
            loadModelsByBrand(jQuery('#sim_brand_a').val(), "a");
        } else {
            jQuery('#sim_model_a').attr('disabled', 'disabled');
            jQuery('#sim_model_a').val(1).change();
        }
    });

    jQuery('#sim_brand_b').change(function () {

        if (jQuery('#sim_brand_b').val() == "999999") {
            jQuery('#marca_e_modelo_b').css('display', 'block');
            jQuery('#sim_model_b').removeClass("required_b");
            jQuery('#marca_e_modelo_b').css('display', 'block');
        } else {
            jQuery('#sim_model_b').addClass("required_b");
            jQuery('#marca_e_modelo_b').css('display', 'none');
        }

        if (jQuery('#sim_brand_b').val() != "" && jQuery('#sim_brand_b').val() != "999999") {
            loadModelsByBrand(jQuery('#sim_brand_b').val(), "b");
        } else {
            jQuery('#sim_model_b').attr('disabled', 'disabled');
            jQuery('#sim_model_b').val(1).change();
        }
    });
    // ===== END marcas e modelos =====


    jQuery('textarea').maxlength({
        alwaysShow: true,
        threshold: 10,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger"
    });

    jQuery('.esquemas-container').on('click', function () {
        jQuery('#esquemas_modal').modal('hide');
        jQuery('#esquema_img').html(jQuery(this).children('.esquemas-img-container').html());
        jQuery("#imagem_esquema").val(jQuery(this).children('.esquemas-img-container').children('.esquemas-img').children('img').attr('src'));

        var can = jQuery("#img_canvas")[0];
        var img = jQuery(this).children('.esquemas-img-container').children('.esquemas-img').children('img')[0];
        var ctx = can.getContext("2d");
        ctx.drawImage(img, 0, 0, img.width, img.height, 0, 0, img.width, img.height);
    });

    jQuery('#remove_esquema').on('click', function () {
        // jQuery('#esquema_img').empty();
        jQuery('#esquema_img').html('Selecione uma imagem representativa do acidente');
        jQuery('#imagem_esquema').val();
    });

    jQuery('#esquema_img').on('click', function () {
        $('#esquemas_modal').modal('show');
    });

    jQuery('.checkbox_circunstancia_b').on('click', function () {
        var adicionar = 0;
        jQuery(".checkbox_circunstancia_b").each(function () {
            if (jQuery(this).is(':checked')) {
                adicionar++;
            }
        });
        jQuery('#numero_total_circunstancias_b').val(adicionar);
    });

    jQuery('.checkbox_circunstancia_a').on('click', function () {
        var adicionar = 0;
        jQuery(".checkbox_circunstancia_a").each(function () {
            if (jQuery(this).is(':checked')) {
                adicionar++;
            }
        });
        jQuery('#numero_total_circunstancias_a').val(adicionar);
    });
    jQuery(".checkboxcondutor").change(function () {
        var iddelete = jQuery(this).attr('id').split("_");
        if (jQuery(this).is(":checked")) {
            jQuery("#detalhescondutor_" + iddelete[1] + "").hide();
            jQuery("#detalhescondutor_" + iddelete[1] + " .required_" + iddelete[1] + "").addClass("req");
            jQuery("#detalhescondutor_" + iddelete[1] + " .required_" + iddelete[1] + "").removeClass("required_" + iddelete[1] + "");

        } else {
            jQuery("#detalhescondutor_" + iddelete[1] + "").show();
            jQuery("#detalhescondutor_" + iddelete[1] + " .req").addClass("required_" + iddelete[1] + "");
            jQuery("#detalhescondutor_" + iddelete[1] + " .req").removeClass("req");

        }
    });
});

function validar() {
    //INI ============ 1 PAGINA ====== ======
    if (jQuery("#esquema_img").length > 0) {
        // se nao tem filhos
        if (jQuery("#esquema_img").children().length < 1) {
            jQuery("#esquema_img").css('border', '1px solid #a94442');
            not_complete = 1;
        } else {
            jQuery("#esquema_img").css('border', '1px solid #DDD');
        }
    }
    if (jQuery("#num_veiculos_envolvidos").length > 0) {
        if (jQuery("#num_veiculos_envolvidos").val() == 2) {
            jQuery('.required_b').each(function () {
                if (jQuery(this).val() == "") {
                    jQuery(this).parent().parent().children('label').css('color', '#a94442');
                    jQuery(this).css('border-bottom', '1px solid #a94442');
                    not_complete = 1;
                }
                ;
            });
        } else {
            jQuery('.required_b').each(function () {
                jQuery(this).parent().parent().children('label').css('color', '#000');
                jQuery(this).css('border-bottom', '1px solid #000');
            });
        }
    }
    //END  ============ 1 PAGINA ====== ======

    //INI  ============ 2 PAGINA ====== ======
    //if exists num_veiculos_envolvidos
    if (jQuery("#levantado_pelas_autoridades").length > 0) {
        if (jQuery("#levantado_pelas_autoridades").val() == 1) {
            jQuery("#posto_brigada_esquadra").addClass("required");
        } else {
            jQuery("#posto_brigada_esquadra").removeClass("required");
        }
    }

    //if exists num_veiculos_envolvidos
    if (jQuery("#teste_anti_alcool").length > 0) {
        if (jQuery("#teste_anti_alcool").val() == 1) {
            jQuery("#teste_anti_alcool_qual").addClass("required");
            jQuery("#teste_anti_alcool_resultado").addClass("required");
        } else {
            jQuery("#teste_anti_alcool_qual").removeClass("required");
            jQuery("#teste_anti_alcool_resultado").removeClass("required");

        }
    }
    //END  ============ 2 PAGINA ====== ======


    var not_complete = 0;
    var email_not_valid = 0;
    jQuery('.required').each(function () {
        if (jQuery(this).val() == "") {
            jQuery(this).parent().parent().children('label').css('color', '#a94442');
            if (this.nodeName.toLowerCase() === 'input') {
                jQuery(this).css('border-bottom', '1px solid #a94442');
            } else {
                jQuery(this).css('border', '1px solid #a94442');
            }
            not_complete = 1;
        }
        ;
    });
    if (jQuery('#condutor_email_a').val() != "") {
        if (!document.getElementById("condutor_email_a").value.match(/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-z0-9-A-Z]+)*(\.[a-z]{2,4})$/g)) {
            email_not_valid = 1;
        }
    }

    if (jQuery('#segurado_email_a').val() != "") {
        if (!document.getElementById("segurado_email_a").value.match(/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-z0-9-A-Z]+)*(\.[a-z]{2,4})$/g)) {
            email_not_valid = 1;
        }
    }

    if (jQuery("#num_veiculos_envolvidos").val() == 2) {
        if (jQuery('#condutor_email_b').val() != "") {
            if (!document.getElementById("condutor_email_b").value.match(/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-z0-9-A-Z]+)*(\.[a-z]{2,4})$/g)) {
                email_not_valid = 1;
            }
        }

        if (jQuery('#segurado_email_b').val() != "") {
            if (!document.getElementById("segurado_email_b").value.match(/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-z0-9-A-Z]+)*(\.[a-z]{2,4})$/g)) {
                email_not_valid = 1;
            }
        }
    }

    jQuery('.required_a').each(function () {
        if (jQuery(this).val() == "") {
            jQuery(this).parent().parent().children('label').css('color', '#a94442');
            jQuery(this).css('border-bottom', '1px solid #a94442');
            not_complete = 1;
        }
        ;
    });

    if (jQuery("#num_veiculos_envolvidos").val() == 2) {
        jQuery('.required_b').each(function () {
            if (jQuery(this).val() == "") {
                jQuery(this).parent().parent().children('label').css('color', '#a94442');
                jQuery(this).css('border-bottom', '1px solid #a94442');
                not_complete = 1;
            }
            ;
        });
    }

    if (not_complete == 1) {
        Swal.fire({
            title: 'Erro!',
            text: 'Por favor preencha todos os campos obrigatórios',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        // alert("Por favor preencha todos os campos obrigatórios");
        // jQuery('#msgmail').html("<span style=\"color:red;\">Por favor preencha todos os campos obrigat&oacute;rios.</span>");
        return false;
    }

    if (email_not_valid) {
        Swal.fire({
            title: 'Erro!',
            text: 'Por favor introduza email(s) válido(s).',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        // alert("Por favor introduza email(s) válido(s).");
        // jQuery('#msgmail').html("<span style=\"color:red;\">Por favor introduza email(s) v&aacute;lido(s).</span>");
        return false;
    }

    return true;
    //    form.submit.disabled = true;
}