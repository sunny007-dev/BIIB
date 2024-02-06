<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use Flash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Contact\Notifications\NewEnquiryAdded;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->module_title = 'Contact';

        // module name
        $this->module_name = 'contact';

        // directory path of the module
        $this->module_path = 'contact';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Contact\Entities\Address";

        // module title contact

        $this->module_enquiry_title = 'Enquiry';

        // module name
        $this->module_enquiry_name = 'enquiry';

        // directory path of the module
        $this->module_enquiry_path = 'enquiry';

        // module icon
        $this->module_enquiry_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_enquiry_model = "Modules\Contact\Entities\Enquiry";
        
        $this->module_banner_title = "Banner";
        $this->module_banner_name = 'banner';
        $this->module_banner_path = 'banner';
        $this->module_banner_model = "Modules\Banner\Entities\Banner";
    }


    public function index()
    {$body_class = '';

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'ShowAll';

        $meta_page_type = 'address';

        $$module_name = $module_model::where('status','=',1)->orderBy('order', 'asc')->get();
      
        $data = $$module_name;
        
        $module_banner_title = $this->module_banner_title;
        $module_banner_name = $this->module_banner_name;
        $module_banner_path = $this->module_banner_path;
        $module_banner_model = $this->module_banner_model;
    
        $banner = $module_banner_model::where('type', 'contact')->where('status', 1)->get()->take(1);

        return view(
            "frontend.contact",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action', 'banner')
        );
    }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }

    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required|string',
            'message' => 'required|max:1000',
            // 'g-recaptcha-response' => ['required', new ReCaptcha()]
        
        ]);
      
        $module_enquiry_title = $this->module_enquiry_title;
        $module_enquiry_name = $this->module_enquiry_name;
        $module_enquiry_path = $this->module_enquiry_path;
        $module_enquiry_model = $this->module_enquiry_model;
        $module_name_singular = Str::singular($module_enquiry_name);
 
        $input =$request->all();
        $input['type'] = 'enquiry';
        $input['status'] = 1;
        $$module_name_singular = $module_enquiry_model::create($input);
      
        $id =6;
        $user= User::find($id);
        $user->notify(new NewEnquiryAdded($$module_name_singular));
        Flash::success("<i class='fas fa-check'></i> New '".Str::singular($module_enquiry_title)."' Added")->important();
      
        //  Send mail to admin
        // Mail::send('frontend.contactMail', array(
        //     'name' => $input['name'],
        //     'email' => $input['email'],
        //     'phone' => $input['phone'],
        //     'subject' => 'New Enquiry',
        //     'message' => $input['message'],
        // ), function ($message) use ($request) {
        //     $message->from($request->email)
        //      ->to('imcdev22@gmail.com', 'Admin')
        //     // ->bcc('info@indiamobilecongress.com')
        //     ->subject('New Enquiry from ');
        // });
        session()->Flash('flash_message', 'Your Contact Information Is Registered');
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
