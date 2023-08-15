<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function contact(){
        return view('contacto');
    }
    public function listAgencies(){
        return view('list-agencies');
    }
    public function faq(){
        return view('perguntas-frequentes');
    }
// =======================================================
    public function acidentePessoal(){
        return view('particulares.acidentes-pessoais');
    }
    
    public function actualizacaoCapital(){
        return view('particulares.actualizacao-capital');
    }
    public function actualizacaoDados(){
        return view('particulares.actualizacao-dados');
    }
    public function avisoCobranca(){
        return view('particulares.aviso-cobranca');
    }
    public function condicoesGerais(){
        return view('particulares.condicoes-gerais');
    }
    public function consultaSinistro(){
        return view('particulares.consultar-sinistro');
    }
    public function danoProprios(){
        return view('particulares.danos-proprios');
    }
    public function empregada(){
        return view('particulares.empregado-domesticos');
    }
    public function funeral(){
        return view('particulares.funeral');
    }
    public function habitacao(){
        return view('particulares.habitacao');
    }
    public function oficinas(){
        return view('particulares.oficinas');
    }
    public function pagamentoPremio(){
        return view('particulares.pagamento-premio');
    }
    public function pagamento(){
        return view('particulares.pagamento');
    }
    public function partFraude(){
        return view('participar-fraude');
    }
    public function recibo(){
        return view('particulares.recibo');
    }
    public function reembolso(){
        return view('particulares.reembolso');
    }
    public function reclamacoes(){
        return view('particulares.reclamacoes');
    }
    public function respCivilBombas(){
        return view('particulares.responsabilidade-civil-bombas');
    }
    public function respCivil(){
        return view('particulares.responsabilidade-civil');
    }
    public function partSinistro(){
        return view('particulares.participar-sinistro');
    }
    public function viagem(){
        return view('particulares.viagem');
    }
    


}
