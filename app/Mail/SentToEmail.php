<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\URL;

class SentToEmail extends Mailable
{
    use Queueable, SerializesModels;
    private $nama, $id;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nama, $id)
    {
        $this->nama = $nama;
        $this->id = $id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $this->withSwiftMessage(function ($message) {
            $message->getHeaders()->addTextHeader(
                'Weargloeshoes', 'Official Email'
            );
        });
        $this->from("gloeshoesleather@gmail.com", "Weargloeshoes")
            ->view('email')
            ->with(
                [
                    'nama' => $this->nama,
                    'website' => "weargloeshoes.com",
                    'link' => URL::to('/verification/' . $this->id)
                ]
            )->subject("Weargloeshoes Email Verification");
        return $this;
    }
}
