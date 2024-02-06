<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class NewsDetailController extends Controller
{
    public function __construct() {
        $this->module_news_title = "News";

        // module name
        $this->module_news_name = 'news';

        // directory path of the module
        $this->module_news_path = 'news';

        // module model name, path
        $this->module_news_model = "Modules\News\Entities\News";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
    }
    
    public function newsdetails($id)  
        {  
            $module_news_title = $this->module_news_title;
            $module_news_name = $this->module_news_name;
            $module_news_path = $this->module_news_path;
            $module_news_model = $this->module_news_model;

            $allNews = $module_news_model::where('id','!=', $id)->where('type', 'news')->where('status', 1)->orderBy('order', 'asc')->get()->take(3);
  
            $news = [];
            $news = DB::table('news')->where('id', $id)->get();
    
            $module_banner_title = $this->module_banner_title;
            $module_banner_name = $this->module_banner_name;
            $module_banner_path = $this->module_banner_path;
            $module_banner_model = $this->module_banner_model;
        
            $banner = $module_banner_model::where('type', 'faculty')->where('status', 1)->get()->take(1);
    
            return view('frontend.newsdetails', compact(
                'news',
                'allNews',
                'banner'
            ));
        }
}
