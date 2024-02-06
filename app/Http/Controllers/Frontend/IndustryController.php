<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class IndustryController extends Controller {

    public function __construct() {
        $this->module_lectures_title = "Lecture";
        $this->module_lectures_name = 'lecture';
        $this->module_lectures_path = 'lecture';
        $this->module_lectures_model = "Modules\Lecture\Entities\Lecture";

        $this->module_internship_title = "Internship";
        $this->module_internship_name = 'internship';
        $this->module_internship_path = 'internship';
        $this->module_internship_model = "Modules\Recruitment\Entities\Placement";

        $this->module_convention_title = "Convention";
        $this->module_convention_name = 'convention';
        $this->module_convention_path = 'convention';
        $this->module_convention_model = "Modules\Convention\Entities\Convention";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
    }
    
    public function index() {

        $module_lectures_title = $this->module_lectures_title;
        $module_lectures_name = $this->module_lectures_name;
        $module_lectures_path = $this->module_lectures_path;
        $module_lectures_model = $this->module_lectures_model;

        $guestLecture = $module_lectures_model::where('type','guest')->where('status', 1)->orderBy('order', 'asc')->get();
        $leadershiptraining = $module_lectures_model::where('type','leadership')->where('status', 1)->orderBy('order', 'asc')->get();

        $module_internship_title = $this->module_internship_title;
        $module_internship_name = $this->module_internship_name;
        $module_internship_path = $this->module_internship_path;
        $module_internship_model = $this->module_internship_model;

        $internship = $module_internship_model::where('type','internships')->where('status', 1)->get()->groupBy('sub_name');

        $internships = $module_internship_model::where('type','internships')->where('status', 1)->get();
        $internships = collect($internships);
        $internships = $internships->map(function ($item) {
            $firstChar = substr($item['name'], 0, 1);
            $item['subname'] = $firstChar;
            return $item;
        });


        $module_convention_title = $this->module_convention_title;
        $module_convention_name = $this->module_convention_name;
        $module_convention_path = $this->module_convention_path;
        $module_convention_model = $this->module_convention_model;

        $conventions = $module_convention_model::where('status', 1)->get()->groupBy('event_name');

        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'industry')->where('status', 1)->get()->take(1);


        return view('frontend.industryinterface', 
            compact(
                'guestLecture',
                'leadershiptraining',
                'internship',
                'internships',
                'conventions',
                'banner'
            )
        );
    }

    public function guestlectures() {
        return view('frontend.pages.industry.guestlectures');
    }

    public function leadershiptraining() {
        return view('frontend.pages.industry.leadershiptraining');
    }

    public function internships() {
        return view('frontend.pages.industry.internships');
    }

    public function businessconvention() {
        return view('frontend.pages.industry.businessconvention');
    }
    
    
}

?>