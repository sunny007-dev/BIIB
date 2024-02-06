<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Auth;
use Modules\Contact\Entities\Interest;
use Modules\Contact\Notifications\NewInterestAdded;

class ShowInterestController extends Controller
{
    public function index()
    {
        return view('frontend.pages.placement.showInterest');
    }
    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'company' => 'required|string',
            'city' => 'required|string',
            'address' => 'required',
            'mobile' => 'required|numeric',
            'state' => 'required',
            'know_us'=>'required',
            'pincode' => 'required|numeric',
            'message' => 'required|max:500',
        ]);
      
      
    

        $input =$request->all();
        $input['status'] = 1;

        $interest = Interest::create($input);
        auth()->user()->notify(new NewInterestAdded($interest));
        Flash::success("<i class='fas fa-check'></i> New Interest Added")->important();

        //  Send mail to admin
        // Mail::send('frontend.interestMail', array(
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'city' =>  $input['city'],
        //     'address' =>  $input['address'],
        //     'state' =>  $input['state'],
        //     'know_us'=> $input['know_us'],
        //     'pincode' => $input['pincode'],
        //     'message' => $input['message'],
        // ), function ($message) use ($request) {
        //     $message->from($request->email)
        //      ->to('imcdev22@gmail.com', 'Admin')
        //     // ->bcc('info@indiamobilecongress.com')
        //     ->subject('New Interest ');
        // });

        return response()->json([
            'status' => 201,
            'data' => 'Success'
        ]);

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
