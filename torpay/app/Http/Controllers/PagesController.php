<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\subscribers;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    //
    public function index(){
        return view('pages.home');
    }
    public function login(){
        return view('pages.login');
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        return view('pages.services');
    }
    
    public function register(){
        return view('pages.register');
    }
    public function policy(){
        return view('pages.policy');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function subscribe(){
        $sub_email =  $_REQUEST['email'];

            $data = array(
                'email' =>  $sub_email ,
                'account' => 'payment@torama.ng',
                'subject' => 'Torama news letter',
                'body_message'  => ' Thank you for subscribing to our news letter,
                 every information and update you need will be available to you.'
            );
        // send mail
        Mail::send('emails.contact', $data, function( $message) use($data){
            $message->from($data['account']);
            $message->to($data['email']);
            $message->subject($data['subject']);
           
        });
       return view('pages.subscribe', compact('sub_email'));
    }
   
}

?>