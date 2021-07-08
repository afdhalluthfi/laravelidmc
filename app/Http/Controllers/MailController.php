<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function senEmail()
    {
        $detail = [
            "titel" => "Struct Buyer Item In Market Place",
            "body"  => "terimakasih sudah belanja di tempat kami kami sangat senang.."
        ];

        Mail::to("plusre86@gmail.com")->send(new TestMail($detail));
        return "Email Terkirim";
    }

}
