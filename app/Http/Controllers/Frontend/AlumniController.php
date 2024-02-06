<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumniController extends Controller
{
    public function __construct()
    {
        $this->module_alumni_title = "Alumni";
        $this->module_alumni_name = 'alumni';
        $this->module_alumni_path = 'alumni';
        $this->module_alumni_model = "Modules\Alumni\Entities\Group";

        $this->module_convocation_title = "Convocation";
        $this->module_convocation_name = 'convocation';
        $this->module_convocation_path = 'convocation';
        $this->module_convocation_model = "Modules\Alumni\Entities\Convocation";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
    }

    public function index()
    {

        $module_alumni_title = $this->module_alumni_title;
        $module_alumni_name = $this->module_alumni_name;
        $module_alumni_path = $this->module_alumni_path;
        $module_alumni_model = $this->module_alumni_model;
    
        $fbgroup = $module_alumni_model::where('status', '1')->orderBy('order', 'asc')->get();

        $module_convocation_title = $this->module_convocation_title;
        $module_convocation_name = $this->module_convocation_name;
        $module_convocation_path = $this->module_convocation_path;
        $module_convocation_model = $this->module_convocation_model;
    
        $convocation = $module_convocation_model::where('status', '1')->orderBy('order', 'asc')->get();

        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'alumni')->where('status', 1)->get()->take(1);

        return view('frontend.alumni',
            compact(
                'fbgroup',
                'convocation',
                'banner'
                )
            );
    }
}
