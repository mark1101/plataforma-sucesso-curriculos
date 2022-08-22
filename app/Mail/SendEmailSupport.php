<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailSupport extends Mailable
{
    use Queueable, SerializesModels;
    public $support;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($support)
    {
        $this->support = $support;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('programacaohey@gmail.com')
        ->subject('Novo Pedido de Suporte da Plataforma Sucesso Empregos')
        ->view('emails.reports.emailsuporte', [
            'support' => $this->support
        ]);
    }
}
