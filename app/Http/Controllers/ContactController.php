<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;

class ContactController extends Controller
{
    public function message(ContactRequest $req) {
        $sendcontact = new Contact;
        $sendcontact->name = $req->input('name');
        $sendcontact->email = $req->input('email');
        $sendcontact->subject = $req->input('subject');
        $sendcontact->message = $req->input('message');

        $sendcontact->save();

        return redirect()->route('contact')->with('success', 'Сообщение отправлено');

    }

    public function receive(){
        return view('mess', ['data' => Contact::all()]);
        // $data = Contact::all();
        // dd($data);
    }
}
