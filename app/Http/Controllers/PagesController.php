<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHomePage() {
        return view('home');
    }

    public function getInstallations() {
        return view('installations');
    }

    public function getService() {
        return view('service');
    }

    public function getRealizations() {
        $realizations = \App\Models\Realization::where('active', 1)->get();

        return view('realizations', ['realizations' => $realizations]);
    }

     public function getPricing() {
        return view('pricing');
    }

     public function getContact() {
        return view('contact');
    }

     public function getCookies() {
        return view('cookies');
    }
}
