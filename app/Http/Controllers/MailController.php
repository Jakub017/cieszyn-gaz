<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendKindergeldConsultation;
use App\Mail\SendContact;
use App\Mail\SendValuation;
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

    public function sendValuationMail($data)
    {
        $emailFrom = config('mail.from.address');
        $emailTo = config('mail.to.address');
        $appUrl = config('app.url');
        $dataMail = [
            'emailFrom' => $data['email'],
            'emailTo' => $emailTo,
            'appUrl' => $appUrl,
            'name' => $data['name'],
            'brand' => $data['brand'],
            'model' => $data['model'],
            'production_date' => $data['production_date'],
            'capacity' => $data['capacity'],
            'engine_power' => $data['engine_power'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'comment' => $data['comment'],
            'title' => 'Zapytanie o wycenę',
        ];

        Mail::to($emailTo)->send(new SendValuation($dataMail));
        return true;
    }

}
