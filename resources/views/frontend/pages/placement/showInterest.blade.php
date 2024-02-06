<div class="placementpage py-xl-5 py-lg-5 py-md-4 py-sm-4 py-4">
    <div class="container">
        <div class="row bg-white m-0">
            <div class="col-xl-12">
                <img class="w-100" src="{{asset('img/placement/show-interest.webp')}}" alt="placement">
            </div>
            <div class="col-12 py-xl-4 py-lg-4 py-md-4 py-3 text-xl-start text-lg-start text-md-start text-sm-start text-center">
                <h4 class="mb-0 pagesHeading text-capitalize">Show Interest</h4>
            </div>
        
            <div class="col-xl-12">
                <form class="row g-3 showInterestform" method="POST" action="{{ url('showInterest') }}" enctype="multipart/form-data" id="show_interest_form">
               @csrf
                    <div class="col-md-6">
                  
                        <input type="name" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2"  id="name" name="name" placeholder="Name" required>
                       
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" placeholder="Enter company name here" id="company" name="company" required>
                        
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" placeholder="Enter mobile number here" id="mobile" name="mobile" required>
                        
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" placeholder="Enter email here" id="email" name="email" required>
                        
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2"  placeholder="Postal address" name="address" id="address" required>
                        
                    </div>
                    <div class="col-md-6">
                        <input type="city" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" placeholder="Enter city here" id="city" name="city" required>
                       
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" placeholder="Enter pincode here" id="pincode" name="pincode" required>
                      
                    </div>
                    <div class="col-md-6">
                        <select id="state" class="form-select form-select-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" required>
                      <option for="state-select">State</option>
                      <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                      <option value="Andhra Pradesh">Andhra Pradesh</option>
                      <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                      <option value="Assam">Assam</option><option value="Bihar">Bihar</option>
                      <option value="Chandigarh">Chandigarh</option>
                      <option value="Chhattisgarh">Chhattisgarh</option>
                      <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                      <option value="Daman and Diu">Daman and Diu</option>
                      <option value="Delhi">Delhi</option>
                      <option value="Goa">Goa</option>
                      <option value="Gujarat">Gujarat</>
                      <option value="Haryana">Haryana</option>
                      <option value="Himachal Pradesh">Himachal Pradesh</option>
                      <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                      <option value="Jharkhand">Jharkhand</option>
                      <option value="Karnataka">Karnataka</option>
                      <option value="Kerala">Kerala</option>
                      <option value="Lakshadweep">Lakshadweep</option>
                      <option value="Madhya Pradesh">Madhya Pradesh</option>
                      <option value="Maharashtra">Maharashtra</option>
                      <option value="Manipur">Manipur</option>
                      <option value="Meghalaya">Meghalaya</option>
                      <option value="Mizoram">Mizoram</option>
                      <option value="Nagaland">Nagaland</option>
                      <option value="Orissa">Orissa</option>
                      <option value="Pondicherry">Pondicherry</option>
                      <option value="Punjab">Punjab</option>
                      <option value="Rajasthan">Rajasthan</option>
                      <option value="Sikkim">Sikkim</option>
                      <option value="Tamil Nadu">Tamil Nadu</option>
                      <option value="Tripura">Tripura</option>
                      <option value="Uttaranchal">Uttaranchal</option>
                      <option value="Uttar Pradesh">Uttar Pradesh</option>
                      <option value="West Bengal">West Bengal</option>
                        </select>
                      
                    </div>
                    <div class="col-md-6">
                        <select id="know_us" class="form-select form-select-lg rounded-0 p-xl-3 p-lg-3 p-md-3 p-sm-2 p-2" required>
                            <option selected>Know us through...</option>
                            <option value="social media">Social Media</option>
                            <option value="internet">Internet</option>
                            <option value="newspaper">Newspaper</option>
                        </select>
                        
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <textarea class="form-control form-control-lg rounded-0" placeholder="Enter message" id="message" rows="3" required></textarea>
                    
                        </div>
                    </div>
                    <h5 style="color:var(--primary-green);"><span class="text-danger me-2">*</span>All the fields are required.</h5>
                    <div class="row justify-content-center py-xl-4 py-3">
                        <div class="col-xl-4 text-center mb-2">
                            <div class="btn-group me-2" role="group" aria-label="Second group">
                            <div id="outer">
                            <button class="showInterest button_slide slide_right text-capitalize aboutBtn text-decoration-none" name="interest" type="submit">Submit</button>
                            </div>
                            </div>
                        </div>
                    </div>
                    <p class="flash-message-interest" style="color:green"></p>
                </form>
            </div>
        </div>
    </div>
</div>
@push ('after-scripts')
    <script type="text/javascript">
   
    $('#show_interest_form').on('submit', function(e) {
        e.preventDefault();
        var email = $("#email").val();
        var name = $("#name").val();
        var company = $("#company").val(); 
        var city = $("#city").val();
        var address = $("#address").val();
        var mobile = $("#mobile").val(); 
        var state = $("#state").val();
        var know_us = $("#know_us").val();
        var pincode = $("#pincode").val();
        var message = $("#message").val();
        $.ajaxSetup({
            headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()}
        });
     
    $.ajax({
     type: "POST",
     url: "{{url('showInterest')}}",
     data: { 
        'email': email,
        'name':name,
        'company':company,
        "city":city,
        'address':address,
        "mobile":mobile,
        "state":state,
        'know_us':know_us,
        "pincode":pincode,
        'message':message
     },
     success: function()
                {
                    $('.flash-message-interest').html("Interest Form Submit Successfully");
                    $('.flash-message-interest').fadeOut(5000);
                    
                     setTimeout(() => {
                        var element = document.getElementById("show_interest_form");
                    element.reset();
                    }, 5500);
                },
      error:function(){
        $('.flash-message-interest').html("Interest Form Not Submit Successfully");
                    $('.flash-message-interest').fadeOut(5000);
                      setTimeout(() => {
                        var element = document.getElementById("show_interest_form");
                    element.reset();
                    }, 5500);
        }
      });
     

});

</script>
@endpush
