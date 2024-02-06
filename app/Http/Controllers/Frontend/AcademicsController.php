<?php

    namespace App\Http\Controllers\Frontend;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Response;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\DB;

    class AcademicsController extends Controller {
        public function __construct()
        { 
            $this->module_certified_title = "Certified";
            $this->module_certified_name = 'certified';
            $this->module_certified_path = 'certified';
            $this->module_certified_model = "Modules\Approval\Entities\Certified";

            $this->module_leadership_title = "Leadership";
            $this->module_leadership_name = 'leadership';
            $this->module_leadership_path = 'leadership';
            $this->module_leadership_model = "Modules\Team\Entities\Leadership";


            $this->module_faculty_title = "Faculty";
            $this->module_faculty_name = 'faculty';
            $this->module_faculty_path = 'faculty';
            $this->module_faculty_model = "Modules\Team\Entities\Faculty";

            $this->module_lectures_title = "Lecture";
            $this->module_lectures_name = 'lecture';
            $this->module_lectures_path = 'lecture';
            $this->module_lectures_model = "Modules\Lecture\Entities\Lecture";
            
            $this->module_banner_title = "Banner";
            $this->module_banner_name = 'banner';
            $this->module_banner_path = 'banner';
            $this->module_banner_model = "Modules\Banner\Entities\Banner";
         }
    
        public function index()
        {
            $module_certified_title = $this->module_certified_title;
            $module_certified_name = $this->module_certified_name;
            $module_certified_path = $this->module_certified_path;
            $module_certified_model = $this->module_certified_model;
        
            $aicte = $module_certified_model::where('certified_type_name', 'Aicte')->orderBy('order', 'desc')->get();

            $module_faculty_title = $this->module_faculty_title;
            $module_faculty_name = $this->module_faculty_name;
            $module_faculty_path = $this->module_faculty_path;
            $module_faculty_model = $this->module_faculty_model;
    
       
            $module_name_coresingular = $module_faculty_model::where('faculty_category_name', 'Core Faculty')->where('status', 1)->orderBy('order', 'asc')->get();
            $module_name_multisingular = $module_faculty_model::where('faculty_category_name', 'Multi Development Personality Faculty')->where('status', 1)->orderBy('order', 'asc')->get();
            $module_name_visitngsingular = $module_faculty_model::where('faculty_category_name', 'Visiting Faculty')->where('status', 1)->orderBy('order', 'asc')->get();

            $module_lectures_title = $this->module_lectures_title;
            $module_lectures_name = $this->module_lectures_name;
            $module_lectures_path = $this->module_lectures_path;
            $module_lectures_model = $this->module_lectures_model;

            $inductionProgram = $module_lectures_model::where('type','induction_programme')->where('status', 1)->orderBy('order', 'asc')->get();
           
            $module_banner_title = $this->module_banner_title;
            $module_banner_name = $this->module_banner_name;
            $module_banner_path = $this->module_banner_path;
            $module_banner_model = $this->module_banner_model;
        
            $banner = $module_banner_model::where('type', 'academics')->where('status', 1)->get()->take(1);


            return view(
                "frontend.academics",
                compact(
                    'aicte',
                    'module_name_coresingular',
                    'module_name_multisingular',
                    'module_name_visitngsingular',
                    'inductionProgram',
                    'banner'
                )
            );
        }   

        /**
         * Display a listing of the resource.
         *
         * @return Response
         */
        public function mouCapital()
        {
            return view(
                "frontend.pages.academics.mouphillipcapitalindia"
            );
        }   

        public function mouSap()
        {
            return view(
                "frontend.pages.academics.mousapindia"
            );
        }   
        
        public function classBasedTraining()
        {
            return view(
                "frontend.pages.academics.classbasedtraining"
            );
        }   

        public function inductionProgram()
        {
            return view(
                "frontend.pages.academics.inductionprogram"
            );
        }   

    }
?>