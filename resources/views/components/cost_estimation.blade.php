<div>
    <!-- Very little is needed to make a happy life. - Marcus Antoninus -->
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    </head>
    <div class="sessionrequest">
        <div class="container">
            <div class="row">
                <div class="col-md-8" style="margin:0 auto">
                    <div class="quote wow animate__animated animate__fadeInUp">
                        <h2>Get Cost Estimation</h2>
                        <div class="web-development-companies">
                            <div id="ulcompanies">
                            </div>
                            <input id="hdnSubscribers" type="hidden" value="[]" />
                            <div class="clearfix"></div>
                            <i id="point-quote-arrow" class="icon point-quote-arrow"></i>
                        </div>
                        <div>
                            <form id="myform" name="myform" method="POST" >   <!-- action="/" -->
                                @csrf
                                <!-- <input id="inputCompanies" name="companies" type="hidden" value="WISMADUK">
                                <input id="isExclusive" name="isExclusive" value="WebSolution" type="hidden"> -->
                                <!-- <input id="gclid" name="gclid" value="" type="hidden"> -->
                                <!-- <input id="cid" name="cid" value="Y9poFO5VM" type="hidden">
                                <input id="rkey" name="rkey" type="hidden" value="MV5OFop9Y" /> -->
                                <input id="stat" name="status" type="hidden" value="1" />

                                <div class="step1">

                                    <div class="inputrow formgroup">
                                        <label>What you want to build?*</label>
                                        <ul class="list-inline">
                                            <li>
                                                <input required type="radio" checked name="projectType" id="typeStartup" value="A Custom Website">
                                                <label for="typeStartup">A Custom Website</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectType" id="typeMobileWeb" value="IOS/Android App">
                                                <label for="typeMobileWeb">IOS/Android App</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectType" id="typeCustome" value="A Custom Website & App">
                                                <label for="typeCustome">A Custom Website & App</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectType" id="typeDigital" value="A Digital Marketing Strategy">
                                                <label for="typeDigital">A Digital Marketing Strategy</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectType" id="typeWeb" value="A Web Application">
                                                <label for="typeWeb">A Web Application</label>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- <div class="catagory"> -->
                                        <div class="inputrow formgroup" id="website">
                                            <label>Select a catagory?</label>
                                            <ul class="list-inline">
                                                <li>
                                                    <input type="radio" checked name="projectSubType" id="dynamicSubType" value="Dynamic">
                                                    <label for="dynamicSubType">Dynamic</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="staticSubType" value="Static">
                                                    <label for="staticSubType">Static</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="ecommerceSubType" value="Ecommerce">
                                                    <label for="ecommerceSubType">Ecommerce</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="websiteSubType" value="Already have a website ?">
                                                    <label for="websiteSubType">Already have a website ?</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="inputrow formgroup " id="androidIos" style="display: none;">
                                            <label>Select a catagory?</label>
                                            <ul class="list-inline">
                                                <li>
                                                    <input type="radio" checked name="projectSubType" id="iosSubType" value="IOS">
                                                    <label for="iosSubType">IOS</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="androidSubType" value="Android">
                                                    <label for="androidSubType">Android</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="bothSubType" value="Both">
                                                    <label for="bothSubType">Both</label>
                                                </li>
                                                <!--<li>-->
                                                <!--    <input type="radio" name="projectSubType1" id="projectSubType1" value="Already have an App ?">-->
                                                <!--    <label for="projectSubType1">Already have a website ?</label>-->
                                                <!--</li>-->
                                            </ul>
                                        </div>

                                        <div class="inputrow formgroup " id="customeWeb" style="display: none;">
                                            <label>Select a catagory?</label>
                                            <ul class="list-inline">
                                                <li>
                                                    <input type="radio" checked name="projectSubType" id="dynamicSubType1" value="Dynamic">
                                                    <label for="dynamicSubType1">Dynamic</label>
                                                </li>
                                                <li>
                                                    <input type="radio" checked name="projectSubType" id="iosSubType1" value="IOS">
                                                    <label for="iosSubType1">IOS</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="staticSubType1" value="Static">
                                                    <label for="staticSubType1">Static</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="androidSubType1" value="Android">
                                                    <label for="androidSubType1">Android</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="ecommerceSubType1" value="Ecommerce">
                                                    <label for="ecommerceSubType1">Ecommerce</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="bothSubType1" value="Both">
                                                    <label for="bothSubType1">Both</label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="webSubType1" value="Already have a website ?">
                                                    <label for="webSubType1">Already have a website ?</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="inputrow formgroup " id="digitalMarket" style="display: none;">
                                            <label>Select a catagory?</label>
                                            <ul class="list-inline">
                                                <li>
                                                    <input type="radio" checked name="projectSubType" id="socialSubType" value="Social Media Marketing ">
                                                    <label for="socialSubType">Social Media Marketing </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="googleSubType" value="Google  Ads ">
                                                    <label for="googleSubType">Google Ads/ PPC </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="seoSubType" value="SEO ">
                                                    <label for="seoSubType">SEO </label>
                                                </li>
                                                <li>
                                                    <input type="radio" name="projectSubType" id="onlineSubType" value="Online Marketing   ">
                                                    <label for="onlineSubType">Online Marketing</label>
                                                </li>
                                                <!-- <li>
                                                    <input type="radio" name="projectSubType" id="paySubType" value="Pay Per Click ">
                                                    <label for="paySubType">Pay Per Click </label>
                                                </li> -->
                                                <li>
                                                    <input type="radio" name="projectSubType" id="contentSubType" value="Content Marketing & Branding ">
                                                    <label for="contentSubType">Content Marketing & Branding </label>
                                                </li>
                                            </ul>
                                        </div>


                                        <!-- <div class="inputrow formgroup " id="webApps" style = "display: block;">
                                        <label>What you want to build?</label>
                                        <ul class="list-inline">
                                            <li>
                                                <input type="radio"  name="projectSubType4" id="projectSubType4" value="Social Media Marketing">
                                                <label for="projectSubType4">Social Media Marketing</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectSubType4" id="projectSubType4" value="Google  Ads">
                                                <label for="projectSubType4">Google  Ads</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectSubType4" id="projectSubType4" value="SEO ">
                                                <label for="projectSubType4">SEO </label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectSubType4" id="projectSubType4" value="Online Marketing">
                                                <label for="projectSubType4">Online Marketing</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectSubType4" id="projectSubType4" value="Pay Per Click">
                                                <label for="projectSubType4">Pay Per Click</label>
                                            </li>
                                            <li>
                                                <input type="radio" name="projectSubType4" id="projectSubType4" value="Content Marketing & Branding">
                                                <label for="projectSubType4">Content Marketing & Branding</label>
                                            </li>
                                        </ul>
                                        </div> -->
                                    <!-- </div> -->


                                    <div class="inputrow  center-align formgroup">
                                        
                                        <button type="button" id="btn_step1" class="bton   pink ">Next &RightArrow;</button>
                                    </div>
                                </div>

                                <div class="step2" style="display:none">
                                    <div class="clearfix"></div>
                                    <div class="inputrow formgroup">
                                        <label>Detailed Requirement * </label>
                                        <textarea name="details" id="txt_message" required class="input-quote input-step1" rows="2" placeholder="Write down your requirements and features in detail."></textarea>
                                    </div>
                                    <div id="recaptcha-container"></div>

                                    <div class="inputrow center-align formgroup">
                                        <button type="button" id = "btn_back1" class="bton   pink ">&LeftArrow; Back</button>
                                        <button type="button" id="btn_step2" class="bton   pink">Next &RightArrow;</button>
                                        <label for="btn_step2" style="color: #4CAF50;"></label>
                                    </div>
                                </div>

                                <div class="step3" style="display:none">
                                    <div class="inputrow formgroup">
                                        <label>Your Name*</label>
                                        <input id="txt_name" class="input-quote" name="name" placeholder="Joe Joseph" required>
                                    </div>
                                    <div class="inputrow formgroup phonerow">
                                        <label>Mobile* (Country code required) </label>
                                        <input id="txt_phone" class="input-quote" name="phone" placeholder="+** ******" required>
                                    </div>
                                    <div class="inputrow formgroup">
                                        <label>Email*</label>
                                        <input type="email" class="input-quote" id="txt_email" name="email" placeholder="joe.joseph@gmail.com" required>
                                    </div>


                                    <div id="recaptcha-container"></div>
                                    <div class="inputrow center-align formgroup">
                                        <button type="button" id = "btn_back2" class="bton   pink ">&LeftArrow; Back</button>
                                        <button type="submit" name="submit" id="btn_step3" class="bton pink">Request a Quote</button>
                                        <label for="btn_step3" style="color: #4CAF50;"></label>
                                    </div>
                                </div>

                                <div class="step4" style="display:none">
                                    <p style="padding:50px;">We will contact you shortly ! Sit back and relax while our team gets to work. You could check some of our work here</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ajax Script -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type='text/javascript'>
            // var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');



            $(document).ready(function() {
                // Add Enquiry Data

                $('#btn_step3').click(function() {

                    var catagory = $("input:radio[name='projectType']:checked").val()
                    var sub_catagory = $("input:radio[name='projectSubType']:checked").val()
                    var details = $('#txt_message').val()
                    var name = $('#txt_name').val()
                    var mobile = $('#txt_phone').val()
                    var email = $('#txt_email').val()

                    if (catagory != '' && sub_catagory != '' && details != '' && name != '' && mobile != '' && email != '') {
                        console.log(catagory)
                        console.log(sub_catagory)
                        console.log(details)
                        console.log(name)
                        console.log(mobile)
                        console.log(email)
                        $.ajax({
                            url: "/",
                            // url: "#btn_step3",
                            type: 'post',
                            data: {
                                _token: CSRF_TOKEN,
                                catagory: catagory,
                                sub_catagory: sub_catagory,
                                details: details,
                                name: name,
                                mobile: mobile,
                                email: email
                            },
                            success: function(data) {
                                console.log(data);
                            }
                            // success: function (response) {
                            //     if (response == 0) {
                            //         alert('Username already in use.');
                            //     } else {
                            //         alert(response);
                            //     }
                            //     // $('input:radio[name="projectType"]:checked').val();
                            //     // $('input:radio[name="projectSubType"]:checked').val();
                            //     // $('#txt_message').val()
                            //     // $('#txt_name').val()
                            //     // $('#txt_phone').val()
                            //     // $('#email').val()
                            // }
                        });
                    } else {
                        alert('Fill all fields');
                    }
                });

            });
        </script> -->


        <!-- jquery Script -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
        <script>
            jQuery('#myform').submit(function(e){
                e.preventDefault();
                jQuery.ajax({
                    url: "{{url('submitdata')}}",
                    data: jQuery('#myform').serialize(),
                    type: 'post',
                    success: function(result){
                        console.log(result);
                        // alert("Success")
                        swal({
                            title: "successfully Submitted!",
                            text: "Thank You for Quotes!",
                            icon: "success",
                            button: "Close"
                        });
                    }
                });
                
            });
        </script>


    </div>