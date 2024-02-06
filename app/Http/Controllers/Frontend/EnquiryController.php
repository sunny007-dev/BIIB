<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class EnquiryController extends Controller
{
    public function __construct()
    {
        $this->module_title = 'Enquiry';

        // module name
        $this->module_name = 'enquiry';

        // directory path of the module
        $this->module_path = 'enquiry';

        // module model name, path
        $this->module_model = "Modules\Contact\Entities\Enquiry";
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contact_us'
        ]);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $input = $request->all();
        $input['type'] = 'enquiry';

        $$module_name_singular = $module_model::create($input);


        return response()->json([
            'status' => 200,
            'message' => 'Enquiry successfully',
            'data' => $$module_name_singular
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
    }
}
