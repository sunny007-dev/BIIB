<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class EventController extends Controller {
    public function __construct(){
       // News
       $this->module_event_title = 'News';
       // module name
       $this->module_event_name = 'news';
       // directory path of the module
       $this->module_event_path = 'news';
       // module model name, path
       $this->module_event_model = "Modules\News\Entities\News";
       
       $this->module_banner_title = "Banner";
       $this->module_banner_name = 'banner';
       $this->module_banner_path = 'banner';
       $this->module_banner_model = "Modules\Banner\Entities\Banner";
    }

    public function index()
    {
        $module_event_title = $this->module_event_title;
        $module_event_name = $this->module_event_name;
        $module_event_path = $this->module_event_path;
        $module_event_model = $this->module_event_model;

        $events = $module_event_model::where('type', 'event')->where('status', 1)->orderBy('order', 'asc')->get();
        
        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'event')->where('status', 1)->get()->take(1);
     
     
        return view('frontend.event',
                    compact('events', 'banner')
                    );
    }
}
?>