<?php

namespace Modules\Contact\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Contact\Http\Requests\Frontend\EnquiryRequest;
use Modules\Contact\Notifications\NewEnquiryAdded;

class EnquiryController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Enquiry';

        // module name
        $this->module_name = 'enquiry';

        // module icon
        $this->module_icon = 'fas fa-comments';

        // module model name, path
        $this->module_model = "Modules\Contact\Entities\Enquiry";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::get();

        return response()->json([
            'data' => $$module_name
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $id = decode_id($id);

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::whereId($id)->published()->first();

        if (! $$module_name_singular) {
            abort(404);
        }

        return view(
            "comment::frontend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular")
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(EnquiryRequest $request)
    {

        dd('1');

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';
        $$module_name_singular = $module_model::create($request->all());
      
        if (isset($$module_name_singular)) {
            auth()->user()->notify(new NewCommentAdded($$module_name_singular));
        }

        Flash::success("<i class='fas fa-check'></i> New '".Str::singular($module_title)."' Added")->important();

        Log::info(label_case($module_title.' '.$module_action)." | '".$$module_name_singular->name.'(ID:'.$$module_name_singular->id.") ' by User:".Auth::user()->name.'(ID:'.Auth::user()->id.')');

        return response()->json([
            'status' => 200,
            'message' => 'Enquiry Created Success',
            'data' => $$module_name_singular
        ]);
    }
}
