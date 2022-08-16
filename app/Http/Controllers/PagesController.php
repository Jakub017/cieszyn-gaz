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
        return view('realizations');
    }
}
