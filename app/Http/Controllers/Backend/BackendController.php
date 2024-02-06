<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BackendController extends Controller
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

        $this->module_contact_title = "Contact";

        // module name
        $this->module_contact_name = 'contact';

        // directory path of the module
        $this->module_contact_path = 'contact';

        // module model name, path
        $this->module_contact_model = "Modules\Contact\Entities\Contact";


        $this->module_award_title = "Award";

        // module name
        $this->module_award_name = 'award';

        // directory path of the module
        $this->module_award_path = 'award';

        // module model name, path
        $this->module_award_model = "Modules\Award\Entities\Award";

        // Recruiter Title
        $this->module_recruiter_title = 'Recruiter';

        // module name
        $this->module_recruiter_name = 'recruiters';

        // directory path of the module
        $this->module_recruiter_path = 'recruiters';

        // module model name, path
        $this->module_recruiter_model = "Modules\Recruitment\Entities\Recruiter";

        // Interest Title
        $this->module_interest_title = "Interest";

        // module name
        $this->module_interest_name = 'interest';

        // directory path of the module
        $this->module_interest_path = 'interest';

        // module model name, path
        $this->module_interest_model = "Modules\Contact\Entities\Interest";

        // Award Title
        $this->module_award_title = "Award";

        // module name
        $this->module_award_name = 'award';

        // directory path of the module
        $this->module_award_path = 'award';

        // module model name, path
        $this->module_award_model = "Modules\Award\Entities\Award";

        // Placement Title
        $this->module_placement_title = "Placement";

        // module name
        $this->module_placement_name = 'placement';

        // directory path of the module
        $this->module_placement_path = 'placement';

        // module model name, path
        $this->module_placement_model = "Modules\Recruitment\Entities\Placement";

        // Internship Title
        $this->module_internship_title = "Internship";

        // module name
        $this->module_internship_name = 'internship';

        // directory path of the module
        $this->module_internship_path = 'internship';

        // module model name, path
        $this->module_internship_model = "Modules\Recruitment\Entities\Internship";


        // Visitor Title
        $this->module_visitor_title = "Visitor";

        // module name
        $this->module_visitor_name = 'visitor';

        // directory path of the module
        $this->module_visitor_path = 'visitor';

        // module model name, path
        $this->module_visitor_model = "App\Models\Visitor";


        // News Title
        $this->module_news_title = "News";

        // module name
        $this->module_news_name = 'news';

        // directory path of the module
        $this->module_news_path = 'news';

        // module model name, path
        $this->module_news_model = "Modules\News\Entities\News";


        // Dated Title
        $this->module_dates_title = "Dates";

        // module name
        $this->module_dates_name = 'dates';

        // directory path of the module
        $this->module_dates_path = 'dates';

        // module model name, path
        $this->module_dates_model = "Modules\Dates\Entities\Dates";
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Enquiry
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_model = $this->module_model;

        //Contact
        $module_contact_title = $this->module_contact_title;
        $module_contact_name = $this->module_contact_name;
        $module_contact_path = $this->module_contact_path;
        $module_contact_model = $this->module_contact_model;

        //award
        $module_award_title = $this->module_award_title;
        $module_award_name = $this->module_award_name;
        $module_award_path = $this->module_award_path;
        $module_award_model = $this->module_award_model;

        //recruiter
        $module_recruiter_title = $this->module_recruiter_title;
        $module_recruiter_name = $this->module_recruiter_name;
        $module_recruiter_path = $this->module_recruiter_path;
        $module_recruiter_model = $this->module_recruiter_model;

        //interest
        $module_interest_title = $this->module_interest_title;
        $module_interest_name = $this->module_interest_name;
        $module_interest_path = $this->module_interest_path;
        $module_interest_model = $this->module_interest_model;

        //awards
        $module_award_title = $this->module_award_title;
        $module_award_name = $this->module_award_name;
        $module_award_path = $this->module_award_path;
        $module_award_model = $this->module_award_model;

        //placements
        $module_placement_title = $this->module_placement_title;
        $module_placement_name = $this->module_placement_name;
        $module_placement_path = $this->module_placement_path;
        $module_placement_model = $this->module_placement_model;

        //internship
        $module_internship_title = $this->module_internship_title;
        $module_internship_name = $this->module_internship_name;
        $module_internship_path = $this->module_internship_path;
        $module_internship_model = $this->module_internship_model;

        //visitor
        $module_visitor_title = $this->module_visitor_title;
        $module_visitor_name = $this->module_visitor_name;
        $module_visitor_path = $this->module_visitor_path;
        $module_visitor_model = $this->module_visitor_model;

        //news
        $module_news_title = $this->module_news_title;
        $module_news_name = $this->module_news_name;
        $module_news_path = $this->module_news_path;
        $module_news_model = $this->module_news_model;

        //dates
        $module_dates_title = $this->module_dates_title;
        $module_dates_name = $this->module_dates_name;
        $module_dates_path = $this->module_dates_path;
        $module_dates_model = $this->module_dates_model;

        //count enquiry all
        $count_enquiry = $module_model::where('type', 'enquiry')->count();
        //count today enquiry
        $count_all_enquiry = $module_model::select(DB::raw('count(*) as count '), DB::raw("DAYNAME(created_at) as day_name"))->where('type', 'enquiry')
            ->groupBy('created_at')->get();
        //count interest all
        $count_interest = $module_interest_model::count();
        //count today interest
        $count_today_interest = $module_interest_model::select(DB::raw('count(*) as count '), DB::raw("DAYNAME(created_at) as day_name"))
            ->whereDate('created_at', Carbon::today())->groupBy('created_at')->get()->toArray();
        //count today all
        $count_contact = $module_contact_model::where('type', 'contact')->count();
        //count today contact
        $count_all_contact = $module_model::select(DB::raw('count(*) as count '), DB::raw("DAYNAME(created_at) as day_name"))->where('type', 'contact')
            ->groupBy('created_at')->get();
        //count recruiter all
        $count_recruiter = $module_recruiter_model::count();
        //count today recruiter
        $count_all_recruiter = $module_recruiter_model::select(DB::raw('count(*) as count '), DB::raw("DAYNAME(created_at) as day_name"))
            ->groupBy('created_at')->get();
        $count_today_recruiter_check = $module_recruiter_model::select(DB::raw('count(*) as count '), DB::raw("DAYNAME(created_at) as day_name"))
            ->whereDate('created_at', Carbon::today())->groupBy('created_at')->count();
        //count awards all
        $count_awards = $module_award_model::count();
        //count today awards
        $count_all_awards = $module_award_model::select(DB::raw('count(*) as count '), DB::raw("DAYNAME(created_at) as day_name"))
            ->groupBy('created_at')->get();

        //count placements 2020-2022
        $count_placement = $module_placement_model::count();
        //count today placements
        $count_all_placement_2022 = $module_placement_model::select(DB::raw('count(*) as count '),\DB::raw("year as Year "))->where('type', 'placements')->where('year','=','2020-2022')
            ->groupBy('year')->get();
       $count_all_placement_2020 = $module_placement_model::select(DB::raw('count(*) as count '),\DB::raw("year as Year "))->where('type', 'placements')->where('year','=','2018-2020')
            ->groupBy('year')->get();
        //count internship all
        $count_internship = $module_internship_model::count();
        //count today internships
        $count_all_internship = $module_internship_model::select(DB::raw('count(*) as count '), DB::raw("DAYNAME(created_at) as day_name"))->where('type', 'internships')
            ->groupBy('created_at')->get();

        $visitors = $module_visitor_model::select(DB::raw('count(*) as count'), DB::raw("DAYNAME(date) as day_name"))
            ->where('date', '>', today()->subDay(6))->groupBy('day_name')->get();
        $count_all_placement = $module_placement_model::select(DB::raw('count(*) as count '), DB::raw("DAYNAME(created_at) as day_name"))->where('type', 'placements')
            ->groupBy('created_at')->get();

        $count_recruiters = collect($count_recruiter);

        $count_all_news = $module_news_model::all();
        //count news all
        $count_news = $module_news_model::count();
        //dates
        $count_all_dates = $module_dates_model::all();

        foreach ($count_all_recruiter as $row) {

            $recruiter['label'][] = $row->day_name;
            $recruiter['count'][] = (int)$row->count;
            $recruiter['all_count'] =  $count_recruiters;
        }

        $recruiter_all_label = json_encode($recruiter['label']);
        $recruiter_day_count = json_encode($recruiter['count']);
        $recruiter_all_count = $recruiter['all_count'][0];
        $recruiter_title = $module_recruiter_title;

        $enquiry = [];

        foreach ($count_all_enquiry as $row) {

            $enquiry['label'][] = $row->day_name;
            $enquiry['count'][] = (int)$row->count;
            $enquiry['all_count'] =  $count_enquiry;
        }

        $enquiry_all_label = json_encode($enquiry['label']);
        $enquiry_day_count = json_encode($enquiry['count']);
        $enquiry_all_count = $enquiry['all_count'];
        $enquiry_title = $module_title;

        $award = [];

        foreach ($count_all_awards as $row) {

            $award['label'][] = $row->day_name;
            $award['count'][] = (int)$row->count;
            $award['all_count'] =  $count_awards;
        }

        $award_all_label = json_encode($award['label']);
        $award_day_count = json_encode($award['count']);
        $award_all_count = $award['all_count'];
        $award_title = $module_award_title;

        $contact = [];

        // foreach ($count_all_contact as $row) {

        //     $contact['label'][] = $row->day_name;
        //     $contact['count'][] = (int)$row->count;
        //     $contact['all_count'] =  $count_contact;
        // }

        // $contact_all_label = json_encode($contact['label']);
        // $contact_day_count = json_encode($contact['count']);
        // $contact_all_count = $contact['all_count'];
        // $contact_title = $module_contact_title;

        $placement_2022 = [];
        $placement_2020 = [];
       
        foreach ($count_all_placement_2022 as $row) {

            $placement_2022['label'][] = $row->Year;
            $placement_2022['count'][] = (int)$row->count;
            $placement_2022['all_count'] =  $count_placement;
        }
         foreach ($count_all_placement_2020 as $row) {

            $placement_2020['label'][] = $row->Year;
            $placement_2020['count'][] = (int)$row->count;
            $placement_2020['all_count'] =  $count_placement;
        }


        $placement_all_label_2022 = json_encode($placement_2022['label']);
        $placement_year_count_2022 = json_encode($placement_2022['count']);
        $placement_all_count_2022 = $placement_2022['all_count'];
        $placement_all_label_2020 = json_encode($placement_2020['label']);
        $placement_year_count_2020 = json_encode($placement_2020['count']);
        $placement_all_count_2020 = $placement_2020['all_count'];
        $placement_title = $module_placement_title;


        $internship = [];

        foreach ($count_all_internship as $row) {

            $internship['label'][] = $row->day_name;
            $internship['count'][] = (int)$row->count;
            $internship['all_count'] =  $count_internship;
        }

        $internship_all_label = json_encode($internship['label']);
        $internship_day_count = json_encode($internship['count']);
        $internship_all_count = $internship['all_count'];
        $internship_title = $module_internship_title;

        $placement = [];

        foreach ($count_all_placement as $row) {

            $placement['label'][] = $row->day_name;
            $placement['count'][] = (int)$row->count;
            $placement['all_count'] =  $count_placement;
        }

        foreach ($visitors as $row) {
            $visit['label'][] = $row->day_name;
            $visit['data'][] = (int) $row->count;
        }

        $visitorl = json_encode($visit['label']);
        $visitor = json_encode($visit['data']);

        $placement_all_label = json_encode($placement['label']);
        $placement_day_count = json_encode($placement['count']);
        $placement_all_count = $placement['all_count'];
        $placement_title = $module_placement_title;

        foreach ($count_all_news as $row) {

            $news['label'][] = $row->day_name;
            $news['data'][] = (int) $row->count;
        }
       

        return view("backend.index", compact(
            'recruiter_all_label',
            'recruiter_all_count',
            'recruiter_title',
            'enquiry_all_label',
            'enquiry_all_count',
            'enquiry_title',
            'award_all_label',
            'award_all_count',
            'award_title',
          
            'placement_all_label',
            'placement_all_count', 
            'placement_day_count',
            'placement_title',
            'internship_all_label',
            'internship_day_count',
            'internship_title',
            'placement_all_label_2020',
            'placement_all_label_2022',
            'placement_year_count_2020',
            'placement_year_count_2022',
            'placement_title',
            'placement',
            'visitor',
            'visitorl',
            'count_all_news',
            'count_all_dates'
        ));
    }
}
