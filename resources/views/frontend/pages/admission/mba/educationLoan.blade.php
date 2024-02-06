<link rel="stylesheet" type="text/css" href="{{asset('css/admission.css')}}">
<div class="admissionpage  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4" id="admissionpage">
    <div class="container">
        <div class="row bg-white m-0">
            @foreach($loanContent as $data)
            <div class="col-xl-12 pb-3">
                <img class="w-100 mb-4" src="{{ $data->featured_image }}" alt="mbaProgramme img">
                <h4 class="pagesHeading text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading }}</h4>
                <div class="lh-lg">{!! $data->content !!}</div>
            </div>
            @endforeach
        </div>
        <div class="row g-3 py-xl-4 py-lg-4 py-md-4 py-sm-3 py-3">
            @foreach($loan as $data)
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 col-6 my-2">
                    <div class="card">
                        <div class="card-body text-center">
                            <a href="{{ $data->loan_document ? $data->loan_document : '/#'}}" target="{{$data->loan_document ? '_blank' : '_self'}}">
                                <img class="w-100" src="{{ $data->featured_image }}" alt="{{$data->name}} Img">
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>