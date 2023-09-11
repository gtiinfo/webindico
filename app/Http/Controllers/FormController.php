<?php

namespace App\Http\Controllers;

use App\Mail\ContatoEmpresaEmail;
use App\Mail\ContatoParticularEmail;
use App\Mail\EmailDenucia;
use App\Mail\EmailHelpDesk;
use App\Mail\EmailRecrutamento;
use App\Mail\EmailTaleto;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Storage;
use Mail;
use Swift_Attachment;

class FormController extends Controller
{
    public function emailParticular(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'numberMobile' => 'required',
            'email' => 'nullable|email'
        ]);
        $data = [
            'product' => $request->input('product'),
            'name' => $request->input('name'),
            'numberMobile' => $request->input('numberMobile'),
            'email' => $request->input('email'),
        ];

        Mail::to(Env::get('MAIL_CLAIM_QUOTE'))->send(new ContatoParticularEmail($data));

        session()->flash('message', 'Solicitação de cotação enviada com sucesso!');
        session()->flash('status', 'success');

        return redirect()->back();

    }
    public function emailEmpresa(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'numberMobile' => 'required',
            'email' => 'nullable|email'
        ]);
        $data = [
            'product' => $request->input('product'),
            'name' => $request->input('name'),
            'numberMobile' => $request->input('numberMobile'),
            'email' => $request->input('email'),
        ];

        Mail::to(Env::get('MAIL_CLAIM_QUOTE'))->send(new ContatoEmpresaEmail($data));

        session()->flash('message', 'Solicitação de cotação enviada com sucesso!');
        session()->flash('status', 'success');

        return redirect()->back();

    }
    public function emailHelpDesk(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contacto' => 'required|numeric',
            'email' => 'required|email',
            'mensage' => 'required',
        ]);

        $data = [
            'name' => $request->input('name'),
            'contacto' => $request->input('contacto'),
            'email' => $request->input('email'),
            'mensage' => $request->input('mensage'),
        ];
        Mail::to(Env::get('MAIL_HELPDESK'))->send(new EmailHelpDesk($data));
        session()->flash('message', 'Solicitação enviada com sucesso!');
        session()->flash('status', 'success');

        return redirect()->back();

    }
    public function emailDenuncias(Request $request)
    {
        $request->validate([
            'complaintType' => 'required',
            'name' => 'nullable',
            'complaint' => 'nullable',
            'nameAccused' => 'nullable',
            'placeOccurrence' => 'nullable',
            'witness' => 'nullable',
            'file' => 'nullable|file|mimes:jpeg,jpg,png,gif,pdf,doc,docx',
        ]);

        $complaintTypes = [
            '1' => 'Ameaça',
            '2' => 'Discriminação',
            '3' => 'Assédio',
            '4' => 'Corrupção',
            '5' => 'Roubo e/ou furto',
            '6' => 'Violação às regras de higiene e segurança no local de trabalho',
            '7' => 'Fraude',
            '8' => 'Uso indevido dos nossos recursos',
            '9' => 'Quebra de sigilo profissional',
            '10' => 'Maus-tratos aos clientes, fornecedores, parceiros de negócio ou entre colegas de trabalho',
            '11' => 'Outros',
        ];

        $complaintType = $request->input('complaintType');
        $complaintTypeDescription = $complaintTypes[$complaintType] ?? 'Desconhecido';

        if ($request->hasFile('file')) {
            $fileName = 'Anexo_denucia.' . $request->file('file')->extension();
            $request->file('file')->storeAs('temp', $fileName);
            $attachment = storage_path('app/public/temp/' . $fileName);
        }

        $data = [
            'complaintType' => $complaintTypeDescription,
            'name' => $request->input('name'),
            'complaint' => $request->input('complaint'),
            'nameAccused' => $request->input('nameAccused'),
            'placeOccurrence' => $request->input('placeOccurrence'),
            'witness' => $request->input('witness'),
        ];


        if ($request->hasFile('file')) {
            Mail::to(Env::get('MAIL_HELPDESK'))
                ->send(new EmailDenucia($data, $attachment));
            Storage::delete(['temp/' . $attachment]);
        } else {
            Mail::to(Env::get('MAIL_HELPDESK'))
                ->send(new EmailDenucia($data));
        }


        session()->flash('message', 'Solicitação enviada com sucesso!');
        session()->flash('status', 'success');

        return redirect()->back();
    }

    public function emailRecrutamento(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'apelido' => 'required',
            // 'radioMasculino' => 'required',
            // 'radioFeminino' => 'required',
            'dataNascimento' => 'required|date',
            'nacionalidade' => 'required',
            'contacto' => 'required|numeric',
            'email' => 'nullable|email',
            'nivelAcademico' => 'required',
            'curso' => 'nullable',
            'instituicaoEnsino' => 'nullable',
            'vaga' => 'required',
            'currVitae' => 'required|file|mimes:jpeg,jpg,png,pdf,doc,docx|max:8192',
            'nuit' => 'required|file|mimes:jpeg,jpg,png,pdf,doc,docx|max:8192',
            'bilheteIdent' => 'required|file|mimes:jpeg,jpg,png,pdf,doc,docx|max:8192',
            'linguaPt' => 'required',
            'linguaIng' => 'required',
            'liguaLocais' => 'nullable',
            'outrasLinguas' => 'nullable',
            'word' => 'required',
            'excel' => 'required',
            'powerPoint' => 'required',
            'access' => 'required',
            // 'exSim' => 'required',
            // 'exNao' => 'required',
            'area' => 'required',
            'motivacao' => 'required',
        ]);
        
            $timestamp = now()->timestamp;
            $name = $request->input('name');
            $currVitaeName = 'CV_' . $name . '_' . $timestamp . '.' . $request->file('currVitae')->extension();
            $nuitName = 'NUIT_' . $name . '_' . $timestamp . '.' . $request->file('nuit')->extension();
            $biName = 'BI_' . $name . '_' . $timestamp . '.' . $request->file('bilheteIdent')->extension();

            $request->file('currVitae')->storeAs('temp', $currVitaeName);
            $request->file('nuit')->storeAs('temp', $nuitName);
            $request->file('bilheteIdent')->storeAs('temp', $biName);


        if ($request->has('radioMasculino')) {
            $sexo = $request->input('radioMasculino');
        } else {
            $sexo = $request->input('radioFeminino');
        }
        if ($request->has('exSim')) {
            $experiencia = $request->input('exSim');
        } else {
            $experiencia = $request->input('exNao');
        }

        $data = [
            'name' => $request->input('name'),
            'apelido' => $request->input('name'),
            'sexo' => $sexo,
            'dataNascimento' => $request->input('dataNascimento'),
            'nacionalidade' => $request->input('nacionalidade'),
            'contacto' => $request->input('contacto'),
            'email' => $request->input('email'),
            'nivelAcademico' => $request->input('nivelAcademico'),
            'curso' => $request->input('curso'),
            'instituicaoEnsino' => $request->input('instituicaoEnsino'),
            'vaga' => $request->input('vaga'),
            'linguaPt' => $request->input('linguaPt'),
            'linguaIng' => $request->input('linguaIng'),
            'liguaLocais' => $request->input('liguaLocais'),
            'outrasLinguas' => $request->input('outrasLinguas'),
            'word' => $request->input('word'),
            'excel' => $request->input('excel'),
            'powerPoint' => $request->input('powerPoint'),
            'access' => $request->input('access'),
            'experiencia' => $experiencia,
            'exNao' => $request->input('nacionalidade'),
            'area' => $request->input('area'),
            'motivacao' => $request->input('motivacao')
        ];

        
        Mail::to(Env::get('MAIL_RH_RECRUITMENT'))->send(new EmailRecrutamento($data, $currVitaeName, $nuitName, $biName));

        Storage::delete(['temp/' . $currVitaeName, 'temp/' . $nuitName, 'temp/' . $biName]);
        
        session()->flash('message', 'Candidatura enviada com sucesso!');
        session()->flash('status', 'success');

        return redirect()->back();
    }

    public function emailTalento(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'apelido' => 'required',
            'dataNascimento' => 'required|date',
            'nacionalidade' => 'required',
            'contacto' => 'required|numeric',
            'email' => 'nullable|email',
            'nivelAcademico' => 'required',
            'curso' => 'nullable',
            'instituicaoEnsino' => 'nullable',
            'currVitae' => 'required|file|mimes:jpeg,jpg,png,pdf,doc,docx|max:8192',
            'nuit' => 'required|file|mimes:jpeg,jpg,png,pdf,doc,docx|max:8192',
            'bilheteIdent' => 'required|file|mimes:jpeg,jpg,png,pdf,doc,docx|max:8192',
            'linguaPt' => 'required',
            'linguaIng' => 'required',
            'liguaLocais' => 'nullable',
            'outrasLinguas' => 'nullable',
            'word' => 'required',
            'excel' => 'required',
            'powerPoint' => 'required',
            'access' => 'required',
            'area' => 'required',
            'motivacao' => 'required',
        ]);
        
            $timestamp = now()->timestamp;
            $name = $request->input('name');
            $currVitaeName = 'CV_' . $name . '_' . $timestamp . '.' . $request->file('currVitae')->extension();
            $nuitName = 'NUIT_' . $name . '_' . $timestamp . '.' . $request->file('nuit')->extension();
            $biName = 'BI_' . $name . '_' . $timestamp . '.' . $request->file('bilheteIdent')->extension();

            $request->file('currVitae')->storeAs('temp', $currVitaeName);
            $request->file('nuit')->storeAs('temp', $nuitName);
            $request->file('bilheteIdent')->storeAs('temp', $biName);


        if ($request->has('radioMasculino')) {
            $sexo = $request->input('radioMasculino');
        } else {
            $sexo = $request->input('radioFeminino');
        }
        if ($request->has('exSim')) {
            $experiencia = $request->input('exSim');
        } else {
            $experiencia = $request->input('exNao');
        }

        $data = [
            'name' => $request->input('name'),
            'apelido' => $request->input('name'),
            'sexo' => $sexo,
            'dataNascimento' => $request->input('dataNascimento'),
            'nacionalidade' => $request->input('nacionalidade'),
            'contacto' => $request->input('contacto'),
            'email' => $request->input('email'),
            'nivelAcademico' => $request->input('nivelAcademico'),
            'curso' => $request->input('curso'),
            'instituicaoEnsino' => $request->input('instituicaoEnsino'),
            'linguaPt' => $request->input('linguaPt'),
            'linguaIng' => $request->input('linguaIng'),
            'liguaLocais' => $request->input('liguaLocais'),
            'outrasLinguas' => $request->input('outrasLinguas'),
            'word' => $request->input('word'),
            'excel' => $request->input('excel'),
            'powerPoint' => $request->input('powerPoint'),
            'access' => $request->input('access'),
            'experiencia' => $experiencia,
            'exNao' => $request->input('nacionalidade'),
            'area' => $request->input('area'),
            'motivacao' => $request->input('motivacao')
        ];

        
        Mail::to(Env::get('MAIL_RH_RECRUITMENT'))->send(new EmailTaleto($data, $currVitaeName, $nuitName, $biName));

        Storage::delete(['temp/' . $currVitaeName, 'temp/' . $nuitName, 'temp/' . $biName]);
        
        session()->flash('message', 'Candidatura enviada com sucesso!');
        session()->flash('status', 'success');

        return redirect()->back();
    }
}