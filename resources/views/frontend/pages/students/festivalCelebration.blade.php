<div class="studentCouncil py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        @foreach($culturalAllData as $key => $value)    
            @if($value['type'] === "festival")
                <div class="row bg-white m-0">
                    <h4 class="pagesHeading headingColor text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">{{ $value['title'] }}</h4>
                    <p class="text-xl-start text-lg-start text-md-start">{!! $value['content'] !!}</p>

                    <div class="col-xl-12 mt-5 py-4">
                        <div class="sportsCulturalCarousel">
                            @foreach($value['images'] as $imgData)
                                @if($imgData)
                                    <div class="px-2">
                                        <div class="card rounded-0">
                                            <div class="coursesImg position-relative">
                                                <img style="height:270px" class="w-100" src="{{ $imgData }}" alt="img">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>