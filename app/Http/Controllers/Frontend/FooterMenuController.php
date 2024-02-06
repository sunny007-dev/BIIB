<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class FooterMenuController extends Controller
{
    public function __construct()
    {
     // Footer
     $this->module_title = 'Footer';

     // module name
     $this->module_name = 'footer';

     // directory path of the module
     $this->module_path = 'footer';

     // module model name, path
     $this->module_model = "Modules\Menus\Entities\Footer";

      // Sett Title
      $this->module_setting_title = 'Settings';

      // module name
      $this->module_setting_name = 'settings';

      // directory path of the module
      $this->module_setting_path = 'settings';

      // module model name, path
      $this->module_setting_model = "App\Models\Setting";
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



        $$module_name = $module_model::get();
        $$module_setting_name = $module_setting_model::all()->toArray();

    
        $footer[] = $module_model::get();
        
        $footers[] =collect($footer)->groupBy('footer_category_name');
    

        return response()->json([
            'message' => 200,
            'data' => $footers
        ]);
    }
}
