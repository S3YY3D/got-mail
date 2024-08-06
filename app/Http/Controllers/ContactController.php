<?php

namespace App\Http\Controllers;

use App\Events\UserRegistration;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $name = $request->first_name;
        event(new UserRegistration($name));
        
        $validatedData =$request->validate([
            'first_name' => 'required',
            'last_name' => '',
            'email' => 'required|email',
            'phone' => '',
        ]);
        $contact = new Contact();
        $contact->first_name = $validatedData['first_name'];
        $contact->last_name = $validatedData['last_name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->save();

        return "info saved succesfully!";
    }

}
