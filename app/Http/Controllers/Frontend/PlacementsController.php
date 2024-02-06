<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PlacementsController extends Controller
{
    public function __construct() {
        $this->module_recruiter_title = "Recruiter";
        $this->module_recruiter_name = 'recruiter';
        $this->module_recruiter_path = 'recruiter';
        $this->module_recruiter_model = "Modules\Recruitment\Entities\Recruiter";

        $this->module_placement_title = "Recruiter";
        $this->module_placement_name = 'recruiter';
        $this->module_placement_path = 'recruiter';
        $this->module_placement_model = "Modules\Recruitment\Entities\Placement";

        $this->module_testimonial_title = "Testimonial";
        $this->module_testimonial_name = 'testimonial';
        $this->module_testimonial_path = 'testimonial';
        $this->module_testimonial_model = "Modules\Testimonial\Entities\Testimonial";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
        
        $this->module_pagesmenu_title = "PageMenu";
        $this->module_pagesmenu_name = 'pagemenu';
        $this->module_pagesmenu_path = 'pagemenu';
        $this->module_pagesmenu_model = "Modules\PageMenu\Entities\Page";
    }
    
    public function index() {
        $module_recruiter_title = $this->module_recruiter_title;
        $module_recruiter_name = $this->module_recruiter_name;
        $module_recruiter_path = $this->module_recruiter_path;
        $module_recruiter_model = $this->module_recruiter_model;
    
        $recruiters = $module_recruiter_model::simplePaginate(10);
        
        $itrecuriters = $module_recruiter_model::where('type','it_sector')->where('status', 1)->orderBy('name')->get()->groupBy('sub_name');
   
        $nonitrecuriters = $module_recruiter_model::where('type','non_it_sector')->where('status', 1)->orderBy('name')->get()->groupBy('sub_name');

        $module_placement_title = $this->module_placement_title;
        $module_placement_name = $this->module_placement_name;
        $module_placement_path = $this->module_placement_path;
        $module_placement_model = $this->module_placement_model;
        
        $placementsByYear = $module_placement_model::where('type','placements')->where('status', 1)->orderBy('recruiter_name')->get()->groupBy('year');

        $module_testimonial_title = $this->module_testimonial_title;
        $module_testimonial_name = $this->module_testimonial_name;
        $module_testimonial_path = $this->module_testimonial_path;
        $module_testimonial_model = $this->module_testimonial_model;

        $myExperience = $module_testimonial_model::where('type','my experience')->where('status', 1)->orderBy('order', 'asc')->get();

        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'placement')->where('status', 1)->get()->take(1);
        
        $module_pagesmenu_title = $this->module_pagesmenu_title;
        $module_pagesmenu_name = $this->module_pagesmenu_name;
        $module_pagesmenu_path = $this->module_pagesmenu_path;
        $module_pagesmenu_model = $this->module_pagesmenu_model;
        
        $chancellorMessage = $module_pagesmenu_model::where('pages_category_name', 'Placements')->whereIn('sub_pages_name', ["Chancellor's Message"])->where('status', 1)->get();

        return view('frontend.placements',
            compact(
                'recruiters',
                'placementsByYear',
                'itrecuriters',
                'nonitrecuriters',
                'myExperience',
                'banner',
                'chancellorMessage'
                )
        );
    }
}

?>