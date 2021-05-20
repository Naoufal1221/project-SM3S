<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Mail\ContactMailMarkdown;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    
    public function contact(){

        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $Message_contact = $request -> only(['name','phone_number','email','choice','content']);
        $title = $request->name.'Thank-You for your Messages';
        Mail::to('anas.sarf.dev@gmail.com')->send(new ContactMailMarkdown($Message_contact ));
        Toastr::info('Email was sent !',$title );

        return redirect()->back();

    }

    


}
