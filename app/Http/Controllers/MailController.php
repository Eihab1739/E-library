<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Test;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function test(){
        Mail::to('obey@yahoo.com')->send(new Test());
    }
}
