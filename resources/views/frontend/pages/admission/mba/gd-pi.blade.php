<link rel="stylesheet" type="text/css" href="{{asset('css/admission.css')}}">
<div class="admissionpage  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4" id="admissionpage">
    <div class="container">
        <div class="row bg-white m-0">
            <!-- <div class="col-xl-12 pb-3">
                <img class="w-100" src="{{asset('img/admission/how-to-apply.webp')}}" alt="mbaProgramme img">
            </div> -->
            @foreach($gdPiCenter as $data)
                <h4 class="pagesHeading text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading }}</h4>
                <div class="col-xl-12 mb-2">
                    <div class="sortingList">
                        <div>{!! $data->content !!}</div>
                    </div>
                </div>
                <h4 class="pagesHeading text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_1 }}</h4>
                <div>{!! $data->content_1 !!}</div>
                <h4 class="pagesHeading text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_2 }}</h4>
                <div>{!! $data->content_2 !!}</div>
            @endforeach
        </div>
    </div>
</div>