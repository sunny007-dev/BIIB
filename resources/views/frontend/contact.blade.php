@extends('frontend.layouts.app')

@section('title') {{ __("Contact Us") }} @endsection
@section('description') {{_("Contact Balaji Institute of International Business (BIIB) to explore Corporate Career oriented MBA Degree Courses")}} @endsection

@section('content')
<div class="contact" id="contact">
 <x-banner :title="$banner"></x-banner>
 
  <!-- Hero Section End -->
  <div class="contactPage">
    <div class="getInTouch">
      <div class="container">
        <div class="row m-0 justify-content-center">
          <div class="col-12 text-center py-xl-5 py-lg-5 py-md-4 py-4">
            <h6 class="main-heading text-capitalize mb-0">Get in touch</h6>
            <p>Balaji Institute of International Business (BIIB)</p>
          </div>
        </div>
        <div class="row m-0 py-xl-4 py-lg-4 py-md-4 py-3">
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 my-2">
            <div class="card text-center py-3 border-0">
              <div class="card-header border-0 bg-transparent">
                <i class="fa fa-envelope"></i>
              </div>
              <div class="card-body border-0">
                <a href="mailto:admissions@sbup.edu.in" role="button" tabindex="0" class="mb-1 addressText text-decoration-none" type="mail" text="email">admissions@sbup.edu.in</a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 my-2">
            <div class="card text-center py-3 border-0">
              <div class="card-header border-0 bg-transparent">
                <i class="fa fa-phone" style="rotate: 90deg;"></i>
              </div>
              <div class="card-body border-0">
                <a role="button" tabindex="0" class="mb-1 addressText text-decoration-none" type="mail" text="tel">
                    <span><a class="text-decoration-none addressText" href="tel:+91 (020) 6674 1235">+91 (020)
                        6674 1235</a></span>
                    <span class="addressText">,</span> 
                    <span><a class="text-decoration-none addressText" href="tel:+91 9673338787">+91 9673338787</a>
                    </span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 my-2">
            <div class="card text-center py-3 border-0">
              <div class="card-header border-0 bg-transparent">
                <i class="fa fa-globe"></i>
              </div>
              <div class="card-body border-0">
                  <a href="https://biibpune.edu.in/" target="_blank" role="button" tabindex="0" class="mb-1 addressText text-decoration-none" type="text" text="tel">www.biibpune.edu.in</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-0">
      <div class="col-xl-7 col-lg-6 px-0">
        <div class="mapSection position-relative">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.2275749155497!2d73.7529383154588!3d18.608831071324357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b9793fe32ee5%3A0xd708ebaf0c9fc602!2sBalaji%20Institute%20of%20International%20Business%20(BIIB%20Pune)!5e0!3m2!1sen!2sus!4v1678950088230!5m2!1sen!2sus" width="100%" height="620" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      
      <div class="col-xl-5 col-lg-6 contactForm bg-white">
          <div class="row justify-content-center pb-3 m-0">
            <div class="col-xl-10">
              <h5 class="formHeading py-5">Please fill up the form and our Team will get back to you within 24 hours.</h5>
                     @if( Session::has('flash_message') )
  <div class="alert {{ Session::get('flash_type') }}">
      <h5 class="text-success">{{ Session::get('flash_message') }}</h5>
  </div>
  @endif
            <form id="contactUs" name="contactUs" method="post" action="{{ url('contacts') }}">
                            {{ csrf_field() }}
                <div class=" mb-3 row">

                <div class="col">
                  <label>Name</label>
                  <input type="text" required maxlength="50" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                  @if ($errors->has('name'))
                  <span class="text-danger">{{ $errors->first('name') }}</span>
                  @endif
                </div>
                <div class="col">
                  <label for="email">Email address</label>
                  <input type="email" required maxlength="50" class="form-control" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                  @if ($errors->has('email'))
                  <span class="text-danger">{{ $errors->first('email') }}</span>
                  @endif
                </div>
            </div>
            <div class="mb-3 row">
              <div class="col">
                <label for="phone">Phone</label>
                <input type="text" required maxlength="50" class="form-control" id="phone" name="phone" placeholder="Phone" value="{{ old('phone') }}">
                @if ($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
              </div>
              <div class="col">
                <label>Subject</label>
                <input type="text" required maxlength="500" class="form-control" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                @if ($errors->has('subject'))
                <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
              </div>
            </div>
            <div class="mb-5">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>
              @if ($errors->has('message'))
              <span class="text-danger">{{ $errors->first('message') }}</span>
              @endif
            </div>
            <div id="outer" class="py-2">
              <button class="button_slide slide_right text-capitalize aboutBtn text-decoration-none" type="submit">Submit</button>
            </div>
            </form>
            </div>
          </div>
      </div>
    </div>

    <div class="contactDetail py-xl-4 py-lg-4 py-md-4 py-3">
      <div class="container">
        <div class="row m-0 justify-content-center">
          <div class="col-12 text-center py-xl-5 py-lg-5 py-md-4 py-4">
            <h6 class="main-heading text-capitalize mb-0">important contact details</h6>
          </div>
        </div>

        <div class="row m-0">
          @foreach ($$module_name as $contact )
          <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 my-2 mb-3">
            <div class="card text-center py-xl-4 py-lg-4 py-md-4 py-sm-3 py-3">
              <div class="card-header border-0">
                <i class="fa fa-user mb-3"></i>
                <h4 class="text-capitalize mb-3">{{ $contact->name}}</h4>
                <hr>
              </div>
              <div class="card-body border-0 px-2">
                <div class="mb-2 phnText">
                  <a href="" class="text-decoration-none mb-1" role="button" tabindex="0">
                    <i class="fa fa-phone me-2" style="rotate: 90deg;"></i>{{ $contact->phone}}
                  </a>
                </div>
                @if($contact->email)
                <div class="">
                  <a href="" role="button" tabindex="0" class="mb-1 addressText text-decoration-none" type="mail" text="email">
                    <i class="fa fa-envelope me-2"></i>{{ $contact->email}}
                  </a>
                </div>
                @endif
              </div>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </div>

  </div>
</div>
@push ('after-scripts')
 <script src='https://www.google.com/recaptcha/api.js' async defer></script>
   <script type="text/javascript">
 $('#contactUsForm').on('submit', function() {
 console.log('12121')
  var email = $("#email").val();
  var name = $("#name").val();
  var phone = $("#phone").val(); 
  var subject = $("#subject").val();
  var message = $("#message").val();
       
$.ajaxSetup({
headers: {
 headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}
}
});
$('#submit').html('Please Wait...');
$("#submit"). attr("disabled", true);
$.ajax({
url: "{{url('contactForm')}}",
type: "POST",
Accept: application/json
 data: { 
        'email': email,
        'name':name,
        'phone':phone,
        "subject":subject,
        'message':message
     },
success: function( response ) {

alert('Contact form has been submitted successfully');
document.getElementById("contactUsForm").reset(); 
}
});
}
</script>
@endpush
@endsection