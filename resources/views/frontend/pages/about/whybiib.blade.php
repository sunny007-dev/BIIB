<div class="aboutPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            @foreach($whyBiib as $data)
                <div class="col-xl-12">
                    <h4 class="pagesHeading text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading }}</h4>
                    <img class="w-100 mb-3" src="{{ $data->featured_image}}" alt="about">
                    <div class="lh-lg mb-2">{!! $data->content !!}</div>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_1 }}</h4>
                    <div class="lh-lg">{!! $data->content_1 !!}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
