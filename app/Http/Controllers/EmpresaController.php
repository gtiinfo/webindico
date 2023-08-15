<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    //
    public function invoke()
    {
        return view('empresas');
    }

    public function acidenteTrabalho(){
        return view('empresas.acidente-trabalho');
    }
    public function actualizacaoCapital(){
        return view('empresas.actualizacao-capital');
    }
    public function actualizacaoDados(){
        return view('empresas.actualizacao-dados');
    }
    public function avisoCobranca(){
        return view('empresas.aviso-cobranca');
    }
    public function condicoesGerais(){
        return view('empresas.condicoes-gerais');
    }
    public function consultaSinistro(){
        return view('empresas.consultar-estado-sinistro');
    }
    public function danosProprios(){
        return view('empresas.danos-proprios');
    }
    public function engenharia(){
        return view('empresas.engenharia');
    }
    public function incendio(){
        return view('empresas.incendio');
    }
    public function negocios(){ 
        return view('empresas.negocios');
    }
    public function oficinas(){
        return view('empresas.oficinas');
    } 
    public function pagPremio(){
        return view('empresas.pagamento-premio');
    }
    public function pagamento(){
        return view('empresas.pagamento');
    }
    public function participarFraude(){
        return view('empresas.participar-fraude');
    }
    public function pme(){
        return view('empresas.pme');
    }
    public function recibo(){
        return view('empresas.recibo');
    }
    public function reclamacoes(){
        return view('empresas.reclamacoes');
    }
    public function reembolso(){
        return view('empresas.reembolso');
    }
    public function respCivilAuto(){
        return view('empresas.responsabilidade-civil-auto');
    }
    public function respCivil(){
        return view('empresas.responsabilidade-civil');
    }
    public function saude(){
        return view('empresas.saude');
    }
    public function sinistro(){
        return view('empresas.participar-sinistro');
    }

}
