
<div class="admissionpage">
 <nav class="bg-white" id="pagesNavId">
        <div class="container">
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                <button class="nav-link innerTab active" id="MBA" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">MBA</button>
                <button class="nav-link innerTab" id="eligibility" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">Eligibility</button>
                <button class="nav-link innerTab" id="how-to-apply" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">How to Apply</button>
                <button class="nav-link innerTab" id="GD-PI-center" data-bs-toggle="tab" data-bs-target="#nav-four" type="button" role="tab" aria-controls="nav-four" aria-selected="false"> GD & PI Centers</button>
                <button class="nav-link innerTab" id="admission-process" data-bs-toggle="tab" data-bs-target="#nav-five" type="button" role="tab" aria-controls="nav-five" aria-selected="false">Admission Process</button>
                <button class="nav-link innerTab" id="important-dates" data-bs-toggle="tab" data-bs-target="#nav-six" type="button" role="tab" aria-controls="nav-six" aria-selected="false">Important Dates</button>
                <button class="nav-link innerTab" id="course-curriculum" data-bs-toggle="tab" data-bs-target="#nav-seven" type="button" role="tab" aria-controls="nav-seven" aria-selected="false">Course Curriculum</button>
                <button class="nav-link innerTab" id="fee-structure" data-bs-toggle="tab" data-bs-target="#nav-eigth" type="button" role="tab" aria-controls="nav-eigth" aria-selected="false">Fee Structure</button>
                <button class="nav-link innerTab" id="apply-online" data-bs-toggle="tab" data-bs-target="#nav-nine" type="button" role="tab" aria-controls="nav-nine" aria-selected="false">Apply Online</button>
                <button class="nav-link innerTab" id="brochure" data-bs-toggle="tab" data-bs-target="#nav-ten" type="button" role="tab" aria-controls="nav-ten" aria-selected="false">Download Brochure</button>
                <button class="nav-link innerTab" id="education-loan" data-bs-toggle="tab" data-bs-target="#nav-eleven" type="button" role="tab" aria-controls="nav-eleven" aria-selected="false">Education Loan</button>
                <button class="nav-link innerTab" id="FAQ" data-bs-toggle="tab" data-bs-target="#nav-tweleve" type="button" role="tab" aria-controls="nav-tweleve" aria-selected="false">FAQs</button>
                <button class="nav-link innerTab" id="important-contact" data-bs-toggle="tab" data-bs-target="#nav-thirteen" type="button" role="tab" aria-controls="nav-thirteen" aria-selected="false">Important Contacts</button>
            </div>
        </div>
    </nav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="MBA" tabindex="0">@include('frontend.pages.admission.mba.mba')</div>
        <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="eligibility" tabindex="0">@include('frontend.pages.admission.mba.eligibility')</div>
        <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="how-to-apply" tabindex="0">@include('frontend.pages.admission.mba.howToApply')</div>
        <div class="tab-pane fade" id="nav-four" role="tabpanel" aria-labelledby="GD-PI-center" tabindex="0">@include('frontend.pages.admission.mba.gd-pi')</div>
        <div class="tab-pane fade" id="nav-five" role="tabpanel" aria-labelledby="admission-process" tabindex="0">@include('frontend.pages.admission.mba.admissionProcess')</div>
        <div class="tab-pane fade" id="nav-six" role="tabpanel" aria-labelledby="important-dates" tabindex="0">@include('frontend.pages.admission.mba.importantDates')</div>
        <div class="tab-pane fade" id="nav-seven" role="tabpanel" aria-labelledby="course-curriculum" tabindex="0">@include('frontend.pages.admission.mba.courseCurriculum')</div>
        <div class="tab-pane fade" id="nav-eigth" role="tabpanel" aria-labelledby="fee-structure" tabindex="0">@include('frontend.pages.admission.mba.feeStructure')</div>
        <div class="tab-pane fade" id="nav-nine" role="tabpanel" aria-labelledby="apply-online" tabindex="0">@include('frontend.pages.admission.mba.applyOnline')</div>
        <div class="tab-pane fade" id="nav-ten" role="tabpanel" aria-labelledby="brochure" tabindex="0">@include('frontend.pages.admission.mba.brochure')</div>
        <div class="tab-pane fade" id="nav-eleven" role="tabpanel" aria-labelledby="education-loan" tabindex="0">@include('frontend.pages.admission.mba.educationLoan')</div>
        <div class="tab-pane fade" id="nav-tweleve" role="tabpanel" aria-labelledby="FAQ" tabindex="0">@include('frontend.pages.admission.mba.faq')</div>
        <div class="tab-pane fade" id="nav-thirteen" role="tabpanel" aria-labelledby="important-contact" tabindex="0">@include('frontend.pages.admission.mba.importantContact')</div>
    </div>
</div>
<script>
 document.addEventListener('DOMContentLoaded', function(e) {
    e.preventDefault();
        // setTimeout(() => {
            const activeTab = window.location.hash;

            innerTab = activeTab.split('/')[1];

            let myChar = "#"
            var newLink = myChar + innerTab;
            // console.log(newLink);
            if (newLink) {
                $( newLink )[0].click();
            }
        // }, 100);
    });
</script>