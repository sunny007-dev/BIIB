<link rel="stylesheet" type="text/css" href="{{asset('css/admission.css')}}">
<div class="admissionpage  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4" id="admissionpage">
    <div class="container">
        <div class="row bg-white m-0">
            @foreach($pillaiScholarship as $data)           
                <div class="col-xl-12 pb-3">
                    <img class="w-100 mb-4" src="{{ $data->featured_image }}" alt="mbaProgramme img">
                    <h4 class="pagesHeading text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->name }}</h4>
                    <div> {!! $data->content !!}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>