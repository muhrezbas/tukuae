<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use app\transaksi;


class telah_dikonfirmasi extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(transaksi $transaksi)
    {
       $this->transaksi = $transaksi;
    }

    /**
     * Build the message.
     *
     
     * @return $this
     */
    public function build()
    {
        return $this->from('Tukuaeid@gmail.com', 'Tukuae')
                    ->subject("Telah dikonfirmasi")
                    ->markdown('email.konfirmasi')
                 
                
    }
}