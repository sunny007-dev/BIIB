<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class FounderController extends Controller
{
    public function __construct()
    {
     // Founder
     $this->module_title = 'Founder';

     // module name
     $this->module_name = 'founder';

     // directory path of the module
     $this->module_path = 'founder';

     // module model name, path
     $this->module_model = "Modules\Founder\Entities\Founder";

    }

    public function index()
    {
   
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_model = $this->module_model;

        $module_setting_title = $this->module_setting_title;
        $module_setting_name = $this->module_setting_name;
        $module_setting_path = $this->module_setting_path;
        $module_setting_model = $this->module_setting_model;
        $module_setting_singular = Str::singular($module_setting_name);



        $$module_name = $module_model::where('status', 1)->get();
        $images = $module_model::whereLike('image_1','images')->get();
      dd($images);
        return view('frontend.facultydetails', compact(
            '$module_name'
        ));
    }

}