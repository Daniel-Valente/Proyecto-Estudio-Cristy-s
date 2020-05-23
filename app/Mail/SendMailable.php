<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $countUser;
    public $countOrden;
    public $countPago;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($countUser, $countOrden, $countPago)
    {
        $this->countUser = $countUser;
        $this->countOrden = $countOrden;
        $this->countPago = $countPago;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.registeredcount');
    }
}
