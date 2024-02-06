<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventDetailsController extends Controller
{
    public function __construct(){

        $this->module_eventdetail_title = 'News';
        $this->module_eventdetail_name = 'news';
        $this->module_eventdetail_path = 'news';
        $this->module_eventdetail_model = "Modules\News\Entities\News";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
     }
 
     public function eventdetail($id)
     {
         $module_eventdetail_title = $this->module_eventdetail_title;
         $module_eventdetail_name = $this->module_eventdetail_name;
         $module_eventdetail_path = $this->module_eventdetail_path;
         $module_eventdetail_model = $this->module_eventdetail_model;
 
         $allEvent = $module_eventdetail_model::where('id','!=', $id)->where('type', 'event')->where('status', 1)->orderBy('order', 'asc')->get()->take(3);
  
         $event = [];
         $event = DB::table('news')->where('id', $id)->get();
         
         $singleEvent = $module_eventdetail_model::where('id','=', $id)->where('type', 'event')->where('status', 1)->orderBy('order', 'asc')->get()->take(1);
         
         $module_banner_title = $this->module_banner_title;
         $module_banner_name = $this->module_banner_name;
         $module_banner_path = $this->module_banner_path;
         $module_banner_model = $this->module_banner_model;
     
         $banner = $module_banner_model::where('type', 'event')->where('status', 1)->get()->take(1);
 
 
         return view('frontend.eventdetail', compact(
             'event',
             'allEvent',
             'banner',
             'singleEvent'
         ));
     }
}
