<div class="industryPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">   
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/industry/leadership-training.webp')}}" alt="about">
            </div>
        </div>
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <h4 class="my-xl-4 my-lg-4 my-md-4 my-3 pagesHeading text-capitalize">Creating Corporate Commandos through Training from Military</h4>
                <p><strong>Leadership Training from the Military</strong>: There seems to be a misconception that the military operates strictly by way of a rigid hierarchy as if every last move on the frontline is orchestrated from atop the chain of command and those in the thick of it wait for the orders to trickle down. No that’s not true, every commando is trained to act in accordance with the situation on the battlefield. Just like our management students, they are trained to take responsibility, they are armed with the knowledge to make executive decisions in accordance with the situation.</p>
                <p><strong> Why train from the military?</strong> Well, it is a known fact that the techniques of management were first practiced by the military. We at Sri Balaji University, Pune organize interactive programs which are anchored by very senior retired armed forces officers of the level of Lieutenant Generals and Generals. The students get an in-depth and practical insight into leadership and management during crucial moments. Also, interaction with high-ranking army personnel ignites the spirit of patriotism and aspire students to become good citizens.</p>
            </div>
        </div>
        <div class="row g-4 bg-white py-3 m-0">
            @foreach($leadershiptraining as $data)
                <a class="col-xl-4 my-3 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data->video_link }}" data-bs-toggle="modal">
                    <div class="card rounded-0 pagesCard">
                        <div class="imge">
                            <img src="{{ $data->thumbnail_image }}" class="card-img-top guestPic rounded-0" alt="{{$data->title}} img">
                            <div class="playIcon">
                                <img src="{{asset('img/playIcon.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-transform-capitalize">{{ $data->title }}</h5>
                            <p class="card-text">{{ $data->designation }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>