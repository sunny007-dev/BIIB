
<link rel="stylesheet" type="text/css" href="{{asset('css/faculty.css')}}">
<div class="facultyPage  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4" id="facultypage">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/faculty/core-faculty.jpg')}}" alt="faculty">
            </div>
            <div class="col-xl-12 my-2">
                <h4 class="pagesHeading text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">Core Faculty</h4>
                <p class="text-xl-start text-lg-start text-md-start">Faculty has a very significant role in the development of our students. Coming with rich experience in the industry, our gurus play a significant role in bridging the gap between the institute and the industry. Over the years the faculty has also contributed to research and published and presented papers in both National and International conferences.</p>
            </div>
        </div> 

        <div class="row my-4 g-xl-3 g-lg-3 g-md-3 bg-white justify-content-center m-0">
            @foreach($module_name_coresingular as $data)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 relatedFaculty">
                    <a class="card text-center text-decoration-none" href="/facultydetails/{{ $data->id }}">
                        <div class="teamImg">
                        @if($data->featured_image)
                            <div class="imge" style="background-image: url('{{ $data->featured_image }}');"></div>
                        @else
                            <div class="imge" style="background-image: url('{{ asset('img/dummyImg.jpg') }}');"></div>
                        @endif
                        </div>
                        <div class="card-body px-0 pt-2">
                        <h6 class="card-title text-uppercase px-2 lh-normal my-2">{{$data->name}}</h6>
                        <div class="line my-3"></div>
                        <p class="card-text px-3">{{$data->designation}}</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>