<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendEmailSuggestion extends Mailable
{
    use Queueable, SerializesModels; 

    public $information;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($imformation)
    {
        $this->information = $imformation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('programacaohey@gmail.com')
        ->subject('Nova Sugestão da Plataforma Sucesso Empregos')
        ->view('emails.reports.emailsuggestion', [
            'information' => $this->information
        ]);

    }
}
