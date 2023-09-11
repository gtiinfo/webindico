<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EmailDenucia extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    public $attachment;
    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($data, $attachment=null)
    {
        //
        $this->data = $data;
        $this->attachment = $attachment;
    }

    public function build()
    {
        if($this->attachment != null){

        return $this->view('emails.denucias')
            ->subject('Denúncias')
            ->with(['data' => $this->data])
            ->attach($this->attachment);
        }else{
            return $this->view('emails.denucias')
            ->subject('Denúncias')
            ->with(['data' => $this->data]);
        }
    }
}