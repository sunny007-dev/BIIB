<?php

    namespace App\Http\Controllers\Frontend;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Response;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\DB;

    class FacultyController extends Controller {
        public function __construct()
        {  
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
    
        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function index()
        {
            $module_leadership_title = $this->module_leadership_title;
            $module_leadership_name = $this->module_leadership_name;
            $module_leadership_path = $this->module_leadership_path;
            $module_leadership_model = $this->module_leadership_model;

            $module_name_lsingular = Str::singular($module_leadership_name);


            $$module_name_lsingular = $module_leadership_model::where('type', 'home')->where('status', 1)->orderBy('order', 'asc')->get();

            $module_banner_title = $this->module_banner_title;
            $module_banner_name = $this->module_banner_name;
            $module_banner_path = $this->module_banner_path;
            $module_banner_model = $this->module_banner_model;
        
            $banner = $module_banner_model::where('type', 'faculty')->where('status', 1)->get()->take(1);
     
            return view(
                "frontend.faculty",
                compact(
                    'module_name_lsingular',

                    "$module_name_lsingular",
                    'banner'
                )
            );
        }

        public function corefaculty()
        {
            $module_faculty_title = $this->module_faculty_title;
            $module_faculty_name = $this->module_faculty_name;
            $module_faculty_path = $this->module_faculty_path;
            $module_faculty_model = $this->module_faculty_model;
    
            $module_name_fsingular = Str::singular($module_faculty_name);

            $$module_name_fsingular = $module_faculty_model::where('faculty_category_name', 'Core Faculty')->where('status', 1)->orderBy('order', 'asc')->get();
            return view(
                "frontend.pages.academics.corefaculty",
                compact(
                    'module_name_fsingular',

                    "$module_name_fsingular"
                )
            );
        }
        public function multifaculty()
        {
            $module_faculty_title = $this->module_faculty_title;
            $module_faculty_name = $this->module_faculty_name;
            $module_faculty_path = $this->module_faculty_path;
            $module_faculty_model = $this->module_faculty_model;
    
            $module_name_fsingular = Str::singular($module_faculty_name);

            $$module_name_fsingular = $module_faculty_model::where('faculty_category_name', 'Multi Development Personality Faculty')->where('status', 1)->orderBy('order', 'asc')->get();
            return view(
                "frontend.pages.academics.multifaculty",
                compact(
                    'module_name_fsingular',
                    "$module_name_fsingular"
                )
            );
        }

        public function visitingfaculty()
        {
            $module_faculty_title = $this->module_faculty_title;
            $module_faculty_name = $this->module_faculty_name;
            $module_faculty_path = $this->module_faculty_path;
            $module_faculty_model = $this->module_faculty_model;
    
            $module_name_fsingular = Str::singular($module_faculty_name);

            $$module_name_fsingular = $module_faculty_model::where('faculty_category_name', 'Visiting Faculty')->where('status', 1)->orderBy('order', 'asc')->get();
            return view(
                "frontend.pages.academics.visitingfaculty",
                compact(
                    'module_name_fsingular',
                    "$module_name_fsingular"
                )
            );
        }
        
    }
?>