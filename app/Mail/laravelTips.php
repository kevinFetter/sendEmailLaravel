<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class laravelTips extends Mailable
{
    use Queueable, SerializesModels;

    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\stdClass $user)
    {
        //o atributo da minha classe recebe ao parametro que estou passando atraves da injeção de dependencias
        $this->user = $user; 
    } 

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->subject('Primeiro e-mail');
        //address and name
        $this->to($this->user->email, $this->user->name);
        //se passa array sociativa para receber os dados na view
        return $this->view('mail.laravelTips', [ 
            'user' => $this->user
        ]);
    }
}
