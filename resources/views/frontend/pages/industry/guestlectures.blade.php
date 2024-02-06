<div class="industryPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">    
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <h4 class="py-xl-4 py-lg-4 py-md-4 py-3 pagesHeading text-capitalize">Guest Lectures</h4>
            </div>
        </div>
        <div class="row g-4 bg-white m-0">
            @foreach($guestLecture as $data)
                <a class="col-xl-4 my-3 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data->video_link }}" data-bs-toggle="modal" >
                    <div class="card rounded-0 pagesCard">
                        <div class="imge">
                            <img src="{{ $data->thumbnail_image }}" class="card-img-top guestPic rounded-0" alt="{{$data->title}} img">
                            <div class="playIcon">
                                <img src="{{asset('img/playIcon.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-capitalize">{{ $data->title }}</h5>
                            <p class="card-text">{{ $data->designation }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
