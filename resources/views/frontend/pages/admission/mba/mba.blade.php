<link rel="stylesheet" type="text/css" href="{{asset('css/admission.css')}}">
<div class="admissionpage  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4" id="admissionpage">
    <div class="container">
        <div class="row bg-white m-0">
            @foreach($mbaProgram as $data)           
                <div class="col-xl-12 pb-3">
                    <h4 class="pagesHeading text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">MBA Program</h4>
                    <img class="w-100 mb-4" src="{{ $data->featured_image }}" alt="mbaProgramme img">
                    <h4 class="pagesHeading text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->name }}</h4>
                    <p>{{ $data->intro }}</p>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading }}</h4>
                    <div class="col-xl-12">
                        <div class="sortingList">
                            <div>{!! $data->content !!}</div>
                        </div>
                    </div>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_1 }}</h4>
                    <div class="col-xl-12">
                        <div class="sortingList">
                            <div>{!! $data->content_1!!}</div>
                        </div>
                    </div>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_2 }}</h4>
                    <div class="col-xl-12">
                        <div class="sortingList">
                            <div>{!! $data->content_2!!}</div>
                        </div>
                    </div>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_3 }}</h4>
                    <div class="col-xl-12">
                        <div class="sortingList">
                            <div>{!! $data->content_3!!}</div>
                        </div>
                    </div>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_4 }}</h4>
                    <div class="col-xl-12">
                        <div class="sortingList">
                            <div>{!! $data->content_4!!}</div>
                        </div>
                    </div>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_5 }}</h4>
                    <div class="col-xl-12">
                        <div class="sortingList">
                            <div>{!! $data->content_5!!}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>