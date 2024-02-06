<div class="aboutPage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">

        <nav class="mb-4">
            <div class="nav nav-tabs founderTabs border-0" id="nav-tab" role="tablist">
                <button class="nav-link innerTab active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true">Know the Founder</button>
                <button class="nav-link innerTab" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#nav-two" type="button" role="tab" aria-controls="nav-two" aria-selected="false">Photos</button>
                <button class="nav-link innerTab" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#nav-three" type="button" role="tab" aria-controls="nav-three" aria-selected="false">Videos</button>
            </div>
        </nav>
        
        <div class="tab-content px-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-tab-one" tabindex="0">
                @foreach($founder as $data)
                    <div class="row bg-white m-0">
                        <div class="col-xl-12">
                            <img class="w-100" src="{{ $data->featured_image }}" alt="about">
                        </div>
                        <div class="col-xl-12 my-2">
                            <div class="pt-4"> {!! $data->content_1 !!}</div>
                        </div>
                        <div class="col-xl-12 my-2 chancellerVideo">
                            <iframe src="{{ $data->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-tab-two" tabindex="0">
                <div class="row g-3 m-0">
                    @foreach($founderPhotos as $data)
                        @if($data[0]->image_description_1)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_1 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_1}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_2)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_2 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_2}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_3)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_3 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_3}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_4)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_4 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_4}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_5)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_5 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_5}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_6)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_6 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_6}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_7)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_7 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_7}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_8)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_8 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_8}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_9)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_9 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_9}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                        @if($data[0]->image_description_10)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                            <div class="card h-100 ">
                                <img src="{{ $data[0]->image_10 }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->image_description_10}}</h5>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-tab-three" tabindex="0">
                <div class="row g-3 m-0 videoTag">
                    @foreach($founderVideos as $data)
                        @if($data[0]->video_description_1)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_1}}" data-bs-toggle="modal">
                            <div class="card rounded-0 pagesCard">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_1 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_1}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_2)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_2 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_2 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_2}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_3)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_3 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_3 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_3}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_4)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_4 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_4 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_4}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_5)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_5 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_5 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_5}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_6)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_6 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_6 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_6}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_7)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_7 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_7 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_7}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_8)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_8 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_8 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_8}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_9)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_9 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_9 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_9}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                        @if($data[0]->video_description_10)
                        <a class="col-xl-4 col-lg-4 col-md-6 text-decoration-none popvideo" type="button" data-bs-target="#exampleModal" data-item="{{ $data[0]->video_url_10 }}" data-bs-toggle="modal">
                            <div class="card rounded-0">
                                <div class="imge">
                                    <img src="{{ $data[0]->video_thumbnail_10 }}" class="card-img-top myexpericencePic guestPic rounded-0" alt="Student img">
                                    <div class="playIcon">
                                        <img src="{{asset('img/playIcon.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title imageTitle">{{$data[0]->video_description_10}}</h5>
                                </div>
                            </div>
                        </a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
