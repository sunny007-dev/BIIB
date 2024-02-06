<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class SriBalajiUniversityController extends Controller {
    public function __construct(){

    }

    public function index()
    {
        return view('frontend.about.sri-balaji-university');
    }
}
?>