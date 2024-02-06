<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

class SitemapController extends Controller {
    public function __construct(){
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";

        $this->module_sitemap_title = "Sitemap";
        $this->module_sitemap_name = 'sitemap';
        $this->module_sitemap_path = 'sitemap';
        $this->module_sitemap_model = "Modules\Sitemap\Entities\Sitemap";
    }

    public function index()
    {
        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'sitemap')->where('status', 1)->get()->take(1);

        $module_sitemap_title = $this->module_sitemap_title;
        $module_sitemap_name = $this->module_sitemap_name;
        $module_sitemap_path = $this->module_sitemap_path;
        $module_sitemap_model = $this->module_sitemap_model;

        $sitemap = $module_sitemap_model::where('status', 1)->orderBy('order', 'asc')->get()->groupBy('categories');

        return view('frontend.sitemap',
                    compact(
                        'banner',
                        'sitemap'
                    ));
    }
}
?>
