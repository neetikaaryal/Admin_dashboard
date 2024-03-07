<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $customer = Customer::where('name', 'Neetika Aryal')->skip(1)->first();
        return view('frontend/portfolio', compact('customer'));
    }
}
