<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Paticipar Sinistro Automóvel | ÍNDICO SEGUROS</title>

    <!-- Vendor Libs -->
    <link rel="stylesheet" href="../templates/indico-seguros/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../templates/indico-seguros/libs/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../templates/indico-seguros/libs/flickity/flickity.css" media="screen">
    <link rel="stylesheet" href="../templates/indico-seguros/libs/jquery-accordion/css/jquery.accordion.css"
        media="screen">
    <link rel="stylesheet" href="../templates/indico-seguros/libs/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">


    <link rel="stylesheet" href="../templates/indico-seguros/css/tree.css">

    <link rel="stylesheet" href="../templates/indico-seguros/css/template.css" />
    <link rel="stylesheet" href="../templates/indico-seguros/css/responsive.css" />

    <link rel="icon" href="../templates/indico-seguros/img/icon/ms-icon-310x310-150x150.png" sizes="32x32" />
   
    <script src="../templates/indico-seguros/libs/jquery/jquery.js"></script>
    <script src="../templates/indico-seguros/libs/flickity/flickity.pkgd.min.js"></script>
    <script src="../templates/indico-seguros/libs/jquery-accordion/js/jquery.accordion.js"></script>
    <script src="../templates/indico-seguros/js/jquery.formatCurrency-1.4.0.min.js"></script>
    <script src="../templates/indico-seguros/js/main.js"></script>
<style>
    .loading-spinner {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); 
    z-index: 9999; 
    }

    .loading-spinner img {
        width: 70px;
        height: 70px; 
    }
</style>
</head>

<body>
    <div id="loading-spinner" class="loading-spinner" style="display: none;">
        <img src="../assets/img/Spinner.gif" alt="Loading" />
    </div>
    <!-- Body -->
    <div class="container-fluid">

        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#p1">Página 1</a></li>
                <li><a data-toggle="tab" href="#p2">Página 2</a></li>
            </ul>
            <div class="tab-content">
                <div id="p1" class="tab-pane fade in active">
                    <div class="container-formulario">
                        <div id="header-container" class="row">
                            <div class="col-xs-12">
                                <div class="box-section">
                                    <div class="form-group">
                                        <div class="title-section">
                                            <label for="num_veiculos_envolvidos">Nº ve&iacute;culos envolvidos <span
                                                    class="required-asterisk">*</span></label>
                                        </div>
                                        <div class="input-section">
                                            <select style="width:50%;margin:2px auto 0"
                                                class="form-control input-sm required" name="num_veiculos_envolvidos"
                                                id="num_veiculos_envolvidos">
                                                <option value="">-- Escolha por favor --</option>
                                                <option value="1">1 Veículo</option>
                                                <option value="2">2 Veículos</option>
                                                <option value="2">3 Veículos</option>
                                                <option value="2">4 Veículos</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-2">
                                <div class="box-section">
                                    <div class="form-group">
                                        <div class="title-section">
                                            <label for="data_acidente">1. Data do Acidente <span
                                                    class="required-asterisk">*</span></label>
                                        </div>
                                        <div class="input-section">
                                            <input style="background:white" type="text" id="data_acidente"
                                                class="form-control data input-text required" name="data_acidente"
                                                value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="box-section">
                                    <div class="form-group">
                                        <div class="title-section">
                                            <label for="hora_acidente">Hora <span
                                                    class="required-asterisk">*</span></label>
                                        </div>
                                        <div class="input-section">
                                            <div class="bootstrap-timepicker">
                                                <input style="background:white" id="hora_acidente" name="hora_acidente"
                                                    type="text" class="form-control input-text required" value="">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="box-section">
                                    <div class="form-group">
                                        <div class="title-section">
                                            <label for="local_acidente">2. Local (Estrada/rua,localidade e distrito)
                                                <span class="required-asterisk">*</span></label>
                                        </div>
                                        <div class="input-section">
                                            <input type="text" id="local_acidente"
                                                class="form-control input-text required" name="local_acidente" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="box-section">

                                    <div class="form-group">
                                        <div class="title-section">
                                            <label for="feridos_acidente">3. Houve feridos, mesmo ligeiros? <span
                                                    class="required-asterisk">*</span></label></br>
                                        </div>
                                        <div class="center input-section">
                                            <select style="width:50%;margin:2px auto 0"
                                                class="form-control input-sm required" name="feridos_acidente"
                                                id="feridos_acidente">
                                                <option value="">-- Escolha por favor --</option>
                                                <option value="0">N&atilde;o</option>
                                                <option value="1">Sim</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4">
                                <div class="box-section">
                                    <div class="form-group">
                                        <div class="title-section">
                                            <label for="houve_danos_materiais" style="line-height: 15px;">Houve danos materiais além dos causados aos veiculos A e B? <span
                                                    class="required-asterisk">*</span></label></br>
                                        </div>
                                        <div class="center  input-section">
                                            <select style="width:50%;margin:2px auto 0"
                                                class="form-control input-sm required" name="houve_danos_materiais"
                                                id="houve_danos_materiais">
                                                <option value="">-- Escolha por favor --</option>
                                                <option value="0">Não</option>
                                                <option value="1">Sim</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-8">
                                <div class="box-section">
                                    <div class="form-group">
                                        <div class="title-section">
                                            <label for="testemunhas">5.Testemunhas nomes,morada e telefone.Indicar se são passageiros dos veiculos A ou B <span class="required-asterisk">*</span></label>
                                        </div>
                                        <div class="input-section">
                                            <input type="text" id="testemunhas" class="form-control input-text required"
                                                name="testemunhas" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-formulario" id="veiculos-circunstancias">
                        <div class="row">
                            <div class="col-sm-4" id="col-veiculo-a">
                                <h5>VEÍCULO A</h5>
                                <div class="veiculo-container-side veiculo-container-side_a">
                                    <div class="form-group title-section">
                                        <label>6. Segurado (ver documento de seguro) </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="apelidos_a" class="col-xs-3 control-label">Apelidos <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text required_a "
                                                id="apelidos_a" name="segurado_apelidos_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_nomes_a" class="col-xs-2 control-label">Nomes <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text required_a"
                                                id="segurado_nomes_a" name="segurado_nomes_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_morada_a" class="col-xs-2 control-label">Morada <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text required_a"
                                                id="segurado_morada_a" name="segurado_morada_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_telefone_a" class="col-xs-3 control-label">Telefone <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text required_a txtNumeric"
                                                id="segurado_telefone_a" name="segurado_telefone_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_profissao_a" class="col-xs-3 control-label">Profissão <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text required_a"
                                                id="segurado_profissao_a" name="segurado_profissao_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_profissao_a" class="col-xs-3 control-label">Email</label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text" id="segurado_email_a"
                                                name="segurado_email_a" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_a">
                                    <div class="form-group title-section">
                                        <label>7. Ve&iacute;culo</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="sim_brand_a" class="col-xs-5 control-label">Marca <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-7">
                                            <select class="form-control required_a" id="sim_brand_a" name="marca_a">
                                                <option>-- Escolha por favor --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="modelo_a" class="col-xs-5 control-label">Modelo <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-7">
                                            <select class="form-control 0" name="modelo_a" id="sim_model_a">
                                                <option>-- Escolha por favor --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="marca_e_modelo_a" style="display:none">
                                        <label for="marca_e_modelo_a" class="col-xs-5 control-label">Marca e
                                            Modelo</label>
                                        <div class="col-xs-7">
                                            <input type="text" class="form-control input-text " id="marca_e_modelo_a"
                                                name="marca_e_modelo_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="n_matricula_ou_motor_a" class="col-xs-6 control-label">N&ordm; de
                                            matricula ou do motor
                                            <span class="required-asterisk">*</span></label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control input-text  required_a"
                                                id="n_matricula_ou_motor_a" name="n_matricula_ou_motor_a" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_a">
                                    <div class="form-group title-section">
                                        <label>8. Companhia de Seguros</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome_seguro_a" class="col-xs-2 control-label">Nome <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text required_a"
                                                id="nome_seguro_a" name="nome_seguro_a" value="Índico Seguros" readonly>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="num_apolice_a" class="col-xs-3 control-label">Apólice N&ordm; <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text required_a"
                                                id="num_apolice_a" name="num_apolice_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="balcao_a" class="col-xs-2 control-label">Balc&atilde;o</label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text" id="balcao_a"
                                                name="balcao_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cartao_valido_ate_a" class="col-xs-4 control-label">Ap&oacute;lice
                                            v&aacute;lida
                                            at&eacute;</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control input-text data"
                                                style="background:white" id="cartao_valido_ate_a"
                                                name="cartao_valido_ate_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="os_danos_estao_seguros_a" class="col-xs-12 control-label">Os danos
                                            deste ve&iacute;culo
                                            estão seguros?</label>
                                        <div class="col-xs-12">
                                            <div class="center  input-section">
                                                <select style="width:50%;margin:2px auto 0"
                                                    class="form-control input-sm" name="os_danos_estao_seguros_a"
                                                    id="os_danos_estao_seguros_a">
                                                    <option value="">-- Escolha por favor --</option>
                                                    <option value="0">N&atilde;o</option>
                                                    <option value="1">Sim</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_a">
                                    <div class="form-group title-section">
                                        <label>9. condutor (ver licen&ccedil;a de condu&ccedil;&atilde;o)</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_apelidos_a" class="col-xs-5 control-label">Sou o
                                            Segurado</label>
                                        <div class="col-xs-7">
                                            <input type="checkbox" class="checkboxcondutor" id="condutorcheck_a"
                                                name="condutorcheck_a">
                                        </div>
                                    </div>
                                    <div id="detalhescondutor_a" style="width: 100%;float: left;">
                                        <div class="form-group">
                                            <label for="condutor_apelidos_a" class="col-xs-3 control-label">Apelidos
                                                <span class="required-asterisk">*</span></label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text required_a"
                                                    id="condutor_apelidos_a" name="condutor_apelidos_a" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="condutor_nomes_a" class="col-xs-2 control-label">Nomes <span
                                                    class="required-asterisk">*</span></label>
                                            <div class="col-xs-10">
                                                <input type="text" class="form-control input-text required_a"
                                                    id="condutor_nomes_a" name="condutor_nomes_a" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="condutor_morada_a" class="col-xs-2 control-label">Morada <span
                                                    class="required-asterisk">*</span></label>
                                            <div class="col-xs-10">
                                                <input type="text" class="form-control input-text required_a"
                                                    id="condutor_morada_a" name="condutor_morada_a" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="segurado_telefone_a" class="col-xs-3 control-label">Telefone
                                                <span class="required-asterisk">*</span></label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text required_a txtNumeric"
                                                    id="condutor_telefone_a" name="condutor_telefone_a" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="condutor_profissao_a"
                                                class="col-xs-3 control-label">Profiss&atilde;o</label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text"
                                                    id="condutor_profissao_a" name="condutor_profissao_a" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="condutor_profissao_a" class="col-xs-3 control-label">Email
                                            </label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text "
                                                    id="condutor_email_a" name="condutor_email_a" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_profissao_a" class="col-xs-7 control-label">&Eacute; o
                                            condutor habitual da
                                            viatura? <span class="required-asterisk">*</span></label>
                                        <div class="col-xs-5">
                                            <select class="form-control input-sm required_a" name="condutor_habitual_a"
                                                id="condutor_habitual_a">
                                                <option value="">-- Escolha por favor --</option>
                                                <option value="0">N&atilde;o</option>
                                                <option value="1">Sim</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_idade_a" class="col-xs-2 control-label">Idade <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text required_a txtNumeric"
                                                id="condutor_idade_a" name="condutor_idade_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_licenca_n_a" class="col-xs-6 control-label">Licen&ccedil;a
                                            de
                                            condu&ccedil;&atilde;o n&ordm;</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control input-text" id="condutor_licenca_n_a"
                                                name="condutor_licenca_n_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_categoria_a"
                                            class="col-xs-4 control-label">Categoria</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control input-text" id="condutor_categoria_a"
                                                name="condutor_categoria_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_emitido_por_a" class="col-xs-3 control-label">Emitido por
                                        </label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text"
                                                id="condutor_emitido_por_a" name="condutor_emitido_por_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_emitido_em_a" class="col-xs-2 control-label">Em </label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text data"
                                                id="condutor_emitido_em_a" style="background:#fff"
                                                name="condutor_emitido_em_a" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_valida_de_a" class="col-xs-3 control-label">V&aacute;lida
                                            de</label>
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control input-text data"
                                                id="condutor_valida_de_a"
                                                style="background:#fff;padding:0;text-align:center"
                                                name="condutor_valida_de_a" value="">
                                        </div>
                                        <label for="condutor_valida_a_a" class="col-xs-2 control-label"
                                            style="text-align:center">a </label>
                                        <div class="col-xs-4">
                                            <input type="text" style="background:#fff;padding:0;text-align:center"
                                                class="form-control input-text  data " id="condutor_valida_a_a"
                                                name="condutor_valida_a_a" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_a">
                                    <div class="form-group title-section">
                                        <label>10. Pontos de embate <span class="required-asterisk">*</span></label>
                                    </div>
                                    <div class="croqui_a">
                                        <table class="croqui_table">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_14">
                                                    <div class="in_marker">
                                                        <input type="checkbox" value="1" name="marker_14_a" />
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_22">
                                                    <div class="in_marker">
                                                        <input type="checkbox" value="1" name="marker_22_a" />
                                                    </div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_1">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_1_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_23" colspan="2">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_23_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_2" colspan="2">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_2_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="marker_25">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_25_a" /></div>
                                                </td>
                                                <td class="marker_24">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_24_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_15">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_15_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_4">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_4_a" /></div>
                                                </td>
                                                <td class="marker_3">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_3_a" /></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_16">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_16_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="marker_27">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_27_a" /></div>
                                                </td>
                                                <td class="marker_26">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_26_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_6">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_6_a" /></div>
                                                </td>
                                                <td class="marker_5">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_5_a" /></div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="marker_28">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_28_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_18">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_18_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_7">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_7_a" /></div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td class="marker_30">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_30_a" /></div>
                                                </td>
                                                <td class="marker_29">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_29_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_9">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_9_a" /></div>
                                                </td>
                                                <td class="marker_8">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_8_a" /></div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_19">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_19_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="marker_33">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_33_a" /></div>
                                                </td>
                                                <td class="marker_32">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_32_a" /></div>
                                                </td>
                                                <td class="marker_31">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_31_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_12">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_12_a" /></div>
                                                </td>
                                                <td class="marker_11">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_11_a" /></div>
                                                </td>
                                                <td class="marker_10">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_10_a" /></div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_20">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_20_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="marker_34" colspan="2">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_34_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_13" colspan="2">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_13_a" /></div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_21">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_21_a" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <img src="../templates/indico-seguros/img/participacao_online/croquix165.png"
                                            width="111" height="165" alt="Croquix165">
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_a">
                                    <div class="form-group title-section">
                                        <label>11. Danos vis&iacute;veis</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="danos_visiveis_a" id="danos_visiveis_a"
                                            rows="3" maxlength="99"></textarea>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_a">
                                    <div class="form-group title-section">
                                        <label>12. Observa&ccedil;&otilde;es</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="observacoes_a" id="observacoes_a" rows="3"
                                            maxlength="99"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" id="circunstancias">
                                <div class="row">
                                    <div class="col-sm-1 circunstancias-a">
                                        A
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="box-section">
                                            <div class="title-section">
                                                <label style="text-align: center; width: 100%;">13. Circunst&acirc;ncias
                                                    do Acidente</label>
                                            </div>
                                            <div class="input-section" style="text-align:center">
                                                Marque com um certo (&#x2713;) no respectivo quadrado as circunstâncias aplicáveis e cada veículo para melhor compreensão do esquema do acidente
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 circunstancias-b">
                                        B
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="estava_estacionado_a"
                                            class="checkbox_circunstancia_a" name="estava_estacionado_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="saia_do_estacionamento" class="circunstancia-label">Estava
                                            Estacionado</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="estava_estacionado_b"
                                            class="checkbox_circunstancia_b" name="estava_estacionado_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="saia_do_estacionado_a"
                                            class="checkbox_circunstancia_a" name="saia_do_estacionado_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="saia_do_estacionamento" class="circunstancia-label">Sa&iacute;a do
                                            Estacionamento</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="saia_do_estacionado_b"
                                            class="checkbox_circunstancia_b" name="saia_do_estacionado_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="ia_estacionar_a" class="checkbox_circunstancia_a"
                                            name="ia_estacionar_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Ia estacionar</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="ia_estacionar_b" class="checkbox_circunstancia_b"
                                            name="ia_estacionar_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="saia_parque_estacionamento_a"
                                            class="checkbox_circunstancia_a" name="saia_parque_estacionamento_a"
                                            value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Saia de uma parque de
                                            estacionamento, de
                                            local
                                            privado ou um caminho particular</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="saia_parque_estacionamento_b"
                                            class="checkbox_circunstancia_b" name="saia_parque_estacionamento_b"
                                            value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="entrava_num_parque_de_estacionamento_a"
                                            class="checkbox_circunstancia_a"
                                            name="entrava_num_parque_de_estacionamento_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Entrava num parque de
                                            estacionamento, de
                                            local
                                            privado ou um caminho particular</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="entrava_num_parque_de_estacionamento_b"
                                            class="checkbox_circunstancia_b"
                                            name="entrava_num_parque_de_estacionamento_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="entrava_numa_rotunda_a"
                                            class="checkbox_circunstancia_a" name="entrava_numa_rotunda_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Entrava numa rotunda ou
                                            prac&#x327;a de
                                            sentido girato&#x301;rio</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="entrava_numa_rotunda_b"
                                            class="checkbox_circunstancia_b" name="entrava_numa_rotunda_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="circulava_numa_rotunda_a"
                                            class="checkbox_circunstancia_a" name="circulava_numa_rotunda_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Circulava numa rotunda ou
                                            pra&ccedil;a de
                                            sentido girat&oacute;rio</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="circulava_numa_rotunda_b"
                                            class="checkbox_circunstancia_b" name="circulava_numa_rotunda_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="embateu_na_traseira_de_outro_a"
                                            class="checkbox_circunstancia_a" name="embateu_na_traseira_de_outro_a"
                                            value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Embateu na traseira de
                                            outro ve&iacute;culo
                                            que circulava no mesmo sentido e na mesma fila</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="embateu_na_traseira_de_outro_b"
                                            class="checkbox_circunstancia_b" name="embateu_na_traseira_de_outro_b"
                                            value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="circulava_no_mesmo_sentido_a"
                                            class="checkbox_circunstancia_a" name="circulava_no_mesmo_sentido_a"
                                            value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Circulava no mesmo
                                            sentido mas numa fila
                                            diferente</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="circulava_no_mesmo_sentido_b"
                                            class="checkbox_circunstancia_b" name="circulava_no_mesmo_sentido_b"
                                            value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="mudava_de_fila_a" class="checkbox_circunstancia_a"
                                            name="mudava_de_fila_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Mudava de fila</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="mudava_de_fila_b" class="checkbox_circunstancia_b"
                                            name="mudava_de_fila_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="ultrapassava_a" class="checkbox_circunstancia_a"
                                            name="ultrapassava_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Ultrapassava</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="ultrapassava_b" class="checkbox_circunstancia_b"
                                            name="ultrapassava_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="virava_a_direita_a" class="checkbox_circunstancia_a"
                                            name="virava_a_direita_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Virava &agrave;
                                            direita</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="virava_a_direita_b" class="checkbox_circunstancia_b"
                                            name="virava_a_direita_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="virava_a_esquerda_a" class="checkbox_circunstancia_a"
                                            name="virava_a_esquerda_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Virava &agrave;
                                            esquerda</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="virava_a_esquerda_b" class="checkbox_circunstancia_b"
                                            name="virava_a_esquerda_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="recuava_a" name="recuava_a"
                                            class="checkbox_circunstancia_a" value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Recuava</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="recuava_b" name="recuava_b"
                                            class="checkbox_circunstancia_b" value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="circulava_na_parte_da_faixa_a"
                                            class="checkbox_circunstancia_a" name="circulava_na_parte_da_faixa_a"
                                            value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Circulava na parte da
                                            faixa de rodagem
                                            reservada &agrave; circula&ccedil;&atilde;o em sentido
                                            contr&aacute;rio</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="circulava_na_parte_da_faixa_b"
                                            class="checkbox_circunstancia_b" name="circulava_na_parte_da_faixa_b"
                                            value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="apresentava_se_pela_direita_a"
                                            class="checkbox_circunstancia_a" name="apresentava_se_pela_direita_a"
                                            value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">Apresentava-se pela
                                            direita (num cruzamento
                                            ou entroncamento)</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="apresentava_se_pela_direita_b"
                                            class="checkbox_circunstancia_b" name="apresentava_se_pela_direita_b"
                                            value="1">
                                    </div>
                                </div>
                                <div class="row circunstancia-row">
                                    <div class="col-xs-1 circunstancia-veiculo-a">
                                        <input type="checkbox" id="nao_respeitou_um_sinal_de_dar_a"
                                            class="checkbox_circunstancia_a" name="nao_respeitou_um_sinal_de_dar_a"
                                            value="1">
                                    </div>
                                    <div class="col-xs-10 circunstancia-label-col">
                                        <label for="ia_estacionar" class="circunstancia-label">N&atilde;o respeitou um
                                            sinal de dar
                                            prioridade ou um sem&aacute;foro vermelho</label>
                                    </div>
                                    <div class="col-xs-1 circunstancia-veiculo-b">
                                        <input type="checkbox" id="nao_respeitou_um_sinal_de_dar_b"
                                            class="checkbox_circunstancia_b" name="nao_respeitou_um_sinal_de_dar_b"
                                            value="1">
                                    </div>
                                </div>

                                <canvas id="img_canvas" style="display:none;"></canvas>
                                <div class="box-center" style="margin-top:204px">
                                    <div class="form-group title-section">
                                        <label>14. Esquema do acidente</label>
                                    </div>
                                    <div class="esquema">
                                        <!-- <div class="form-group">
                                  <label for="condutor_morada_b" class="col-xs-7 control-label label-font-size-11">O ve&iacute;culo do participante &eacute; o :</label>
                                  <div class="col-xs-5">
                                    <select class="form-control input-sm" name="veiculo_do_participante">
                                      <option value="A" >Ve&iacute;culo A (azul)</option>
                                      <option value="B" >Ve&iacute;culo B (vermelho)</option>
                                    </select>
                                  </div>
                                </div> -->
                                        <div id="esquema_img">
                                            Selecione uma imagem representativa do acidente
                                        </div>
                                        <input type="hidden" value="" name="imagem_esquema" id="imagem_esquema" />
                                        <!--<canvas id="img_canvas"></canvas>-->
                                        <div class="esquema_btns">
                                            <button type="button" class="btn btn-warning btn-xs"
                                                id="remove_esquema">Remover</button>
                                            <!-- Large modal -->
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="modal"
                                                data-target="#esquemas_modal">Selecionar</button>
                                            <div style="display: none;" id="esquemas_modal"
                                                class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close"><span
                                                                    aria-hidden="true">X</span></button>
                                                            <h4 class="modal-title" id="myLargeModalLabel">Esquema de
                                                                Acidentes <a class="anchorjs-link"
                                                                    href="#myLargeModalLabel"><span
                                                                        class="anchorjs-icon"></span></a></h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <label for="marca_a"
                                                                            class="col-xs-5 control-label">Tipo de
                                                                            esquema</label>
                                                                        <div class="col-xs-7">
                                                                            <select class="form-control"
                                                                                id="tipo_esquema_select"
                                                                                name="tipo_esquema_select">
                                                                                <option value=""></option>
                                                                                <option value="embate_traseiro">Embate
                                                                                    Traseiro</option>
                                                                                <option value="mudar_de_via">Mudar de
                                                                                    Via</option>
                                                                                <option value="veiculos_estacionados">
                                                                                    Ve&iacute;culos Estacionados
                                                                                </option>
                                                                                <option value="ultrapassagem">
                                                                                    Ultrapassagem</option>
                                                                                <option value="sentido_contrario">
                                                                                    Sentido Contr&aacute;rio</option>
                                                                                <option value="prioridades">Prioridades
                                                                                </option>
                                                                                <option value="embate">Embate com
                                                                                    obst&aacute;culo fixo</option>
                                                                                <option value="atropelamento">
                                                                                    Atropelamento</option>
                                                                                <option value="despiste">Despiste
                                                                                </option>
                                                                                <option value="despiste_capotamento">
                                                                                    Despiste e Capotamento</option>
                                                                                <option value="outros">Outros</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <p>Dever&aacute; seleccionar o esquema que melhor
                                                                        representa o acidente.</p>
                                                                    <p>Caso n&atilde;o exista nenhuma imagem
                                                                        representativa do acidente dever&aacute;
                                                                        imprimir esta participa&ccedil;&atilde;o e
                                                                        desenhar o esquema do acidente.</p>
                                                                </div>
                                                                <div class="row esquemas-row">
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10a_embate_traseiro.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10a_embate_traseiro_.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10b_embate_traseiro_e_rotunda.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro + Rotunda</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10b_embate_traseiro_e_rotunda_.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro + Rotunda</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10c_embate_traseiro.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10c_embate_traseiro_.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira ou lateral. Veículo A bifurcando para uma via lateral ou entrando num parque ou num local não aberto.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10d_embate_traseiro.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira ou lateral. Veículo A bifurcando para uma via lateral ou entrando num parque ou num local não aberto.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10d_embate_traseiro_.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira ou lateral. Veículo A bifurcando para uma via lateral ou entrando num parque ou num local não aberto.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10e_embate_traseiro.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira ou lateral. Veículo A bifurcando para uma via lateral ou entrando num parque ou num local não aberto.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10e_embate_traseiro_.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira ou lateral. Veículo A bifurcando para uma via lateral ou entrando num parque ou num local não aberto.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10f_embate_traseiro.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate_traseiro"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A embatido na parte traseira ou lateral. Veículo A bifurcando para uma via lateral ou entrando num parque ou num local não aberto.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/10f_embate_traseiro_.jpg">
                                                                            </div>
                                                                            <b>Embate Traseiro</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container mudar_de_via"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de via e invadindo total ou parcialmente a do A.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/11a_mudar_de_via.jpg">
                                                                            </div>
                                                                            <b>Mudar de Via</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container mudar_de_via"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de via e invadindo total ou parcialmente a do A.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/11a_mudar_de_via_.jpg">
                                                                            </div>
                                                                            <b>Mudar de Via</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container mudar_de_via"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de via e invadindo total ou parcialmente a do A.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/11b_mudar_de_via.jpg">
                                                                            </div>
                                                                            <b>Mudar de Via</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container mudar_de_via"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de via e invadindo total ou parcialmente a do A.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/11b_mudar_de_via_.jpg">
                                                                            </div>
                                                                            <b>Mudar de Via</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container mudar_de_via"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de via e invadindo total ou parcialmente a do A.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/11c_mudar_de_via.jpg">
                                                                            </div>
                                                                            <b>Mudar de Via</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container mudar_de_via"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de via e invadindo total ou parcialmente a do A.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/11c_mudar_de_via_.jpg">
                                                                            </div>
                                                                            <b>Mudar de Via</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container veiculos_estacionados"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A imobilizado">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/13a_veiculos_estacionados.jpg">
                                                                            </div>
                                                                            <b>Veiculos Estacionados</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container veiculos_estacionados"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A imobilizado">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/13a_veiculos_estacionados_.jpg">
                                                                            </div>
                                                                            <b>Veiculos Estacionados</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container veiculos_estacionados"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A imobilizado">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/13b_veiculos_estacionados.jpg">
                                                                            </div>
                                                                            <b>Veiculos Estacionados</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container veiculos_estacionados"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A imobilizado">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/13b_veiculos_estacionados_.jpg">
                                                                            </div>
                                                                            <b>Veiculos Estacionados</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container veiculos_estacionados"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A imobilizado">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/13c_veiculos_estacionados.jpg">
                                                                            </div>
                                                                            <b>Veículos Estacionados</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container veiculos_estacionados"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A imobilizado">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/13c_veiculos_estacionados_.jpg">
                                                                            </div>
                                                                            <b>Veículos Estacionados</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container ultrapassagem"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de direcção à esquerda num cruzamento ou entroncamento.Veículo A ultrapassando um só veículo. utilizando a via reservada a circulação em sentido contrário quando em via que lhe confira prioridade e taç esteja devidamente assinalado no seu sentido de marcha.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/14a_ultrapassagem.jpg">
                                                                            </div>
                                                                            <b>Ultrapassagem</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container ultrapassagem"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de direcção à esquerda num cruzamento ou entroncamento.Veículo A ultrapassando um só veículo. utilizando a via reservada a circulação em sentido contrário quando em via que lhe confira prioridade e taç esteja devidamente assinalado no seu sentido de marcha.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/14a_ultrapassagem_.jpg">
                                                                            </div>
                                                                            <b>Ultrapassagem</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container ultrapassagem"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de direcção à esquerda num cruzamento ou entroncamento.Veículo A ultrapassando um só veículo. utilizando a via reservada a circulação em sentido contrário quando em via que lhe confira prioridade e taç esteja devidamente assinalado no seu sentido de marcha.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/14b_ultrapassagem.jpg">
                                                                            </div>
                                                                            <b>Ultrapassagem</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container ultrapassagem"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de direcção à esquerda num cruzamento ou entroncamento.Veículo A ultrapassando um só veículo. utilizando a via reservada a circulação em sentido contrário quando em via que lhe confira prioridade e taç esteja devidamente assinalado no seu sentido de marcha.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/14b_ultrapassagem_.jpg">
                                                                            </div>
                                                                            <b>Ultrapassagem</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container ultrapassagem"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de direcção à esquerda num cruzamento ou entroncamento.Veículo A ultrapassando um só veículo. utilizando a via reservada a circulação em sentido contrário quando em via que lhe confira prioridade e taç esteja devidamente assinalado no seu sentido de marcha.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/14c_ultrapassagem.jpg">
                                                                            </div>
                                                                            <b>Ultrapassagem</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container ultrapassagem"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de direcção à esquerda num cruzamento ou entroncamento.Veículo A ultrapassando um só veículo. utilizando a via reservada a circulação em sentido contrário quando em via que lhe confira prioridade e taç esteja devidamente assinalado no seu sentido de marcha.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/14c_ultrapassagem_.jpg">
                                                                            </div>
                                                                            <b>Ultrapassagem</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container ultrapassagem"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de direcção à esquerda num cruzamento ou entroncamento.Veículo A ultrapassando um só veículo. utilizando a via reservada a circulação em sentido contrário quando em via que lhe confira prioridade e taç esteja devidamente assinalado no seu sentido de marcha.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/16a_ultrapassagem.jpg">
                                                                            </div>
                                                                            <b>Ultrapassagem</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container ultrapassagem"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B mudando de direcção à esquerda num cruzamento ou entroncamento.Veículo A ultrapassando um só veículo. utilizando a via reservada a circulação em sentido contrário quando em via que lhe confira prioridade e taç esteja devidamente assinalado no seu sentido de marcha.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/16a_ultrapassagem_.jpg">
                                                                            </div>
                                                                            <b>Ultrapassagem</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B transpondo o eixo, (mesmo para virar uma via à esquerda). Veículo A circulando na sua mão.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/20a_sentido_contrario.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B transpondo o eixo, (mesmo para virar uma via à esquerda). Veículo A circulando na sua mão.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/20a_sentido_contrario_.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B transpondo o eixo, (mesmo para virar uma via à esquerda). Veículo A circulando na sua mão.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/20b_sentido_contrario.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B transpondo o eixo, (mesmo para virar uma via à esquerda). Veículo A circulando na sua mão.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/20b_sentido_contrario_.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B transpondo o eixo, (mesmo para virar uma via à esquerda). Veículo A circulando na sua mão.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img">
                                                                                <img class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/20c_sentido_contrario.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo B transpondo o eixo, (mesmo para virar uma via à esquerda). Veículo A circulando na sua mão.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/20c_sentido_contrario_.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo X e Y transpondo ambos o eixo ou cuja posição em relação àquele não possa ser determinada.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/21a_sentido_contrario.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo X e Y transpondo ambos o eixo ou cuja posição em relação àquele não possa ser determinada.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/21a_sentido_contrario_.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A e B transpondo ambos o eixo ou cuja posição em relação àquele não possa ser determinada.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/21b_sentido_contrario.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A e B transpondo ambos o eixo ou cuja posição em relação àquele não possa ser determinada.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/21b_sentido_contrario_.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A e B transpondo ambos o eixo ou cuja posição em relação àquele não possa ser determinada.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/21c_sentido_contrario.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container sentido_contrario"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A e B transpondo ambos o eixo ou cuja posição em relação àquele não possa ser determinada.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/21c_sentido_contrario_.jpg">
                                                                            </div>
                                                                            <b>Sentido Contrário</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/30a_prioridades.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/30a_prioridades_.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/30b_prioridades.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/30b_prioridades_.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/30c_prioridades.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/30c_prioridades_.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/31a_prioridades.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/31a_prioridades_.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/31b_prioridades.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/31c_prioridades.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/31b_prioridades_.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container prioridades"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Veículo A prioritário da direita circulando numa via de dois sentidos na sua mão, ou numa via de sentido único.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/31c_prioridades_.jpg">
                                                                            </div>
                                                                            <b>Prioridades</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container outros"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Selecione esta imagem se nenhum dos esquemas apresentados representa a situação do acidente.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/blank.jpg">
                                                                            </div>
                                                                            <b>Outros</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container embate"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Selecione esta imagem se embateu contra um obstáculo fixo.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/blank.jpg">
                                                                            </div>
                                                                            <b>Embate com obstáculo fixo</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container atropelamento"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Selecione esta imagem se aconteceu um atropelamento.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/blank.jpg">
                                                                            </div>
                                                                            <b>Atropelamento</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container despiste"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Selecione esta imagem se aconteceu um despiste.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/blank.jpg">
                                                                            </div>
                                                                            <b>Despiste</b>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 esquemas-container despiste_capotamento"
                                                                        data-toggle="tooltip" data-placement="bottom"
                                                                        title="Selecione esta imagem se aconteceu um despiste e capotamento.">
                                                                        <div class="esquemas-img-container">
                                                                            <div class="esquemas-img"><img
                                                                                    class="img-responsive"
                                                                                    src="../templates/indico-seguros/img/participacao_online/blank.jpg">
                                                                            </div>
                                                                            <b>Despiste e Capotamento</b>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-center" style="margin-top:18px">
                                    <div class="form-group title-section">
                                        <label>15. Assinatura dos Condutores</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="marca_e_modelo_a"
                                            class="col-sm-7 control-label label-font-size-11">Ambos os condutores
                                            assinaram? <span class="required-asterisk">*</span></label>
                                        <div class="col-sm-5">
                                            <select class="form-control input-sm required" name="assinaturas">
                                                <option value="">-- Escolha por favor --</option>
                                                <option value="nao">Não</option>
                                                <option value="sim">Sim</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4" id="col-veiculo-b">
                                <h5>VE&Iacute;CULO B</h5>
                                <div class="veiculo-container-side veiculo-container-side_b">
                                    <div class="form-group title-section">
                                        <label>6. Terceiro (propriet&aacute;rio dos bens danificados) </label>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_apelidos_b" class="col-xs-3 control-label">Apelidos <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text required_b "
                                                id="apelidos_b" name="segurado_apelidos_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_nomes_b" class="col-xs-2 control-label">Nomes <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text required_b"
                                                id="segurado_nomes_b" name="segurado_nomes_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_morada_b" class="col-xs-2 control-label">Morada <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text required_b"
                                                id="segurado_morada_b" name="segurado_morada_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_telefone_b" class="col-xs-3 control-label">Telefone <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text required_b txtNumeric"
                                                id="segurado_telefone_b" name="segurado_telefone_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_profissao_b" class="col-xs-3 control-label">Profissão <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text required_b"
                                                id="segurado_profissao_b" name="segurado_profissao_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="segurado_profissao_b" class="col-xs-3 control-label">Email</label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text" id="segurado_email_b"
                                                name="segurado_email_b" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_b">
                                    <div class="form-group title-section">
                                        <label>7. Ve&iacute;culo</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="marca_b" class="col-xs-5 control-label">Marca <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-7">
                                            <input type="hidden" name="marca_edit_b" value="" id="marca_edit_b">
                                            <select class="form-control required_b" id="sim_brand_b" name="marca_b">
                                                <option>-- Escolha por favor --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="modelo_b" class="col-xs-5 control-label">Modelo <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-7">
                                            <input type="hidden" name="modelo_edit_b" value="" id="modelo_edit_b">
                                            <select class="form-control 0" name="modelo_b" id="sim_model_b">
                                                <option>-- Escolha por favor --</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="marca_e_modelo_b" style="display:none">
                                        <label for="marca_e_modelo_b" class="col-xs-5 control-label">Marca e
                                            Modelo</label>
                                        <div class="col-xs-7">
                                            <input type="text" class="form-control input-text " id="marca_e_modelo_b"
                                                name="marca_e_modelo_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="n_matricula_ou_motor_b" class="col-xs-6 control-label">N&ordm; de
                                            matricula ou do motor
                                            <span class="required-asterisk">*</span></label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control input-text  required_b"
                                                id="n_matricula_ou_motor_b" name="n_matricula_ou_motor_b" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_b">
                                    <div class="form-group title-section">
                                        <label>8. Companhia de Seguros</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="nome_seguro_b" class="col-xs-2 control-label">Nome <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text required_b"
                                                id="nome_seguro_b" name="nome_seguro_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="num_apolice_b" class="col-xs-3 control-label">Apólice N&ordm; <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text required_b"
                                                id="num_apolice_b" name="num_apolice_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="balcao_b" class="col-xs-2 control-label">Balc&atilde;o</label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text" id="balcao_b"
                                                name="balcao_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cartao_valido_ate_b" class="col-xs-4 control-label">Ap&oacute;lice
                                            v&aacute;lida
                                            at&eacute;</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control input-text data"
                                                style="background:white" id="cartao_valido_ate_b"
                                                name="cartao_valido_ate_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="os_danos_estao_seguros_b" class="col-xs-12 control-label">Os danos
                                            deste ve&iacute;culo
                                            estão seguros?</label>
                                        <div class="col-xs-12">
                                            <div class="center  input-section">
                                                <select style="width:50%;margin:2px auto 0"
                                                    class="form-control input-sm" name="os_danos_estao_seguros_b"
                                                    id="os_danos_estao_seguros_b">
                                                    <option value="">-- Escolha por favor --</option>
                                                    <option value="0">N&atilde;o</option>
                                                    <option value="1">Sim</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_b">
                                    <div class="form-group title-section">
                                        <label>9. condutor (ver licen&ccedil;a de condu&ccedil;&atilde;o)</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_apelidos_b" class="col-xs-5 control-label">Sou o
                                            Segurado</label>
                                        <div class="col-xs-7">
                                            <input type="checkbox" class="checkboxcondutor" id="condutorcheck_b"
                                                name="condutorcheck_b">
                                        </div>
                                    </div>
                                    <div id="detalhescondutor_b" style="width: 100%;float: left;">
                                        <div class="form-group">
                                            <label for="condutor_apelidos_b" class="col-xs-3 control-label">Apelidos
                                                <span class="required-asterisk">*</span></label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text required_b"
                                                    id="condutor_apelidos_b" name="condutor_apelidos_b" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="condutor_nomes_b" class="col-xs-2 control-label">Nomes <span
                                                    class="required-asterisk">*</span></label>
                                            <div class="col-xs-10">
                                                <input type="text" class="form-control input-text required_b"
                                                    id="condutor_nomes_b" name="condutor_nomes_b" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="condutor_morada_b" class="col-xs-2 control-label">Morada <span
                                                    class="required-asterisk">*</span></label>
                                            <div class="col-xs-10">
                                                <input type="text" class="form-control input-text required_b"
                                                    id="condutor_morada_b" name="condutor_morada_b" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="segurado_telefone_b" class="col-xs-3 control-label">Telefone
                                                <span class="required-asterisk">*</span></label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text required_b txtNumeric"
                                                    id="condutor_telefone_b" name="condutor_telefone_b" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="condutor_profissao_b"
                                                class="col-xs-3 control-label">Profiss&atilde;o</label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text"
                                                    id="condutor_profissao_b" name="condutor_profissao_b" value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="condutor_profissao_b" class="col-xs-3 control-label">Email
                                            </label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text "
                                                    id="condutor_email_b" name="condutor_email_b" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_profissao_b" class="col-xs-7 control-label">&Eacute; o
                                            condutor habitual da
                                            viatura? <span class="required-asterisk">*</span></label>
                                        <div class="col-xs-5">
                                            <select class="form-control input-sm required_b" name="condutor_habitual_b"
                                                id="condutor_habitual_b">
                                                <option value="">-- Escolha por favor --</option>
                                                <option value="0">N&atilde;o</option>
                                                <option value="1">Sim</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_idade_b" class="col-xs-2 control-label">Idade <span
                                                class="required-asterisk">*</span></label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text required_b txtNumeric"
                                                id="condutor_idade_b" name="condutor_idade_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_licenca_n_b" class="col-xs-6 control-label">Licen&ccedil;a
                                            de
                                            condu&ccedil;&atilde;o n&ordm;</label>
                                        <div class="col-xs-6">
                                            <input type="text" class="form-control input-text" id="condutor_licenca_n_b"
                                                name="condutor_licenca_n_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_categoria_b"
                                            class="col-xs-4 control-label">Categoria</label>
                                        <div class="col-xs-8">
                                            <input type="text" class="form-control input-text" id="condutor_categoria_b"
                                                name="condutor_categoria_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_emitido_por_b" class="col-xs-3 control-label">Emitido por
                                        </label>
                                        <div class="col-xs-9">
                                            <input type="text" class="form-control input-text"
                                                id="condutor_emitido_por_b" name="condutor_emitido_por_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_emitido_em_b" class="col-xs-2 control-label">Em </label>
                                        <div class="col-xs-10">
                                            <input type="text" class="form-control input-text data"
                                                id="condutor_emitido_em_b" style="background:#fff"
                                                name="condutor_emitido_em_b" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="condutor_valida_de_b" class="col-xs-3 control-label">V&aacute;lida
                                            de</label>
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control input-text data"
                                                id="condutor_valida_de_b"
                                                style="background:#fff;padding:0;text-align:center"
                                                name="condutor_valida_de_b" value="">
                                        </div>
                                        <label for="condutor_valida_a_b" class="col-xs-2 control-label"
                                            style="text-align:center">a </label>
                                        <div class="col-xs-4">
                                            <input type="text" style="background:#fff;padding:0;text-align:center"
                                                class="form-control input-text  data " id="condutor_valida_a_b"
                                                name="condutor_valida_a_b" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_b">
                                    <div class="form-group title-section">
                                        <label>10. Pontos de embate <span class="required-asterisk">*</span>
                                        </label>
                                    </div>
                                    <div class="croqui_b">
                                        <table class="croqui_table">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_14">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_14_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_22">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_22_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_1">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_1_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_23" colspan="2">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_23_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_2" colspan="2">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_2_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="marker_25">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_25_b" /></div>
                                                </td>
                                                <td class="marker_24">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_24_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_15">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_15_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_4">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_4_b" /></div>
                                                </td>
                                                <td class="marker_3">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_3_b" /></div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_16">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_16_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="marker_27">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_27_b" /></div>
                                                </td>
                                                <td class="marker_26">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_26_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_6">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_6_b" /></div>
                                                </td>
                                                <td class="marker_5">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_5_b" /></div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="marker_28">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_28_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_18">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_18_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_7">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_7_b" /></div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td class="marker_30">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_30_b" /></div>
                                                </td>
                                                <td class="marker_29">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_29_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_9">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_9_b" /></div>
                                                </td>
                                                <td class="marker_8">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_8_b" /></div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_19">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_19_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td class="marker_33">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_33_b" /></div>
                                                </td>
                                                <td class="marker_32">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_32_b" /></div>
                                                </td>
                                                <td class="marker_31">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_31_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_12">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_12_b" /></div>
                                                </td>
                                                <td class="marker_11">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_11_b" /></div>
                                                </td>
                                                <td class="marker_10">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_10_b" /></div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_20">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_20_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td class="marker_34" colspan="2">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_34_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_13" colspan="2">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_13_b" /></div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td class="marker_21">
                                                    <div class="in_marker"><input type="checkbox" value="1"
                                                            name="marker_21_b" /></div>
                                                </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <img src="../templates/indico-seguros/img/participacao_online/croquix165.png"
                                            width="111" height="165" alt="Croquix165">
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_b">
                                    <div class="form-group title-section">
                                        <label>11. Danos vis&iacute;veis</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="danos_visiveis_b" id="danos_visiveis_b"
                                            rows="3" maxlength="99"></textarea>
                                    </div>
                                </div>
                                <div class="veiculo-container-side veiculo-container-side_b">
                                    <div class="form-group title-section">
                                        <label>12. Observa&ccedil;&otilde;es</label>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="observacoes_b" id="observacoes_b" rows="3"
                                            maxlength="99"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="p2" class="tab-pane fade in">
                    <div class="container-formulario">
                        {{-- <div class="row">
                            <div class="col-xs-12" style="position:relative;height:190px">
                                <label
                                    style="position: absolute; bottom: 0px; left: 0px; width: 100%; text-align: center;">
                                    (Espac&#807;o reservado aos servic&#807;os da Companhia de Seguro)
                                </label>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-xs-12" style="border-right:2px solid #DDD">
                                <div class="form-group title-section">
                                    <label>1. Descrição Pormenorizada do Acidente <span
                                            class="required-asterisk">*</span></label>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control required" name="descricao_acidente"
                                        id="descricao_acidente" rows="4" maxlength="300"></textarea>
                                </div>
                                <div class="form-group" style="border-top:1px solid #DDD">
                                    <label for="velocidade_acidente" class="col-xs-7 control-label">Indique a que
                                        velocidade seguia o seu
                                        veículo <span class="required-asterisk">*</span></label>
                                    <div class="col-xs-4">
                                        <input type="text" class="form-control input-text required txtNumeric"
                                            id="velocidade_acidente" name="velocidade_acidente" value="">
                                    </div>
                                    <label class="col-xs-1 control-label">Km/h</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group title-section">
                                    <label>2. Identificação de Outras Testemunhas</label>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="identificacao_testemunhas"
                                        id="identificacao_testemunhas" maxrows="4" maxlength="300"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group title-section">
                                    <label>3. Em sua opinião quem foi o culpado e porque?</label>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" name="quem_foi_culpado" id="quem_foi_culpado"
                                        maxrows="4" maxlength="300"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group title-section">
                                    <label style="color:#DDD">_</label>
                                </div>
                                <div class="form-group" style="padding-top: 4px;">
                                    <label for="levantado_pelas_autoridades" class="col-xs-3 control-label">4. Foi
                                        levantado auto pelas
                                        autoridades?</label>

                                    <div class="col-xs-3">
                                        <select class="form-control input-sm" id="levantado_pelas_autoridades"
                                            name="levantado_pelas_autoridades"
                                            style="width:80px;float:left;margin:0 auto">
                                            <option value="0">Não</option>
                                            <option value="1">Sim</option>
                                        </select>
                                    </div>
                                    <label for="posto_brigada_esquadra" class="col-xs-3 control-label"
                                        style="text-align:right">Posto/Brigada/Esquadra de </label>
                                    <div class="col-xs-3">
                                        <input type="text" class="form-control input-text" id="posto_brigada_esquadra"
                                            name="posto_brigada_esquadra" value="">
                                    </div>
                                    <div class="form-group" style="padding-top: 4px;">
                                        <label for="levantado_pelas_autoridades" class="col-xs-3 control-label">Número
                                            do processo</label>

                                        <div class="col-xs-3">
                                            <input type="text" class="form-control input-text" id="numero_processo"
                                                name="numero_processo" value="">

                                        </div>
                                        <label for="posto_brigada_esquadra" class="col-xs-3 control-label"
                                            style="text-align:right">Nome do
                                            agente </label>
                                        <div class="col-xs-3">
                                            <input type="text" class="form-control input-text" id="nome_agente"
                                                name="nome_agente" value="">
                                        </div>
                                    </div>
                                    <div class="form-group"
                                        style="border-top: 1px solid rgb(221, 221, 221); padding-top: 4px;">
                                        <label for="teste_anti_alcool" class="col-xs-5 control-label">Algum dos
                                            intervenientes foi submetido
                                            ao teste anti-álcool?</label>
                                        <div class="col-xs-3">
                                            <select class="form-control input-sm" name="teste_anti_alcool"
                                                id="teste_anti_alcool" style="width:80px;float:left;margin:0 auto">
                                                <option value="0">Não</option>
                                                <option value="1">Sim</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-4">
                                            <div class="row">
                                                <label for="teste_anti_alcool_qual"
                                                    class="col-xs-5 control-label">Qual?</label>
                                                <div class="col-xs-7">
                                                    <input type="text" class="form-control input-text "
                                                        id="teste_anti_alcool_qual" name="teste_anti_alcool_qual"
                                                        value="">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <label for="teste_anti_alcool_resultado"
                                                    class="col-xs-5 control-label">Resultado do
                                                    teste</label>
                                                <div class="col-xs-7">
                                                    <input type="text" class="form-control input-text"
                                                        id="teste_anti_alcool_resultado"
                                                        name="teste_anti_alcool_resultado" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group title-section">
                                        <label>5. Dados referentes aos veículos</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <label>Segurado</label>
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                            </div>
                                            <div class="col-xs-4">
                                                <label>Terceiro</label>
                                            </div>
                                        </div>
                                        <div class="row" style="background:#efefef">
                                            <div class="col-xs-4">
                                                <select class="form-control input-sm" name="caracteristicas_segurado">
                                                    <option value="Ligeiro">Ligeiro</option>
                                                    <option value="Pesado">Pesado</option>
                                                    <option value="Particular">Particular</option>
                                                    <option value="Aluger"> Aluger</option>
                                                    <option value="Aluger">Duas Rodas</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Características</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <select class="form-control input-sm" name="caracteristicas_terceiro">
                                                    <option value="Ligeiro">Ligeiro</option>
                                                    <option value="Pesado">Pesado</option>
                                                    <option value="Particular">Particular</option>
                                                    <option value="Aluger"> Aluger</option>
                                                    <option value="Aluger">Duas Rodas</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" style="background:#fff">
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control input-text" id="cor_segurado"
                                                    name="cor_segurado" value="">
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Cor</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control input-text" id="cor_terceiro"
                                                    name="cor_terceiro" value="">
                                            </div>
                                        </div>
                                        <div class="row" style="background:#efefef">
                                            <div class="col-xs-4">
                                                <input style="background:#efefef" type="text"
                                                    class="form-control input-text" id="titular_registo_segurado"
                                                    name="titular_registo_segurado" value="">
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Titular do registo de propriedade</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <input style="background:#efefef" type="text"
                                                    class="form-control input-text" id="titular_registo_terceiro"
                                                    name="titular_registo_terceiro" value="">
                                            </div>
                                        </div>
                                        <div class="row" style="background:#fff">
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control input-text"
                                                    id="existiam_danos_segurado" name="existiam_danos_segurado"
                                                    value="">
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Existiam danos anteriores?Quais?</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control input-text"
                                                    id="existiam_danos_terceiro" name="existiam_danos_terceiro"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="row" style="background:#efefef">
                                            <div class="col-xs-4">
                                                <select class="form-control input-sm" id="pode_circular_segurado"
                                                    name="pode_circular_segurado"
                                                    style="margin:0 auto;background:#efefef">
                                                    <option value="0">Não</option>
                                                    <option value="1">Sim</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Pode circular?</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <select class="form-control input-sm" id="pode_circular_terceiro"
                                                    name="pode_circular_terceiro"
                                                    style="margin:0 auto;background:#efefef">
                                                    <option value="0">Não</option>
                                                    <option value="1">Sim</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <select class="form-control input-sm" id="rebocava_segurado"
                                                    name="rebocava_segurado" style="margin:0 auto;background:#efefef">
                                                    <option value="0">Não</option>
                                                    <option value="1">Sim</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Rebocava atrelado?</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <select class="form-control input-sm" id="rebocava_terceiro"
                                                    name="rebocava_terceiro" style="margin:0 auto;background:#efefef">
                                                    <option value="0">Não</option>
                                                    <option value="1">Sim</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" style="background:#efefef">
                                            <div class="col-xs-4">
                                                <input style="background:#efefef" type="text"
                                                    class="form-control input-text" id="oficina_reparadora_segurado"
                                                    name="oficina_reparadora_segurado" value="">
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Oficina reparadora</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <input style="background:#efefef" type="text"
                                                    class="form-control input-text" id="oficina_reparadora_terceiro"
                                                    name="oficina_reparadora_terceiro" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control input-text"
                                                    id="endereco_telefone_segurado" name="endereco_telefone_segurado"
                                                    value="">
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Endereço e telefone</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control input-text"
                                                    id="endereco_telefone_terceiro" name="endereco_telefone_terceiro"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="row" style="background:#efefef">
                                            <div class="col-xs-4">
                                                <input style="background:#efefef" type="text"
                                                    class="form-control input-text data picker__input"
                                                    id="data_peritagem_segurado" name="data_peritagem_segurado" value=""
                                                    readonly="" aria-haspopup="true" aria-expanded="false"
                                                    aria-readonly="false" aria-owns="data_peritagem_segurado_root">
                                                <div class="picker" id="data_peritagem_segurado_root"
                                                    aria-hidden="true">
                                                    <div class="picker__holder" tabindex="-1">
                                                        <div class="picker__frame">
                                                            <div class="picker__wrap">
                                                                <div class="picker__box">
                                                                    <div class="picker__header"><select
                                                                            class="picker__select--year" disabled=""
                                                                            aria-controls="data_peritagem_segurado_table"
                                                                            title="Select a year">
                                                                            <option value="1919">1919</option>
                                                                            <option value="1920">1920</option>
                                                                            <option value="1921">1921</option>
                                                                            <option value="1922">1922</option>
                                                                            <option value="1923">1923</option>
                                                                            <option value="1924">1924</option>
                                                                            <option value="1925">1925</option>
                                                                            <option value="1926">1926</option>
                                                                            <option value="1927">1927</option>
                                                                            <option value="1928">1928</option>
                                                                            <option value="1929">1929</option>
                                                                            <option value="1930">1930</option>
                                                                            <option value="1931">1931</option>
                                                                            <option value="1932">1932</option>
                                                                            <option value="1933">1933</option>
                                                                            <option value="1934">1934</option>
                                                                            <option value="1935">1935</option>
                                                                            <option value="1936">1936</option>
                                                                            <option value="1937">1937</option>
                                                                            <option value="1938">1938</option>
                                                                            <option value="1939">1939</option>
                                                                            <option value="1940">1940</option>
                                                                            <option value="1941">1941</option>
                                                                            <option value="1942">1942</option>
                                                                            <option value="1943">1943</option>
                                                                            <option value="1944">1944</option>
                                                                            <option value="1945">1945</option>
                                                                            <option value="1946">1946</option>
                                                                            <option value="1947">1947</option>
                                                                            <option value="1948">1948</option>
                                                                            <option value="1949">1949</option>
                                                                            <option value="1950">1950</option>
                                                                            <option value="1951">1951</option>
                                                                            <option value="1952">1952</option>
                                                                            <option value="1953">1953</option>
                                                                            <option value="1954">1954</option>
                                                                            <option value="1955">1955</option>
                                                                            <option value="1956">1956</option>
                                                                            <option value="1957">1957</option>
                                                                            <option value="1958">1958</option>
                                                                            <option value="1959">1959</option>
                                                                            <option value="1960">1960</option>
                                                                            <option value="1961">1961</option>
                                                                            <option value="1962">1962</option>
                                                                            <option value="1963">1963</option>
                                                                            <option value="1964">1964</option>
                                                                            <option value="1965">1965</option>
                                                                            <option value="1966">1966</option>
                                                                            <option value="1967">1967</option>
                                                                            <option value="1968">1968</option>
                                                                            <option value="1969">1969</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019" selected="">2019
                                                                            </option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                            <option value="2025">2025</option>
                                                                            <option value="2026">2026</option>
                                                                            <option value="2027">2027</option>
                                                                            <option value="2028">2028</option>
                                                                            <option value="2029">2029</option>
                                                                            <option value="2030">2030</option>
                                                                            <option value="2031">2031</option>
                                                                            <option value="2032">2032</option>
                                                                            <option value="2033">2033</option>
                                                                            <option value="2034">2034</option>
                                                                            <option value="2035">2035</option>
                                                                            <option value="2036">2036</option>
                                                                            <option value="2037">2037</option>
                                                                            <option value="2038">2038</option>
                                                                            <option value="2039">2039</option>
                                                                            <option value="2040">2040</option>
                                                                            <option value="2041">2041</option>
                                                                            <option value="2042">2042</option>
                                                                            <option value="2043">2043</option>
                                                                            <option value="2044">2044</option>
                                                                            <option value="2045">2045</option>
                                                                            <option value="2046">2046</option>
                                                                            <option value="2047">2047</option>
                                                                            <option value="2048">2048</option>
                                                                            <option value="2049">2049</option>
                                                                            <option value="2050">2050</option>
                                                                            <option value="2051">2051</option>
                                                                            <option value="2052">2052</option>
                                                                            <option value="2053">2053</option>
                                                                            <option value="2054">2054</option>
                                                                            <option value="2055">2055</option>
                                                                            <option value="2056">2056</option>
                                                                            <option value="2057">2057</option>
                                                                            <option value="2058">2058</option>
                                                                            <option value="2059">2059</option>
                                                                            <option value="2060">2060</option>
                                                                            <option value="2061">2061</option>
                                                                            <option value="2062">2062</option>
                                                                            <option value="2063">2063</option>
                                                                            <option value="2064">2064</option>
                                                                            <option value="2065">2065</option>
                                                                            <option value="2066">2066</option>
                                                                            <option value="2067">2067</option>
                                                                            <option value="2068">2068</option>
                                                                            <option value="2069">2069</option>
                                                                            <option value="2070">2070</option>
                                                                            <option value="2071">2071</option>
                                                                            <option value="2072">2072</option>
                                                                            <option value="2073">2073</option>
                                                                            <option value="2074">2074</option>
                                                                            <option value="2075">2075</option>
                                                                            <option value="2076">2076</option>
                                                                            <option value="2077">2077</option>
                                                                            <option value="2078">2078</option>
                                                                            <option value="2079">2079</option>
                                                                            <option value="2080">2080</option>
                                                                            <option value="2081">2081</option>
                                                                            <option value="2082">2082</option>
                                                                            <option value="2083">2083</option>
                                                                            <option value="2084">2084</option>
                                                                            <option value="2085">2085</option>
                                                                            <option value="2086">2086</option>
                                                                            <option value="2087">2087</option>
                                                                            <option value="2088">2088</option>
                                                                            <option value="2089">2089</option>
                                                                            <option value="2090">2090</option>
                                                                            <option value="2091">2091</option>
                                                                            <option value="2092">2092</option>
                                                                            <option value="2093">2093</option>
                                                                            <option value="2094">2094</option>
                                                                            <option value="2095">2095</option>
                                                                            <option value="2096">2096</option>
                                                                            <option value="2097">2097</option>
                                                                            <option value="2098">2098</option>
                                                                            <option value="2099">2099</option>
                                                                            <option value="2100">2100</option>
                                                                            <option value="2101">2101</option>
                                                                            <option value="2102">2102</option>
                                                                            <option value="2103">2103</option>
                                                                            <option value="2104">2104</option>
                                                                            <option value="2105">2105</option>
                                                                            <option value="2106">2106</option>
                                                                            <option value="2107">2107</option>
                                                                            <option value="2108">2108</option>
                                                                            <option value="2109">2109</option>
                                                                            <option value="2110">2110</option>
                                                                            <option value="2111">2111</option>
                                                                            <option value="2112">2112</option>
                                                                            <option value="2113">2113</option>
                                                                            <option value="2114">2114</option>
                                                                            <option value="2115">2115</option>
                                                                            <option value="2116">2116</option>
                                                                            <option value="2117">2117</option>
                                                                            <option value="2118">2118</option>
                                                                            <option value="2119">2119</option>
                                                                        </select><select class="picker__select--month"
                                                                            disabled=""
                                                                            aria-controls="data_peritagem_segurado_table"
                                                                            title="Select a month">
                                                                            <option value="0">Jan</option>
                                                                            <option value="1">Fev</option>
                                                                            <option value="2">Mar</option>
                                                                            <option value="3">Abr</option>
                                                                            <option value="4">Mai</option>
                                                                            <option value="5">Jun</option>
                                                                            <option value="6">Jul</option>
                                                                            <option value="7" selected="">Ago</option>
                                                                            <option value="8">Set</option>
                                                                            <option value="9">Out</option>
                                                                            <option value="10">Nov</option>
                                                                            <option value="11">Dez</option>
                                                                        </select>
                                                                        <div class="picker__nav--prev" data-nav="-1"
                                                                            role="button"
                                                                            aria-controls="data_peritagem_segurado_table"
                                                                            title="Previous month"> </div>
                                                                        <div class="picker__nav--next" data-nav="1"
                                                                            role="button"
                                                                            aria-controls="data_peritagem_segurado_table"
                                                                            title="Next month"> </div>
                                                                    </div>
                                                                    <table class="picker__table"
                                                                        id="data_peritagem_segurado_table" role="grid"
                                                                        aria-controls="data_peritagem_segurado"
                                                                        aria-readonly="true">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Sunday">Dom</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Monday">Seg</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Tuesday">Ter</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Wednesday">Qua</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Thursday">Qui</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Friday">Sex</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Saturday">Sab</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564264800000"
                                                                                        role="gridcell"
                                                                                        aria-label="28-07-2019">28</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564351200000"
                                                                                        role="gridcell"
                                                                                        aria-label="29-07-2019">29</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564437600000"
                                                                                        role="gridcell"
                                                                                        aria-label="30-07-2019">30</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564524000000"
                                                                                        role="gridcell"
                                                                                        aria-label="31-07-2019">31</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564610400000"
                                                                                        role="gridcell"
                                                                                        aria-label="01-08-2019">1</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564696800000"
                                                                                        role="gridcell"
                                                                                        aria-label="02-08-2019">2</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564783200000"
                                                                                        role="gridcell"
                                                                                        aria-label="03-08-2019">3</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564869600000"
                                                                                        role="gridcell"
                                                                                        aria-label="04-08-2019">4</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564956000000"
                                                                                        role="gridcell"
                                                                                        aria-label="05-08-2019">5</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565042400000"
                                                                                        role="gridcell"
                                                                                        aria-label="06-08-2019">6</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted"
                                                                                        data-pick="1565128800000"
                                                                                        role="gridcell"
                                                                                        aria-label="07-08-2019"
                                                                                        aria-activedescendant="true">7
                                                                                    </div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565215200000"
                                                                                        role="gridcell"
                                                                                        aria-label="08-08-2019">8</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565301600000"
                                                                                        role="gridcell"
                                                                                        aria-label="09-08-2019">9</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565388000000"
                                                                                        role="gridcell"
                                                                                        aria-label="10-08-2019">10</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565474400000"
                                                                                        role="gridcell"
                                                                                        aria-label="11-08-2019">11</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565560800000"
                                                                                        role="gridcell"
                                                                                        aria-label="12-08-2019">12</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565647200000"
                                                                                        role="gridcell"
                                                                                        aria-label="13-08-2019">13</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565733600000"
                                                                                        role="gridcell"
                                                                                        aria-label="14-08-2019">14</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565820000000"
                                                                                        role="gridcell"
                                                                                        aria-label="15-08-2019">15</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565906400000"
                                                                                        role="gridcell"
                                                                                        aria-label="16-08-2019">16</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565992800000"
                                                                                        role="gridcell"
                                                                                        aria-label="17-08-2019">17</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566079200000"
                                                                                        role="gridcell"
                                                                                        aria-label="18-08-2019">18</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566165600000"
                                                                                        role="gridcell"
                                                                                        aria-label="19-08-2019">19</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566252000000"
                                                                                        role="gridcell"
                                                                                        aria-label="20-08-2019">20</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566338400000"
                                                                                        role="gridcell"
                                                                                        aria-label="21-08-2019">21</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566424800000"
                                                                                        role="gridcell"
                                                                                        aria-label="22-08-2019">22</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566511200000"
                                                                                        role="gridcell"
                                                                                        aria-label="23-08-2019">23</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566597600000"
                                                                                        role="gridcell"
                                                                                        aria-label="24-08-2019">24</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566684000000"
                                                                                        role="gridcell"
                                                                                        aria-label="25-08-2019">25</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566770400000"
                                                                                        role="gridcell"
                                                                                        aria-label="26-08-2019">26</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566856800000"
                                                                                        role="gridcell"
                                                                                        aria-label="27-08-2019">27</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566943200000"
                                                                                        role="gridcell"
                                                                                        aria-label="28-08-2019">28</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567029600000"
                                                                                        role="gridcell"
                                                                                        aria-label="29-08-2019">29</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567116000000"
                                                                                        role="gridcell"
                                                                                        aria-label="30-08-2019">30</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567202400000"
                                                                                        role="gridcell"
                                                                                        aria-label="31-08-2019">31</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567288800000"
                                                                                        role="gridcell"
                                                                                        aria-label="01-09-2019">1</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567375200000"
                                                                                        role="gridcell"
                                                                                        aria-label="02-09-2019">2</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567461600000"
                                                                                        role="gridcell"
                                                                                        aria-label="03-09-2019">3</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567548000000"
                                                                                        role="gridcell"
                                                                                        aria-label="04-09-2019">4</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567634400000"
                                                                                        role="gridcell"
                                                                                        aria-label="05-09-2019">5</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567720800000"
                                                                                        role="gridcell"
                                                                                        aria-label="06-09-2019">6</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567807200000"
                                                                                        role="gridcell"
                                                                                        aria-label="07-09-2019">7</div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="picker__footer"><button
                                                                            class="picker__button--today" type="button"
                                                                            data-pick="1565128800000" disabled=""
                                                                            aria-controls="data_peritagem_segurado">Hoje</button><button
                                                                            class="picker__button--clear" type="button"
                                                                            data-clear="1" disabled=""
                                                                            aria-controls="data_peritagem_segurado">Limpar</button><button
                                                                            class="picker__button--close" type="button"
                                                                            data-close="true" disabled=""
                                                                            aria-controls="data_peritagem_segurado">Cancelar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-4" style="text-align:center">
                                                <label>Data da peritagem</label>
                                            </div>
                                            <div class="col-xs-4">
                                                <input style="background:#efefef" type="text"
                                                    class="form-control input-text data picker__input"
                                                    id="data_peritagem_terceiro" name="data_peritagem_terceiro" value=""
                                                    readonly="" aria-haspopup="true" aria-expanded="false"
                                                    aria-readonly="false" aria-owns="data_peritagem_terceiro_root">
                                                <div class="picker" id="data_peritagem_terceiro_root"
                                                    aria-hidden="true">
                                                    <div class="picker__holder" tabindex="-1">
                                                        <div class="picker__frame">
                                                            <div class="picker__wrap">
                                                                <div class="picker__box">
                                                                    <div class="picker__header"><select
                                                                            class="picker__select--year" disabled=""
                                                                            aria-controls="data_peritagem_terceiro_table"
                                                                            title="Select a year">
                                                                            <option value="1919">1919</option>
                                                                            <option value="1920">1920</option>
                                                                            <option value="1921">1921</option>
                                                                            <option value="1922">1922</option>
                                                                            <option value="1923">1923</option>
                                                                            <option value="1924">1924</option>
                                                                            <option value="1925">1925</option>
                                                                            <option value="1926">1926</option>
                                                                            <option value="1927">1927</option>
                                                                            <option value="1928">1928</option>
                                                                            <option value="1929">1929</option>
                                                                            <option value="1930">1930</option>
                                                                            <option value="1931">1931</option>
                                                                            <option value="1932">1932</option>
                                                                            <option value="1933">1933</option>
                                                                            <option value="1934">1934</option>
                                                                            <option value="1935">1935</option>
                                                                            <option value="1936">1936</option>
                                                                            <option value="1937">1937</option>
                                                                            <option value="1938">1938</option>
                                                                            <option value="1939">1939</option>
                                                                            <option value="1940">1940</option>
                                                                            <option value="1941">1941</option>
                                                                            <option value="1942">1942</option>
                                                                            <option value="1943">1943</option>
                                                                            <option value="1944">1944</option>
                                                                            <option value="1945">1945</option>
                                                                            <option value="1946">1946</option>
                                                                            <option value="1947">1947</option>
                                                                            <option value="1948">1948</option>
                                                                            <option value="1949">1949</option>
                                                                            <option value="1950">1950</option>
                                                                            <option value="1951">1951</option>
                                                                            <option value="1952">1952</option>
                                                                            <option value="1953">1953</option>
                                                                            <option value="1954">1954</option>
                                                                            <option value="1955">1955</option>
                                                                            <option value="1956">1956</option>
                                                                            <option value="1957">1957</option>
                                                                            <option value="1958">1958</option>
                                                                            <option value="1959">1959</option>
                                                                            <option value="1960">1960</option>
                                                                            <option value="1961">1961</option>
                                                                            <option value="1962">1962</option>
                                                                            <option value="1963">1963</option>
                                                                            <option value="1964">1964</option>
                                                                            <option value="1965">1965</option>
                                                                            <option value="1966">1966</option>
                                                                            <option value="1967">1967</option>
                                                                            <option value="1968">1968</option>
                                                                            <option value="1969">1969</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019" selected="">2019
                                                                            </option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                            <option value="2025">2025</option>
                                                                            <option value="2026">2026</option>
                                                                            <option value="2027">2027</option>
                                                                            <option value="2028">2028</option>
                                                                            <option value="2029">2029</option>
                                                                            <option value="2030">2030</option>
                                                                            <option value="2031">2031</option>
                                                                            <option value="2032">2032</option>
                                                                            <option value="2033">2033</option>
                                                                            <option value="2034">2034</option>
                                                                            <option value="2035">2035</option>
                                                                            <option value="2036">2036</option>
                                                                            <option value="2037">2037</option>
                                                                            <option value="2038">2038</option>
                                                                            <option value="2039">2039</option>
                                                                            <option value="2040">2040</option>
                                                                            <option value="2041">2041</option>
                                                                            <option value="2042">2042</option>
                                                                            <option value="2043">2043</option>
                                                                            <option value="2044">2044</option>
                                                                            <option value="2045">2045</option>
                                                                            <option value="2046">2046</option>
                                                                            <option value="2047">2047</option>
                                                                            <option value="2048">2048</option>
                                                                            <option value="2049">2049</option>
                                                                            <option value="2050">2050</option>
                                                                            <option value="2051">2051</option>
                                                                            <option value="2052">2052</option>
                                                                            <option value="2053">2053</option>
                                                                            <option value="2054">2054</option>
                                                                            <option value="2055">2055</option>
                                                                            <option value="2056">2056</option>
                                                                            <option value="2057">2057</option>
                                                                            <option value="2058">2058</option>
                                                                            <option value="2059">2059</option>
                                                                            <option value="2060">2060</option>
                                                                            <option value="2061">2061</option>
                                                                            <option value="2062">2062</option>
                                                                            <option value="2063">2063</option>
                                                                            <option value="2064">2064</option>
                                                                            <option value="2065">2065</option>
                                                                            <option value="2066">2066</option>
                                                                            <option value="2067">2067</option>
                                                                            <option value="2068">2068</option>
                                                                            <option value="2069">2069</option>
                                                                            <option value="2070">2070</option>
                                                                            <option value="2071">2071</option>
                                                                            <option value="2072">2072</option>
                                                                            <option value="2073">2073</option>
                                                                            <option value="2074">2074</option>
                                                                            <option value="2075">2075</option>
                                                                            <option value="2076">2076</option>
                                                                            <option value="2077">2077</option>
                                                                            <option value="2078">2078</option>
                                                                            <option value="2079">2079</option>
                                                                            <option value="2080">2080</option>
                                                                            <option value="2081">2081</option>
                                                                            <option value="2082">2082</option>
                                                                            <option value="2083">2083</option>
                                                                            <option value="2084">2084</option>
                                                                            <option value="2085">2085</option>
                                                                            <option value="2086">2086</option>
                                                                            <option value="2087">2087</option>
                                                                            <option value="2088">2088</option>
                                                                            <option value="2089">2089</option>
                                                                            <option value="2090">2090</option>
                                                                            <option value="2091">2091</option>
                                                                            <option value="2092">2092</option>
                                                                            <option value="2093">2093</option>
                                                                            <option value="2094">2094</option>
                                                                            <option value="2095">2095</option>
                                                                            <option value="2096">2096</option>
                                                                            <option value="2097">2097</option>
                                                                            <option value="2098">2098</option>
                                                                            <option value="2099">2099</option>
                                                                            <option value="2100">2100</option>
                                                                            <option value="2101">2101</option>
                                                                            <option value="2102">2102</option>
                                                                            <option value="2103">2103</option>
                                                                            <option value="2104">2104</option>
                                                                            <option value="2105">2105</option>
                                                                            <option value="2106">2106</option>
                                                                            <option value="2107">2107</option>
                                                                            <option value="2108">2108</option>
                                                                            <option value="2109">2109</option>
                                                                            <option value="2110">2110</option>
                                                                            <option value="2111">2111</option>
                                                                            <option value="2112">2112</option>
                                                                            <option value="2113">2113</option>
                                                                            <option value="2114">2114</option>
                                                                            <option value="2115">2115</option>
                                                                            <option value="2116">2116</option>
                                                                            <option value="2117">2117</option>
                                                                            <option value="2118">2118</option>
                                                                            <option value="2119">2119</option>
                                                                        </select><select class="picker__select--month"
                                                                            disabled=""
                                                                            aria-controls="data_peritagem_terceiro_table"
                                                                            title="Select a month">
                                                                            <option value="0">Jan</option>
                                                                            <option value="1">Fev</option>
                                                                            <option value="2">Mar</option>
                                                                            <option value="3">Abr</option>
                                                                            <option value="4">Mai</option>
                                                                            <option value="5">Jun</option>
                                                                            <option value="6">Jul</option>
                                                                            <option value="7" selected="">Ago</option>
                                                                            <option value="8">Set</option>
                                                                            <option value="9">Out</option>
                                                                            <option value="10">Nov</option>
                                                                            <option value="11">Dez</option>
                                                                        </select>
                                                                        <div class="picker__nav--prev" data-nav="-1"
                                                                            role="button"
                                                                            aria-controls="data_peritagem_terceiro_table"
                                                                            title="Previous month"> </div>
                                                                        <div class="picker__nav--next" data-nav="1"
                                                                            role="button"
                                                                            aria-controls="data_peritagem_terceiro_table"
                                                                            title="Next month"> </div>
                                                                    </div>
                                                                    <table class="picker__table"
                                                                        id="data_peritagem_terceiro_table" role="grid"
                                                                        aria-controls="data_peritagem_terceiro"
                                                                        aria-readonly="true">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Sunday">Dom</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Monday">Seg</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Tuesday">Ter</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Wednesday">Qua</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Thursday">Qui</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Friday">Sex</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Saturday">Sab</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564264800000"
                                                                                        role="gridcell"
                                                                                        aria-label="28-07-2019">28</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564351200000"
                                                                                        role="gridcell"
                                                                                        aria-label="29-07-2019">29</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564437600000"
                                                                                        role="gridcell"
                                                                                        aria-label="30-07-2019">30</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564524000000"
                                                                                        role="gridcell"
                                                                                        aria-label="31-07-2019">31</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564610400000"
                                                                                        role="gridcell"
                                                                                        aria-label="01-08-2019">1</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564696800000"
                                                                                        role="gridcell"
                                                                                        aria-label="02-08-2019">2</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564783200000"
                                                                                        role="gridcell"
                                                                                        aria-label="03-08-2019">3</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564869600000"
                                                                                        role="gridcell"
                                                                                        aria-label="04-08-2019">4</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564956000000"
                                                                                        role="gridcell"
                                                                                        aria-label="05-08-2019">5</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565042400000"
                                                                                        role="gridcell"
                                                                                        aria-label="06-08-2019">6</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted"
                                                                                        data-pick="1565128800000"
                                                                                        role="gridcell"
                                                                                        aria-label="07-08-2019"
                                                                                        aria-activedescendant="true">7
                                                                                    </div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565215200000"
                                                                                        role="gridcell"
                                                                                        aria-label="08-08-2019">8</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565301600000"
                                                                                        role="gridcell"
                                                                                        aria-label="09-08-2019">9</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565388000000"
                                                                                        role="gridcell"
                                                                                        aria-label="10-08-2019">10</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565474400000"
                                                                                        role="gridcell"
                                                                                        aria-label="11-08-2019">11</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565560800000"
                                                                                        role="gridcell"
                                                                                        aria-label="12-08-2019">12</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565647200000"
                                                                                        role="gridcell"
                                                                                        aria-label="13-08-2019">13</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565733600000"
                                                                                        role="gridcell"
                                                                                        aria-label="14-08-2019">14</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565820000000"
                                                                                        role="gridcell"
                                                                                        aria-label="15-08-2019">15</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565906400000"
                                                                                        role="gridcell"
                                                                                        aria-label="16-08-2019">16</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565992800000"
                                                                                        role="gridcell"
                                                                                        aria-label="17-08-2019">17</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566079200000"
                                                                                        role="gridcell"
                                                                                        aria-label="18-08-2019">18</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566165600000"
                                                                                        role="gridcell"
                                                                                        aria-label="19-08-2019">19</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566252000000"
                                                                                        role="gridcell"
                                                                                        aria-label="20-08-2019">20</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566338400000"
                                                                                        role="gridcell"
                                                                                        aria-label="21-08-2019">21</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566424800000"
                                                                                        role="gridcell"
                                                                                        aria-label="22-08-2019">22</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566511200000"
                                                                                        role="gridcell"
                                                                                        aria-label="23-08-2019">23</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566597600000"
                                                                                        role="gridcell"
                                                                                        aria-label="24-08-2019">24</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566684000000"
                                                                                        role="gridcell"
                                                                                        aria-label="25-08-2019">25</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566770400000"
                                                                                        role="gridcell"
                                                                                        aria-label="26-08-2019">26</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566856800000"
                                                                                        role="gridcell"
                                                                                        aria-label="27-08-2019">27</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566943200000"
                                                                                        role="gridcell"
                                                                                        aria-label="28-08-2019">28</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567029600000"
                                                                                        role="gridcell"
                                                                                        aria-label="29-08-2019">29</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567116000000"
                                                                                        role="gridcell"
                                                                                        aria-label="30-08-2019">30</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567202400000"
                                                                                        role="gridcell"
                                                                                        aria-label="31-08-2019">31</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567288800000"
                                                                                        role="gridcell"
                                                                                        aria-label="01-09-2019">1</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567375200000"
                                                                                        role="gridcell"
                                                                                        aria-label="02-09-2019">2</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567461600000"
                                                                                        role="gridcell"
                                                                                        aria-label="03-09-2019">3</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567548000000"
                                                                                        role="gridcell"
                                                                                        aria-label="04-09-2019">4</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567634400000"
                                                                                        role="gridcell"
                                                                                        aria-label="05-09-2019">5</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567720800000"
                                                                                        role="gridcell"
                                                                                        aria-label="06-09-2019">6</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567807200000"
                                                                                        role="gridcell"
                                                                                        aria-label="07-09-2019">7</div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="picker__footer"><button
                                                                            class="picker__button--today" type="button"
                                                                            data-pick="1565128800000" disabled=""
                                                                            aria-controls="data_peritagem_terceiro">Hoje</button><button
                                                                            class="picker__button--clear" type="button"
                                                                            data-clear="1" disabled=""
                                                                            aria-controls="data_peritagem_terceiro">Limpar</button><button
                                                                            class="picker__button--close" type="button"
                                                                            data-close="true" disabled=""
                                                                            aria-controls="data_peritagem_terceiro">Cancelar</button>
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
                                <div class="row">
                                    <div class="col-xs-12" style="border-right:2px solid #DDD">
                                        <div class="form-group title-section">
                                            <label>6. Outros danos materíais além dos causados aos veículos A e
                                                B</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="nome_morada_proprietarios" class="col-xs-3 control-label">Nome e
                                                morada dos
                                                proprietários</label>
                                            <div class="col-xs-9">
                                                <input type="text" class="form-control input-text"
                                                    id="nome_morada_proprietarios" name="nome_morada_proprietarios"
                                                    value="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="natureza_danos" class="col-xs-2 control-label">Natureza dos
                                                danos</label>
                                            <div class="col-xs-10">
                                                <input type="text" class="form-control input-text" id="natureza_danos"
                                                    name="natureza_danos" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="feridos">
                                    <div class="row">
                                        <div class="col-xs-12" style="border-right:2px solid #DDD">
                                            <div class="form-group title-section">
                                                <label>7. Feridos</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <label>Nome </label>
                                        </div>
                                        <div class="col-xs-5"
                                            style="border-left:4px solid #ddd;border-right:4px solid #ddd;">
                                            <input type="text" class="form-control input-text" id="nome_feridos_1"
                                                name="nome_feridos_1" value="">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control input-text" id="nome_feridos_2"
                                                name="nome_feridos_2" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <label>Morada</label>
                                        </div>
                                        <div class="col-xs-5"
                                            style="border-left:4px solid #ddd;border-right:4px solid #ddd;">
                                            <input type="text" class="form-control input-text" id="morada_feridos_1"
                                                name="morada_feridos_1" value="">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control input-text" id="morada_feridos_2"
                                                name="morada_feridos_2" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <label>Profissão e idade</label>
                                        </div>
                                        <div class="col-xs-5"
                                            style="border-left:4px solid #ddd;border-right:4px solid #ddd;">
                                            <input type="text" class="form-control input-text" id="profissao_idade_1"
                                                name="profissao_idade_1" value="">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control input-text" id="profissao_idade_2"
                                                name="profissao_idade_2" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <label>Lesões sofridas</label>
                                        </div>
                                        <div class="col-xs-5"
                                            style="border-left:4px solid #ddd;border-right:4px solid #ddd;">
                                            <input type="text" class="form-control input-text" id="lesoes_sofridas_1"
                                                name="lesoes_sofridas_1" value="">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control input-text" id="lesoes_sofridas_2"
                                                name="lesoes_sofridas_2" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <label>Primeiros socorros</label>
                                        </div>
                                        <div class="col-xs-5"
                                            style="border-left:4px solid #ddd;border-right:4px solid #ddd;">
                                            <input type="text" class="form-control input-text" id="primeiros_socorros_1"
                                                name="primeiros_socorros_1" value="">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control input-text" id="primeiros_socorros_2"
                                                name="primeiros_socorros_2" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <label>Hospitalizado em</label>
                                        </div>
                                        <div class="col-xs-5"
                                            style="border-left:4px solid #ddd;border-right:4px solid #ddd;">
                                            <input type="text" class="form-control input-text" id="hospitalizado_em_1"
                                                name="hospitalizado_em_1" value="">
                                        </div>
                                        <div class="col-xs-5">
                                            <input type="text" class="form-control input-text" id="hospitalizado_em_2"
                                                name="hospitalizado_em_2" value="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-2">
                                            <label>Indique se era:</label>
                                        </div>
                                        <div class="col-xs-5"
                                            style="border-left:4px solid #ddd;border-right:4px solid #ddd;">
                                            <select class="form-control input-sm" name="indique_se_era_1">
                                                <option value="peao">Peão</option>
                                                <option value="ocupante_veiculo_a">Ocupante do veículo A</option>
                                                <option value="ocupante_veiculo_b">Ocupante do veículo B</option>
                                            </select>
                                        </div>
                                        <div class="col-xs-5">
                                            <select class="form-control input-sm" name="indique_se_era_2">
                                                <option value="peao">Peão</option>
                                                <option value="ocupante_veiculo_a">Ocupante do veículo A</option>
                                                <option value="ocupante_veiculo_b">Ocupante do veículo B</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-xs-12" style="border-right:2px solid #DDD">
                                        <div class="form-group title-section">
                                        </div>
                                        <div class="form-group">
                                            <label for="nome_morada_proprietarios" class="col-xs-12 control-label">8. Exite alguma relação com o titular da apólice?</label>
                                            <div class="col-xs-3">
                                                <select class="form-control input-sm" name="condutor_outro_veiculo_e">
                                                    <option value="nao">Não</option>
                                                    <option value="sim">Sim</option>
                                                    
                                                </select>
                                            </div>
                                            <div class="col-xs-5" style="padding-left:5px;text-align:center">
                                                Se Sim, Indique qual?
                                            </div>
                                            <div class="col-xs-4" style="padding-left:5px">
                                                <input type="text" class="form-control input-text"
                                                    id="segurado_condutor_especifique"
                                                    name="segurado_condutor_especifique" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6" style="border-right:2px solid #fff">
                                        <div class="form-group title-section">
                                            <label>9. Local e data desta participac&#807;a&#771;o</label>
                                        </div>
                                        <div class="form-group">
                                            <label for="local_participacao" class="col-xs-2 control-label">Local</label>
                                            <div class="col-xs-4">
                                                <input type="text" class="form-control input-text required"
                                                    id="local_participacao" name="local_participacao" value="">
                                            </div>
                                            <label for="nome_segurado" class="col-xs-3 control-label"
                                                style="text-align:right">Data</label>
                                            <div class="col-xs-3">
                                                <input type="text"
                                                    class="form-control input-text required data picker__input"
                                                    style="background:white" id="dat" name="data_participacao" value=""
                                                    readonly="" aria-haspopup="true" aria-expanded="false"
                                                    aria-readonly="false" aria-owns="data_root">
                                                <div class="picker" id="data_root" aria-hidden="true">
                                                    <div class="picker__holder" tabindex="-1">
                                                        <div class="picker__frame">
                                                            <div class="picker__wrap">
                                                                <div class="picker__box">
                                                                    <div class="picker__header"><select
                                                                            class="picker__select--year" disabled=""
                                                                            aria-controls="data_table"
                                                                            title="Select a year">
                                                                            <option value="1919">1919</option>
                                                                            <option value="1920">1920</option>
                                                                            <option value="1921">1921</option>
                                                                            <option value="1922">1922</option>
                                                                            <option value="1923">1923</option>
                                                                            <option value="1924">1924</option>
                                                                            <option value="1925">1925</option>
                                                                            <option value="1926">1926</option>
                                                                            <option value="1927">1927</option>
                                                                            <option value="1928">1928</option>
                                                                            <option value="1929">1929</option>
                                                                            <option value="1930">1930</option>
                                                                            <option value="1931">1931</option>
                                                                            <option value="1932">1932</option>
                                                                            <option value="1933">1933</option>
                                                                            <option value="1934">1934</option>
                                                                            <option value="1935">1935</option>
                                                                            <option value="1936">1936</option>
                                                                            <option value="1937">1937</option>
                                                                            <option value="1938">1938</option>
                                                                            <option value="1939">1939</option>
                                                                            <option value="1940">1940</option>
                                                                            <option value="1941">1941</option>
                                                                            <option value="1942">1942</option>
                                                                            <option value="1943">1943</option>
                                                                            <option value="1944">1944</option>
                                                                            <option value="1945">1945</option>
                                                                            <option value="1946">1946</option>
                                                                            <option value="1947">1947</option>
                                                                            <option value="1948">1948</option>
                                                                            <option value="1949">1949</option>
                                                                            <option value="1950">1950</option>
                                                                            <option value="1951">1951</option>
                                                                            <option value="1952">1952</option>
                                                                            <option value="1953">1953</option>
                                                                            <option value="1954">1954</option>
                                                                            <option value="1955">1955</option>
                                                                            <option value="1956">1956</option>
                                                                            <option value="1957">1957</option>
                                                                            <option value="1958">1958</option>
                                                                            <option value="1959">1959</option>
                                                                            <option value="1960">1960</option>
                                                                            <option value="1961">1961</option>
                                                                            <option value="1962">1962</option>
                                                                            <option value="1963">1963</option>
                                                                            <option value="1964">1964</option>
                                                                            <option value="1965">1965</option>
                                                                            <option value="1966">1966</option>
                                                                            <option value="1967">1967</option>
                                                                            <option value="1968">1968</option>
                                                                            <option value="1969">1969</option>
                                                                            <option value="1970">1970</option>
                                                                            <option value="1971">1971</option>
                                                                            <option value="1972">1972</option>
                                                                            <option value="1973">1973</option>
                                                                            <option value="1974">1974</option>
                                                                            <option value="1975">1975</option>
                                                                            <option value="1976">1976</option>
                                                                            <option value="1977">1977</option>
                                                                            <option value="1978">1978</option>
                                                                            <option value="1979">1979</option>
                                                                            <option value="1980">1980</option>
                                                                            <option value="1981">1981</option>
                                                                            <option value="1982">1982</option>
                                                                            <option value="1983">1983</option>
                                                                            <option value="1984">1984</option>
                                                                            <option value="1985">1985</option>
                                                                            <option value="1986">1986</option>
                                                                            <option value="1987">1987</option>
                                                                            <option value="1988">1988</option>
                                                                            <option value="1989">1989</option>
                                                                            <option value="1990">1990</option>
                                                                            <option value="1991">1991</option>
                                                                            <option value="1992">1992</option>
                                                                            <option value="1993">1993</option>
                                                                            <option value="1994">1994</option>
                                                                            <option value="1995">1995</option>
                                                                            <option value="1996">1996</option>
                                                                            <option value="1997">1997</option>
                                                                            <option value="1998">1998</option>
                                                                            <option value="1999">1999</option>
                                                                            <option value="2000">2000</option>
                                                                            <option value="2001">2001</option>
                                                                            <option value="2002">2002</option>
                                                                            <option value="2003">2003</option>
                                                                            <option value="2004">2004</option>
                                                                            <option value="2005">2005</option>
                                                                            <option value="2006">2006</option>
                                                                            <option value="2007">2007</option>
                                                                            <option value="2008">2008</option>
                                                                            <option value="2009">2009</option>
                                                                            <option value="2010">2010</option>
                                                                            <option value="2011">2011</option>
                                                                            <option value="2012">2012</option>
                                                                            <option value="2013">2013</option>
                                                                            <option value="2014">2014</option>
                                                                            <option value="2015">2015</option>
                                                                            <option value="2016">2016</option>
                                                                            <option value="2017">2017</option>
                                                                            <option value="2018">2018</option>
                                                                            <option value="2019" selected="">2019
                                                                            </option>
                                                                            <option value="2020">2020</option>
                                                                            <option value="2021">2021</option>
                                                                            <option value="2022">2022</option>
                                                                            <option value="2023">2023</option>
                                                                            <option value="2024">2024</option>
                                                                            <option value="2025">2025</option>
                                                                            <option value="2026">2026</option>
                                                                            <option value="2027">2027</option>
                                                                            <option value="2028">2028</option>
                                                                            <option value="2029">2029</option>
                                                                            <option value="2030">2030</option>
                                                                            <option value="2031">2031</option>
                                                                            <option value="2032">2032</option>
                                                                            <option value="2033">2033</option>
                                                                            <option value="2034">2034</option>
                                                                            <option value="2035">2035</option>
                                                                            <option value="2036">2036</option>
                                                                            <option value="2037">2037</option>
                                                                            <option value="2038">2038</option>
                                                                            <option value="2039">2039</option>
                                                                            <option value="2040">2040</option>
                                                                            <option value="2041">2041</option>
                                                                            <option value="2042">2042</option>
                                                                            <option value="2043">2043</option>
                                                                            <option value="2044">2044</option>
                                                                            <option value="2045">2045</option>
                                                                            <option value="2046">2046</option>
                                                                            <option value="2047">2047</option>
                                                                            <option value="2048">2048</option>
                                                                            <option value="2049">2049</option>
                                                                            <option value="2050">2050</option>
                                                                            <option value="2051">2051</option>
                                                                            <option value="2052">2052</option>
                                                                            <option value="2053">2053</option>
                                                                            <option value="2054">2054</option>
                                                                            <option value="2055">2055</option>
                                                                            <option value="2056">2056</option>
                                                                            <option value="2057">2057</option>
                                                                            <option value="2058">2058</option>
                                                                            <option value="2059">2059</option>
                                                                            <option value="2060">2060</option>
                                                                            <option value="2061">2061</option>
                                                                            <option value="2062">2062</option>
                                                                            <option value="2063">2063</option>
                                                                            <option value="2064">2064</option>
                                                                            <option value="2065">2065</option>
                                                                            <option value="2066">2066</option>
                                                                            <option value="2067">2067</option>
                                                                            <option value="2068">2068</option>
                                                                            <option value="2069">2069</option>
                                                                            <option value="2070">2070</option>
                                                                            <option value="2071">2071</option>
                                                                            <option value="2072">2072</option>
                                                                            <option value="2073">2073</option>
                                                                            <option value="2074">2074</option>
                                                                            <option value="2075">2075</option>
                                                                            <option value="2076">2076</option>
                                                                            <option value="2077">2077</option>
                                                                            <option value="2078">2078</option>
                                                                            <option value="2079">2079</option>
                                                                            <option value="2080">2080</option>
                                                                            <option value="2081">2081</option>
                                                                            <option value="2082">2082</option>
                                                                            <option value="2083">2083</option>
                                                                            <option value="2084">2084</option>
                                                                            <option value="2085">2085</option>
                                                                            <option value="2086">2086</option>
                                                                            <option value="2087">2087</option>
                                                                            <option value="2088">2088</option>
                                                                            <option value="2089">2089</option>
                                                                            <option value="2090">2090</option>
                                                                            <option value="2091">2091</option>
                                                                            <option value="2092">2092</option>
                                                                            <option value="2093">2093</option>
                                                                            <option value="2094">2094</option>
                                                                            <option value="2095">2095</option>
                                                                            <option value="2096">2096</option>
                                                                            <option value="2097">2097</option>
                                                                            <option value="2098">2098</option>
                                                                            <option value="2099">2099</option>
                                                                            <option value="2100">2100</option>
                                                                            <option value="2101">2101</option>
                                                                            <option value="2102">2102</option>
                                                                            <option value="2103">2103</option>
                                                                            <option value="2104">2104</option>
                                                                            <option value="2105">2105</option>
                                                                            <option value="2106">2106</option>
                                                                            <option value="2107">2107</option>
                                                                            <option value="2108">2108</option>
                                                                            <option value="2109">2109</option>
                                                                            <option value="2110">2110</option>
                                                                            <option value="2111">2111</option>
                                                                            <option value="2112">2112</option>
                                                                            <option value="2113">2113</option>
                                                                            <option value="2114">2114</option>
                                                                            <option value="2115">2115</option>
                                                                            <option value="2116">2116</option>
                                                                            <option value="2117">2117</option>
                                                                            <option value="2118">2118</option>
                                                                            <option value="2119">2119</option>
                                                                        </select><select class="picker__select--month"
                                                                            disabled="" aria-controls="data_table"
                                                                            title="Select a month">
                                                                            <option value="0">Jan</option>
                                                                            <option value="1">Fev</option>
                                                                            <option value="2">Mar</option>
                                                                            <option value="3">Abr</option>
                                                                            <option value="4">Mai</option>
                                                                            <option value="5">Jun</option>
                                                                            <option value="6">Jul</option>
                                                                            <option value="7" selected="">Ago</option>
                                                                            <option value="8">Set</option>
                                                                            <option value="9">Out</option>
                                                                            <option value="10">Nov</option>
                                                                            <option value="11">Dez</option>
                                                                        </select>
                                                                        <div class="picker__nav--prev" data-nav="-1"
                                                                            role="button" aria-controls="data_table"
                                                                            title="Previous month"> </div>
                                                                        <div class="picker__nav--next" data-nav="1"
                                                                            role="button" aria-controls="data_table"
                                                                            title="Next month"> </div>
                                                                    </div>
                                                                    <table class="picker__table" id="data_table"
                                                                        role="grid" aria-controls="data"
                                                                        aria-readonly="true">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Sunday">Dom</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Monday">Seg</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Tuesday">Ter</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Wednesday">Qua</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Thursday">Qui</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Friday">Sex</th>
                                                                                <th class="picker__weekday" scope="col"
                                                                                    title="Saturday">Sab</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564264800000"
                                                                                        role="gridcell"
                                                                                        aria-label="28-07-2019">28</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564351200000"
                                                                                        role="gridcell"
                                                                                        aria-label="29-07-2019">29</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564437600000"
                                                                                        role="gridcell"
                                                                                        aria-label="30-07-2019">30</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1564524000000"
                                                                                        role="gridcell"
                                                                                        aria-label="31-07-2019">31</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564610400000"
                                                                                        role="gridcell"
                                                                                        aria-label="01-08-2019">1</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564696800000"
                                                                                        role="gridcell"
                                                                                        aria-label="02-08-2019">2</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564783200000"
                                                                                        role="gridcell"
                                                                                        aria-label="03-08-2019">3</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564869600000"
                                                                                        role="gridcell"
                                                                                        aria-label="04-08-2019">4</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1564956000000"
                                                                                        role="gridcell"
                                                                                        aria-label="05-08-2019">5</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565042400000"
                                                                                        role="gridcell"
                                                                                        aria-label="06-08-2019">6</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus picker__day--today picker__day--highlighted"
                                                                                        data-pick="1565128800000"
                                                                                        role="gridcell"
                                                                                        aria-label="07-08-2019"
                                                                                        aria-activedescendant="true">7
                                                                                    </div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565215200000"
                                                                                        role="gridcell"
                                                                                        aria-label="08-08-2019">8</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565301600000"
                                                                                        role="gridcell"
                                                                                        aria-label="09-08-2019">9</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565388000000"
                                                                                        role="gridcell"
                                                                                        aria-label="10-08-2019">10</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565474400000"
                                                                                        role="gridcell"
                                                                                        aria-label="11-08-2019">11</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565560800000"
                                                                                        role="gridcell"
                                                                                        aria-label="12-08-2019">12</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565647200000"
                                                                                        role="gridcell"
                                                                                        aria-label="13-08-2019">13</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565733600000"
                                                                                        role="gridcell"
                                                                                        aria-label="14-08-2019">14</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565820000000"
                                                                                        role="gridcell"
                                                                                        aria-label="15-08-2019">15</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565906400000"
                                                                                        role="gridcell"
                                                                                        aria-label="16-08-2019">16</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1565992800000"
                                                                                        role="gridcell"
                                                                                        aria-label="17-08-2019">17</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566079200000"
                                                                                        role="gridcell"
                                                                                        aria-label="18-08-2019">18</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566165600000"
                                                                                        role="gridcell"
                                                                                        aria-label="19-08-2019">19</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566252000000"
                                                                                        role="gridcell"
                                                                                        aria-label="20-08-2019">20</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566338400000"
                                                                                        role="gridcell"
                                                                                        aria-label="21-08-2019">21</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566424800000"
                                                                                        role="gridcell"
                                                                                        aria-label="22-08-2019">22</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566511200000"
                                                                                        role="gridcell"
                                                                                        aria-label="23-08-2019">23</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566597600000"
                                                                                        role="gridcell"
                                                                                        aria-label="24-08-2019">24</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566684000000"
                                                                                        role="gridcell"
                                                                                        aria-label="25-08-2019">25</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566770400000"
                                                                                        role="gridcell"
                                                                                        aria-label="26-08-2019">26</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566856800000"
                                                                                        role="gridcell"
                                                                                        aria-label="27-08-2019">27</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1566943200000"
                                                                                        role="gridcell"
                                                                                        aria-label="28-08-2019">28</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567029600000"
                                                                                        role="gridcell"
                                                                                        aria-label="29-08-2019">29</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567116000000"
                                                                                        role="gridcell"
                                                                                        aria-label="30-08-2019">30</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--infocus"
                                                                                        data-pick="1567202400000"
                                                                                        role="gridcell"
                                                                                        aria-label="31-08-2019">31</div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567288800000"
                                                                                        role="gridcell"
                                                                                        aria-label="01-09-2019">1</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567375200000"
                                                                                        role="gridcell"
                                                                                        aria-label="02-09-2019">2</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567461600000"
                                                                                        role="gridcell"
                                                                                        aria-label="03-09-2019">3</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567548000000"
                                                                                        role="gridcell"
                                                                                        aria-label="04-09-2019">4</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567634400000"
                                                                                        role="gridcell"
                                                                                        aria-label="05-09-2019">5</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567720800000"
                                                                                        role="gridcell"
                                                                                        aria-label="06-09-2019">6</div>
                                                                                </td>
                                                                                <td role="presentation">
                                                                                    <div class="picker__day picker__day--outfocus"
                                                                                        data-pick="1567807200000"
                                                                                        role="gridcell"
                                                                                        aria-label="07-09-2019">7</div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="picker__footer"><button
                                                                            class="picker__button--today" type="button"
                                                                            data-pick="1565128800000" disabled=""
                                                                            aria-controls="data">Hoje</button><button
                                                                            class="picker__button--clear" type="button"
                                                                            data-clear="1" disabled=""
                                                                            aria-controls="data">Limpar</button><button
                                                                            class="picker__button--close" type="button"
                                                                            data-close="true" disabled=""
                                                                            aria-controls="data">Cancelar</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-group title-section">
                                            <label>10. Assinatura do segurado</label>
                                        </div>
                                        <div class="col-xs-12">
                                            <input type="text" class="form-control input-text"
                                                id="" name="" value="">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div style="margin:10px auto">
                        <button class="btn btn-success" onclick="participate()">Participar Sinistro</button>
                    </div>
                </div>
            </div>
        </div>

        <link rel="stylesheet" href="../templates/indico-seguros/css/participacao_online/4-default-pickadate.css"
            type="text/css" media="screen" />
        <link rel="stylesheet" href="../templates/indico-seguros/css/participacao_online/4-default.date.css"
            type="text/css" media="screen" />
        <link rel="stylesheet" href="../templates/indico-seguros/css/participacao_online/4-default.time.css"
            type="text/css" media="screen" />
        <link rel="stylesheet" href="../templates/indico-seguros/css/participacao_online/bootstrap-timepicker.css"
            type="text/css" media="screen" />
        <link rel="stylesheet" href="../templates/indico-seguros/css/participacao_online/bootstrap.css"
            type="text/css" media="screen" />
        <link rel="stylesheet" href="../templates/indico-seguros/css/participacao_online/font-awesome.min.css">
        <link rel="stylesheet" href="../templates/indico-seguros/css/participacao_online/style-participacao.css"
            type="text/css" media="screen" />

        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/jquery-1.11.2.min.js"></script>

        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/bootstrap.min.js"></script>
        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/bootstrap-timepicker.js"></script>
        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/bootstrap-datepicker.js"></script>
        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/bootstrap-maxlength.js"></script>
        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/picker.js"></script>
        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/picker.date.js"></script>
        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/picker.time.js"></script>
        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/legacy.js"></script>
        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/car-brands.js"></script>

        <script type="text/javascript"
            src="../templates/indico-seguros/js/participacao_online/main_sinistro_auto.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.js"></script>
    </div>
   


</body>


</html>