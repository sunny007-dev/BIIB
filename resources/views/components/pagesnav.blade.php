 <link rel="stylesheet" type="text/css" href="{{asset('css/pagesnav.css')}}">

@if(request()->is('about'))
<nav class="bg-white" id="pagesNavId">
    <div class="container">
        <div class="nav nav-tabs main-tabs border-0" id="nav-tab" role="tablist">
            <a class="nav-link active" id="about-biib" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">About BIIB</a>
            <a class="nav-link" id="why-biib" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">Why BIIB</a>
            <a class="nav-link" id="SBUP" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">Sri Balaji University, Pune</a>
            <a class="nav-link" id="our-founder" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false">Our Founder Chancellor</a>
            <a class="nav-link" id="our-chancellor-message" data-bs-toggle="tab" data-bs-target="#nav-fifth" type="button" role="tab" aria-controls="nav-fifth" aria-selected="false">Chancellor's Message</a>
            <a class="nav-link" id="director-message" data-bs-toggle="tab" data-bs-target="#nav-sixth" type="button" role="tab" aria-controls="nav-sixth" aria-selected="false">Director's Message</a>
            <a class="nav-link" id="leadership" data-bs-toggle="tab" data-bs-target="#nav-seventh" type="button" role="tab" aria-controls="nav-seventh" aria-selected="false">Leadership</a>
            <a class="nav-link" id="infrastructure" data-bs-toggle="tab" data-bs-target="#nav-eighth" type="button" role="tab" aria-controls="nav-eighth" aria-selected="false">Infrastructure</a>
            <a class="nav-link" id="aicte-approvals" data-bs-toggle="tab" data-bs-target="#nav-ninth" type="button" role="tab" aria-controls="nav-ninth" aria-selected="false">AICTE Approvals</a>
            <a class="nav-link" id="library" data-bs-toggle="tab" data-bs-target="#nav-tenth" type="button" role="tab" aria-controls="nav-tenth" aria-selected="false">Library</a>
            <a class="nav-link" id="nirf" data-bs-toggle="tab" data-bs-target="#nav-eleventh" type="button" role="tab" aria-controls="nav-eleventh" aria-selected="false">NIRF</a>
            <a class="nav-link" id="mandatory-disclosure" data-bs-toggle="tab" data-bs-target="#nav-tweleve" type="button" role="tab" aria-controls="nav-tweleve" aria-selected="false">Mandatory Disclosure</a>
        </div>
    </div>
</nav>
@elseif(request()->is('industryinterface'))
<nav class="bg-white" id="pagesNavId">
    <div class="container">
        <div class="nav nav-tabs main-tabs border-0" id="nav-tab" role="tablist">
            <button class="nav-link active" id="guest-lectures" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">Guest Lectures</button>
            <button class="nav-link" id="leadership-training" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">Leadership Training</button>
            <button class="nav-link" id="national-business-convention" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">National Business Convention</button>
            <button class="nav-link" id="internship" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false">Internship</button>
        </div>
    </div>
</nav>
@elseif(request()->is('academics'))
<nav class="bg-white" id="pagesNavId">
    <div class="container">
        <div class="nav nav-tabs main-tabs border-0" id="nav-tab" role="tablist">
            <button class="nav-link active" id="aicte" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">AICTE</button>
            <button class="nav-link" id="MOU-with-Phillip" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">MOU with Phillip</button>
            <button class="nav-link" id="MOU-with-SAP" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">MOU with SAP</button>
            <button class="nav-link" id="induction-program" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false">Induction Program</button>
            <button class="nav-link" id="classroom-based-training" data-bs-toggle="tab" data-bs-target="#nav-fifth" type="button" role="tab" aria-controls="nav-fifth" aria-selected="false">Classroom Based Training</button>
            <button class="nav-link" id="core-faculty" data-bs-toggle="tab" data-bs-target="#nav-sixth" type="button" role="tab" aria-controls="nav-sixth" aria-selected="false">Core Faculty</button>
            <button class="nav-link" id="multi-development-personality-faculty" data-bs-toggle="tab" data-bs-target="#nav-seventh" type="button" role="tab" aria-controls="nav-seventh" aria-selected="false">Multi Development Personality Faculty</button>
            <button class="nav-link" id="visiting-faculty" data-bs-toggle="tab" data-bs-target="#nav-eighth" type="button" role="tab" aria-controls="nav-eighth" aria-selected="false">Visiting Faculty</button>
        </div>
    </div>
</nav>
@elseif(request()->is('placements'))
<nav class="bg-white" id="pagesNavId">
    <div class="container">
        <div class="nav nav-tabs main-tabs border-0" id="nav-tab" role="tablist">
            <button class="nav-link active" id="our-recruiters" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">Our Recruiters</button>
            <button class="nav-link" id="placements" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">Placements</button>
            <button class="nav-link" id="MOU-with-Phillip" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">MOU with Phillip Capital</button>
            <button class="nav-link" id="MOU-with-SAP" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false">MOU with SAP</button>
            <button class="nav-link" id="my-campus-placement-experience" data-bs-toggle="tab" data-bs-target="#nav-fifth" type="button" role="tab" aria-controls="nav-fifth" aria-selected="false">My Campus Placement Experience</button>
            <button class="nav-link" id="chancellor-message" data-bs-toggle="tab" data-bs-target="#nav-sixth" type="button" role="tab" aria-controls="nav-sixth" aria-selected="false">Chancellor’s Message</button>
            <button class="nav-link" id="show-interest" data-bs-toggle="tab" data-bs-target="#nav-seventh" type="button" role="tab" aria-controls="nav-seventh" aria-selected="false">Show Interest</button>
            <button class="nav-link" id="BIIB-placement-procedure" data-bs-toggle="tab" data-bs-target="#nav-eighth" type="button" role="tab" aria-controls="nav-eighth" aria-selected="false">BIIB Placement Procedure</button>
        </div>
    </div>
</nav>
@elseif(request()->is('admission'))
<nav class="bg-white" id="pagesNavId">
    <div class="container">
        <div class="nav nav-tabs main-tabs border-0" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-scholarship" data-bs-toggle="tab" data-bs-target="#scholarship" type="button" role="tab" aria-controls="scholarship" aria-selected="true">Scholarship</button>
            <button class="nav-link" id="nav-mba" data-bs-toggle="tab" data-bs-target="#mba" type="button" role="tab" aria-controls="mba" aria-selected="false">MBA Programs</button>
            <button class="nav-link" id="nav-phd" data-bs-toggle="tab" data-bs-target="#phd" type="button" role="tab" aria-controls="phd" aria-selected="false">Ph.D. Programme</button>
        </div>
    </div>
</nav>
@elseif(request()->is('students'))
<nav class="bg-white" id="pagesNavId">
    <div class="container">
        <div class="nav nav-tabs main-tabs border-0" id="nav-tab" role="tablist">
            <button class="nav-link active" id="BIIB-student-council" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">BIIB Students Council</button>
            <button class="nav-link" id="sports-cultural" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">Sports & Culturals</button>
            <button class="nav-link" id="festival-celebration" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">Festivals Celebration</button>
            <button class="nav-link" id="student-grievance-redressal" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false">Students Grievance Redressal 2019</button>
            <button class="nav-link" id="anti-ragging" data-bs-toggle="tab" data-bs-target="#nav-fifth" type="button" role="tab" aria-controls="nav-fifth" aria-selected="false">Students Anti-Ragging</button>
        </div>
    </div>
</nav>
@elseif(request()->is('alumni'))
<nav class="bg-white" id="pagesNavId">
    <div class="container">
        <div class="nav nav-tabs main-tabs border-0" id="nav-tab" role="tablist">
            <button class="nav-link active" id="alumni-club" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">Alumni Club</button>
            <button class="nav-link" id="success-stories" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">Success Stories</button>
            <button class="nav-link" id="transcript-form" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">Transcript Application Form</button>
            <button class="nav-link" id="endorsement-certificate" data-bs-toggle="tab" data-bs-target="#nav-fourth" type="button" role="tab" aria-controls="nav-fourth" aria-selected="false">Endorsement Certificate</button>
            <button class="nav-link" id="BIIB-convocation" data-bs-toggle="tab" data-bs-target="#nav-fifth" type="button" role="tab" aria-controls="nav-fifth" aria-selected="false">BIIB Convocation</button>
            <button class="nav-link" id="alumni-on-social-media" data-bs-toggle="tab" data-bs-target="#nav-sixth" type="button" role="tab" aria-controls="nav-sixth" aria-selected="false">Alumni on Social Media</button>
            <button class="nav-link" id="regional-group-on-FB" data-bs-toggle="tab" data-bs-target="#nav-seventh" type="button" role="tab" aria-controls="nav-seventh" aria-selected="false">Regional Groups of Alumni on FB</button>
        </div>
    </div>
</nav>
@elseif(request()->is('testimonials'))
<nav class="bg-white" id="pagesNavId">
    <div class="container">
        <div class="nav nav-tabs main-tabs border-0" id="nav-tab" role="tablist">
            <button class="nav-link text-capitalize active" id="guest-testimonial" data-bs-toggle="tab" data-bs-target="#nav-first" type="button" role="tab" aria-controls="nav-first" aria-selected="true">guest testimonials</button>
            <button class="nav-link text-capitalize" id="student-testimonial" data-bs-toggle="tab" data-bs-target="#nav-second" type="button" role="tab" aria-controls="nav-second" aria-selected="false">student testimonials</button>
            <!-- <button class="nav-link text-capitalize" id="nav-third-tab" data-bs-toggle="tab" data-bs-target="#nav-third" type="button" role="tab" aria-controls="nav-third" aria-selected="false">My Campus placement Experience</button> -->
        </div>
    </div>
</nav>
@endif