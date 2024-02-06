
<div class="admissionpage pt-5">
    <nav >
        <div class="container">
            <div class="nav nav-tabs border-0" id="nav-tab" role="tablist">
                <button class="nav-link innerTab active" id="nav-tab-1" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">Prof. M.S. Pillai Memorial Scholarship</button>
                <button class="nav-link innerTab" id="nav-tab-2" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">Bala Sir Memorial Scholarship</button>
                <button class="nav-link innerTab" id="nav-tab-3" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">Grateful GNR Scholarship</button>
                <button class="nav-link innerTab" id="nav-tab-4" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">Dr. P.C. Shejwalkar Memorial Scholarship</button>
                <button class="nav-link innerTab" id="nav-tab-5" data-bs-toggle="tab" data-bs-target="#nav-5" type="button" role="tab" aria-controls="nav-5" aria-selected="false">Fee Structure</button>
            </div>
        </div>
    </nav>
    <div class="tab-content px-0" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-tab-1" tabindex="0">@include('frontend.pages.admission.scholarship.pillaiScholarship')</div>
        <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-tab-2" tabindex="0">@include('frontend.pages.admission.scholarship.balaSirScholarship')</div>
        <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-tab-3" tabindex="0">@include('frontend.pages.admission.scholarship.gnrScholarship')</div>
        <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-tab-4" tabindex="0">@include('frontend.pages.admission.scholarship.shejwalkarScholarship')</div>
        <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-tab-5" tabindex="0">@include('frontend.pages.admission.scholarship.feeStructure')</div>
    </div>
</div>
