<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use DrewM\MailChimp\MailChimp;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MailChimpController extends Controller{

    

    public function index()
    {
        return view('frontend.index');
    }

     /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        // if($request->email == null)
        // {
           
        // }
       
        //Validate
        $request->validate([
            'email' => 'required|email',
        ]);

        


        $listId = env('NEWSLETTER_LIST_ID');

        $mailchimp = new MailChimp(env('NEWSLETTER_API_KEY'));

        $result = $mailchimp->post("lists/$listId/members", [
            'email_address' => $request->email,
            'status'        => 'subscribed',
        ]);

        if ($mailchimp->success()) {
            return back()->with(['message'=>'Contact Form Submit Successfully']);
        } else {
            return back()->with(['message'=>'You Are Already Subscribed']);
        }
    }
}