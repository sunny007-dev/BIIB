<div class="industryPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">    
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <h4 class="my-xl-4 my-lg-4 my-md-4 my-3 pagesHeading text-capitalize">National Business Convention</h4>
            </div>
        </div>
        <div class="row mt-3 m-0">
            <div class="col-12 p-xl-0 p-lg-0 p-md-0">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    @foreach($conventions as $key => $value)
                        <div class="accordion-item rounded-0 mb-2">
                            <h2 class="accordion-header" id="panelsStayOpen-heading{{$loop->index}}">
                            <button class="accordion-button rounded-0 fs-4 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse-{{$loop->index}}" aria-expanded="true" aria-controls="panelsStayOpen-collapse-{{$loop->index}}">
                                {{$key}}
                            </button>
                            </h2>
                            <div id="panelsStayOpen-collapse-{{$loop->index}}" class="accordion-collapse collapse {{ $loop->index == 0 ? 'show' : ''}}" aria-labelledby="panelsStayOpen-heading{{$loop->index}}">
                                <div class="accordion-body">
                                    <div class="row g-4 bg-white">
                                        @foreach($value as $data)
                                            <div class="col-xl-4">
                                                <div class="card rounded-0 pagesCard">
                                                    <div class="imge">
                                                        <img src="{{ $data->featured_image }}" alt="{{$data->title}}" class="card-img-top guestPic rounded-0">
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title fw-bold text-transform-capitalize">{{ $data->name }}</h5>
                                                        <p class="card-text">{{$data->designation}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>