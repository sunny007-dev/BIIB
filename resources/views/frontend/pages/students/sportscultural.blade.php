<div class="studentCouncil py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/student/sports-cultural.webp')}}" alt="sports img">
            </div>
            <!-- <div class="col-xl-12">
                <h4 class="py-xl-4 py-lg-4 py-md-4 py-3 pagesHeading text-capitalize">Sports & Culturals Events</h4>
            </div> -->
            <div class="col-xl-12 my-2">
                <p class="mb-0 text-xl-start text-lg-start text-md-start">Sri Balaji University, Pune strives for the holistic development of its student managers. Thus adequate attention and opportunities to excel beyond the classroom are provided. Student managers may participate, perform, and assist in the arrangement of various competitions, festivals, and cultural events at the University.</p>
                <p class="mb-0 text-xl-start text-lg-start text-md-start">Some of the events that are held annually are :</p>
            </div>
        </div>
      
        @foreach($culturalAllData as $key => $value)    
            @if($value['type'] !== "festival")
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