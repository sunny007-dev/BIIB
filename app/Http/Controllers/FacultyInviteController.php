<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Auth;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Log;
use Yajra\DataTables\DataTables;
use Illuminate\Support\File;
use Modules\Team\Entities\Faculty;

class FacultyInviteController extends Controller
{


    public function __construct()
    {
        // Page Title
        $this->module_title = 'Faculty';

        // module name
        $this->module_name = 'faculty';

        // directory path of the module
        $this->module_path = 'faculty';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Team\Entities\Faculty";
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function form()
    {
        return view('invite.faculty');
    }


 /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        $topics = Topics::pluck('name', 'id');
        $socials = Socials::pluck('name');

        Log::info(label_case($module_title.' '.$module_action).' | User:'.Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return view(
            "invite.create",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular','topics')
        );
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
       // validation
        $request->validate([
    
            "email" => "required|email",
      
        ], [
            'email.unique' => 'Email Already Exist',
            
        ]);
        
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

     
        $user = new Faculty();
       
       
        if ($request->hasFile('featured_image')) {
          
         
            $image = $request->file('featured_image');
            $fileName = $image->getClientOriginalName();;
            $extension = $request->file('featured_image')->getClientOriginalExtension();
           
            $image_full_path = 'storage/files/speaker2022/' . $fileName;

            $imagepath = $image->move(public_path('storage/files/speaker2022/'), $image_full_path);

            $user->featured_image = $image_full_path;
        }
        $faculty =Faculty::all()->last();
        $order= $faculty->order_by;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->institute_name =$request->institute_name;
        $user->designation = $request->designation;
        $user->company = $request->company;
        $user->department = $request->department;
        $user->intro = $request->intro;
        $user->education = $request->education;
        $user->total_work_experience = $request->total_work_experience;
        $user->certification_name = $request->certification_name;
        $user->research_paper_name = $request->research_paper_name;
        $user->is_featured = 1;
        $user->status = 2;
        $user->order_by = $order+1;
        $user->save();
           
        // $name = $user->name;
        // $company = $user->company;
            // Mail::send('emails.notification_mail', ['name' => $name,'company'=>$company], function ($message) use ($name,$company) {

            //     $message->to('program@indiamobilecongress.com');
            //     $message->subject('Thank You For Participating');
            //     $message->from('indiamobilecongress@gmail.com');
            // });

               
                session()->Flash('message', 'Your Information In Registered');
                return redirect()
                    ->route('thanks');
            
   
    }
/**
     * Send View Thanks On Route.
     *
     * @return Response
     */
    public function thanks()
    {
        return view('invite.thanks');
    }
    
    /**
     * Send View Thanks On Route ThanksLink Give Link to Speaker Form.
     *
     * @return Response
     */
       public function thanksLink()
    {
        $string = url()->previous();
        $string = preg_split("/[=\/]/", $string);
        $string = $string[4];

        return view('invite.thanksLink',
        compact('string')
);
    }

    /**
     * Select Options for Select 2 Request/ Response.
     *
     * @return Response
     */
    public function index_list(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $query_data = Socials::where('name', 'LIKE', "%$term%")->orWhere('slug', 'LIKE', "%$term%")->limit(7)->get();

        $$module_name = [];

        foreach ($query_data as $row) {
            $$module_name[] = [
                'id'   => $row->id,
                'text' => $row->name.' (Slug: '.$row->slug.')',
            ];
        }

        return response()->json($$module_name);
    }
    public function accept($token)
    {
        $string =url()->previous();
        $string= preg_split("/[=\/]/",$string);
     
        $invite_token = $string[4];
      
        /// Look up the invite
            if($invite_token =='vrda73yT-xSfDs!UcA9gzq5zvgj6MxjUFcCuK5ZSnJrWHfiF8F0CIN%3FuAVqkmXl1') {
              
                return view('invite.form');
            }else{
                abort(404);
            }
       
    }
    
   
}
