<?php

namespace App\Mail;

use App\Models\Boletine;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BoletinMail extends Mailable
{
    use Queueable, SerializesModels;

    public $boletin;

    public function __construct(Boletine $boletin){
        $this->boletin = $boletin;
    }


    public function build(){
        $bcc = ['fabian@difraxion.com' , 'elba@difraxion.com'];
        return $this->from($this->boletin->email)
            ->view('emails.boletin')
            ->bcc($bcc)
            ->subject('Boletin enviado desde la web de ' . setting('site.title'))
            ;
    }
}
