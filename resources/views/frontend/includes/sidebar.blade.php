@if (request()->is('about'))
<div class="nav sidebar flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active rounded-0 d-flex align-items-center justify-content-between" id="v-pills-01-tab" data-bs-toggle="pill" data-bs-target="#v-pills-01" type="button" role="tab" aria-controls="v-pills-01" aria-selected="true">
        <a class="text-decoration-none">About BIIB </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-02-tab" data-bs-toggle="pill" data-bs-target="#v-pills-02" type="button" role="tab" aria-controls="v-pills-02" aria-selected="false">
        <a class="text-decoration-none">Why BIIB </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-03-tab" data-bs-toggle="pill" data-bs-target="#v-pills-03" type="button" role="tab" aria-controls="v-pills-03" aria-selected="false">
        <a class="text-decoration-none">Sri Balaji University, Pune </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-04-tab" data-bs-toggle="pill" data-bs-target="#v-pills-04" type="button" role="tab" aria-controls="v-pills-04" aria-selected="false">
        <a class="text-decoration-none">Our Founder Chancellor </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-05-tab" data-bs-toggle="pill" data-bs-target="#v-pills-05" type="button" role="tab" aria-controls="v-pills-05" aria-selected="false">
        <a class="text-decoration-none">Top Brass </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-06-tab" data-bs-toggle="pill" data-bs-target="#v-pills-06" type="button" role="tab" aria-controls="v-pills-05" aria-selected="false">
        <a class="text-decoration-none">Infrastructure </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-07-tab" data-bs-toggle="pill" data-bs-target="#v-pills-07" type="button" role="tab" aria-controls="v-pills-05" aria-selected="false">
        <a class="text-decoration-none">AICTE Approvals </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-08-tab" data-bs-toggle="pill" data-bs-target="#v-pills-08" type="button" role="tab" aria-controls="v-pills-05" aria-selected="false">
        <a class="text-decoration-none">Library </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-09-tab" data-bs-toggle="pill" data-bs-target="#v-pills-09" type="button" role="tab" aria-controls="v-pills-05" aria-selected="false">
        <a class="text-decoration-none">NIRF 2021 </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
    <button class="nav-link rounded-0 d-flex align-items-center justify-content-between" id="v-pills-10-tab" data-bs-toggle="pill" data-bs-target="#v-pills-10" type="button" role="tab" aria-controls="v-pills-05" aria-selected="false">
        <a class="text-decoration-none" href="{{asset('docs/Mandatory_Disclosure_BIIB_2022_Final.pdf')}}" target="_blank">Mandatory Disclosures </a> <span><i class="fa fa-arrow-right"></i></span>
    </button>
</div>
@endif
