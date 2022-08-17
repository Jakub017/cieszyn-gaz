<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendKindergeldConsultation;
use App\Mail\SendContact;
use App\Mail\SendInternet;
use Mail;

class MailController extends Controller
{

    public function sendContactMail($data)
    {
        $emailFrom = config('mail.from.address');
        $emailTo = config('mail.to.address');
        $appUrl = config('app.url');
        $dataMail = [
            'emailFrom' => $data['email'],
            'appUrl' => $appUrl,
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'userMessage' => $data['userMessage'],
            'title' => 'Wiadomość z formularza kontaktowego',
        ];

        Mail::to($emailTo)->send(new SendContact($dataMail));
        return true;
    }




}
