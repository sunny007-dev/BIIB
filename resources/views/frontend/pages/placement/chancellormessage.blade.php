
<!--<div class="placement py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">-->
<!--    <div class="container">-->
<!--        <div class="row bg-white m-0">-->
<!--            <div class="col-xl-12">-->
<!--                <img class="w-100" src="{{asset('img/about/chancellor.jpg')}}" alt="about">-->
<!--            </div>-->
<!--            <div class="col-12 py-xl-4 py-lg-4 py-md-4 py-3 text-xl-start text-lg-start text-md-start text-sm-start text-center">-->
<!--                <h4 class="mb-0 pagesHeading text-capitalize">Late Professor Dr. (Col) A. Balasubramanian</h4>-->
<!--                <h5 class="text-xl-start text-lg-start text-md-start text-center text-muted"><strong>Founder Chancellor – Sri Balaji University, Pune</strong></h5>-->
<!--            </div>-->

<!--        </div>-->
  
<!--        <div class="row bg-white m-0">-->
<!--            <div class="col-12 py-xl-4 py-lg-4 py-md-4 py-3 text-xl-start text-lg-start text-md-start text-sm-start text-center">-->
<!--                <h4 class="mb-0 pagesHeading text-capitalize">Founder President & Chancellor’s Message</h4>-->
<!--                <p><strong>Dear Recruiters,</strong></p>-->
<!--                <p>I have great pleasure in presenting before you my students for Campus Placements from 08th December 2023. These students have been well-groomed over the period of their training with us. We have taken deliberate steps to ensure that they are unique and will prove an asset to any organization.</p>-->
<!--                <p>BIIB stands out as one of the best management institutes in the country because of its scientific selection process and pragmatic grooming strategies so that our students perform in a dynamic and ever-challenging business environment.</p>-->
<!--                <p><strong>We know,</strong> you are looking for the best. We assure you we have the best post-graduate management students for you.</p>-->
<!--                <p><strong>Welcome to BIIB. We have the best for you.</strong></p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div class="placement py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white">
            @foreach($chancellorMessage as $data)
                <div class="col-xl-12">
                    <img class="w-100 mb-3" src="{{ $data->featured_image}}" alt="about">
                    <h4 class="pagesHeading text-capitalize pt-3 mb-0 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading }}</h4>
                    <div class="lh-lg mb-xl-5 mb-lg-5 mb-md-4 mb-sm-4 mb-3 text-muted">{!! $data->content !!}</div>
                    <h4 class="pagesHeading headingColor text-capitalize py-3 text-xl-start text-lg-start text-md-start text-center">{{ $data->content_heading_1 }}</h4>
                    <div class="lh-lg">{!! $data->content_1 !!}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>