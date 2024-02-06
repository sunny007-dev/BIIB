<link rel="stylesheet" type="text/css" href="{{asset('css/admission.css')}}">
<div class="admissionpage  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4" id="admissionpage">
    <div class="container">
        <div class="row bg-white m-0">
            @foreach($phdImportantInstructionDates as $data)           
                <div class="col-xl-12 pb-3">
                    <img class="w-100 mb-4" src="{{ $data->featured_image }}" alt="mbaProgramme img">
                    <h4 class="pagesHeading text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading }}</h4>
                    <div class="lh-lg"> {!! $data->content !!}</div>
                    <h4 class="pagesHeading text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_1 }}</h4>
                    <div class="lh-lg"> {!! $data->content_1 !!}</div>
                </div>
                <!--<a href="{{ $data->featured_image }}" target="_blank" class="pagesHeading headingHover text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">DOWNLOAD SBUP – PET SYLLABUS</a>-->
                <p class="mb-2">DOWNLOAD SBUP – PET SYLLABUS <a class="text-decoration-none ms-2 fs-5 cool-link" href="{{ $data->document_url }}" style="color:var(--primary-blue)" target="_blank">( Click here )</a><p>
            @endforeach
        </div>
    </div>
</div>