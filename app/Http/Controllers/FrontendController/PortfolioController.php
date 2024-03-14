<?php

namespace App\Http\Controllers\FrontendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Customer;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        // $customer = Customer::where('name', 'Ananda')->first();
        $customer = Customer::latest()->first();
        return view('frontend/portfolio', compact('customer'));
    }

    public function contact()
    {
        // $customer = Customer::where('name', 'Ananda')->first();
        $customer = Customer::latest()->first();
        return view('frontend/contact', compact('customer'));
    }      
    
    public function experience()
    {
        return view('frontend/experience');
    }

    public function projects()
    {
        return view('frontend/projects');
    }

}