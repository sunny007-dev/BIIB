<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

    class LeadershipController extends Controller {
        public function __construct()
        {  

        }
    
        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {
            return view('frontend.topbrass');
        }
    }
?>