<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Brochure\Entities\Brochure;
use Modules\BrochureLink\Entities\BrochureLink;

class AdmissionController extends Controller
{
    public function __construct()
    {
        $this->module_pages_title = "Page";
        $this->module_pages_name = 'page';
        $this->module_pages_path = 'page';
        $this->module_pages_model = "Modules\PageMenu\Entities\Page";

        $this->module_loan_title = "Loan";
        $this->module_loan_name = 'loan';
        $this->module_loan_path = 'loan';
        $this->module_loan_model = "Modules\Loan\Entities\Loan";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
    }

    public function index()
    {
        $module_pages_title = $this->module_pages_title;
        $module_pages_name = $this->module_pages_name;
        $module_pages_path = $this->module_pages_path;
        $module_pages_model = $this->module_pages_model;
        
        /** Scholarship Data **/
        $pillaiScholarship = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 30)->orderBy('order', 'desc')->get();
        $balaScholarship = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 31)->orderBy('order', 'desc')->get();
        $gnrScholarship = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 32)->orderBy('order', 'desc')->get();
        $shejwalkarScholarship = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 33)->orderBy('order', 'desc')->get();
        $scholarshipFeeStructure = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 48)->orderBy('order', 'desc')->get();

        /** MBA Programs Data **/
        $mbaProgram = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 22)->orderBy('order', 'desc')->get();
        $mbaEligibility = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 24)->orderBy('order', 'desc')->get();
        $howtoApply = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 25)->orderBy('order', 'desc')->get();
        
        $admissionProcess = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 26)->orderBy('order', 'desc')->get();
        $selectionProcess = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 27)->orderBy('order', 'desc')->get();
        $importantContacts = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 38)->orderBy('order', 'desc')->get();
        $gdPiCenter = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 28)->orderBy('order', 'desc')->get();
        $importantDates = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 29)->orderBy('order', 'desc')->get();
        $mbaFeeStructure = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 40)->orderBy('order', 'desc')->get();
    
        /** PHD Programs Data **/
        $phdProgram = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 23)->orderBy('order', 'desc')->get();
        $phdEligibilityDuration = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 34)->get();
        $phdAdmissionProcedure = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 35)->get();
        $phdImportantInstructionDates = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 36)->get();

        $phdFeeStructure = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 37)->orderBy('order', 'desc')->get();
        
        $courseCurriculum = $module_pages_model::where('pages_category_id', 20)->whereIn('sub_pages_name', ['Course Curriculum'])->orderBy('order', 'desc')->get();

        $module_loan_title = $this->module_loan_title;
        $module_loan_name = $this->module_loan_name;
        $module_loan_path = $this->module_loan_path;
        $module_loan_model = $this->module_loan_model;

        $loanContent = $module_pages_model::where('pages_category_id', 20)->where('sub_pages_id', 39)->get();

        $loan = $module_loan_model::where('status', 1)->orderBy('order', 'asc')->get();
        
        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'admission')->where('status', 1)->get()->take(1);

        return view('frontend.admission',
        compact(
            'pillaiScholarship',
            'balaScholarship',
            'gnrScholarship',
            'shejwalkarScholarship',
            'scholarshipFeeStructure',
            'mbaProgram',
            'mbaEligibility',
            'howtoApply',
            'admissionProcess',
            'selectionProcess',
            'importantContacts',
            'gdPiCenter',
            'importantDates',
            'mbaFeeStructure',
            'phdProgram',
            'phdEligibilityDuration',
            'phdImportantInstructionDates',
            'phdFeeStructure',
            'phdAdmissionProcedure',
            'loan',
            'loanContent',
            'banner',
            'courseCurriculum'
        )
        
        );
    }
     public function downloadBrochure(Request $request)
    {
        
    	$this->validate($request, [
           
            'email' => 'required|email',
            'name' => 'required',
            'mobile_number' => 'required|numeric',
            'course' => 'required',
            'g-recaptcha-response' => 'required'
        ]);
      
        // Validation passed
     
        $input =$request->all();
        $input['status'] = 1;

         Brochure::create($input);

         $link = BrochureLink::where('type','=','MBA')->get()->pluck('brochure_url');
        

        return redirect()->to($link[0]);

    }

    public function downloadBrochurePhd(Request $request)
    {
    	$this->validate($request, [
           
            'email' => 'required|email',
            'name' => 'required',
            'mobile_number' => 'required|numeric',
            'course' => 'required',
            'g-recaptcha-response' => 'required'
        ]);
      
        // Validation passed
     
        $input =$request->all();
        $input['status'] = 1;

         Brochure::create($input);

         $link = BrochureLink::where('type','=','Ph.D')->get()->pluck('brochure_url');
        

        return redirect()->to($link[0]);

    }
}
