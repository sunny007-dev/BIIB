<div class="testimonialpage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">    
        <!-- <div class="row bg-white">
            <div class="col-xl-12">
                <h4 class="py-xl-4 py-lg-4 py-md-4 py-3 pagesHeading text-capitalize">Guest Testimonials</h4>
            </div>
        </div> -->
        <div class="row m-0 bg-white">
            @foreach($guestLecture as $data)
                <a class="col-xl-4 my-3 text-decoration-none">
                    <div class="card rounded-0 pagesCard">
                        <div class="imge">
                            <img src="{{ $data->featured_image ? $data->featured_image : asset('img/dummyImg.jpg') }}" class="card-img-top guestPic rounded-0" alt="Guest img">
                           
                        </div>
                         <div class="card-body">
                            <h5 class="card-title fw-bold text-transform-capitalize">{{ $data->title }}</h5>
                            <p class="card-name mb-1 fw-bold">{{ $data->name }}</p>
                            @if( $data->designation )
                              <p class="card-text mb-2">{{ $data->designation }}</p>
                            @endif
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