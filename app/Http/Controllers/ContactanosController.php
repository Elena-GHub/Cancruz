<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('Contactanos');
    }

    public function store(Request $request)
    {
        $this -> validate($request, [
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required',
        ]);

        Mail::send('emails.contact-message',[
            'msg'=>$request -> message
        ], function ($mail) use($request)
        {
            $mail->from($request->email, $request->name);

            $mail->to('masiacancruz-27953f@inbox.mailtrap.io')->subject('Contact Message');
        });
        return redirect()->back()->with('flash_message', 'Gracias por su mensaje');
    }
}
