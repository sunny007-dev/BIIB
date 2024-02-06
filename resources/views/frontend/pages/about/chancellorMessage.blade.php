<div class="aboutPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white">
            @foreach($chancellorMessage as $data)
                <div class="col-xl-12">
                    <img class="w-100 mb-3" src="{{ $data->featured_image}}" alt="about">
                    <h4 class="pagesHeading text-capitalize pt-3 mb-0 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading }}</h4>
                    <div class="lh-lg mb-xl-5 mb-lg-5 mb-md-4 mb-sm-4 mb-3 text-muted">{!! $data->content !!}</div>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_1 }}</h4>
                    <div class="lh-lg">{!! $data->content_1 !!}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

