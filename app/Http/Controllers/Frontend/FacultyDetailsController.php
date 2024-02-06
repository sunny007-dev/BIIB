<?php

    namespace App\Http\Controllers\Frontend;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Response;
    use Illuminate\Support\Str;
    use Illuminate\Support\Facades\DB;

    class FacultyDetailsController extends Controller {
        public function __construct() {
            $this->module_faculty_title = "Faculty";
            $this->module_faculty_name = 'faculty';
            $this->module_faculty_path = 'faculty';
            $this->module_faculty_model = "Modules\Team\Entities\Faculty";
            
            $this->module_banner_title = "Banner";
            $this->module_banner_name = 'banner';
            $this->module_banner_path = 'banner';
            $this->module_banner_model = "Modules\Banner\Entities\Banner";
            
        }

        public function details($id)  
        {  
            $module_faculty_title = $this->module_faculty_title;
            $module_faculty_name = $this->module_faculty_name;
            $module_faculty_path = $this->module_faculty_path;
            $module_faculty_model = $this->module_faculty_model;
            
            
            $module_name_fsingular = $module_faculty_model::where('id','!=', $id)->where('status', 1)->orderBy('order', 'asc')->get();

            $faculty = [];
            $faculty = DB::table('faculty')->where('id', $id)->get();
            
            $module_banner_title = $this->module_banner_title;
            $module_banner_name = $this->module_banner_name;
            $module_banner_path = $this->module_banner_path;
            $module_banner_model = $this->module_banner_model;
        
            $banner = $module_banner_model::where('type', 'faculty')->where('status', 1)->get()->take(1);
            
            $research =$module_faculty_model::where('id','=', $id)->where('status', 1)->get(['research_papers']);
            $bio = $module_faculty_model::where('id','=', $id)->where('status', 1)->get(['bio']);
            $certification =$module_faculty_model::where('id','=', $id)->where('status', 1)->get(['certifications']);
            $facultyDetail= collect([])->put('Bio',$bio)->put('Certification',$certification)->put('Research Papers',$research);
           
          
            
            return view('frontend.facultydetails', compact(
                'faculty',
                'module_name_fsingular',
                'banner',
                'facultyDetail',
                'research',
                'bio',
                'certification'
            ));
        }
    }
?>