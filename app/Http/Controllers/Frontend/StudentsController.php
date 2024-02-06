<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class StudentsController extends Controller {
    public function __construct(){
        $this->module_studentcouncil_title = "Student";
        $this->module_studentcouncil_name = 'student';
        $this->module_studentcouncil_path = 'student';
        $this->module_studentcouncil_model = "Modules\Student\Entities\Student";

        $this->module_cultural_title = "Cultural";
        $this->module_cultural_name = 'cultural';
        $this->module_cultural_path = 'cultural';
        $this->module_cultural_model = "Modules\Cultural\Entities\Cultural";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
        
        $this->module_pagesmenu_title = "PageMenu";
        $this->module_pagesmenu_name = 'pagemenu';
        $this->module_pagesmenu_path = 'pagemenu';
        $this->module_pagesmenu_model = "Modules\PageMenu\Entities\Page";
    }

    public function index()
    {

        $module_studentcouncil_title = $this->module_studentcouncil_title;
        $module_studentcouncil_name = $this->module_studentcouncil_name;
        $module_studentcouncil_path = $this->module_studentcouncil_path;
        $module_studentcouncil_model = $this->module_studentcouncil_model;
        
        $studentcouncil = $module_studentcouncil_model::where('status', 1)->get()->groupBy('year');

        $module_cultural_title = $this->module_cultural_title;
        $module_cultural_name = $this->module_cultural_name;
        $module_cultural_path = $this->module_cultural_path;
        $module_cultural_model = $this->module_cultural_model;

        $culturalprogram = $module_cultural_model::select('id','title','content','type','cultural_category_name','status','order')->where('status', 1)->get()->groupBy('cultural_category_name');
    
        $culturalprograms = $module_cultural_model::where('status', 1)->select('cultural_category_name','image_1',
                                                    'image_2','image_3','image_4','image_5','image_6')->get()->groupBy('cultural_category_name');

    
        foreach($culturalprogram as $key=>$value)
        {
            foreach($culturalprograms as $key1=>$value1)
            {
                if($key == $key1)
                {
                   $values = collect($value1[0])->except('cultural_category_name');
                    $culturalAllData[]= collect($value[0])->put('images',$values);
                }
            }
        }



        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'student-life')->where('status', 1)->get()->take(1);
        
        $module_pagesmenu_title = $this->module_pagesmenu_title;
        $module_pagesmenu_name = $this->module_pagesmenu_name;
        $module_pagesmenu_path = $this->module_pagesmenu_path;
        $module_pagesmenu_model = $this->module_pagesmenu_model;
        
        $antiRagging = $module_pagesmenu_model::where('pages_category_id', 45)->whereIn('sub_pages_name', ['Anti-Ragging Committee'])->where('status', 1)->orderBy('order', 'asc')->get();

        return view('frontend.students',
            compact(
                'studentcouncil',
                'culturalprogram',
                'banner',
                'antiRagging',
                'culturalAllData'
                )
        );
    }
}
?>