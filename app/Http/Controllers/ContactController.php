<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Http\Controllers\MailController;

class ContactController extends Controller
{

    public function postContact(Request $request)
    {
        $validatedData = $this->validate(
            $request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'userMessage' => 'required',
                // 'agree' => 'required',
                 'g-recaptcha-response' => 'required|recaptchav3:contact,0.5',
            ],
            [
                'name.required' => 'Imię jest wymagane',
                'email.required' => 'Email jest wymagany',
                'email.email' => 'Niepoprawny email',
                'phone.required' => 'Telefon jest wymagany',
                'userMessage.required' => 'Wiadomość jest wymagana',
                // 'agree.required' => 'Zgoda na przetwarzanie danych jest wymagana',
                 'g-recaptcha-response.required' => 'Błąd Recaptcha',
                 'g-recaptcha-response.recaptchav3' => 'Błąd Recaptcha',
            ]
        );

        $email = new MailController;
        $email->sendContactMail($validatedData);

        return back()->with('success', 'Dziękujemy za wysłanie wiadomości.');
    }

    public function postInstallationValuation(Request $request)
    {
        $validatedData = $this->validate(
            $request,
            [
                'name' => 'required',
                'brand' => 'required',
                'model' => 'required',
                'production_date' => 'required',
                'capacity' => 'required',
                'engine_power' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'comment' => 'required',
                // 'agree' => 'required',
                 'g-recaptcha-response' => 'required|recaptchav3:contact,0.5',
            ],
            [
                'name.required' => 'Imię jest wymagane',
                'brand.required' => 'Podanie marki samochodu jest wymagane',
                'model.required' => 'Podanie modelu samochodu jest wymagane',
                'production_date.required' => 'Podanie daty produkcji samochodu jest wymagane',
                'capacity.required' => 'Podanie pojemności silnika jest wymagane',
                'engine_power.required' => 'Podanie mocy silnika jest wymagane',
                'email.required' => 'Email jest wymagany',
                'email.email' => 'Niepoprawny email',
                'phone.required' => 'Telefon jest wymagany',
                'comment.required' => 'Wiadomość jest wymagana',
                // 'agree.required' => 'Zgoda na przetwarzanie danych jest wymagana',
                 'g-recaptcha-response.required' => 'Błąd Recaptcha',
                 'g-recaptcha-response.recaptchav3' => 'Błąd Recaptcha',
            ]
        );

        $email = new MailController;
        $email->sendValuationMail($validatedData);

        return back()->with('success', 'Dziękujemy za wysłanie wiadomości.');
    }


}
