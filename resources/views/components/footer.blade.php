<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->

    <!-- =========================== 11. Footer Section =========================================== -->

    <section class="footer-area">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-9">
                    <h2>Contact Us</h2>
                    <p>1 (800) 686-6688 <br>suport@wpsmasher.com <br>40 Baria Sreet 133/2 <br>NewYork City, USA <br>Open
                        hours: 8.00-18.00 Mon-Fri</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-9">
                    <h2>Important</h2>
                    <ul>
                        <li><a href=" {{ url('/') }} ">Home</a></li>
                        <li><a href=" {{ url('portfolio') }} ">Portfolio</a></li>
                        <li><a href=" {{ url('blog') }} ">Blog</a></li>
                        <li><a href=" {{ url('contact-us') }} ">Contact</a></li>
                        <!-- <li><a href=" {{ url('about-us') }} ">Getin Touch</a></li> -->
                        <!-- <li><a href=" {{ url('pricing') }} ">Pricing</a></li> -->
                        <!-- <li><a href=" {{ url('development') }} ">Web Development</a></li> -->
                        <!-- <li><a href=" {{ url('faq') }} ">Support</a></li> -->
                        <!-- <li><a href=" {{ url('career') }} ">Career</a></li> -->
                        <!-- <li><a href=" {{ url('about-us') }} ">About</a></li> -->
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-9 col-12">
                    <h2>Our Newsletter</h2>
                    <p>Subscribe to our mailing list to get the up dates to your email inbox</p>
                    <!-- <form action="http://tf.wpcashcow.com/habu/index.html"> -->
                    <form action="#">
                        <input type="email" placeholder="E-mail">
                        <input type="submit" value="Subscribe">
                    </form>
                    <div class="footer-social mt-30">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.snapchat.com/"><i class="fab fa-snapchat m-0"></i></a>
                    </div>
                </div>
                <a class="go-to-top" href="#"><i class="fas fa-chevron-up"></i></a>
            </div>
        </div>
    </section>

    <!-- =========================== 12. Copyright Section =========================================== -->

    <div class="container text-center copyright">
        <p>Copyright ©2021 | All Rights Reserved</p>
    </div>

    <!-- All JS -->
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/all.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    
    <script>
        new WOW().init();
    </script>
    <script src="assets/js/main.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <!--<script src="https://leadscribe.co/javascripts/home.js" type="text/javascript"></script>-->

    
<script>
function validateMyForm(event) {
    event.preventDefault();
    console.log('validateForm');
    var form = document.getElementById('myform');
    var errCount = 0;
    for (var i = 0; i < form.elements.length; i++) {
        if (!validateFormItem(form.elements[i])) {
            errCount++;
        }
    }
    console.log(errCount);
    if (errCount == 0) {
        // grecaptcha.execute();
        submitQuoteForm();
    } else {
        if (!liserflag) {
            // create the change event only after submit click. no need to initialize on load
            const inpts = document.getElementsByClassName('input-quote');
            for (var i = 0; i < inpts.length; i++) {
                inpts[i].addEventListener('change', function (e) {
                    validateFormItem(e.target);
                });
            }
            liserflag = true;
        }
    }
}

function validateFormItem(field) {
    console.log(field.value);
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if (field.type === 'radio' && field.hasAttribute('required')) {
        var radioValue = $("input[name='" + field.name + "']:checked").val();
        if (!radioValue) {
            $(field).parents(".inputrow").addClass("input-error");
            // field.parentNode.classList.add('input-error');
            return false;
        }
    } else if (field.value === '' && field.hasAttribute('required')) {
        field.parentNode.classList.add('input-error');
        return false;
    } else {

        if (field.type === 'email' && !field.value.match(mailformat)) {
            field.parentNode.classList.add('input-error');
            return false;
        } else {
            field.parentNode.classList.remove('input-error');
        }
    }
    return true;
}

 
function postQuoteBeforeOTP() {
    console.log('Pre- postQuote');
 
    var cid = document.getElementById('cid').value;
    var isExclusive=document.getElementById('isExclusive').value;
    const params = {
        name: document.getElementById('txt_name').value,
        email: document.getElementById('txt_email').value,
        phone: document.getElementById('txt_phone').value,
        message: getMessage(),
        rkey: document.getElementById('rkey').value,
        uid: user ? user.uid : ''
    }

    const http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (http.readyState == XMLHttpRequest.DONE) {
            if (http.responseText) {
            }
        }
    }

    var dataToSend = JSON.stringify({
        leadInfo: params,
        cid: cid,
        campaignid: campaignid,
        keyword: keyword,
        gclid: gclid,
        referer: referer,
    });
    console.log(dataToSend);

    http.open('POST', '/pre-requestaquote');
    http.setRequestHeader('Content-type', 'application/json');
    http.send(dataToSend); // Make sure to stringify

}

function postQuote() {
    console.log('postQuote');
    sendbutton.disabled = true;
    sendbutton.innerHTML = 'sending...';
    document.getElementById('lblmessage').innerHTML = '';
    var cid = document.getElementById('cid').value;
    //var isExclusive=document.getElementById('isExclusive').value;
    const params = {
        name: document.getElementById('txt_name').value,
        email: document.getElementById('txt_email').value,
        phone: document.getElementById('txt_phone').value,
        message: getMessage(),
        rkey: document.getElementById('rkey').value,
        uid: user ? user.uid : ''
    }

    const http = new XMLHttpRequest();
    http.onreadystatechange = function () {
        if (http.readyState == XMLHttpRequest.DONE) {
            if (http.responseText) {
                localStorage.clear();
                $('#txt_name').val('');
               $('#txt_email').val('');
                $('#txt_phone').val('');
                clearMessage();
                window.location.href = '/thankyou';
            }
        }
    }

    var dataToSend = JSON.stringify({
        leadInfo: params,
        cid: cid,
        campaignid: campaignid,
        keyword: keyword,
        gclid: gclid,
        referer: referer,
         
    });
    console.log(dataToSend);

    http.open('POST', '/requestaquote');
    http.setRequestHeader('Content-type', 'application/json');
    http.send(dataToSend); // Make sure to stringify

}
    
    
</script>  
 
<script>
 $(document).ready(function() {
    $("input[name$='projectType']").click(function() {
        var test = $(this).val();
        if(test=='A Custom Website'){
            $("#website").show();
            // hiding Elements
            $("#androidIos").hide();
            $("#customeWeb").hide();
            $("#digitalMarket").hide();
            $("#webApps").hide();
        }else if(test=='IOS/Android App'){          
            $("#androidIos").show();
            // hiding Elements
            $("#website").hide();
            $("#customeWeb").hide();
            $("#digitalMarket").hide();
            $("#webApps").hide();
        }else if(test=='A Custom Website & App'){
            $("#customeWeb").show();
            // hiding Elements
            $("#website").hide();
            $("#androidIos").hide();
            $("#digitalMarket").hide();
            $("#webApps").hide();
        }else if(test=='A Digital Marketing Strategy'){
            $("#digitalMarket").show();
            // hiding Elements
            $("#website").hide();
            $("#androidIos").hide();
            $("#customeWeb").hide();
            $("#webApps").hide();
        }else if(test=='A Web Application'){
            $("#webApps").show();
            // hiding Elements
            $("#website").hide();
            $("#androidIos").hide();
            $("#customeWeb").hide();
            $("#digitalMarket").hide();
        }
    });
    // $("input[name$='projectType']").click(function() {
    //     var test = $(this).val();
    //     if(test=='A Custom Website')
    // });
     
    
    $("#btn_step1").click(function() {
        $(".step1").hide();
        $(".step2").show()
    });

    $("#btn_back1").click(function() {
        $(".step1").show();
        $(".step2").hide()
    });
    
    $("#btn_step2").click(function() {
        $(".step2").hide();
        $(".step3").show()
    });

    $("#btn_back2").click(function() {
        $(".step2").show();
        $(".step3").hide()
    });

    $("#btn_step3").click(function() {
        var catagory = $("input:radio[name='projectType']:checked").val()
        var sub_catagory = $("input:radio[name='projectSubType']:checked").val()
        var details = $('#txt_message').val()
        var name = $('#txt_name').val()
        var mobile = $('#txt_phone').val()
        var email = $('#txt_email').val()
        if(catagory != '' && sub_catagory != '' && details != ''&& name != '' && mobile != '' && email != ''){
            $(".step3").hide();
            $(".step4").show();
        }else{
            $(".step3").show();
            $(".step4").hide();
        }
    });
    
});   
</script>

<script>
    function getMessage() {
        var form = document.getElementById('myform');
        var message = 'Looking for developing ' + form.projectType.value + '. ';
       
        message += '\nBudget: ' + form.budget.value + '. ';
        if ($("#txt_message").val()) {
            message += '\n\nRequirement Details:\n' + $("#txt_message").val();
        }
        return message;
    }

    function clearMessage() {

        $("#txt_message").val('');
    }

    function validateStep1(event) {
        event.preventDefault();
        // console.log('validateForm');
        var form = document.getElementById('myform');
        var errCount = 0;
        const inpts = document.getElementsByClassName('input-step1');
        for (var i = 0; i < inpts.length; i++) {
            if (!validateFormItem(inpts[i])) {
                errCount++;
            }
        }
        // console.log(errCount);
        if (errCount == 0) {
            $(".step1").hide();
            $(".step2").show();
            // console.log("No Erroe");
        } else {
            if (!liserflag) {
                // create the change event only after submit click. no need to initialize on load
                const inptsStep1 = document.getElementsByClassName('input-step1');
                for (var i = 0; i < inptsStep1.length; i++) {
                    inptsStep1[i].addEventListener('change', function (e) {
                        validateFormItem(e.target);
                    });
                }
                liserflag = true;
            }
        }
    }
    
</script>  

<!-- Portfolio Scripts -->  
<script src="assets/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function() {

	$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});

}); 
</script>




<!-- <script src="assets/js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function() {

	$('.image-popup-vertical-fit').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		mainClass: 'mfp-img-mobile',
		image: {
			verticalFit: true
		}
		
	});

	$('.image-popup-fit-width').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		image: {
			verticalFit: false
		}
	});

	$('.image-popup-no-margins').magnificPopup({
		type: 'image',
		closeOnContentClick: true,
		closeBtnInside: false,
		fixedContentPos: true,
		mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
		image: {
			verticalFit: true
		},
		zoom: {
			enabled: true,
			duration: 300 // don't foget to change the duration also in CSS
		}
	});

}); 
</script> -->


    
</div>