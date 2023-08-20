<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use PDF;

class PDFController extends Controller
{
    public function generatePDF($data)
    {   
      $polictNumber =  $data['claimRequestReport']['firstMotorClaimVehicle']['insuranceCompany']['policyNumber'];        
        $pdf = PDF::loadView('pdf.participation-auto', ['dados' => $data]);
        $filename = 'Participacao_Sinistro_Automovel_'.$polictNumber. '.pdf';
      $response = $pdf->save(storage_path('app/pdf/' . $filename));

        $file = storage_path('app/pdf/' . $filename);

        $dataEmail = [
            "email" => "paulo.maculuve@bluteki.com",
            "title" => "Formulário de Participação de Sinistro Automóvel número de apolice $polictNumber",
        ];

        Mail::send('emails.participation-email', $dataEmail, function ($message) use ($dataEmail, $file) {
            $message->to($dataEmail["email"])
                    ->subject($dataEmail["title"])
                    ->attach($file, [
                        'as' => 'Participacao_Sinistro_Automovel.pdf',
                        'mime' => 'application/pdf',
                    ]);
        });
        return $response;

    }
}
