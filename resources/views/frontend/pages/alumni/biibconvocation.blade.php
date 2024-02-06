<div class="alumnipage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/alumni/convocation.webp')}}" alt="alumni img">
            </div>
            <div class="col-xl-12">
                <h4 class="py-xl-5 py-lg-5 py-md-4 py-3 mb-0 pagesHeading text-capitalize">BIIB Convocation</h4>
            </div>
        </div>

        <div class="row g-4 bg-white m-0">
            @foreach($convocation as $data)
                <div class="col-xl-4 col-lg-4 col-md-6 my-3 text-decoration-none" >
                    <div class="card rounded-0 pagesCard">
                        <div class="imge">
                            <img src="{{ $data->featured_image }}" class="card-img-top guestPic rounded-0" alt="{{ $data->name }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-transform-capitalize">Chief Guest : {{ $data->name }}</h5>
                            <p class="card-text">{{ $data->designation }} <br>{{ $data->company }}</p>
                            <p class="card-text text-muted">BIIB: {{$data->date  }}<br> Batch: {{$data->batch_year}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>