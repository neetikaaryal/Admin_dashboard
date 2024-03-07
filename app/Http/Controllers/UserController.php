<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class UserController extends Controller
{
    public function user()
    {
        $customer = Customer::all();
        return view('user_page', compact('customer'));
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

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $customer->image = $path;
        }
        
         $customer->save();
         return redirect('user_page');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect ('user_page'); 
    }
    //..............API...................//
    public function apiIndex()
    {
        $customer = Customer::all();
        return response()->json($customer);
    }
}
