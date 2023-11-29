<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SifreGonder extends Mailable
{
    use Queueable, SerializesModels;

    public $uye;

    /**
     * Create a new message instance.
     */
    public function __construct($uye)
    {
        $this->uye = $uye;
    }

    public function build()
    {
        return $this->to($this->uye->eposta)
            ->subject('Arcadia Vine Yards Üyelik Hakkında')
            ->view('emails.sifre-gonder');
    }
}
