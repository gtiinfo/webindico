<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailTaleto extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $currVitaeName;
    public $nuitName;
    public $biName;
    public function __construct($data, $currVitaeName, $nuitName, $biName)
    {
        $this->data = $data;
        $this->currVitaeName = $currVitaeName;
        $this->nuitName = $nuitName;
        $this->biName = $biName;
    }

    public function build()
    {
        return $this->view('emails.taletos')
            ->subject('Candidatura de Recrutamento')
            ->with(['data' => $this->data])
            ->attach(storage_path('app/public/temp/' . $this->currVitaeName))
            ->attach(storage_path('app/public/temp/' . $this->nuitName))
            ->attach(storage_path('app/public/temp/' . $this->biName));
    }
}
