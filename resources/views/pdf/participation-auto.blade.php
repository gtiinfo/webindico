<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Paticipar Sinistro Automóvel | ÍNDICO SEGUROS</title>
    <style type="text/css">

        .croqui_b{
            position: relative;
         }
        .croqui-container {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        
        .croqui-table-container {
            width: 100%;
            overflow-x: hidden;
        }
        
        .croqui_table {
            position: relative;
            z-index: 1111;
            /* background: url({{public_path('templates/indico-seguros/img/participacao_online/croquix165.png')}}); */
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        img {
            position: absolute;
            top: 0;
            max-width: 100%;
            height: auto;
            display: block;
            margin-top: 10px; 
        }
        .title{
            position: relative;
            display: flex;
            text-align: center;
            padding: 5px;
            color: #fff;
            background: #00aeef;
        }
        .d-flex{
            position: relative;
            display: flex;
        }
        .claim-table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        }

        .claim-table th,
        .claim-table td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        .claim-table th {
            background-color: #00aeef;
            color: #fff;
        }

        .claim-table td {
            border-bottom: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <div>
        <h4 class="title">Formulario de particição Automóvel - {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insuranceCompany']['policyNumber'] }}</h4>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="form-group">
                <p>Número de Veículos: {{ $dados['claimRequestReport']['numberOfVehicles'] }}</p>
            </div>
        </div>
    </div>
    <div class="row d-flex">
        <div class="col-xs-2">
            <p>1. Data do Acidente: {{ $dados['claimRequestReport']['dateOfAccident'] }}</p>
        </div>
        <div class="col-xs-2">
            <p>Hora do Acidente: {{ $dados['claimRequestReport']['hourOfAccident'] }}</p>
        </div>
        <div class="col-xs-2">
            <p>2. Local (Estrada/rua,localidade e distrito): {{ $dados['claimRequestReport']['placeOfAccident'] }}</p>
        </div>
    </div>
    <p>3. Feridos, mesmo ligeiros: {{ $dados['claimRequestReport']['anyHurt'] }}</p>
    <p>4. Danos materiais além dos causados aos veiculos A e B: {{ $dados['claimRequestReport']['anyMaterialDamageOtherThanTheCars'] }}</p>
    <p>5.Testemunhas nomes,morada e telefone.Indicar se são passageiros dos veiculos A ou B: {{ $dados['claimRequestReport']['witnesses'] }}</p>

    <h4 style="color: #00aeef">VEÍCULO A</h4>
    <h4>6. Dados do Segurado</h4>
    <ul>
        <li>Sobrenome: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insured']['surname'] }}</li>
        <li>Nomes: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insured']['names'] }}</li>
        <li>Endereço: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insured']['address'] }}</li>
        <li>Telefone: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insured']['phone'] }}</li>
        <li>Profissão: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insured']['profession'] }}</li>
        <li>Email: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insured']['email'] }}</li>
    </ul>

    <h4>7. Dados do Veículo</h4>
    <ul>
        <li>Marca do Veículo: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['vehicle']['make'] }}</li>
        <li>Modelo do Veículo: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['vehicle']['model'] }}</li>
        <li>Placa do Veículo: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['vehicle']['plate'] }}</li>
    </ul>

    <h4>8. Dados da Companhia de Seguros</h4>
    <ul>
        <li>Nome: 
            {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insuranceCompany']['name'] }}</li>
        <li>Número da Apólice:
            {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insuranceCompany']['policyNumber'] }}</li>
        <li>Filial:
            {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insuranceCompany']['branch'] }}</li>
        <li>Data de Validade:
            {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insuranceCompany']['expireDate'] }}</li>
        <li>Danos Cobertos:
            {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['insuranceCompany']['areDamagesInsured'] }}</li>
    </ul>

    <h2>9. Dados do Condutor</h2>
    <ul>
        <li>Sobrenome do Condutor: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['surname'] }}</li>
        <li>Nomes do Condutor: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['firstName'] }}</li>
        <li>Endereço do Condutor: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['address'] }}</li>
        <li>Idade do Condutor: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['age'] }}</p></li>
        <li>Categoria da Carteira: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['category'] }}</li>
        <li>Número da Carteira de Motorista: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['driversLicense'] }}</li>
        <li>Email do Condutor: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['email'] }}</li>
        <li>Validade da Carteira: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['expiresIn'] }}</li>
        <li>É o Condutor Habitual do Veículo: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['isUsualTheCarDriver'] }}</li>
        <li>Órgão Emissor da Carteira: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['issuedBy'] }}</li>
        <li>Local de Emissão da Carteira: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['issuedIn'] }}</li>
        <li>Telefone do Condutor: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['phone'] }}</li>
        <li>Profissão do Condutor:
            {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['driverRequest']['profession'] }}</li>
    </ul>
    <br><br>
    <h4>10. Pontos de embate</h4>
    </div>
    <div class="croqui_b">
        <table class="croqui_table">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p14'] === 'X' ? 'checked' : '' }}></div>
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
                <td>
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p22'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_1">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p1'] === 'X' ? 'checked' : '' }}></div>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="marker_23" colspan="2">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p23'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_2" colspan="2">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p2'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="marker_25">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p25'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_24">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p24'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_15">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p15'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_4">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p4'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_3">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p3'] === 'X' ? 'checked' : '' }} /></div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_16">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p16'] === 'X' ? 'checked' : '' }} /></div>
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
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p27'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_26">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p26'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_6">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p6'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_5">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p5'] === 'X' ? 'checked' : '' }}/></div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td class="marker_28">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p28'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_18">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p18'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_7">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p7'] === 'X' ? 'checked' : '' }} /></div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td class="marker_30">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p30'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_29">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p29'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_9">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p9'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_8">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p8'] === 'X' ? 'checked' : '' }} /></div>
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
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p19'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="marker_33">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p33'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_32">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p32'] === 'X' ? 'checked' : '' }}/></div>
                </td>
                <td class="marker_31">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p31'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_12">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p12'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_11">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p11'] === 'X' ? 'checked' : '' }}/></div>
                </td>
                <td class="marker_10">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p10'] === 'X' ? 'checked' : '' }} /></div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_20">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p20'] === 'X' ? 'checked' : '' }} /></div>
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
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p34'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_13" colspan="2">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p13'] === 'X' ? 'checked' : '' }} /></div>
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
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['firstStrikeRequest']['p21'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        {{-- <img src="{{ public_path('templates/indico-seguros/img/participacao_online/croquix165.png')}}" width="185"  alt="Croquix165"> --}}
    </div>

    <h4>11. Observações</h4>
    <ul>
        <li>Observações: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['observations'] }}</li>
    </ul>

    <h4>12. Danos Visíveis</h4>
    <ul>
        <li>Danos Visíveis: {{ $dados['claimRequestReport']['firstMotorClaimVehicle']['visibleDamages'] }}</li>
    </ul>

    <h4>13. Primeiro Veículo - Circunstâncias do Acidente</h4>
    <ul>
        <li>Estava Estacionado no Estancionamento: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasParked'] }}</li>
        <li>estava saindo do estacionamento: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasLeavingParking'] }}</li>
        <li>Estava entrando: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasParking'] }}</li>
        <li>Estava circulando: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasExiting'] }}</li>
        <li>Estava entrando por aí: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasEntering'] }}</li>
        <li>Bater no outro veículo por trás: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasCirculing'] }}</li>
        <li>Pista diferente na mesma direção: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasEnteringRoundAbout'] }}</li>
        <li>Mudança de faixa: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['hitTheOtherVehicleFromBehind'] }}</li>
        <li>Estava em alta velocidade: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['sameDirectionDiferentLane'] }}</li>
        <li>Mudando de faixa: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['changingLanes'] }}</li>
        <li>Estava acelerando: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasSpeeding'] }}</li>
        <li>Virou à esquerda: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['turnLeft'] }}</li>
        <li>Virou à direita: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['turnRight'] }}</li>
        <li>Reverso: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['reverse'] }}</li>
        <li>Pista reservada: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['reservedLane'] }}</li>
        <li>Na curva: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['atTurn'] }}</li>
        <li>Correu Red Light: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['ranRedLight'] }}</li>
        <li>Número de caixas preenchidas: {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['numberOfFilledBoxes'] }}</li>
        <li>Saindo de uma Vaga de Estacionamento:  {{ $dados['claimRequestReport']['firstVehicleAccidentCircunstanceRequest']['wasLeavingParking'] }}</li>
    </ul>

    <h4 style="color: #00aeef">VEÍCULO B</h4>
    <h4>6. Terceiro (proprietário dos bens danificados)</h4>

    <ul>
        <li>Sobrenome: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insured']['surname'] }}</li>
        <li>Nomes: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insured']['names'] }}</li>
        <li>Endereço: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insured']['address'] }}</li>
        <li>Telefone: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insured']['phone'] }}</li>
        <li>Profissão: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insured']['profession'] }}</li>
        <li>Email: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insured']['email'] }}</li>
    </ul>

    <h4>7. Informações do Segundo Veículo</h4>
    <ul>
        <li>Marca do Veículo: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['vehicle']['make'] }}</li>
        <li>Modelo do Veículo: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['vehicle']['model'] }}</li>
        <li>Placa do Veículo: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['vehicle']['plate'] }}</li>
    </ul>

    <h4>8. Seguradora do Segundo Veículo</h4>
    <ul>
        <li>Nome da Seguradora: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insuranceCompany']['name'] }}</li>
        <li>Número da Apólice: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insuranceCompany']['policyNumber'] }}</li>
        <li>Filial: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insuranceCompany']['branch'] }}</li>
        <li>Data de Validade: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insuranceCompany']['expireDate'] }}</li>
        <li>Danos Cobertos: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['insuranceCompany']['areDamagesInsured'] }}</li>
    </ul>

   <h4>9. Dados do Condutor</h4>
    <ul>
        <li>Sobrenome do Condutor: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['surname'] }}</li>
        <li>Nomes do Condutor: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['firstName'] }}</li>
        <li>Endereço do Condutor: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['address'] }}</li>
        <li>Idade do Condutor: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['age'] }}</p></li>
        <li>Categoria da Carteira: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['category'] }}</li>
        <li>Número da Carteira de Motorista: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['driversLicense'] }}</li>
        <li>Email do Condutor: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['email'] }}</li>
        <li>Validade da Carteira: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['expiresIn'] }}</li>
        <li>É o Condutor Habitual do Veículo: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['isUsualTheCarDriver'] }}</li>
        <li>Órgão Emissor da Carteira: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['issuedBy'] }}</li>
        <li>Local de Emissão da Carteira: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['issuedIn'] }}</li>
        <li>Telefone do Condutor: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['phone'] }}</li>
        <li>Profissão do Condutor: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['driverRequest']['profession'] }}</li>
    </ul>

    <h4>10. Pontos de embate</h4>
    <div class="croqui_b">
        <table class="croqui_table">
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p14'] === 'X' ? 'checked' : '' }}></div>
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
                <td>
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p22'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_1">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p1'] === 'X' ? 'checked' : '' }}></div>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td class="marker_23" colspan="2">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p23'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_2" colspan="2">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p2'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="marker_25">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p25'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_24">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p24'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_15">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p15'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_4">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p4'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_3">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p3'] === 'X' ? 'checked' : '' }} /></div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_16">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p16'] === 'X' ? 'checked' : '' }} /></div>
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
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p27'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_26">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p26'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_6">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p6'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_5">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p5'] === 'X' ? 'checked' : '' }}/></div>
                </td>
                <td></td>
            </tr>
            <tr>
                <td class="marker_28">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p28'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_18">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p18'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_7">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p7'] === 'X' ? 'checked' : '' }} /></div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td class="marker_30">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p30'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_29">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p29'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_9">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p9'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_8">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p8'] === 'X' ? 'checked' : '' }} /></div>
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
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p19'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td class="marker_33">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p33'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_32">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p32'] === 'X' ? 'checked' : '' }}/></div>
                </td>
                <td class="marker_31">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p31'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_12">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p12'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td class="marker_11">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p11'] === 'X' ? 'checked' : '' }}/></div>
                </td>
                <td class="marker_10">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p10'] === 'X' ? 'checked' : '' }} /></div>
                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_20">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p20'] === 'X' ? 'checked' : '' }} /></div>
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
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p34'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="marker_13" colspan="2">
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p13'] === 'X' ? 'checked' : '' }} /></div>
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
                    <div class="in_marker"><input type="checkbox"  {{ $dados['claimRequestReport']['secondStrikeRequest']['p21'] === 'X' ? 'checked' : '' }} /></div>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </table>
        {{-- <img src="{{ public_path('templates/indico-seguros/img/participacao_online/croquix165.png')}}" width="185"  alt="Croquix165"> --}}
    </div>

    <h4>11. Observações do Segundo Veículo</h4>
    <ul>
        <li>Observações: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['observations'] }}</li>
    </ul>

    <h3>12. Danos Visíveis do Segundo Veículo</h3>
    <ul>
        <li>Danos Visíveis: {{ $dados['claimRequestReport']['secondMotorClaimVehicle']['visibleDamages'] }}</li>
    </ul>

    <h4>13. Segundo Veículo - Circunstâncias do Acidente</h4>
    <ul>
        <li>Estava Estacionado no Estancionamento: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasParked'] }}</li>
        <li>estava saindo do estacionamento: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasLeavingParking'] }}</li>
        <li>Estava entrando: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasParking'] }}</li>
        <li>Estava circulando: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasExiting'] }}</li>
        <li>Estava entrando por aí: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasEntering'] }}</li>
        <li>Bater no outro veículo por trás: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasCirculing'] }}</li>
        <li>Pista diferente na mesma direção: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasEnteringRoundAbout'] }}</li>
        <li>Mudança de faixa: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['hitTheOtherVehicleFromBehind'] }}</li>
        <li>Estava em alta velocidade: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['sameDirectionDiferentLane'] }}</li>
        <li>Mudando de faixa: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['changingLanes'] }}</li>
        <li>Estava acelerando: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasSpeeding'] }}</li>
        <li>Virou à esquerda: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['turnLeft'] }}</li>
        <li>Virou à direita: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['turnRight'] }}</li>
        <li>Reverso: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['reverse'] }}</li>
        <li>Pista reservada: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['reservedLane'] }}</li>
        <li>Na curva: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['atTurn'] }}</li>
        <li>Correu Red Light: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['ranRedLight'] }}</li>
        <li>Número de caixas preenchidas: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['numberOfFilledBoxes'] }}</li>
        <li>Saindo de uma Vaga de Estacionamento: {{ $dados['claimRequestReport']['secondVehicleAccidentCircunstanceRequest']['wasLeavingParking'] }}</li>
    </ul>

    <h4>14. Esquema do acidente</h4>

    <img src="data:image/png;base64,{{ $dados['claimRequestReport']['crashImage']['data'] }}" alt="{{ $dados['claimRequestReport']['crashImage']['filename'] }}">
  
   
   <h4>15. Assinatura dos Condutores</h4>
   <ul>
    <li>Ambos os condutores assinaram:{{ $dados['claimRequestReport']['bothDriversSigned']}}</li>
   </ul>
 
   <h4>16. Descrição Pormenorizada do Acidente</h4><br>
   <p>Descrição Pormenorizada do Acidente: {{ $dados['claimRequestReport']['accidentDescription']}}</p>

   <p>Velocidade do Veiculo: {{ $dados['claimRequestReport']['vehicleSpeed']}}</p>

   <h4>17. Identificação de Outras Testemunhas</h4><br>
   <p>{{ $dados['claimRequestReport']['otherWitnesses']}}</p>

   <h4>18. Opinião</h4><br>
   <p>{{ $dados['claimRequestReport']['opinion']}}</p>

   <h4>19. Foi levantado auto pelas autoridades?</h4>
   <ul>
    <li>Foi Verificado pelas Autoridades: {{ $dados['claimRequestReport']['wasCheckedbyAuthorities']}}</li>
    <li>Número do processo: {{ $dados['claimRequestReport']['processNumber']}}</li>
    <li>Algum dos intervenientes foi submetido ao teste anti-álcool: {{ $dados['claimRequestReport']['wasTestedForAlcohol']}}</li>
    <li>Posto/Brigada/Esquadra de: {{ $dados['claimRequestReport']['policyStation']}}</li>
    <li>Nome do agente: {{ $dados['claimRequestReport']['officerName']}}</li>
    <li>Qual?: {{ $dados['claimRequestReport']['which']}}</li>
    <li>Resultado do teste: {{ $dados['claimRequestReport']['testResult']}}</li>
   </ul>
   
   <h4>20. Dados referentes aos veículos</h4>
   <table class="claim-table">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Segurado</th>
            <th>Terceiro</th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <td>Características</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['type'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['type'] }}</td>
        </tr>
        <tr>
            <td>Cor</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['colour'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['colour'] }}</td>
        </tr>
        <tr>
            <td>Titular do registo de propriedade</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['owner'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['owner'] }}</td>
        </tr>
        <tr>
            <td>Existiam danos anteriores?Quais?</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['previousDamage'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['previousDamage'] }}</td>
        </tr>
        <tr>
            <td>Pode circular?</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['isStuck'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['isStuck'] }}</td>
        </tr>
        <tr>
            <td>Rebocava atrelado?</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['neededTow'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['neededTow'] }}</td>
        </tr>
        <tr>
            <td>Oficina reparadora</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['garage'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['garage'] }}</td>
        </tr>
        <tr>
            <td>Endereço e telefone</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['garageAddress'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['garageAddress'] }}</td>
        </tr>
        <tr>
            <td>Data da peritagem</td>
            <td>{{ $dados['claimRequestReport']['firstVehicleDescription']['inspectionDate'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondVehicleDescription']['inspectionDate'] }}</td>
        </tr>
       
    </tbody>
</table>

<h4>21. Outros danos materíais além dos causados aos veículos A e Bs</h4>
<p>{{ $dados['claimRequestReport']['otherDamage']['nameAndAddress'] }}</p>
<p>{{ $dados['claimRequestReport']['otherDamage']['damage'] }}</p>

<h4>22. Feridos</h4>
<table class="claim-table">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Primeiro Ferido</th>
            <th>Segundo Ferido</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Nome</td>
            <td>{{ $dados['claimRequestReport']['firstWounded']['name'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondWounded']['name'] }}</td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td>{{ $dados['claimRequestReport']['firstWounded']['address'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondWounded']['address'] }}</td>
        </tr>
        <tr>
            <td>Profissão</td>
            <td>{{ $dados['claimRequestReport']['firstWounded']['profession'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondWounded']['profession'] }}</td>
        </tr>
        <tr>
            <td>Idade</td>
            <td>{{ $dados['claimRequestReport']['firstWounded']['age'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondWounded']['age'] }}</td>
        </tr>
        <tr>
            <td>Lesões sofridas</td>
            <td>{{ $dados['claimRequestReport']['firstWounded']['wounds'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondWounded']['wounds'] }}</td>
        </tr>
        <tr>
            <td>Primeiros Socorros</td>
            <td>{{ $dados['claimRequestReport']['firstWounded']['firstAid'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondWounded']['firstAid'] }}</td>
        </tr>
        <tr>
            <td>Hospital</td>
            <td>{{ $dados['claimRequestReport']['firstWounded']['hostpital'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondWounded']['hostpital'] }}</td>
        </tr>
        <tr>
            <td>Identificação</td>
            <td>{{ $dados['claimRequestReport']['firstWounded']['identify'] }}</td>
            <td>{{ $dados['claimRequestReport']['secondWounded']['identify'] }}</td>
        </tr>
    </tbody>
</table>

<h4>23. Exite alguma relação com o titular da apólice?</h4>
<ul>
    <li>O outro motorista está segurado?: {{ $dados['claimRequestReport']['isOtherDriverInsured'] }}</li>
    <li>Especificar: {{ $dados['claimRequestReport']['specify'] }}</li>
</ul>
<h4>24. Localização</h4>
<ul>
    <li>Localização da data da reclamação: {{ $dados['claimRequestReport']['claimDateLocation']['location'] }}</li>
</ul>

 </body>

</html>
