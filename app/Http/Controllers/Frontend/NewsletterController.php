<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Spatie\Newsletter\Facades\Newsletter;

class NewsletterController extends Controller
{
    public function store(Request $request){

        if ( ! Newsletter::isSubscribed($request->email) ) {
            Newsletter::subscribe($request->email);
            return response()->json([
                'message' => '200',
               'success' => 'Successfully subscribed',
            ]);
           
        }
        return response()->json([
            'message' => '200',
           'success' => 'You are already subscribed'
        ]);        
    }
}