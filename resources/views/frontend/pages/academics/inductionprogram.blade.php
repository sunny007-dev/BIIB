<link rel="stylesheet" type="text/css" href="{{asset('css/academics.css')}}">
<div class="academicspage  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4" id="academicspage">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/academics/induction.jpg')}}" alt="induction img">
            </div>
            <div class="col-xl-12 my-2">
                <h4 class="pagesHeading text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">Induction Program</h4>
                <p class="text-xl-start text-lg-start text-md-start">At Sri Balaji University, Pune we believe in laying a strong foundation for the management career that lies ahead of the student manager. We start working on this foundation right from Day 1 when the student enters the Campus. The 45 days long induction period comprises the bridge-cum-skill up-gradation training conducted by the Grand Master Consultancy. The training aims to bring students, from different educational streams, at par with one another and bridge the gap between the commerce and non-commerce students. The program comprises classroom-based training augmented by workshops, and guest lectures where the student managers get an opportunity to interact with eminent personalities from various walks of life.</p>
                <p class="text-xl-start text-lg-start text-md-start">The induction program is not only an academically rigorous exercise but also physically demanding. Student managers start their day at 8:00 am and are engaged in various activities until around 8:00 pm. This builds a habit of putting in extra hours which is a demand of the corporates thereby making the transition from campus to corporate a smooth one.</p>
            </div>
        </div> 
        <div class="row bg-white m-0">
            <div class="col-xl-12 my-2">
                <h4 class="pagesHeading text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">Guest list for the Induction Programme (Batch 2018-20)</h4>
                <div class="row">
                    @foreach($inductionProgram as $data)
                    <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-6 py-3">
                        <a class="card text-decoration-none popvideo" data-bs-target="#exampleModal" data-item="{{ $data->video_link }}" data-bs-toggle="modal">
                            <div class="card-body inductionDetail">
                                <h4 class="card-title fw-bold">{{ $data->title }}</h4>
                                <p class="card-text">{{ $data->designation }}, <br>{{$data->company}}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </div>
</div>