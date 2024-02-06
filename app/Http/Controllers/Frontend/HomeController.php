<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->module_title = 'Slider';

        // module name
        $this->module_name = 'slider';

        // directory path of the module
        $this->module_path = 'slider';



        // module model name, path
        $this->module_model = "Modules\Slider\Entities\Slider";

        $this->module_leadership_title = "Leadership";

        // module name
        $this->module_leadership_name = 'leadership';

        // directory path of the module
        $this->module_leadership_path = 'leadership';


        // module model name, path
        $this->module_leadership_model = "Modules\Team\Entities\Leadership";

        // Gallery
        $this->module_gallery_title = 'Gallery';

        // module name
        $this->module_gallery_name = 'gallery';

        // directory path of the module
        $this->module_gallery_path = 'gallery';


        // module model name, path
        $this->module_gallery_model = "Modules\Gallery\Entities\Gallery";

        // News
        $this->module_news_title = 'News';

        // module name
        $this->module_news_name = 'news';

        // directory path of the module
        $this->module_news_path = 'news';


        // module model name, path
        $this->module_news_model = "Modules\News\Entities\News";

        // Recruiter
        $this->module_recruiter_title = 'Recruiter';

        // module name
        $this->module_recruiter_name = 'recruiter';

        // directory path of the module
        $this->module_recruiter_path = 'recruiter';

        // module model name, path
        $this->module_recruiter_model = "Modules\Recruitment\Entities\Recruiter";

        // Courses
        $this->module_course_title = 'Course';

        // module name
        $this->module_course_name = 'course';

        // directory path of the module
        $this->module_course_path = 'course';

        // module model name, path
        $this->module_course_model = "Modules\Course\Entities\Course";

        // Testimonials
        $this->module_testimonial_title = 'Testimonial';

        // module name
        $this->module_testimonial_name = 'testimonial';

        // directory path of the module
        $this->module_testimonial_path = 'testimonial';


        // module model name, path
        $this->module_testimonial_model = "Modules\Testimonial\Entities\Testimonial";

        // Kpi
        $this->module_kpi_title = 'Kpi';

        // module name
        $this->module_kpi_name = 'kpi';

        // directory path of the module
        $this->module_kpi_path = 'kpi';

        // module model name, path
        $this->module_kpi_model = "Modules\Kpi\Entities\Kpi";

        // Slider
        $this->module_slider_title = 'Slider';

        // module name
        $this->module_slider_name = 'slider';

        // directory path of the module
        $this->module_slider_path = 'slider';

        // module model name, path
        $this->module_slider_model = "Modules\Slider\Entities\Slider";

        // Contact
        $this->module_contact_title = 'Contact';

        // module name
        $this->module_contact_name = 'contact';

        // directory path of the module
        $this->module_contact_path = 'contact';

        // module model name, path
        $this->module_contact_model = "Modules\Contact\Entities\Contact";

        // Award

        $this->module_award_title = 'Award';

        // module name
        $this->module_award_name = 'award';

        // directory path of the module
        $this->module_award_path = 'award';

        // module model name, path
        $this->module_award_model = "Modules\Award\Entities\Award";

        // Footer

        $this->module_footer_title = 'Footer';

        // module name
        $this->module_footer_name = 'footer';

        // directory path of the module
        $this->module_footer_path = 'footer';

        // module model name, path
        $this->module_footer_model = "Modules\Menus\Entities\Footer";
    }

    public function index()
    {
        $body_class = '';

        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_model = $this->module_model;

        $module_leadership_title = $this->module_leadership_title;
        $module_leadership_name = $this->module_leadership_name;
        $module_leadership_path = $this->module_leadership_path;
        $module_leadership_model = $this->module_leadership_model;

        $module_gallery_title = $this->module_gallery_title;
        $module_gallery_name = $this->module_gallery_name;
        $module_gallery_path = $this->module_gallery_path;
        $module_gallery_model = $this->module_gallery_model;

        $module_news_title = $this->module_news_title;
        $module_news_name = $this->module_news_name;
        $module_news_path = $this->module_news_path;
        $module_news_model = $this->module_news_model;

        $module_kpi_title = $this->module_kpi_title;
        $module_kpi_name = $this->module_kpi_name;
        $module_kpi_path = $this->module_kpi_path;
        $module_kpi_model = $this->module_kpi_model;

        $module_course_title = $this->module_course_title;
        $module_course_name = $this->module_course_name;
        $module_course_path = $this->module_course_path;
        $module_course_model = $this->module_course_model;

        $module_testimonial_title = $this->module_testimonial_title;
        $module_testimonial_name = $this->module_testimonial_name;
        $module_testimonial_path = $this->module_testimonial_path;
        $module_testimonial_model = $this->module_testimonial_model;

        $module_recruiter_title = $this->module_recruiter_title;
        $module_recruiter_name = $this->module_recruiter_name;
        $module_recruiter_path = $this->module_recruiter_path;
        $module_recruiter_model = $this->module_recruiter_model;

        $module_slider_title = $this->module_slider_title;
        $module_slider_name = $this->module_slider_name;
        $module_slider_path = $this->module_slider_path;
        $module_slider_model = $this->module_slider_model;

        $module_contact_title = $this->module_contact_title;
        $module_contact_name = $this->module_contact_name;
        $module_contact_path = $this->module_contact_path;
        $module_contact_model = $this->module_contact_model;

        $module_award_title = $this->module_award_title;
        $module_award_name = $this->module_award_name;
        $module_award_path = $this->module_award_path;
        $module_award_model = $this->module_award_model;

        $module_footer_title = $this->module_footer_title;
        $module_footer_name = $this->module_footer_name;
        $module_footer_path = $this->module_footer_path;
        $module_footer_model = $this->module_footer_model;

        $$module_name = $module_model::get();
        $$module_leadership_name = $module_leadership_model::get();
        $$module_gallery_name = $module_gallery_model::get();
        $$module_kpi_name = $module_kpi_model::where('categories', 'kpi')->get();
        $features = $module_kpi_model::where('categories', 'feature')->get();
        $$module_testimonial_name = $module_testimonial_model::get();
        $$module_news_name = $module_news_model::get();
        $$module_course_name = $module_course_model::get();
        $$module_recruiter_name = $module_recruiter_model::get();
        $$module_slider_name = $module_slider_model::get();
        $$module_contact_name = $module_contact_model::where('type', 'contact')->get();
        $$module_award_name = $module_award_model::get();
        $$module_footer_name = $module_footer_model::get()->groupBy('footer_category_name');

        $home = collect()->put('leadership', $$module_leadership_name)
            ->put('Gallery', $$module_gallery_name)
            ->put('Kpi', $$module_kpi_name)
            ->put('Feature', $features)
            ->put('Testimonial', $$module_testimonial_name)
            ->put('News', $$module_news_name)
            ->put('Course', $$module_course_name)
            ->put('Slider', $$module_slider_name)
            ->put('Recruiter', $$module_recruiter_name)
            ->put('Contact', $$module_contact_name)
            ->put('Award', $$module_award_name)
            ->put('Footer', $$module_footer_name);

        return response()->json([
            'status' => 200,
            'data' => $home
        ]);
    }
}
