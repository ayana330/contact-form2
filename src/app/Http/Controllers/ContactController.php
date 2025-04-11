<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function confirm(Request $request)
    {
        $contact = $request->only(['name','email','tel','content']);
      
        return view('confirm',compact('contact'));
    }

    public function store(Request $request)
    {
        $contact = $request->only(['name','email','tel','content']);
        Contact::create($contact);
       
        return view('thanks');
    }
}
