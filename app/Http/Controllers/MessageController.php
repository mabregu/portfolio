<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $message = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        
        Mail::to('nmabregu@gmail.com')->queue(new MessageReceived($message));

        return back()->with('status', __('We received your message, we will respond to you in less than 24 hours.'));
    }
}
