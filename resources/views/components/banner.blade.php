<div class="otherHeroBanner">
    @foreach($title as $data)
        <div class="bannerImg" style="background-image: url({{ $data->featured_image }});";>
            <div class="layer d-flex align-items-center">
                <div class="container">
                    <div class="row py-xl-5 py-lg-5 py-md-5 py-sm-5 py-4 shadowText">
                        <div class="col-xl-7 col-lg-7 col-md-12 mt-xl-5">
                            <div class="bannerText position-relative">
                                <h5 class="muted-text text-capitalize">{{$data->title}}</h5>
                                <ul class="breadCrumb">
                                    <x-frontend-breadcrumbs>
                                        <x-frontend-breadcrumb-item type="active">{{ __($data->title) }}</x-frontend-breadcrumb-item>
                                    </x-frontend-breadcrumbs>
                                </ul>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="shapeImg">
        <img src="{{asset('img/innerPageShape.png')}}" alt="shapeImg">
    </div>
</div>
<div class="position-relative">
    <div class="imgBg pb-xl-0 pb-lg-0 pb-md-0 pb-sm-3">
        <img src="{{asset('img/homeImages/navHrLeft.png')}}" alt="sideBg">
    </div>
</div>