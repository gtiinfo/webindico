<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndicoController extends Controller
{
    //

    public function invoke(){
        return view('indico.dados-empresas');
    }
    public function agremiacoes(){
        return view('indico.agremiacoes');
    }
    public function artigos(){
        return view('indico.artigos');
    }
    public function certificacoes(){
        return view('indico.certificacoes');
    }
    public function dadosEmpresas(){
        return view('indico.dados-empresas');
    }
    public function denucias(){
        return view('indico.denucias');
    }
    public function docInstitucionais(){
        return view('indico.documentos-institucionais');
    }
    public function equiGestao(){
        return view('indico.equipe-gestao');
    }
    public function estrAccionista(){
        return view('indico.estrutura-accionista');
    }
    public function formularioRecrutamento(){
        return view('indico.formulario-recrutamento');
    }
    public function formularioTalento(){
        return view('indico.formulario-talento');
    }
    public function fornecedores(){
        return view('indico.fornecedores');
    }
    public function helpdesk(){
        return view('indico.helpdesk');
    }
    public function historia(){
        return view('indico.historia');
    }
    public function inqueritoAnaliseMarca(){
        return view('indico.inquerito-analise-marca');
    }
    public function inqueritoAnalise(){
        return view('indico.inquerito-marca');
    }
    public function mediadores(){
        return view('indico.mediadores');
    }
    public function noticia(){
        return view('indico.noticia');
    }
    public function oficinas(){
        return view('indico.oficinas');
    }
    public function advogados(){
        return view('indico.advogados');
    }
    public function orgaoSociais(){
        return view('indico.orgao-sociais');
    }
    public function prestadoresMedicos(){
        return view('indico.prestadores-medicos');
    }
    public function programaTalento(){
        return view('indico.programa-talento');
    }
    public function proposito(){
        return view('indico.proposito');
    }
    public function recrutamento(){
        return view('indico.recrutamento');
    }
    public function relatorioContas(){
        return view('indico.relatorio-contas');
    }
    public function relatorio(){
        return view('indico.relatorio');
    }
    public function responsabilidadeSocial(){
        return view('indico.responsabilidade-social');
    }

    
}
