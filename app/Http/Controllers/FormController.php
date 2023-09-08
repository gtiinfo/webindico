<?php

namespace App\Http\Controllers;

use App\Mail\ContatoEmpresaEmail;
use App\Mail\ContatoParticularEmail;
use Illuminate\Http\Request;
use Mail;

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

        Mail::to('paulomaculuve758@gmail.com')->send(new ContatoParticularEmail($data));

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

        Mail::to('paulomaculuve758@gmail.com')->send(new ContatoEmpresaEmail($data));

        session()->flash('message', 'Solicitação de cotação enviada com sucesso!');
        session()->flash('status', 'success');

        return redirect()->back();

    }
}