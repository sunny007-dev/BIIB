<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function __construct()
    {   
        $this->module_leadership_title = "Leadership";
        $this->module_leadership_name = 'leadership';
        $this->module_leadership_path = 'leadership';
        $this->module_leadership_model = "Modules\Team\Entities\Leadership";

        $this->module_certified_title = "Certified";
        $this->module_certified_name = 'certified';
        $this->module_certified_path = 'certified';
        $this->module_certified_model = "Modules\Approval\Entities\Certified";

        $this->module_pagesmenu_title = "PageMenu";
        $this->module_pagesmenu_name = 'pagemenu';
        $this->module_pagesmenu_path = 'pagemenu';
        $this->module_pagesmenu_model = "Modules\PageMenu\Entities\Page";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
        
                
               // Founder
          $this->module_founder_title = 'Founder';

                // module name
          $this->module_founder_name = 'founder';

            // directory path of the module
         $this->module_founder_path = 'founder';

            // module model name, path
        $this->module_founder_model = "Modules\Founder\Entities\Founder";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()    {

    $module_leadership_title = $this->module_leadership_title;
    $module_leadership_name = $this->module_leadership_name;
    $module_leadership_path = $this->module_leadership_path;
    $module_leadership_model = $this->module_leadership_model;

    $leadership = $module_leadership_model::where('type', 'home')->where('status', 1)->orderBy('order', 'asc')->get();

    $module_certified_title = $this->module_certified_title;
    $module_certified_name = $this->module_certified_name;
    $module_certified_path = $this->module_certified_path;
    $module_certified_model = $this->module_certified_model;

    $aicte = $module_certified_model::where('certified_type_name', 'Aicte')->orderBy('order', 'desc')->get();

    $nirf = $module_certified_model::where('certified_type_name', 'Nirf')->orderBy('order', 'desc')->get();

    $module_pagesmenu_title = $this->module_pagesmenu_title;
    $module_pagesmenu_name = $this->module_pagesmenu_name;
    $module_pagesmenu_path = $this->module_pagesmenu_path;
    $module_pagesmenu_model = $this->module_pagesmenu_model;
    
    $whyBiib = $module_pagesmenu_model::where('pages_category_id', 3)->whereIn('sub_pages_name', ['Why BiiB?'])->where('status', 1)->get();

    $infrastructure = $module_pagesmenu_model::where('pages_category_id', 3)->whereIn('sub_pages_name', ['Health & Recreation','Hostel', '360 degree Virtual Campus Tour'])->where('status', 1)->get();

    $sbup = $module_pagesmenu_model::where('pages_category_id', 3)->whereIn('sub_pages_name', ['Sri Balaji University'])->where('status', 1)->get()->groupBy('name');
    $founderChancellor = $module_pagesmenu_model::where('pages_category_id', 3)->whereIn('sub_pages_name', ['Our Founder Chancellor'])->where('status', 1)->get()->groupBy('name');
    $directorMessage = $module_pagesmenu_model::where('pages_category_id', 1)->where('sub_pages_id', 41)->get();
    
    $cafFacilities = $module_pagesmenu_model::select('id','name','content','type','pages_category_id', 'sub_pages_name', 'status','order')->where('status', 1)->get();

    $caffeFacilities = $module_pagesmenu_model::whereIn('sub_pages_name', ['Other Facilities','Cafeteria & Mess'])->where('status', 1)->get()->toArray();
 
    $collection =collect($caffeFacilities[0]['image_1']);
    $caffeFacilitiesAll= $collection->push(
        $caffeFacilities[0]['image_2'],
        $caffeFacilities[0]['image_2'],
        $caffeFacilities[0]['image_3'],
        $caffeFacilities[0]['image_4'],
        $caffeFacilities[0]['image_5'],
        $caffeFacilities[0]['image_6'],
        $caffeFacilities[0]['image_7'],
        $caffeFacilities[0]['image_8'],
        $caffeFacilities[0]['image_9']
    );

    $caffeMess[] = collect($caffeFacilities[0])->put('slider_img',$caffeFacilitiesAll);

    $collection = collect($caffeFacilities[1]['image_1']);
    $caffeFacilitiesAll= $collection->push(
        $caffeFacilities[1]['image_2'],
        $caffeFacilities[1]['image_2'],
        $caffeFacilities[1]['image_3'],
        $caffeFacilities[1]['image_4'],
        $caffeFacilities[1]['image_5'],
        $caffeFacilities[1]['image_6'],
        $caffeFacilities[1]['image_7'],
        $caffeFacilities[1]['image_8'],
        $caffeFacilities[1]['image_9']
    );

    $otherFaculty[] = collect($caffeFacilities[1])->put('slider_img',$caffeFacilitiesAll);

    $culturalSportsAll = collect([])->put('Cafeteria & Mess', $caffeMess)->put('Other Facilities',$otherFaculty);
    
    
    $module_banner_title = $this->module_banner_title;
    $module_banner_name = $this->module_banner_name;
    $module_banner_path = $this->module_banner_path;
    $module_banner_model = $this->module_banner_model;

    $banner = $module_banner_model::where('type', 'about')->where('status', 1)->get()->take(1);
    $chancellorMessage = $module_pagesmenu_model::where('pages_category_name', 'About Us')->whereIn('sub_pages_name', ["Chancellor's Message"])->where('status', 1)->get();
    
    $module_founder_title = $this->module_founder_title;
    $module_founder_name = $this->module_founder_name;
    $module_founder_path = $this->module_founder_path;
    $module_founder_model = $this->module_founder_model;

    $founder = $module_founder_model::where('status', 1)->get();
    $images = $module_founder_model::get(['image_1','image_2','image_3','image_4','image_5','image_6','image_7',
    'image_8','image_9','image_10','image_11','image_12','image_13','image_14','image_15',
    'image_description_1','image_description_2','image_description_3','image_description_4','image_description_5','image_description_6'
    ,'image_description_7','image_description_8','image_description_9','image_description_10','image_description_11','image_description_12',
    'image_description_13','image_description_14','image_description_15']);
    $founderPhotos = collect([])->put('photos',$images);

    $videos = $module_founder_model::get(['video_url_1','video_url_2','video_url_3','video_url_4','video_url_5','video_url_6','video_url_7',
    'video_url_8','video_url_9','video_url_10','video_url_11','video_url_12','video_url_13','video_url_14','video_url_15',
    'video_description_1','video_description_2','video_description_3','video_description_4','video_description_5','video_description_6'
    ,'video_description_7','video_description_8','video_description_9','video_description_10','video_description_11','video_description_12',
    'video_description_13','video_description_14','video_description_15','video_thumbnail_1','video_thumbnail_2','video_thumbnail_3','video_thumbnail_4','video_thumbnail_5','video_thumbnail_6'
    ,'video_thumbnail_7','video_thumbnail_8','video_thumbnail_9','video_thumbnail_10','video_thumbnail_11','video_thumbnail_12',
    'video_thumbnail_13','video_thumbnail_14','video_thumbnail_15']);
    $founderVideos = collect([])->put('videos',$videos);


        return view(
            'frontend.about',
            compact(
                'leadership',
                'aicte',
                'nirf',
                'infrastructure',
                'culturalSportsAll',
                'sbup',
                'founderChancellor',
                'banner',
                'whyBiib',
                'directorMessage',
                'founder',
                'founderPhotos',
                'chancellorMessage',
                'founderVideos'
            )
        );
    }

    public function aboutbiib(Request $request) {
        return view(
            'frontend.pages.about.aboutbiib'
        );
    }

    public function whybiib() {
        return view(
            'frontend.pages.about.whybiib'
        );
    }
    
    public function university() {
        return view(
            'frontend.pages.about.sribalajiuniversity'
        );
    }

    public function chancellor() {
        return view(
            'frontend.pages.about.ourchancellor'
        );
    }
    public function leadership() {
        $module_leadership_title = $this->module_leadership_title;
        $module_leadership_name = $this->module_leadership_name;
        $module_leadership_path = $this->module_leadership_path;
        $module_leadership_model = $this->module_leadership_model;

        $leadership = $module_leadership_model::where('type', 'home')->where('status', 1)->orderBy('order', 'asc')->get();

        return view(
            'frontend.pages.about.topbrass',
            compact(
                'leadership'
            )
        );
    }

    public function infrastructure() {
        return view(
            'frontend.pages.about.infrastructure'
        );
    }

    public function aicteapprovals() {
        $module_certified_title = $this->module_certified_title;
        $module_certified_name = $this->module_certified_name;
        $module_certified_path = $this->module_certified_path;
        $module_certified_model = $this->module_certified_model;

        $certified = $module_certified_model::where('certified_type_name', 'Aicte')->orderBy('order', 'desc')->get();

        return view(
            'frontend.pages.about.aicteapprovals',
            compact(
                'certified'
            )
        );
    }

    public function library() {
        return view(
            'frontend.pages.about.library'
        );
    }

    public function nirf() {
        $module_certified_title = $this->module_certified_title;
        $module_certified_name = $this->module_certified_name;
        $module_certified_path = $this->module_certified_path;
        $module_certified_model = $this->module_certified_model;

        $certified = $module_certified_model::where('certified_type_name', 'Nirf')->orderBy('order', 'desc')->get();
        return view(
            'frontend.pages.about.nirf',
            compact(
                'certified'
            )
        );
    }
    
}
