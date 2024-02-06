<div class="placementpage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row g-4 bg-white m-0">
            @foreach($myExperience as $data)
                <a class="col-xl-4 my-3 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data->url }}" data-bs-toggle="modal">
                    <div class="card rounded-0 pagesCard">
                        <div class="imge">
                            <img src="{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                            <div class="playIcon">
                                <img src="{{asset('img/playIcon.png')}}" alt="">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-transform-capitalize">{{ $data->title }}</h5>
                            <p class="card-name mb-1 fw-bold">{{ $data->name }}</p>
                            @if( $data->institute_name )
                              <p class="card-text mb-2">{{ $data->institute_name }}</p>
                            @endif
                            @if( $data->batch_year )
                              <p class="card-text mb-2">{{ $data->batch_year }}</p>
                            @endif
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>