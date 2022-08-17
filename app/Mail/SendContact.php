<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Quene\ShouldQuene;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendContact extends Mailable
{
    use Queueable, SerializesModels;
    public $dataForEmail;

    /**
     * Create a new message instace
     * @return void
     */
    public function __construct($dataForEmail)
    {
        $this->dataForEmail = $dataForEmail;
    }

    /**
     * Build the message
     * @return $this
     */
    public function build()
    {
        return $this->from($this->dataForEmail['emailFrom'])
            ->to('aga.stronydlafirm+toten@gmail.com')
            ->view('emails.sendContact')
            ->subject($this->dataForEmail['title'])
            ->with([
                'name' => $this->dataForEmail['name'],
                'email' => $this->dataForEmail['email'],
                'phone' => $this->dataForEmail['phone'],
                'userMessage' => $this->dataForEmail['userMessage'],
                'appUrl' => $this->dataForEmail['appUrl'],
            ]);
    }
}
