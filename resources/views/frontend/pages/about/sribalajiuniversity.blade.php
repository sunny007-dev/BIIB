<div class="aboutPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            @foreach($sbup as $key => $value)
                @foreach( $value as $data )
                    <div class="col-xl-12 mb-3">
                        <img class="w-100" src="{{ $data['featured_image'] }}" alt="about">
                    </div>
                    <div class="col-xl-12 my-xl-0 my-lg-0 my-md-0 my-sm-0 my-2 pb-3">
                        <h4 class="pagesHeading text-capitalize py-4 mb-0 text-xl-start text-lg-start text-md-start text-center">{{ $key }}</h4>
                        <div class="text-xl-start text-lg-start text-md-start">{!! $data->content !!}</div>
                    </div>
                    <div class="col-xl-12 mb-4">
                        <div class="sortingList">
                            <div>{!! $data->content_1 !!}</div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>