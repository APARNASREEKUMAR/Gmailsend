<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

class MailController extends Controller
{
    public function send(){
    		Mail::send(['text'=>'mail'],['name','Sarthak'],function($message){
    			$message->to('aparna.mailtest2@gmail.com','To Receiver')->subject('Second Test Email');
    			$message->from('aparna.mailtest2@gmail.com','From Sender');
    		});
    		echo "Email has been sent check Inbox!";
    }
}
