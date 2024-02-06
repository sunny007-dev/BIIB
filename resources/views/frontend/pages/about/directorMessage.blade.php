<div class="aboutPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        @foreach($directorMessage as $data)
            <div class="row bg-white m-0">
                <div class="col-xl-12">
                    <img class="w-100" src="{{ $data->featured_image }}" alt="about">
                </div>
                <div class="col-xl-12 my-2">
                    <h4 class="pagesHeading text-capitalize py-4 mb-0 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading }}</h4>
                    <div> {!! $data->content !!}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
