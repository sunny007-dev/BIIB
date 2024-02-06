<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    public function __construct()
    {
        $this->module_lectures_title = "Lecture";
        $this->module_lectures_name = 'lecture';
        $this->module_lectures_path = 'lecture';
        $this->module_lectures_model = "Modules\Lecture\Entities\Lecture";

        $this->module_testimonial_title = "Testimonial";
        $this->module_testimonial_name = 'testimonial';
        $this->module_testimonial_path = 'testimonial';
        $this->module_testimonial_model = "Modules\Testimonial\Entities\Testimonial";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
     }

    public function index()
    {
        $module_lectures_title = $this->module_lectures_title;
        $module_lectures_name = $this->module_lectures_name;
        $module_lectures_path = $this->module_lectures_path;
        $module_lectures_model = $this->module_lectures_model;

        $guestLecture = $module_lectures_model::where('type','guest')->where('status', 1)->orderBy('order', 'asc')->get();

        $module_testimonial_title = $this->module_testimonial_title;
        $module_testimonial_name = $this->module_testimonial_name;
        $module_testimonial_path = $this->module_testimonial_path;
        $module_testimonial_model = $this->module_testimonial_model;

        $guestLecture = $module_testimonial_model::where('type','guest')->where('status', 1)->orderBy('order', 'asc')->get();
        $studentLecture = $module_testimonial_model::where('type','student')->where('status', 1)->orderBy('order', 'asc')->get();
        $myExperience = $module_testimonial_model::where('type','my experience')->where('status', 1)->orderBy('order', 'asc')->get();
        
        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'testimonial')->where('status', 1)->get()->take(1);
 
        return view('frontend.testimonials',
                    compact(
                        'guestLecture',
                        'studentLecture',
                        'myExperience',
                        'banner'
                        )
                );
     }
}
