<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => 'Test mail',
            'body' => 'This is a test mail from test test'
        ];

        Mail::to("noreply.kawaii@gmail.com")->send(new TestMail($details));
        return "Email sent";
    }
}
