
<div class="admissionpage">
    <nav >
        <div class="container">
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                <button class="nav-link innerTab active" id="category" data-bs-toggle="tab" data-bs-target="#nav-11" type="button" role="tab" aria-controls="nav-11" aria-selected="true">Category</button>
                <button class="nav-link innerTab" id="eligibility-duration" data-bs-toggle="tab" data-bs-target="#nav-12" type="button" role="tab" aria-controls="nav-12" aria-selected="false">Eligibility & Duration</button>
                <button class="nav-link innerTab" id="admission-procedure" data-bs-toggle="tab" data-bs-target="#nav-13" type="button" role="tab" aria-controls="nav-13" aria-selected="false">Admission Procedure</button>
                <button class="nav-link innerTab" id="registration" data-bs-toggle="tab" data-bs-target="#nav-14" type="button" role="tab" aria-controls="nav-14" aria-selected="false">Registration</button>
                <button class="nav-link innerTab" id="instructions-dates" data-bs-toggle="tab" data-bs-target="#nav-15" type="button" role="tab" aria-controls="nav-15" aria-selected="false">Important Instructions & Dates</button>
                <button class="nav-link innerTab" id="fee-structure" data-bs-toggle="tab" data-bs-target="#nav-16" type="button" role="tab" aria-controls="nav-16" aria-selected="false">Fee Structure</button>
                <button class="nav-link innerTab" id="download-brochure" data-bs-toggle="tab" data-bs-target="#nav-17" type="button" role="tab" aria-controls="nav-17" aria-selected="false">Download Brochure</button>
            </div>
        </div>
    </nav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-11" role="tabpanel" aria-labelledby="category" tabindex="0">@include('frontend.pages.admission.phd.categories')</div>
        <div class="tab-pane fade" id="nav-12" role="tabpanel" aria-labelledby="eligibility-duration" tabindex="0">@include('frontend.pages.admission.phd.eligibility-duration')</div>
        <div class="tab-pane fade" id="nav-13" role="tabpanel" aria-labelledby="admission-procedure" tabindex="0">@include('frontend.pages.admission.phd.admissionProcedure')</div>
        <div class="tab-pane fade" id="nav-14" role="tabpanel" aria-labelledby="registration" tabindex="0">@include('frontend.pages.admission.phd.registrations')</div>
        <div class="tab-pane fade" id="nav-15" role="tabpanel" aria-labelledby="instructions-dates" tabindex="0">@include('frontend.pages.admission.phd.importantInstructionDates')</div>
        <div class="tab-pane fade" id="nav-16" role="tabpanel" aria-labelledby="fee-structure" tabindex="0">@include('frontend.pages.admission.phd.feeStructure')</div>
        <div class="tab-pane fade" id="nav-17" role="tabpanel" aria-labelledby="download-brochure" tabindex="0">@include('frontend.pages.admission.phd.brochure')</div>
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