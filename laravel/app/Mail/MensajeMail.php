<?php

namespace App\Mail;

use App\Models\Inscripcione;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MensajeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $inscripcion;

    public function __construct(Inscripcione $inscripcion){
        $this->inscripcion = $inscripcion;
    }


    public function build(){
        $bcc = ['fabian@difraxion.com' , 'elba@difraxion.com'];
        return $this->from($this->inscripcion->email)
            ->view('emails.comentario')
            ->bcc($bcc)
            ->subject('Mensaje Enviado desde la web de ' . setting('site.title'))
            ;
    }
}
