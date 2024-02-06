<link rel="stylesheet" type="text/css" href="{{asset('css/admission.css')}}">
<div class="admissionpage  py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4" id="admissionpage">
    <div class="container">
        <div class="row bg-white">
            <!-- <div class="col-xl-12 pb-3">
                <img class="w-100" src="{{asset('img/admission/eligibility.webp')}}" alt="mbaProgramme img">
            </div> -->
            <div class="col-xl-12 my-2">
                <h4 class="pagesHeading headingColor text-capitalize py-3 mb-0 text-xl-start text-lg-start text-md-start text-center">Brochure</h4>
            </div>
            <div class="col-12">
                <form class="row g-3 showInterestform" name="phd_brochure_form" id="phd_brochure_form" method="POST" action="{{ url('downloadBrochurePhd') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-6 col-sm-6">
                        <input type="name" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" placeholder="Enter name" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="email" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" placeholder="Enter email address" id="email" name="email" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" placeholder="Enter phone number" id="mobile_number" name="mobile_number" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <select id="course" class="form-select form-select-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" name="course" required>
                            <option value="" selected>Select Course</option>
                            <option class="fs-6" value="BA">BA</option>
                            <option class="fs-6" value="BBA">BBA</option>
                            <option class="fs-6" value="MBA">MBA</option>
                            <option class="fs-6" value="MCA">MCA</option>
                            <option class="fs-6" value="BA-ARTS">BA - Liberal Arts</option>
                            <option class="fs-6" value="BBA-INTEGRATED">BBA Integrated MBA (BBA+MBA)</option>
                            <option class="fs-6" value="PHP-FINANCE">PHD - Finance</option>
                            <option class="fs-6" value="PHP-MARKETING">PHD - Marketing</option>
                            <option class="fs-6" value="PHP-HR">PHD - Human Resources</option>
                            <option class="fs-6" value="PHP-SUPPLY-CHAIN">PHD - Supply Chain and Operations</option>
                            <option class="fs-6" value="PHP-GM">PHD-General Management</option>
                            <option class="fs-6" value="BCA">BCA</option>
                            <option class="fs-6" value="PHP-IT">PHD- Information Technology</option>
                            <option class="fs-6" value="BSC-ACTUARIAL">B.Sc (Actuarial Science)</option>
                            <option class="fs-6" value="BA-LLB">BA LLB</option>
                            <option class="fs-6" value="BBA-LLB">BBA LLB</option>
                            <option class="fs-6" value="LLB">LLB</option>
                        </select>
                    </div>
                    
                    <input type="hidden" name="g-token" id="recaptchaToken" required>
                    <div class="g-recaptcha mt-4" data-sitekey={{config('services.recaptcha.key')}}></div>
                        <span class="text-danger">{{ $errors->first('Click to verify') }}</span>
                    
                    <div class="col-md-6 col-sm-6 align-self-center py-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">I agree to receive information by signing up on Sri Balaji University, Pune (SBUP)</label>
                        </div>
                    </div>
                    <h5 style="color:var(--primary-green);"><span class="text-danger me-2">*</span>All the fields are required.</h5>
                    <div class="row justify-content-center py-xl-4 py-3">
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5 text-center mb-2">
                            <div class="btn-group me-2 w-100" role="group" aria-label="Second group">
                                <div id="outer" class="w-100">
                                    <button class="button_slide slide_right eventsBtn text-capitalize text-decoration-none w-100" type="submit">Download Brochure</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="flash-message-phd" style="color:green"></p>
                </form>
            </div>
        </div>
    </div>
</div>

<script async src="https://www.google.com/recaptcha/api.js"></script>
@push ('after-scripts')
    <script type="text/javascript">
   
    $('#phd_brochure_form').on('submit', function(e) {
        e.preventDefault();
        var email = $("#email").val();
        var name = $("#name").val();
        var course = $("#subject").val();
        var mobile_number = $("#mobile_number").val(); 
        var g-recaptcha-response = $('#recaptchaToken').val();
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}
        });
     
    $.ajax({
     type: "POST",
     url: "{{url('downloadBrochurePhd')}}",
     data: { 
        'email': email,
        'name':name,
        "course":course,
        "mobile_number":mobile_number,
        "g-recaptcha-response":g-recaptcha-response
     },
     success: function()
                {
                    $('.flash-message-phd').html("Brochure Submit Successfully");
                    $('.flash-message-phd').fadeOut(5000);
                    setTimeout(() => {
                        var element = document.getElementById("phd_brochure_form");
                    
                    element.reset();
                    }, 5500);
                },
      error:function(){
        $('.flash-message-phd').html("Brochure Not Submit Successfully");
                    $('.flash-message-phd').fadeOut(5000);
                     setTimeout(() => {
                        var element = document.getElementById("phd_brochure_form");
                   grecaptcha.reset();
                    element.reset();
                    }, 5500);
        }
      });
     

});

</script>
@endpush