<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Member;


class MailController extends Controller
{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo->receiver = "Arsen Ulykbekov";
        $objDemo->sender = "190103388@stu.sdu.edu.kz";
        Mail::to("190103388@stu.sdu.edu.kz")->send(new DemoMail($objDemo));
        return redirect('/login');
    } 
    // public function registration(){
    	// send();

    // }
}
