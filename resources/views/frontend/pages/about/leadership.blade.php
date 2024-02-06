
<div class="aboutPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-12 py-xl-4 py-lg-4 py-md-4 py-3 text-xl-start text-lg-start text-md-start text-sm-start text-center">
                <h4 class="mb-0 pagesHeading text-capitalize">Leadership Of Sri Balaji University</h4>
            </div>
        </div>
        <div class="row bg-white m-0">
            <div class="col-xl-12 my-2">
                <p class="text-xl-start text-lg-start text-md-start"><strong>"A leader is one who knows the way, goes the way, and shows the way”</strong></p>
                <p class="text-xl-start text-lg-start text-md-start">Going by this adage, we at Sri Balaji University believe that only an efficient and inspiring top management can enthuse youngsters to become ethical and disciplined future corporate leaders. In line with this thinking, we have some of the most inspiring academic and industry leaders as our top brass- people in authority. Here is a glimpse.</p>
            </div>
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/about/chancellor.jpg')}}" alt="about">
            </div>
            <div class="col-12 py-xl-4 py-lg-4 py-md-4 py-3 text-xl-start text-lg-start text-md-start text-sm-start text-center">
                <h4 class="mb-0 pagesHeading text-capitalize">Late Professor Dr. (Col) A. Balasubramanian</h4>
                <h5 class="text-xl-start text-lg-start text-md-start text-center text-muted"><strong>Founder Chancellor – Sri Balaji University, Pune</strong></h5>
            </div>
        </div>
        
        <div class="row topBrass my-4 m-0">
            @foreach($leadership as $data)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-3">
                    <div class="card text-center">
                        <a class="text-decoration-none" href="/details/{{ $data->id }}">
                        <div class="teamImg">
                            @if($data->featured_image)
                                <div class="imge" style="background-image: url('{{ $data->featured_image }}');"></div>
                            @else
                                <div class="imge" style="background-image: url('{{ asset('img/homeImages/news1.png') }}');"></div>
                            @endif
                        </div>
                        <div class="card-body px-0 pt-2">
                            <h6 class="card-title text-uppercase px-2 lh-normal my-2">{{$data->name}}</h6>
                            <div class="line my-3"></div>
                                <p class="card-text px-3">{{$data->designation}}</p>
                            </div>
                        </div>
                        </a>
                    
                </div>
            @endforeach
        </div>
    </div>
</div>