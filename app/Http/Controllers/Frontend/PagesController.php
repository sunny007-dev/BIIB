<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class PagesController extends Controller
{
    public function __construct()
    {
        // Pages 
        $this->module_title = 'Page';

        // module name
        $this->module_name = 'pages';

        // directory path of the module
        $this->module_path = 'pages';

        // module model name, path
        $this->module_model = "Modules\PageMenu\Entities\Page";
    }


    //
    public function index_list()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_model = $this->module_model;

        $pages = $module_model::get()->groupBy(['pages_category_name','sub_pages_name']);

        return response()->json([
            'message' => '200',
            'data' => $pages
        ]);
    }

    //
    public function index($pageName, $slug)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_model = $this->module_model;

        $pages = $module_model::where([['slug', $slug], ['pages_category_name', $pageName]])->get();

        return response()->json([
            'message' => '200',
            'data' => $pages
        ]);
    }

    //
    public function list()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_model = $this->module_model;

        $pages = $module_model::all();

        return response()->json([
            'message' => '200',
            'data' => $pages
        ]);
    }
}
