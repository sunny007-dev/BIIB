<div class="aboutPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/about/nirf-2019.jpg')}}" alt="about">
            </div>
            <div class="col-xl-12 my-2">
                <h4 class="pagesHeading text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">National Institutional Ranking Framework</h4>
                <ul class="list-unstyled">
                @foreach($nirf as $data)
                    @if(count($nirf) > 0)
                        <li class="mb-2">Download PDF {{$data->year}}<a class="text-decoration-none ms-2 fs-5 cool-link" style="color:var(--primary-blue)" href="{{$data->featured_image}}" target="_blank">( Click here )</a></li>
                    @else
                        <li class="fw-bold">No Nirf Found</li>
                    @endif
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>