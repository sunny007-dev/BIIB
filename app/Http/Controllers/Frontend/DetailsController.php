<?php

    namespace App\Http\Controllers\Frontend;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Response;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\DB;

    class DetailsController extends Controller {
        public function __construct() {
            $this->module_leadership_title = "Leadership";

            // module name
            $this->module_leadership_name = 'leadership';
    
            // directory path of the module
            $this->module_leadership_path = 'leadership';
    
            // module model name, path
            $this->module_leadership_model = "Modules\Team\Entities\Leadership";

            $this->module_faculty_title = "Faculty";

            // module name
            $this->module_faculty_name = 'faculty';
    
            // directory path of the module
            $this->module_faculty_path = 'faculty';
    
            // module model name, path
            $this->module_faculty_model = "Modules\Team\Entities\Faculty";
            
            $this->module_banner_title = "Banner";
            $this->module_banner_name = 'banner';
            $this->module_banner_path = 'banner';
            $this->module_banner_model = "Modules\Banner\Entities\Banner";
        }

        public function details($id)  
        {  
            $module_leadership_title = $this->module_leadership_title;
            $module_leadership_name = $this->module_leadership_name;
            $module_leadership_path = $this->module_leadership_path;
            $module_leadership_model = $this->module_leadership_model;

            $module_faculty_title = $this->module_faculty_title;
            $module_faculty_name = $this->module_faculty_name;
            $module_faculty_path = $this->module_faculty_path;
            $module_faculty_model = $this->module_faculty_model;

            $module_name_lsingular = $module_leadership_model::where('id','!=', $id)->where('type', 'home')->where('status', 1)->orderBy('order', 'asc')->get();
            $module_name_fsingular = $module_faculty_model::where('id','!=', $id)->where('status', 1)->orderBy('order', 'asc')->get();
            
            $results = [];
            $results = DB::table('leadership')->where('id', $id)->get();
            $faculty = [];
            $faculty = DB::table('faculty')->where('id', $id)->get();
            $news = [];
            $news = DB::table('news')->where('id', $id)->get();

            $module_banner_title = $this->module_banner_title;
            $module_banner_name = $this->module_banner_name;
            $module_banner_path = $this->module_banner_path;
            $module_banner_model = $this->module_banner_model;
        
            $banner = $module_banner_model::where('type', 'Faculty')->where('status', 1)->get()->take(1);

            $research =$module_leadership_model::where('id','=', $id)->where('status', 1)->get(['research_papers']);
            $bio = $module_leadership_model::where('id','=', $id)->where('status', 1)->get(['bio']);
            $certification =$module_leadership_model::where('id','=', $id)->where('status', 1)->get(['certifications']);
            $facultyDetail= collect([])->put('Bio',$bio)->put('Certification',$certification)->put('Research Papers',$research);
            
            return view('frontend.details', compact(
                'results',
                'faculty',
                'news',
                'module_name_lsingular',
                'module_name_fsingular',
                'banner',
                'research',
                'bio',
                'certification'
            ));
        }
    }
?>