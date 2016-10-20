<?php

namespace School\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistroPin extends Mailable
{
    use Queueable, SerializesModels;

    protected $documento = '';
    protected $clave = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($documento, $clave)
    {
        $this->documento = $documento;
        $this->clave = $clave;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.registropin') ->with([
                        'documento' => $this->documento,
                        'clave' => $this->clave
                    ])
                    ->subject('Compra del PIN concretada');
    }
}
