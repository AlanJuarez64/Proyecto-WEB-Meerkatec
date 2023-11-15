<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $correo;
    public $id;

    public function __construct($correo, $id)
    {
        $this->correo = $correo;
        $this->id = $id;
    }

    public function build() 
    {
        return $this->view('envios', [
            'correo' => $this->correo,
            'id' => $this->id,
        ])->subject('Confirmación de entrega del artículo N°' . $this->id . ' de ' . $this->correo);
    }
}
