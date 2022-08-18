<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Quene\ShouldQuene;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendValuation extends Mailable
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
//            ->to('aga.stronydlafirm+toten@gmail.com')
//            ->to($this->dataForEmail['emailTo'])
            ->view('emails.sendValuation')
            ->subject($this->dataForEmail['title'])
            ->with([
                'brand' => $this->dataForEmail['brand'],
                'model' => $this->dataForEmail['model'],
                'production_date' => $this->dataForEmail['production_date'],
                'capacity' => $this->dataForEmail['capacity'],
                'engine_power' => $this->dataForEmail['engine_power'],
                'name' => $this->dataForEmail['name'],
                'email' => $this->dataForEmail['email'],
                'phone' => $this->dataForEmail['phone'],
                'comment' => $this->dataForEmail['comment'],
                'appUrl' => $this->dataForEmail['appUrl'],
            ]);
    }
}
