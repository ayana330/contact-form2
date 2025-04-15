<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function list(Request $request)
    {
        return view('list');
    }

    public function index(Request $request)
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name','email','tel','content']);
      
        return view('confirm',compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name','email','tel','content']);
        Contact::create($contact);
       
        return view('thanks');
    }
}
