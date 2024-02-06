<!-- <footer class="text-center bg-gray-100">
  
   
                &copy; {{ app_name() }}, {!! setting('footer_text') !!}
            
</footer> -->

<footer class="">
    <div class="container">
        <div class="row py-xl-4 py-lg-4 py-3 m-0 justify-content-md-between">
            <div class="col-xl-3 col-lg-3 col-md-4 col-5 d-flex flex-row align-items-center  my-2">
                <a href="/">
                    <img class="me-4 footerBrandLogo" src="{{asset('img/biibLogo.webp')}}" width="84" height="90" alt="Img">
                </a>
                <div class="border-end border-2 border-light h-100"></div>
                <a href="https://www.sbup.edu.in/" target="_blank">
                    <img class="ms-3 footerBrandLogo" src="{{asset('img/university_logo.webp')}}" width="98" height="98" alt="Img">
                </a>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 my-2">
                <ul class="list-unstyled mb-0 address-section">
                    <li>
                       <p class="nav-link mb-0"><span><a class="text-decoration-none" href="tel:+91 (020) 6674 1235"><i aria-hidden="true"
                            class="fa fa-phone me-2 fa-rotate-90"></i>+91 (020)
                        6674 1235</a></span><span class="text-white">,</span> <span><a class="text-decoration-none" href="tel:+91 9673338787">+91 9673338787</a></span></p>
                    </li>
                    <li>
                        <a href="mailto:admissions@sbup.edu.in" class="lh-lg fs-6" role="button"><i class="fa fa-envelope me-3"
                                aria-hidden="true"></i>admissions@sbup.edu.in</a>
                    </li>
                    <li>
                        <a href="https://biibpune.edu.in/" target="_blank" class="lh-lg fs-6" role="button"><i class="fas fa-globe me-3"></i>www.biibpune.edu.in</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 pt-md-4 email-subscribe my-2">
                <h3 class="text-capitalize fw-bold text-white mb-2 subscribe_text">subscribe To our newsletter</h3>
                <form action="{{ url('newsletter')  }}" method="POST"  enctype="multipart/form-data"  id="newsletter_form">
                    @csrf
                    <div class="input-group border border-light border-2">
                        <input name="email" type="email" id="email" class="form-control rounded-0 border-0 bg-transparent shadow-none text-white"
                            placeholder="Enter email address" aria-label="Enter email address"
                            aria-describedby="basic-addon2" required>
                        <div class="input-group-append">
                            <button class="subscribe btn border-0 rounded-0 bg-transparent" type="submit">
                                <i class="fas fa-paper-plane email"></i>
                            </button>
                        </div>
                    </div>
                    <p class="flash-message" style="color:green"></p>
                </form>

                @if(session()->has('message'))
                    <p class="alert alert-success py-1 rounded-0 mt-1"> {{ session()->get('message') }}</p>
                @endif
            </div>

            

        </div>
    </div>
    <div class="border-top border-2"></div>
    <div class="container">
        <div class="footerMenu py-xl-4 py-lg-4 py-md-3 py-2 px-2" id="footer-menu-list">
            <div class="my-3 menuList">
                <h4 class="mb-3 text-white text-capitalize fw-bold">Students & Alumni</h4>
                <ul class="list-unstyled mb-0">
                    <li class="nav-item d-flex align-items-end"><a href="/students" class="p-0" type="button" tabindex="0">Student's Council</a></li>
                    <!--<li class="nav-item d-flex align-items-end"><a href="" class="p-0" type="button" tabindex="0">Alumni Website</a></li>-->
                    <li class="nav-item d-flex align-items-end"><a href="https://www.facebook.com/groups/sribalajisocietyglobal/" target="_blank" class="p-0" type="button" tabindex="0">Alumni On Facebook</a></li>
                    <!--<li class="nav-item d-flex align-items-end"><a href="" class="p-0" type="button" tabindex="0">Success Stories</a></li>-->
                    <li class="nav-item d-flex align-items-end"><a href="{{asset('docs/docs/application-form-endorsement.pdf')}}" class="p-0" type="button" tabindex="0">Endorsement Certificate</a></li>
                </ul>
            </div>
            <div class="my-3 menuList">
                <h4 class="mb-3 text-white text-capitalize fw-bold">Placements</h4>
                <ul class="list-unstyled mb-0">
                    <li class="nav-item d-flex align-items-end"><a href="/placements#placements" class="p-0" type="button" tabindex="0">Placements</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/placements#our-recruiters" class="p-0" type="button" tabindex="0">Our Recruiters</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/placements#BIIB-placement-procedure" class="p-0" type="button" tabindex="0">BIIB Placements Procedure</a></li>
                </ul>
            </div>
            <div class="my-3 menuList">
                <h4 class="mb-3 text-white text-capitalize fw-bold">courses</h4>
                <ul class="list-unstyled mb-0">
                    <li class="nav-item d-flex align-items-end"><a href="/admission#nav-mba/MBA" onclick="refreshTab()" class="p-0" type="button" tabindex="0">MBA Marketing</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/admission#nav-mba/MBA" onclick="refreshTab()" class="p-0" type="button" tabindex="0">MBA Financial Management</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/admission#nav-mba/MBA" onclick="refreshTab()" class="p-0" type="button" tabindex="0">MBA International Business</a></li>
                    <!--<li class="nav-item d-flex align-items-end"><a href="/admission#nav-second-tab" class="p-0" type="button" tabindex="0">MBA Digital & Business Transformation</a></li>-->
                </ul>
            </div>
            <div class="my-3 menuList">
                <h4 class="mb-3 text-white text-capitalize fw-bold">new admissions</h4>
                <ul class="list-unstyled mb-0">
                    <li class="nav-item d-flex align-items-end"><a href="https://admissions.sbup.edu.in/mba/?utm_source=BIIBWebsite&utm_medium=Admissions-SubMenu-ConstantButton&utm_campaign=ApplyOnlineButton" target="_blank" class="p-0" type="button" tabindex="0">Apply Online</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/admission#nav-mba/important-dates" onclick="refreshTab()" class="p-0" type="button" tabindex="0">Important Dates</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/admission#nav-mba/important-contact" onclick="refreshTab()" class="p-0" type="button" tabindex="0">Important Contacts</a></li>
                </ul>
            </div>
            <div class="my-3 menuList">
                <h4 class="mb-3 text-white text-capitalize fw-bold">campus</h4>
                <ul class="list-unstyled mb-0">
                    <li class="nav-item d-flex align-items-end"><a href="/about#infrastructure" class="p-0" type="button" tabindex="0">Infrastructure</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/about#library" class="p-0" type="button" tabindex="0">Library</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/industryinterface#guest-lectures" class="p-0" type="button" tabindex="0">Guest Lecture</a></li>
                    <li class="nav-item d-flex align-items-end"><a href="/sitemap" class="p-0" type="button" tabindex="0">Sitemap</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="border-top border-2"></div>
    <div class="copyright_section">
        <div class="container">
            <div class="row justify-content-between align-items-center py-xxl-3 py-xl-3 py-lg-2 py-md-2 py-2 m-0">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 text-xl-start text-lg-start text-md-start text-md-start text-center py-xl-2 py-lg-2 py-md-2 py-3">
                    <p class="mb-0">Copyright © 2023. All Rights Reserved</p>
                </div>
                <div class="col-xxl-3 col-xl-3 col-md-3 py-2">
                    <ul class="list-unstyled d-flex mb-0 justify-content-center">
                        <li class="mx-2">
                            <a class="link-dark" href="{!! setting('facebook_url') !!}" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a class="link-dark" href="{!! setting('instagram_url') !!}" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a class="link-dark" href="{!! setting('linkedin_url') !!}" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a class="link-dark" href="{!! setting('twitter_url') !!}" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a class="link-dark" href="{!! setting('whatsapp_number') !!}" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-4 col-md-4 text-xl-end text-lg-end py-xl-2 py-lg-2 py-md-2 py-3 text-center">
                    <p class="mb-0">Website designed and developed by <a class="cmpName" href="https://pulseplaydigital.com/" target="_blank">PulsePlay Digital</a><br>
                        with  <span style="color:#E32845;line-height: 0;">&hearts;</span> from Dharamshala, Himachal Pradesh, India</p>
                </div>
            </div>
        </div>
    </div>
    @push ('after-scripts')
<script type="text/javascript">
   
    $('#newsletter_form').on('submit', function(e) {
        e.preventDefault();
        var email = $("#email").val();
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}
        });
       
     
     
        $.ajax({
        type: "POST",
        url: "{{url('newsletter')}}",
        data: { 
            'email': email
        },
        success: function()
                    {
                        $('.flash-message').html("Newsletter Submit Successfully");
                        $('.flash-message').fadeOut(5000);
                        
                        setTimeout(() => {
                            var element = document.getElementById("newsletter_form");
                        element.reset();
                        }, 5500);
                    },
        error:function(){
                    $('.flash-message').html("Newsletter Not Submitted Successfully");
                        $('.flash-message').fadeOut(5000);
                        setTimeout(() => {
                            var element = document.getElementById("newsletter_form");
                        element.reset();
                        }, 5500);
            }
        });
    });


    document.addEventListener('DOMContentLoaded', function(e) {
            e.preventDefault();
            setTab();
    });

    function setTab() {
        const activeTab = window.location.hash;
        const currentTab = activeTab.split("/")[0];
        if (currentTab) {
            $( currentTab )[0].click();
        }    
    }

    $( "#footer-menu-list" ).on( "click", function(e) {
        setTimeout(() => {
            const getTab = window.location.hash;
            if (getTab) {
                $( getTab )[0].click();
            }
        }, 200);

    });

    function refreshTab() {
        const getTab = window.location.hash;
        const newTab = getTab.split("/")[0];

        if(newTab == "#nav-phd" || newTab == "#nav-mba"){
            setTimeout(() => {
                window.location.reload();
            }, 200);
        }
    }

</script>
@endpush
</footer>
