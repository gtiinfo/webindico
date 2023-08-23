<?php

use Illuminate\Support\Facades\Route;

 
Route::group(['namespace' => 'App\Http\Controllers'], function () {
    Route::get('/', 'HomeController@index')->name('view.home');
    Route::get('/empresas', 'EmpresaController@invoke')->name('view.empresas');
    Route::get('/indico', 'IndicoController@invoke')->name('view.indico');
    Route::get('/contactos', 'HomeController@contact')->name('view.contacts');
    Route::get('/faq', 'HomeController@faq')->name('view.faq');
    Route::get('/lista-agencias', 'HomeController@listAgencies')->name('view.agencias');
    Route::get('/admin', 'AdminController@dashboard')->name('view.admim');
    Route::post('/download', 'ParticipationController@sendEmail');
   
    
    Route::prefix('admin')->group(function(){
        Route::get('/artigos-add', 'AdminController@artigosAdd')->name('view.artigos-add');
        Route::get('/artigo', 'AdminController@artigos')->name('view.artigo');
        Route::post('/artigos-add', 'AdminController@storeArticle');
        Route::get('/user-add', 'AdminController@userAdd')->name('view.user-add');
        Route::get('/users', 'AdminController@users')->name('view.users');
        Route::get('/noticias', 'AdminController@noticia')->name('view.noticias');
        Route::get('/noticias-add', 'AdminController@noticiaAdd')->name('view.noticias-add');




    });

    Route::prefix('particular')->group(function () {
        Route::get('/acidentes-pessoais', 'HomeController@acidentePessoal')->name('view.acidente-pessoal');
        Route::get('/actualizacao-capital', 'HomeController@actualizacaoCapital')->name('view.actualizacao-capital-part');
        Route::get('/actualizacao-dados', 'HomeController@actualizacaoDados')->name('view.actualizacao-dados-part');
        Route::get('/aviso-cobranca', 'HomeController@avisoCobranca')->name('view.aviso-cobranca');
        Route::get('/condicoes-gerais', 'HomeController@condicoesGerais')->name('view.condicoes-gerais-part');
        Route::get('/consultar-sinitro', 'HomeController@consultaSinistro')->name('view.consul-sinistro-part');
        Route::get('/danos-proprios', 'HomeController@danoProprios')->name('view.danos-proprios-part'); 
        Route::get('/empregados-domesticos', 'HomeController@empregada')->name('view.empregados');
        Route::get('/funeral', 'HomeController@funeral')->name('view.funeral');
        Route::get('/habitacao', 'HomeController@habitacao')->name('view.habitacao');
        Route::get('/oficinas', 'HomeController@oficinas')->name('view.oficinas-part');
        Route::get('/pagamento-premio', 'HomeController@pagamentoPremio')->name('view.pag-primio-part');
        Route::get('/pagamentos', 'HomeController@pagamento')->name('view.pag-part');
        Route::get('/participar-fraude', 'HomeController@partFraude')->name('view.parti-fraude-part');
        Route::get('/reembolso', 'HomeController@reembolso')->name('view.reembolso-part');
        Route::get('/recibo', 'HomoController@recibo')->name('view.recibo-part');
        Route::get('/reclamacoes', 'HomeController@reclamacoes')->name('view.reclamacoes-part');
        Route::get('/responsabilidade-civil-bombas', 'HomeController@respCivilBombas')->name('view.resp-civil-bombas-part');
        Route::get('/responsabilidade-civil', 'HomeController@respCivil')->name('view.resp-civil-part');
        Route::get('/participacao-sinistros', 'HomeController@partSinistro')->name('view.sinistros-part');
        Route::get('/viagem', 'HomeController@viagem')->name('view.viagem-part');

    });

    Route::prefix('empresas')->group(function(){
        Route::get('/acidente-trabalho', 'EmpresaController@acidenteTrabalho')->name('view.acidente-trabalho');
        Route::get('/actualizacao-capital', 'EmpresaController@actualizacaoCapital')->name('view.actualizacao-capital-emp');
        Route::get('/actualizacao-dados', 'EmpresaController@actualizacaoDados')->name('view.actualizacao-dados-emp');
        Route::get('/aviso-cobranca', 'EmpresaController@avisoCobranca')->name('view.aviso-cobranca-emp');
        Route::get('/condicoes-gerais', 'EmpresaController@condicoesGerais')->name('view.condicoes-gerais-emp');
        Route::get('/consulta-sinistro', 'EmpresaController@consultaSinistro')->name('view.cons-sinistro-emp');
        Route::get('/danos-proprios', 'EmpresaController@danosProprios')->name('view.danos-proprios-emp');
        Route::get('/engenharia', 'EmpresaController@engenharia')->name('view.engenharia');
        Route::get('/incendio', 'EmpresaController@incendio')->name('view.incendio');
        Route::get('/negocios', 'EmpresaController@negocios')->name('view.negocio');
        Route::get('/oficinas', 'EmpresaController@oficinas')->name('view.oficinas-emp');
        Route::get('/pagamento-premio', 'EmpresaController@pagPremio')->name('view.pag-premio-emp');
        Route::get('/pagamentos', 'EmpresaController@pagamento')->name('view.pagamento-emp');
        Route::get('/participar-fraude', 'EmpresaController@participarFraude')->name('view.part-fraude-emp');
        Route::get('/pme', 'EmpresaController@pme')->name('view.pme');
        Route::get('/recibo', 'EmpresaController@recibo')->name('view.recibo-emp');
        Route::get('/reclamacoes', 'EmpresaController@reclamacoes')->name('view.reclamacoes');
        Route::get('/reembolso', 'EmpresaController@reembolso')->name('view.reembolso-emp');
        Route::get('/responsabilidade-civil-auto', 'EmpresaController@respCivilAuto')->name('view.resp-civil-auto');
        Route::get('/responsabilidade-civil', 'EmpresaController@respCivil')->name('view.respCivil-emp');
        Route::get('/saude', 'EmpresaController@saude')->name('view.saude');
        Route::get('/participacao-sinistro', 'EmpresaController@sinistro')->name('view.sinistro-emp');


    });

    Route::prefix('indico')->group(function(){
        Route::get('/agremiacoes', 'IndicoController@agremiacoes')->name('view.agremiacoes');
        Route::get('/advogados', 'IndicoController@advogados')->name('view.advogados');
        Route::get('/artigos', 'IndicoController@artigos')->name('view.artigos');
        Route::get('/certificacoes', 'IndicoController@certificacoes')->name('view.certificacoes');
        Route::get('/dados-empresas', 'IndicoController@dadosEmpresas')->name('view.dados-empresas');
        Route::get('/denucias', 'IndicoController@denucias')->name('view.denucias');
        Route::get('/documentos-institucionais', 'IndicoController@docInstitucionais')->name('view.doc-insti');
        Route::get('/equipe-gestao', 'IndicoController@equiGestao')->name('view.equipe-gestao');
        Route::get('/estrutura-accionista', 'IndicoController@estrAccionista')->name('view.estru-accionista');
        Route::get('/formulario-recrutamento', 'IndicoController@formularioRecrutamento')->name('view.form-recrutamente');
        Route::get('/formulario-talento', 'IndicoController@formularioTalento')->name('view.form-talento');
        Route::get('/fornecedores', 'IndicoController@fornecedores')->name('view.fornecedores');
        Route::get('/helpdesk', 'IndicoController@helpdesk')->name('view.helpdesk');
        Route::get('/historia', 'IndicoController@historia')->name('view.historia');
        Route::get('/inquerito-analise-marca', 'IndicoController@inqueritoAnaliseMarca')->name('view.inq-analise-marca');
        Route::get('/inquerito-marca', 'IndicoController@inqueritoAnalise')->name('view.inq-marca');
        Route::get('/mediadores', 'IndicoController@mediadores')->name('view.mediadores');
        Route::get('/noticia', 'IndicoController@noticia')->name('view.noticia');
        Route::get('/oficinas', 'IndicoController@oficinas')->name('view.oficina');
        Route::get('/orgao-sociais', 'IndicoController@orgaoSociais')->name('view.orgao-sociais');
        Route::get('/prestadores-medicos', 'IndicoController@prestadoresMedicos')->name('view.presta-medicos');
        Route::get('/programa-talento', 'IndicoController@programaTalento')->name('view.programa-talento');
        Route::get('/proposito', 'IndicoController@proposito')->name('view.proposito');
        Route::get('/recrutamento', 'IndicoController@recrutamento')->name('view.recrutamento');
        Route::get('/relatorio-contas', 'IndicoController@relatorioContas')->name('view.relatorio-conta');
        Route::get('/relatorio', 'IndicoController@relatorio')->name('view.relatorio');
        Route::get('/responsabilidade-social', 'IndicoController@responsabilidadeSocial')->name('view.resp-social');

        
    });


});
