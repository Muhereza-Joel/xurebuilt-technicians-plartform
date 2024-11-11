<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showPaymentOptionsPage()
    {
        return view('pages.paymentOptions');
    }

    public function showTechniciansFinder()
    {
        return view('pages.finder');
    }
}
