
<div class="aboutPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
      <div class="row bg-white m-0">
        @foreach($infrastructure as $data)
          <div class="col-xl-12 my-3">
              @if($data->featured_image)
                <img class="w-100 mb-2" src="{{ $data->featured_image }}" alt="{{$data->name}} Img">
              @endif
              @if(!$data->featured_image && $data->url)
                  <iframe class="aboutCampusVid mb-2" src="{{ $data->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              @endif
              <h4 class="pagesHeading text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center mt-3">{{ $data->name }}</h4>
              @if($data->intro)
                <h6 class="fw-bold headingColor">{{ $data->intro }}</h6>
              @endif
              <div class="">{!! $data->content !!}</div>
          </div>
        @endforeach
      </div>


      @foreach( $culturalSportsAll as $key => $value )     
            <div class="row bg-white m-0">
                <h4 class="pagesHeading headingColor text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">{{ $key }}</h4>

                @foreach( $value as $data )
                    <div class="text-xl-start text-lg-start text-md-start">{!! $data['content'] !!}</div>
                    <div class="col-xl-12 mt-5 py-4">
                        <div class="sportsCulturalCarousel">
                            @foreach( $data['slider_img'] as $img )
                                @if($img)
                               
                                    <div class="px-2">
                                        <div class="card rounded-0">
                                            <div class="caffeeMessOther position-relative">
                                              @if($img)
                                                <img class="w-100" src="{{ $img }}" alt="...">
                                              @else
                                                <img class="w-100" src="{{ asset('img/dummyImg.jpg') }}" alt="...">
                                              @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
