<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class UserController extends Controller
{
    public function user()
    {
        return view('user_page');
    }

    public function create()
    {
        return view('add_user');
    }
    public function store(Request $request)
    {
         $customer = new Customer;
         $customer->name = $request->name;
         $customer->about = $request->about;
            $customer->save();
            return redirect('user_page');
    }
}
