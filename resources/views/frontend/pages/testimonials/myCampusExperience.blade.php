<div class="testimonialpage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">    
        <div class="row m-0 bg-white">
            @foreach($studentLecture as $data)
                <a class="col-xl-4 my-3 text-decoration-none"  href="{{$data->video_link}}" target="_blank">
                    <div class="card rounded-0 pagesCard">
                        <div class="imge">
                            <img src="{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
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