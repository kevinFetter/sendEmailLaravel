<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class laravelTips implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    //fazer a máxima de tentativas 
    public $tries = 3;
    //Criar o atributo
    private $user;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(\stdClass $user)
    {
        $this->user = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //está sendo disparado uma facade de email e o email ta disparando um onbjeto do tipo mail
        \Illuminate\Support\Facades\Mail::send(new \App\Mail\laravelTips($this->$user));
    }
}
